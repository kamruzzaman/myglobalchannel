<?php
/**
 * Created by PhpStorm.
 * User: Brainlabs
 * Date: 5/9/2018
 * Time: 12:32 PM
 */

class Reg_model extends CI_Model
{
public function insert_db($table='',$data=array()){
    if($table=='' || !is_string($table)){
        return false;
    }
    if(!is_array($data)){
        return false;
    }
    $this->db->insert($table,$data);
    return  $this->db->insert_id();
}

 public function update_db($table='',$where=array(),$data=array()){
        if($table=='' || !is_string($table)){
            return false;
        }
        
        if(!is_array($data)){
            return false;
        }
        
        if(is_array($where)){
            foreach($where as $key=>$lookup){
                $this->db->where($key,$lookup);
            }
        }
        
        $this->db->update($table,$data);
    }
    
    public function delete_db($table='',$where=array()){
        if($table=='' || !is_string($table)){
            return false;
        }
        
        if(is_array($where)){
            foreach($where as $key=>$lookup){
                $this->db->where($key,$lookup);
            }
        }
        $this->db->delete($table);
    }
    
    public function read_db($param=array()){
        
        if(!is_array($param)){
            return array();
        }
        
        if(!array_key_exists('table',$param)){
            return array();
        }
        
        $table=$param['table'];
        
        if($table=='' || !is_string($table)){
            return array();
        }
        
        if(array_key_exists('where',$param)){
            $where=$param['where'];
            
            if(is_array($where)){
                foreach($where as $key=>$lookup){
                    $this->db->where($key,$lookup);
                }
            }
        }
        
        if(array_key_exists('where_not',$param)){
            $where_not=$param['where_not'];
            
            if(is_array($where_not)){
                foreach($where_not as $key=>$lookup){
                    $this->db->where($key.' !=',$lookup);
                }
            }
        }
        
        if(array_key_exists('order_by',$param)){
            $order_by=$param['order_by'];
            
            if(is_array($order_by)){
                foreach($order_by as $key=>$lookup){
                    $this->db->order_by($key,$lookup);
                }
            }
        }
        
        if(array_key_exists('limit',$param)){
            $limit=$param['limit'];
            
            if($limit!=''){
                $this->db->limit($limit);
            }
        }
                
        return $this->db->get($table)->result_array();
    }
    public function user_login($param=array()){
        $email=$param['email'];
        $password=$param['password'];
       
        
        $query_statement="SELECT * FROM users WHERE  password=PASSWORD('".$password."') AND  email='".$email."'";
        
        $query=$this->db->query($query_statement);
       
        
        if($query->num_rows() == 1){
            
            $row=$query->row_array();
           
           
            $session_data=array(
                'user_id'=>$row['id'],
                'user_name' =>$row['first_name'],
               'role' => $row['role'],
                'is_login'=> TRUE
            );
            $this->session->set_userdata('user_info',$session_data);
            return true;
        }else{
            return false;
        }
    }
    public function get_all_notice(){
            $this->db->select('*');
            $this->db->from('notice');
            return $this->db->get()->result_array();

    }
    public function get_notice(){
        $this->db->select('*');
        $this->db->from('notice');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result_array();
    }
    public function get_all_slider(){
        $this->db->select('*');
        $this->db->from('slider');
        return $this->db->get()->result_array();
    }
    public function get_slider(){
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(4);  
        return $this->db->get()->result_array();
    }
    public function get_all_rotors(){
        $this->db->select('*');
        $this->db->from('rotor');
        return $this->db->get()->result_array();
    }
    public function get_rotor(){
        $this->db->select('*');
        $this->db->from('rotor');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(4);  
        return $this->db->get()->result_array();
    }
    public function get_all_user_info($uid){
        if($uid) {
            $sql = "SELECT * FROM users WHERE id = ?";
            $query = $this->db->query($sql, array($uid));
            $result = $query->row_array();
            return $result;
        }
    }

}