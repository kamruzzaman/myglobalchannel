<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {



    public function __construct()
    {
    parent::__construct();
     $this->load->model('reg_model');
    $this->load->model('event_model');
    $this->load->model('blog_model');

    }
    public function index()
    { 
        $data['title'] = 'Dashboard';
        $this->load->view('admin/dashboard', $data);
    }
    
    public function notice(){
        $data['title'] = 'Notice';
        $this->load->view('admin/notice', $data);
    }
	public function add_data(){
    
        $this->form_validation->set_rules('notice_description', 'Notice description', 'required');
        $this->form_validation->set_rules('created_date', 'Date value', 'required');
    
        if ($this->form_validation->run() == FALSE)
        {
             $this->session->set_flashdata('alert', validation_errors());
             redirect('admin/notice');
        }
        else
        {
            $notice_desc = $this->input->post('notice_description');
            $created_date = $this->input->post('created_date');
            $created_by = $this->input->post('created_by');
        	 $save_data = array(
    	        'notice_description' => $notice_desc,
    	        'created_date' => $created_date,
    	        'created_by' => $created_by
    		);
                $this->db->insert('notice',$save_data);
                $this->session->set_flashdata('alert', 'Data inserted successfully');
                
                redirect('admin/notice');
        }
    }
    public function get_all_notice(){
        $result = array('data' => array());
		$data =  $this->reg_model->get_all_notice();
		
		foreach ($data as $key => $value) {
			$btn = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteNotice(this)'><i class='fa fa-trash'></i></a>";
			
			$result['data'][$key] = array(
			$value['id'],
			$value['notice_description'],
			$value['created_date'],
			$btn
			);
        } 
		echo json_encode($result);
    }
    public function delete_Notice($id){
        $this->db->where('id', $id);
		$sql = $this->db->delete('notice');
		
		echo json_encode(array('rs' => 1));
    }
    
    public function slider(){
        $data['title'] = 'Slider';
        $this->load->view('admin/slider', $data);
    }
    
    public function add_slider(){
        $data['error'] = '';
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']         = get_random_number(15);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('slider_img'))
        {
               
            $this->session->set_flashdata('error',  $this->upload->display_errors());
            $picture='';
        }else{
                 $uploadData =  $this->upload->data();
               
                 $picture = 'uploads/'.$uploadData['file_name'];
        }
        $created_by = $this->input->post('created_by');
        $slider_title = $this->input->post('slider_title');
        $slider_img = $picture;
        $save_data = array(
    	        'slider_title' => $slider_title,
    	        'slider_img' => $slider_img,
    	        'created_by' => $created_by
    		); 
    	$this->db->insert('slider',$save_data);
        $this->session->set_flashdata('alert', 'Data inserted successfully');
        
        redirect('admin/slider');
    }
    public function get_all_slider(){
        $result = array('data' => array());
		$data =  $this->reg_model->get_all_slider();
		
		foreach ($data as $key => $value) {
			$btn = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteSlider(this)'><i class='fa fa-trash'></i></a>";
			$img = "<img src= '".base_url().$value['slider_img']."' width='300' height='300' />";
			
			$result['data'][$key] = array(
			$value['id'],
			$value['slider_title'],
			$img,
			$btn
			);
        } 
		echo json_encode($result);
    }
    
     public function delete_Slider($id){
        $this->db->where('id', $id);
		$sql = $this->db->delete('slider');
		
		echo json_encode(array('rs' => 1));
    }
    public function rotor(){
         $data['title'] = 'Rotor';
        $this->load->view('admin/rotor', $data);
    }
    public function add_rotor(){
        $data['error'] = '';
        $config['upload_path']          = './rotor/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']         = get_random_number(15);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('slider_img'))
        {
               
            $this->session->set_flashdata('error',  $this->upload->display_errors());
            $picture='';
        }else{
                 $uploadData =  $this->upload->data();
               
                 $picture = 'rotor/'.$uploadData['file_name'];
        }
        $slider_title = $this->input->post('slider_title');
        $slider_img = $picture;
        $save_data = array(
    	        'img_title ' => $slider_title,
    	        'img_name' => $slider_img
    		); 
    	$this->db->insert('rotor',$save_data);
        $this->session->set_flashdata('alert', 'Data inserted successfully');
        
        redirect('admin/rotor');
    }
    public function get_all_rotor(){
        $result = array('data' => array());
		$data =  $this->reg_model->get_all_rotors();
		
		foreach ($data as $key => $value) {
			$btn = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteRotor(this)'><i class='fa fa-trash'></i></a>";
			$img = "<img src= '".base_url().$value['img_name']."' width='200' height='200' />";
			
			$result['data'][$key] = array(
			$value['id'],
			$value['img_title'],
			$img,
			$btn
			);
        } 
		echo json_encode($result);
    }
    public function delete_rotor($id){
         $this->db->where('id', $id);
		$sql = $this->db->delete('rotor');
		echo json_encode(array('rs' => 1));
    }
    public function events(){
        $data['title'] = 'Events';
        $this->load->view('admin/events',$data);
    }
    public function get_events(){
        $start = $this->input->get("start");
        $end = $this->input->get("end");
    
        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');
    
        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');
    
        $events = $this->event_model->get_events($start_format, $end_format);
    
         $data_events = array();
    
         foreach($events->result() as $r) {
    
             $data_events[] = array(
                 "id" => $r->id,
                 "title" => $r->title,
                 "description" => $r->description,
                 "end" => $r->end,
                 "start" => $r->start
             );
         }
    
         echo json_encode(array("events" => $data_events));
         exit();
    }
    public function add_event(){
        $name = $this->input->post("name", TRUE);
        $desc = $this->input->post("description", TRUE);
        $start_date = $this->input->post("start_date", TRUE);
        $end_date = $this->input->post("end_date", TRUE);
        $st_date = date("Y-m-d H:i:s", strtotime($start_date));
        $ed_date =  date("Y-m-d H:i:s", strtotime($end_date));
        $this->event_model->add_event(array(
          "title" => $name,
          "description" => $desc,
          "start" => $st_date,
          "end" => $ed_date
          )
        );
    
        redirect(site_url("admin/events"));
    }
    public function edit_event()
     {
         $posted = $this->input->post();
          $eventid = $posted['eventid'];
          $event = $this->event_model->get_event($eventid);
          if($event->num_rows() == 0) {
               echo"Invalid Event";
               exit();
          }

          $event->row();
            //  print_r($eventid);
          /* Our calendar data */
          $name = $posted['name'];
          $desc = $posted['description'];
          $start_date = $posted['start_dates'];
          
          $end_date = $posted['end_dates'];
          $st_date = date("Y-m-d H:i:s", strtotime($start_date));
          $ed_date =  date("Y-m-d H:i:s", strtotime($end_date));
          $delete = intval($this->input->post("delete"));
          
         

          if(!$delete) {

               

               $this->event_model->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $st_date,
                    "end" => $ed_date,
                    )
               );

          } else {
               $this->event_model->delete_event($eventid);
          }

        echo json_encode(array("rs" => 1));
        exit();
     }
     public function profile(){
        $user_info = $this->session->userdata('user_info');
	    $uid = $user_info['user_id']; 
	    $data['users'] = $this->reg_model->get_all_user_info($uid);
        $this->load->view('admin/profile', $data);
     }
     public function profile_update(){
        $data['error'] = '';
        $this->form_validation->set_rules('address', 'Address', 'trim|min_length[5]');
       
        $this->form_validation->set_rules('password', 'Password', 'trim');
         $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|matches[password]');
        $user_info = $this->session->userdata('user_info');
	    $uid = $user_info['user_id']; 
	    $data['users'] = $this->reg_model->get_all_user_info($uid);
        if ($this->form_validation->run() == FALSE)
        {
            $data['error'] = validation_errors(); 
            
             $this->load->view('admin/profile' , $data); 
            
        }else{
                $config['upload_path']          = './profile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']         = get_random_number(15);
                
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('profile_image'))
                {
                       
                    $this->session->set_flashdata('error',  $this->upload->display_errors());
                    $picture='';
                }else{
                         $uploadData =  $this->upload->data();
                       
                         $picture = 'profile/'.$uploadData['file_name'];
                }
                
                $update = array();
                if($this->input->post('address') !=''){
                    $update['address'] = $this->input->post('address');
                }
                 
                  if($picture !=''){
                    $update['profile_image'] = $picture;
                }
                
                  $user_info = $this->session->userdata('user_info');
                  
                  
                 if($this->input->post('password') !=''){  
                	$query_statement = "UPDATE users SET password = PASSWORD('".$this->input->post('password')."') WHERE id = '".$user_info['user_id']."' ";
    		    	$this->db->query($query_statement);
                
                 }else{
                    $this->db->where('id', $user_info['user_id']);
                    $this->db->update('users', $update);
                 }
                
                $this->session->set_flashdata('alert','Profile Updated !');
                
                redirect('admin/profile');    
                    
           }
     }
    public function category(){
        $data['title'] = "Category";
        $this->load->view('admin/category', $data);
    }
    public function add_category(){
        $this->form_validation->set_rules('category_title', 'Category title', 'required');
       
        $this->form_validation->set_rules('category_desc', 'Category Description', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('alert', validation_errors());
             redirect('admin/category');
            
        }else{
            $category_title = $this->input->post("category_title", TRUE);
            $desc = $this->input->post("category_desc", TRUE);
            
            $save_data = array(
              "category_name" => $category_title,
              "category_details" => $desc
            );
            
            $this->db->insert('category_tbl',$save_data);
            $this->session->set_flashdata('alert', 'Data inserted successfully');
                
            redirect('admin/category');
        }
    }
    public function edit_category($id){
        $data['category'] = $this->blog_model->editcategory($id);
        $this->load->view('admin/edit-category', $data);
    }
    public function update_category(){
        $category_title = $this->input->post("category_title", TRUE);
        $desc = $this->input->post("category_desc", TRUE);
        $cat_id = $this->input->post('cat_id', TRUE);
        
        $save_data = array(
          "category_name" => $category_title,
          "category_details" => $desc
        );
        $this->db->where("id", $cat_id);  
        $this->db->update("category_tbl", $save_data); 
        $this->session->set_flashdata('alert', 'Data Updated successfully');
        redirect('admin/category');
    }
    public function delete_category($id){
        $this->db->where('id', $id);
		$sql = $this->db->delete('category_tbl');
		echo json_encode(array('rs' => 1));
    }
    public function get_all_category(){
        $result = array('data' => array());
		$data =  $this->blog_model->get_all_category();
		
		foreach ($data as $key => $value) {
			$btn1 = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteCategory(this)'><i class='fa fa-trash'></i></a>";
			$btn2 = "<a class='btn btn-info' href='".base_url('admin/edit_category/').$value['id']."'><i class='fa fa-info'></i></a>";
			
			
			$result['data'][$key] = array(
			$value['id'],
			$value['category_name'],
			$value['category_details'],
			$btn1.' '.$btn2
			);
        } 
		echo json_encode($result);
    }
    public function posts(){
        $data['title'] = "Posts";
        $data['category'] = $this->blog_model->get_all_category();
        $this->load->view('admin/posts',$data);
    }
    public function add_posts(){
        $data['error'] = '';
        $this->form_validation->set_rules('post_title', 'Post title', 'trim|required');
        $this->form_validation->set_rules('post_subtitle', 'Post Subtitle', 'trim|required');
        $this->form_validation->set_rules('post_desc', 'Post Description', 'trim|required');
        $this->form_validation->set_rules('category_id', 'Select Category', 'trim|required');
        $data['category'] = $this->blog_model->get_all_category();
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/posts');
            
        }else{
                $config['upload_path']          = './blogimage/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['file_name']         = get_random_number(15);
                
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('post_img'))
                {
                       
                    $this->session->set_flashdata('error',  $this->upload->display_errors());
                    $picture='';
                }else{
                         $uploadData =  $this->upload->data();
                       
                         $picture = $uploadData['file_name'];
                }
                
                $post_title = $this->input->post('post_title');
                $post_subtitle = $this->input->post('post_subtitle');
                $post_desc = $this->input->post('post_desc');
                $category_id = $this->input->post('category_id');
                $user_id = $this->input->post('user_id');
                
                $save_data = array(
                    'post_title'  => $post_title, 
                    'post_subtitle' => $post_subtitle,
                    'post_desc' => $post_desc,
                    'category_id' => $category_id,
                    'user_id' => $user_id,
                    'post_img' => $picture
                );
                
                $this->db->insert('post_tbl',$save_data);
                $this->session->set_flashdata('alert','New Post added !');
                
                redirect('admin/posts');    
                    
           }
    }
    public function get_all_post(){
        $result = array('data' => array());
		$data =  $this->blog_model->get_all_posts();
		
		foreach ($data as $key => $value) {
			$btn1 = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deletePost(this)'><i class='fa fa-trash'></i></a>";
			$btn2 = "<a class='btn btn-info' href='".base_url('admin/edit_post/').$value['id']."'><i class='fa fa-info'></i></a>";
			$category = $this->blog_model->get_category_by_id($value['id']);
			$users = $this->blog_model->get_user_by_id($value['id']);
			$result['data'][$key] = array(
			$value['id'],
			$value['post_title'],
			$value['post_desc'],
			$value['post_img'],
			$category['category_name'],
			$users['first_name'],
			$btn1.' '.$btn2
			);
        } 
		echo json_encode($result);
    }
    public function edit_post($id){
        $data['post'] = $this->blog_model->get_post_by_id($id);
        $data['categories'] = $this->blog_model->get_all_category();
        $this->load->view('admin/edit-post', $data);
    }
    public function update_post(){
        $this->blog_model->updated_post();
		// Set message
		$this->session->set_flashdata('alert', 'Data Updated successfully');
		redirect('admin/posts');
    }
    public function delete_post($id){
        $this->blog_model->delete_post_by_id($id);
		echo json_encode(array('rs' => 1));
    }
 //end of class   
}    