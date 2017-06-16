<?php
/**
* Controllers Backend login
* Last update 3 Jan 2017
* 
* @package backend
* @copyright AirTrippy
* @author 
* @author position: PHP Developer
* @since 3 Jan 2017
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller{
	
	private $_data;
	
	
	public function __construct(){
            parent::__construct();
            
            
            $this->_data['admin_cpanel_title'] = $this->lable['admin_cpanel_title'];
	
            // $this->load->database();
             
            
            $this->_data['base_url'] = $this->config->item("base_url");
            $this->_data['base_tlp_admin'] = $this->config->item("base_tlp_admin");
            $this->_data['base_url_admin'] = $this->config->item("base_url_admin");
            $this->_data['current_control'] = $this->router->class;

            $this->_data['lable'] = $this->lable;
            $this->_data['user_data'] = $this->session->userdata('login');
            
            
            
            
            
		
	}
	
	function index(){
            
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            
            $this->_data['task'] = $this->lable['add'];
            $this->_data['breadcrumb'] = $this->lable['general_variable'];
            $this->_data['alert'] = '';
            
		
            $this->parser->parse("index/index.tpl", $this->_data);
	}


	
	
	


}