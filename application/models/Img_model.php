<?php
/**
 * Created by PhpStorm.
 * User: Brainlabs
 * Date: 7/24/2018
 * Time: 12:32 PM
 */

class Img_model extends CI_Model
{
    
    public function get_all_album($uid){
        $this->db->select('*');
        $this->db->from('album_tbl');
        $this->db->where('user_id', $uid);
        $this->db->order_by("id", "asc");
        return $this->db->get()->result_array();
    }
    public function insert_albm(){
         if ($this->db->insert('image_db', $data)) {
            return $this->db->insert_id();
        } else {

            return false;
        }
    }
    public function insert($data = array()){
        $insert = $this->db->insert_batch('imggallery_tbl',$data);
        return $insert?true:false;
    }
    public function insert_audio($data = array()){
        $insert = $this->db->insert_batch('audiogallery_tbl',$data);
        return $insert?true:false;
    }
    
    public function insert_video($data = array()){
        $insert = $this->db->insert_batch('videogallery_tbl',$data);
        return $insert?true:false;
    }
    public function get_img_album($id){
        $this->db->select('*');
        $this->db->from('album_tbl');
        $this->db->where('album_type', 'image');
        $this->db->where('user_id', $id);
        $this->db->order_by("id", "asc");
        return $this->db->get()->result_array();
    }
    public function get_albums($id){
        $this->db->select('*');
        $this->db->from('album_tbl');
        $this->db->where('user_id', $id);
        $this->db->order_by("id", "asc");
        return $this->db->get()->result_array();
    }
    public function get_audio_album($id){
        $this->db->select('*');
        $this->db->from('album_tbl');
        $this->db->where('album_type', 'audio');
        $this->db->where('user_id', $id);
        $this->db->order_by("id", "asc");
        return $this->db->get()->result_array();
    }
    public function get_video_album($id){
        $this->db->select('*');
        $this->db->from('album_tbl');
        $this->db->where('album_type', 'video');
        $this->db->where('user_id', $id);
        $this->db->order_by("id", "asc");
        return $this->db->get()->result_array();
    }
    public function editalbum($id){
        $this->db->where("id", $id);  
        $sql=$this->db->get('album_tbl');  
       	if($sql->num_rows() == 1){
        	return $sql->row_array();
        }else{
        	return FALSE;
        }
    }

}
?>