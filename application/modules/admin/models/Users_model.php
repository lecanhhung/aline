<?php
/**
* Model Backend language
* Last update 5 Jan 2017
* 
* @package backend
* @copyright AirTrippy
* @author 
* @author position: PHP Developer
* @since 5 Jan 2017
*/

class Users_model extends MY_Model
{
    
    public $table = 'pp_user';
    public $table_role = 'pp_user_role';
    
    public $id = ''; 
    public  $_pathThumb  = '';
    public  $_pathLogo   = '';
    private $_admin = 'pp_user';
    
    function table_admin(){
        return $this->_admin; 
    }
    
    function getItemsByConds($cond='') { 
        $sql = "SELECT * FROM ".$this->table_admin()." $cond";
        return $this->db->query($sql)->result_array();
    }
    
    
    function getAllRoles($cond='') { 
        $sql = "SELECT * FROM $this->table_role $cond";
        return $this->db->query($sql)->result();
    }
    
    
    /**
     * 
     * @param type $cond
     * @param type $num
     * @param type $offset
     * @return list items
     */
    function getItems($cond='', $num='', $offset=''){
        
        $limit = ($num > 0 ) ? "LIMIT $offset, $num" : "";
        
        $sql = "SELECT c.*, d.role_name FROM {$this->table_admin()} AS c JOIN $this->table_role AS d $cond ORDER BY date_add DESC $limit";
                
        return $this->db->query($sql)->result_array(); 
    }
    
    
    function countItems($cond=''){ 
        $sql = "SELECT c.user_id FROM {$this->table_admin()} AS c JOIN $this->table_role AS d $cond";
        return $this->db->query($sql)->num_rows();  
    }
    
    function getInfo(){ 
        if(!$this->id) return; 
        $query = $this->db->get_where($this->table_admin(), array('user_id' => $this->id));
        //echo $this->db->last_query(); 
        return $query->row_array();
    }
	
    
    /**
     * [insert or update item]
     * @param type $data
     * @return boolean
     */
    function insertItem($data=''){
        if(!$data) return ; 
        $user_id = $data['user_id'];
        if($user_id){
            return $this->db->update($this->table_admin(), $data, array('user_id' => $user_id)); 
        } else {
            return $this->db->insert($this->table_admin(), $data); 
        }
    }
    
    function updateItem($data=''){
        if(!$this->id) return;  
        return $this->db->update($this->table_admin(),$data, array('user_id' => $this->id)); 
    }
    
    /**
     * 
     * @param type $id
     * @return boolean
     */
    
    function removeItem(){
        if(!$this->id) return; 
        return $this->db->delete($this->table_admin(), array('user_id' => $this->id));
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
    
    
}