<?php
/**
* Controllers Backend Forgot password
* Last update 14 Jun 2017
* 
* @package backend
* @copyright A-Line
* @author Panpic-team
* @author position: PHP Developer
* @since 14 Jun 2017
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller{
	
	private $_data;
        private $_control; 
        private $_action;
        private $_pathLogo; 
	
	
	public function __construct(){
            parent::__construct();
            $this->load->model('users_model'); 

            $this->_data['admin_cpanel_title'] = $this->lable['admin_cpanel_title'];
            $this->_data['base_url']           = $this->config->item("base_url");
            $this->_data['base_tlp_admin']     = $this->config->item("base_tlp_admin");
            $this->_data['base_url_admin']     = $this->config->item("base_url_admin");
            $this->_data['lable']              = $this->lable;
            $this->_data['user_data']          = $this->session->userdata('login');
            
            $this->_control                 = $this->router->class;
            $this->_action                  = $this->router->method; 
            $this->_pathLogo                = $this->config->item('path_logo');
            $this->_data['current_control'] = $this->_control; 
            $this->_data['current_method']  = $this->_action; 

            $back_url = admin_url($this->_control.'/add');			
	}
        
	
	function index($start=0){
            $cond = ''; 
            $this->_data['breadcrumb'] = '';
            $this->_data['task']       = "List of admin ";
            $this->_data['alert']      = $this->session->flashdata('alert'); 
            $this->_data['msg']        = $this->session->flashdata('msg');
            
            //$get = http_build_query($_GET);
            
            $more_url = '';
            $page_more_url = '';
            $cond .= " ON c.role_id = d.role_id AND c.avail = 1"; 
            $keyword = trim(strip_tags($this->input->get('keyword')));
            
            if($keyword){
                $cond .= " AND ( user_name LIKE '%$keyword%' OR user_fullname LIKE '%$keyword%' )";
                $more_url .= "&keyword=$keyword";
                $page_more_url = "keyword=$keyword";
            }
            
            $this->_data['keyword'] = $keyword;
            $this->_data['more_url'] = $more_url;
            
            $totalItems  = $this->users_model->countItems($cond); 
            
            $per_page    = $this->lable['per_item_admin']; 
            $base_url    = admin_url('users/index'); 
            $uri_segment = 4;
            
            $this->load->library('pagination_library'); 
            $this->pagination_library->pagination($base_url, $totalItems,$per_page,$uri_segment, $more_url); 
            $this->_data['links'] = $this->pagination->create_links(); 
            
            $curpage = $this->input->get('per_page');
            $offset = ($curpage) ? $curpage : 0;      
            $start = ($offset > 0) ? (($offset - 1) * $per_page) : $offset;
            
            $items = $this->users_model->getItems($cond, $per_page, $start); 
            // pre($items); 
            
            $this->_data['action_url']         = admin_url($this->_control);
            $this->_data['action_url_add']        = admin_url($this->_control.'/add');
            $this->_data['action_url_delete_multi'] = admin_url($this->_control.'/deletemulti');
            $this->_data['items']              = $items; 
            
            $this->parser->parse("users/index.tpl", $this->_data);
            
	}
        
        
        function add(){
            $this->_data['breadcrumb'] = '';
            $this->_data['task']       = $this->lable['add_member'];
            
            //$item = ''; 
            //$type = $this->input->get('type'); 
            $id = $this->input->get('id');
            
            $this->users_model->id = $id; 
            $item = $this->users_model->getInfo();
            
            $roles = $this->users_model->getAllRoles();
            $this->_data['roles'] = $roles; 
            
            $this->_data['data'] = $item; 
            $this->_data['alert'] = $this->session->flashdata('alert'); 
            $this->_data['msg']  = $this->session->flashdata('msg'); 
            $this->_data['action_url'] = admin_url($this->_control.'/process'); 
            
            $this->parser->parse("users/add.tpl", $this->_data);
            
        }
        
        
        function process(){
            $data = $this->input->post('data'); 
            
            $_data = array(
                'user_id'       => $data['user_id'], 
                'user_name'     => $data['user_name'], 
                'user_password' => md5($data['user_password']), 
                'user_fullname' => $data['user_fullname'],
                'role_id'       => $data['role_id'],
                'date_add'      => date('Y:m:d H:i:s')    
            ); 
            
            $back_url = admin_url($this->_control);
            $status = $this->users_model->insertItem($_data);
            if($status){
                // $this->session->set_flashdata('alert','success');
                $this->_data['alert'] = 'success';
                if($data['user_id']){
                    $this->_data['msg'] = $this->lable['update_succ'];
                } else {
                    $this->_data['msg'] = $this->lable['add_succ'];
                }
                
                $this->parser->parse("users/add.tpl", $this->_data);
                header("refresh:" . $this->lable['timewait'].";url=".$back_url."");
                return;
            } else {
                $this->_data['alert'] = 'danger';
                if($data['user_id']){
                    $this->_data['msg'] = $this->lable['update_fail'];
                } else {
                    $this->_data['msg'] = $this->lable['add_fail'];
                } 
            }
            
            // redirect(admin_url($this->_control)); 
        }
        
        
        function inactive(){
            $id = $this->input->get('id'); 
            $this->users_model->id = $id; 
            $data = array(
                'avail' => 0, 
            );
            $status = $this->users_model->updateItem($data);
            if($status){
                $this->session->set_flashdata('alert','success');
                $this->session->set_flashdata('msg', $this->lable['update_succ']); 
            }else {
                $this->session->set_flashdata('alert', 'danger'); 
                $this->session->set_flashdata('msg', $this->lable['update_fail']); 
            }
            redirect(admin_url($this->_control)); 
        }
        
        
        function listInactive(){
            $cond = ''; 
            $this->_data['breadcrumb'] = '';
            $this->_data['task']       = "List of admin ";
            $this->_data['alert']      = $this->session->flashdata('alert'); 
            $this->_data['msg']        = $this->session->flashdata('msg');
            
            //$get = http_build_query($_GET);
            
            $more_url = '';
            $page_more_url = '';
            $cond .= " WHERE  avail = 0"; 
            $keyword = trim(strip_tags($this->input->get('keyword')));
            
            if($keyword){
                $cond .= " AND ( user_name LIKE '%$keyword%' OR user_fullname LIKE '%$keyword%' )";
                $more_url .= "&keyword=$keyword";
                $page_more_url = "keyword=$keyword";
            }
            
            $this->_data['keyword'] = $keyword; 
            
            
            $this->_data['more_url'] = $more_url;
            
            $totalItems  = $this->users_model->countItems($cond); 
            
            $per_page    = $this->lable['per_item_admin']; 
            $base_url    = admin_url('users/index'); 
            $uri_segment = 4;
            
            $this->load->library('pagination_library'); 
            $this->pagination_library->pagination($base_url, $totalItems,$per_page,$uri_segment, $more_url); 
            $this->_data['links'] = $this->pagination->create_links(); 
            
            $curpage = $this->input->get('per_page');
            $offset = ($curpage) ? $curpage : 0;      
            $start = ($offset > 0) ? (($offset - 1) * $per_page) : $offset;
            
            
            $items = $this->users_model->getItems($cond, $per_page, $start);
            
            
            //pre($items); 
            $this->_data['action_url']              = admin_url($this->_control);
            $this->_data['action_url_add']          = admin_url($this->_control.'/add');
            $this->_data['action_url_delete_multi'] = admin_url($this->_control.'/deletemulti');
            $this->_data['items']              = $items; 
            
            $this->parser->parse("users/index.tpl", $this->_data);
        }
        
        
        function remove(){
            $id = $this->input->get('id'); 
            $this->users_model->id = $id; 
            $status = $this->users_model->removeItem();
            if($status){
                $this->session->set_flashdata('alert','success');
                $this->session->set_flashdata('msg', $this->lable['delete_succ']); 
            }else {
                $this->session->set_flashdata('alert', 'danger'); 
                $this->session->set_flashdata('msg', $this->lable['delete_fail']); 
            }
            redirect(admin_url($this->_control.'/listinactive'));
        }
        
        
        
}