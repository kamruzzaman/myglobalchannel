<?php
/**
 * Created by PhpStorm.
 * User: Brainlabs
 * Date: 7/24/2018
 * Time: 12:32 PM
 */

class Blog_model extends CI_Model
{
    
    public function delete_category($id)
    {
        $this->db->where("id", $id)->delete("category_tbl");
    }
    public function get_all_category(){
        $this->db->select('*');
        $this->db->from('category_tbl');
        return $this->db->get()->result_array();
    }
    public function editcategory($id){
       $this->db->where("id", $id);  
       $query=$this->db->get('category_tbl');  
       return $query->result_array(); 
    }
    public function get_all_posts(){
        $this->db->select('*');
        $this->db->from('post_tbl');
       	$this->db->order_by('id', 'DESC');
        return $this->db->get()->result_array();
    }
    public function get_all_posts_by_uid($uid){
        $this->db->select('*');
        $this->db->from('post_tbl');
        $this->db->where('user_id', $uid);
       	$this->db->order_by('id', 'DESC');
        return $this->db->get()->result_array();
    }
    public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
			$this->db->limit($limit, $offset);
		}
			$this->db->order_by('post_tbl.id', 'DESC');
			$query = $this->db->get('post_tbl');
			return $query->result_array();
		
		
	}
	public function get_post_by_id($id){
	   
	  
	   	$this->db->where('id', $id);  
	   	$sql =  $this->db->get('post_tbl');
	   	if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }
	}
	public function get_category_by_id($id){
	    $query = "SELECT `category_name` FROM `category_tbl` JOIN post_tbl on category_tbl.id = post_tbl.category_id where post_tbl.id = ".$id;
	    $sql = $this->db->query($query);
	    if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }
	}
	
	public function get_user_by_id($id){
	    $query = "SELECT `first_name` FROM `users` JOIN post_tbl on users.id = post_tbl.user_id where post_tbl.id = ".$id;
	    $sql = $this->db->query($query);
	    if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }
	}
	
	
	public function delete_post_by_id($id){
    	$image_file_name = $this->db->select('post_img')->get_where('post_tbl', array('id' => $id))->row()->post_img;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\blogimage\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('id', $id);
		$this->db->delete('post_tbl');
		return true;
	}
	public function updated_post(){
	    $id = $this->input->post('post_id');
		$post_title = $this->input->post('post_title');
        $post_subtitle = $this->input->post('post_subtitle');
        $post_desc = $this->input->post('post_desc');
        $category_id = $this->input->post('category_id');
        
        $data = array(
            'post_title'  => $post_title, 
            'post_subtitle' => $post_subtitle,
            'post_desc' => $post_desc,
            'category_id' => $category_id
        );
		$this->db->where('id', $id);
		return $this->db->update('post_tbl', $data);
	}
	
    public function insert_item($data) {

        if ($this->db->insert('users_img', $data)) {
            return $this->db->insert_id();
        } else {

            return false;
        }
    }
    public function get_all_img(){
        $this->db->select('*');
        $this->db->from('users_img');
        return $this->db->get()->result_array();
    }
    public function status_enums($table , $field){
        $query = "SHOW COLUMNS FROM ".$table." LIKE '$field'";
        $row = $this->db->query("SHOW COLUMNS FROM ".$table." LIKE '$field'")->row()->Type;  
        $regex = "/'(.*?)'/";
        preg_match_all( $regex , $row, $enum_array );
        $enum_fields = $enum_array[1];
        foreach ($enum_fields as $key=>$value)
        {
            $enums[$value] = $value; 
        }
        return $enums;
    }
     public function insert($tb,$data)
        {
           

                $this->db->insert($tb, $data);
                
                return $this->db->insert_id();
                
        }


}
?>