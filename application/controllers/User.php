<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->model('img_model');
        $this->load->model('reg_model');
        $this->load->model('event_model');
        $user_info = $this->session->userdata('user_info');
        if ( !$user_info['is_login'] )
        { 
            redirect('welcome');
        }
        
    
        }
    public function index()
    { 
        $data['title'] = "Dashboard";
        $this->load->view('user/dashboard',$data);
    }
    
    public function notice(){
        $data['title'] = 'Notice';
        $data['page'] = 'all_notice';
        $this->load->view('user/notice', $data);
    }
  public function add_data(){
        
        $this->form_validation->set_rules('notice_description', 'Notice description', 'required');
        $this->form_validation->set_rules('created_date', 'Date value', 'required');
        $data['page'] = 'create_notice';
        $data['title'] = 'notice';
        if ($this->form_validation->run() == FALSE)
        {
             $this->session->set_flashdata('alert', validation_errors());
             $this->load->view('user/notice', $data);
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
            
            redirect('user/notice');
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
        $data['title'] = 'Banner';
        $data['page'] = "all_banner";
        $this->load->view('user/slider', $data);
    }
    
    public function add_slider(){
        $data['error'] ='';
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024*2;
        $config['max_width']            = 1900;
        $config['max_height']           = 1080;
        $config['file_name']         = get_random_number(15);
        $this->load->library('upload', $config);
        $data['page'] = "create_banner";
        if ( ! $this->upload->do_upload('slider_img'))
        {
               
            $this->session->set_flashdata('error',  $this->upload->display_errors());
            
            $picture='';
            $this->load->view('user/slider', $data);
                    
        }else{
                $uploadData =  $this->upload->data();
                $picture = 'uploads/'.$uploadData['file_name'];
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
                
                redirect('user/slider');
        }
        
    }
    public function get_all_slider(){
        $result = array('data' => array());
    $data =  $this->reg_model->get_all_slider();
    
    foreach ($data as $key => $value) {
      $btn = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteSlider(this)'><i class='fa fa-trash'></i></a>";
      $img = "<img src= '".base_url().$value['slider_img']."' class='img-thumbnail' />";
      
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
         $data['page'] = 'all_rotor';
        $this->load->view('user/rotor', $data);
    }
    public function add_rotor(){
        $data['error'] = '';
        $data['page'] = 'create_rotor';
        $config['upload_path']          = './rotor/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024*2;
        $config['max_width']            = 1900;
        $config['max_height']           = 1080;
        $config['file_name']         = get_random_number(15);
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('slider_img'))
        {
               
            $this->session->set_flashdata('error',  $this->upload->display_errors());
            $picture='';
            $this->load->view('user/rotor', $data);
        }else{
                 $uploadData =  $this->upload->data();
               
                 $picture = 'rotor/'.$uploadData['file_name'];
                  $slider_title = $this->input->post('slider_title');
                    $slider_img = $picture;
                    $save_data = array(
                          'img_title ' => $slider_title,
                          'img_name' => $slider_img
                    ); 
                  $this->db->insert('rotor',$save_data);
                    $this->session->set_flashdata('alert', 'Data inserted successfully');
                    
                    redirect('user/rotor');
        }
       
    }
    public function get_all_rotor(){
        $result = array('data' => array());
    $data =  $this->reg_model->get_all_rotors();
    
    foreach ($data as $key => $value) {
      $btn = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteRotor(this)'><i class='fa fa-trash'></i></a>";
      $img = "<img src= '".base_url().$value['img_name']."' class='img-thumbnail' />";
      
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
        $this->load->view('user/events',$data);
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
    
        redirect(site_url("user/events"));
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
        $this->load->view('user/profile', $data);
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
            
             $this->load->view('user/profile' , $data); 
            
        }else{
                $config['upload_path']          = './profile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024*2;
                $config['max_width']            = 1900;
                $config['max_height']           = 1080;
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
                
                redirect('user/profile');    
                    
           }
     }
    public function category(){
        $data['title'] = "Blog";
        $data['page'] = 'all_category';
        $this->load->view('user/category', $data);
    }
    public function add_category(){
        $this->form_validation->set_rules('category_title', 'Category title', 'required');
       
        $this->form_validation->set_rules('category_desc', 'Category Description', 'required');
        
        $data['page'] = 'create_category';
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('alert', validation_errors());
            
             $this->load->view('user/category', $data);
            
        }else{
            $category_title = $this->input->post("category_title", TRUE);
            $desc = $this->input->post("category_desc", TRUE);
            
            $save_data = array(
              "category_name" => $category_title,
              "category_details" => $desc
            );
            
            $this->db->insert('category_tbl',$save_data);
            $this->session->set_flashdata('alert', 'Data inserted successfully');
                
            redirect('user/category');
        }
    }
    public function edit_category($id){
        $data['title'] = "Blog";
        $data['category'] = $this->blog_model->editcategory($id);
        $this->load->view('user/edit-category', $data);
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
        redirect('user/category');
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
      $btn2 = "<a class='btn btn-info' href='".base_url('user/edit_category/').$value['id']."'><i class='fa fa-info'></i></a>";
      
      
      $result['data'][$key] = array(
      $value['id'],
      $value['category_name'],
      $value['category_details'],
      $btn1.' '.$btn2
      );
        } 
    echo json_encode($result);
    }
    
    public function blogs(){
        $data['title'] = "Blog";
        $data['page'] = 'all_blog';
        $this->load->view('user/blog',$data);
    }
    public function add_posts(){
        $data['error'] = '';
        $this->form_validation->set_rules('post_title', 'Blog title', 'trim|required');
        $this->form_validation->set_rules('post_subtitle', 'Blog Subtitle', 'trim|required');
        $this->form_validation->set_rules('post_desc', 'Blog Description', 'trim|required');
        $this->form_validation->set_rules('category_id', 'Select Category', 'trim|required');
        $data['category'] = $this->blog_model->get_all_category();
        $data['page'] = 'create_blog';
        if ($this->form_validation->run() == FALSE)
        {
            
            $this->session->set_flashdata('error', validation_errors());
            $this->load->view('user/blog',$data);
            
        }else{
                $config['upload_path']          = './blogimage/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024*2;
                $config['max_width']            = 1900;
                $config['max_height']           = 1080;
                $config['file_name']         = get_random_number(15);
                
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('post_img'))
                {
                       
                    $this->session->set_flashdata('error',  $this->upload->display_errors());
                    $picture='';
                    $this->load->view('user/blog',$data);
                        
                }else{
                        $uploadData =  $this->upload->data();
                       
                        $picture = $uploadData['file_name'];
                        $post_title = $this->input->post('post_title');
                        $post_subtitle = $this->input->post('post_subtitle');
                        $post_desc = $this->input->post('post_desc');
                        $category_id = $this->input->post('category_id');
                        $user_id = $this->input->post('user_id');
                        $category_name = $this->input->post('category_name');
                        if($category_name != ''){
                            $data = array('category_name' => $category_name, 'category_details' => 'Post Category');
                            $this->db->insert('category_tbl', $data);
                            $cat_id = $this->db->insert_id();
                        }else{
                            $cat_id = $category_id;
                            
                        }
                        
                        $save_data = array(
                            'post_title'  => $post_title, 
                            'post_subtitle' => $post_subtitle,
                            'post_desc' => $post_desc,
                            'category_id' => $cat_id,
                            'user_id' => $user_id,
                            'post_img' => $picture
                        );
                        
                        $this->db->insert('post_tbl',$save_data);
                        $this->session->set_flashdata('alert','New Post added !');
                        
                        redirect('user/blogs');
                         
                }
                
                    
                    
           }
    }
    public function get_all_blog(){
        $result = array('data' => array());
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
    $data =  $this->blog_model->get_all_posts_by_uid($uid);
    
    $data_two['enm'] = $options = $this->blog_model->status_enums('post_tbl','status');
    
    foreach ($data as $key => $value) {
        $op="";
      foreach ($options as $status_val) {
        $selected_status = ($value['status'] == $status_val ? 'selected' : '');
        $op .= "<option value = '".trim(strtolower($status_val))."' {$selected_status}>".ucfirst($status_val)."</option>";

      }
      $test = "<select data-id='".$value['id']."' name='status' id='status' class='form-control' onChange='return changeStatus(this);'>";
      $test .= $op;   
      $test.= "</select>";
      
      $img = "<img src= '".base_url('blogimage/').$value['post_img']."' class='img-thumbnail' />";
      $btn1 = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteuserPost(this)'><i class='fa fa-trash'></i></a>";
      $btn2 = "<a class='btn btn-info' href='".base_url('user/edit_blog/').$value['id']."'><i class='fa fa-pencil'></i></a>";
      $btn3 = "<a class='btn btn-info' href='".base_url('user/view_blog/').$value['id']."'><i class='fa fa-info'></i></a>";
      $category = $this->blog_model->get_category_by_id($value['id']);
      $description = word_limiter($value['post_desc'], 30);
      $users = $this->blog_model->get_user_by_id($value['id']);
      $result['data'][$key] = array(
      $value['id'],
      $value['post_title'],
      $description.'.......',
      $img,
      $category['category_name'],
      $users['first_name'],
      $test,
      $btn1.' '.$btn2.' '.$btn3
      );
        } 
    echo json_encode($result);
    }
    public function edit_blog($id){
        $data['title'] = 'Blog';
        $data['post'] = $this->blog_model->get_post_by_id($id);
        $data['categories'] = $this->blog_model->get_all_category();
        $this->load->view('user/edit-post', $data);
    }
    public function view_blog($id){
        $data['title'] = 'Blog';
        $data['post'] = $this->blog_model->get_post_by_id($id);
        $data['categories'] = $this->blog_model->get_all_category();
        $this->load->view('user/view_post', $data);
    }
    public function editBlogStatus(){
    $validator = array('success' => false, 'messages' => array());
    $id = $this->input->get('id');
    $status = $this->input->get('status');
    $data = array('status' => $status);
    $this->db->where('id', $id);

    $sql = $this->db->update('post_tbl', $data);
    if($sql === true){
      // echo "successed";
      $validator['success'] = true;
    }
    else{
      // echo 'not success';
      $validator['success'] = false;
          $validator['messages'] = 'Error While Updating';
    }

    echo json_encode($validator);

    

  
    }
    public function update_post(){
         $id = $this->input->post('post_id');
    $post_title = $this->input->post('post_title');
        $post_subtitle = $this->input->post('post_subtitle');
        $post_desc = $this->input->post('post_desc');
        $category_id = $this->input->post('category_id');
        
    
    $data['error'] = '';
        
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
                 if($picture !=''){
                    $update['post_img'] = $picture;
                }
                  if($post_title !=''){
                      $update['post_title'] = $post_title;
                  }
                  
                  if($post_subtitle !=''){
                      $update['post_subtitle'] = $post_subtitle;
                  }
                  
                  if($post_desc !=''){
                      $update['post_desc'] = $post_desc;
                  }
                  $update['category_id'] = $category_id;
                  
                   
            $this->db->where('id', $id);
            $this->db->update('post_tbl', $update);
            redirect('user/blogs');
                
    // Set message
  
    }
    public function delete_blog($id){
        $this->blog_model->delete_post_by_id($id);
    echo json_encode(array('rs' => 1));
    }
    
   public function upload_file(){
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
        $data['get_album'] =  $this->img_model->get_all_album($uid);
        $data['error'] = '';
        $this->load->view('user/upload_post', $data);
   }
   public function create_image(){
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
        $data['get_album'] =  $this->img_model->get_img_album($uid);
        $data['error'] = '';
        $data['page'] = 'create_img';
        $this->load->view('user/upload_image', $data);
   }
   public function create_audio(){
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
        $data['get_album'] =  $this->img_model->get_audio_album($uid);
        $data['error'] = '';
        $data['page'] = 'create_audio';
        $this->load->view('user/upload_audio', $data);
   }
   public function create_video(){
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
        $data['get_album'] =  $this->img_model->get_video_album($uid);
        $data['error'] = '';
        $data['page'] = 'create_video';
        $this->load->view('user/upload_video', $data);
   }
   public function get_image_gallery(){
       $user_data = $this->session->userdata('user_info');
       $uid = $user_data['user_id'];
       $data['title'] = 'gallery';
       $data['img_gallery'] = $this->img_model->get_img_album($uid);
       $this->load->view('user/image_gallery', $data);
   }
   public function image_gallery(){
       $data['title'] = "Gallery";
       $data['error'] = '';
       $data['page'] = 'all_img';
       $this->load->view('user/getimgalbum', $data);
   }
   public function audio_gallery(){
       $data['error'] = '';
       $data['title'] = "Gallery";
       $data['page'] = 'all_audio';
       $this->load->view('user/getaudioalbum', $data);
   }
   public function video_gallery(){
       $data['error'] = '';
       $data['title'] = "Gallery";
       $data['page'] = 'all_video';
       $this->load->view('user/getvideoalbum', $data);
   }
   public function imglist_gallery(){
        
        $a_id = intval($_GET['a_id']);
        $result = array('data' => array());
    $data =  $this->img_model->get_allimage($a_id);
    
    foreach ($data as $key => $value) {
      $btn1 = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteImage(this)'><i class='fa fa-trash'></i></a>";
//      $btn2 = "<a class='btn btn-info' href='".base_url('user/edit_category/').$value['id']."'><i class='fa fa-info'></i></a>";
            $img = "<img src= '".base_url('uploads/img_Gallery/').$value['image_list']."' class='img-thumbnail' />";
      
      
      $result['data'][$key] = array(
      $value['id'],
      $img,
      $btn1
      );
        } 
    echo json_encode($result);
   }
    public function audiolist_gallery(){
        
        $a_id = intval($_GET['a_id']);
        $result = array('data' => array());
    $data =  $this->img_model->get_allaudio($a_id);
    
    foreach ($data as $key => $value) {
      $btn1 = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteAudio(this)'><i class='fa fa-trash'></i></a>";
//      $btn2 = "<a class='btn btn-info' href='".base_url('user/edit_category/').$value['id']."'><i class='fa fa-info'></i></a>";
      $audio = "<audio src='".base_url('uploads/audio_Gallery/').$value['audio_list']."' controls style='width: 305px'></audio>";
      
      $result['data'][$key] = array(
      $value['id'],
      $audio,
      $btn1
      );
        } 
    echo json_encode($result);
   }
    public function videolist_gallery(){
        
        $a_id = intval($_GET['a_id']);
        $result = array('data' => array());
    $data =  $this->img_model->get_allvideo($a_id);
    
    foreach ($data as $key => $value) {
      $btn1 = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteVideo(this)'><i class='fa fa-trash'></i></a>";
//      $btn2 = "<a class='btn btn-info' href='".base_url('user/edit_category/').$value['id']."'><i class='fa fa-info'></i></a>";
      $video = "<video src='".base_url('uploads/video_Gallery/').$value['video_list']."' controls type='".$value['video_type']."' style='width: 305px'></video>";
      
      $result['data'][$key] = array(
      $value['id'],
      $video,
      $btn1
      );
        } 
    echo json_encode($result);
   }
   public function create_photogallery(){
        $album_name = $this->input->post('album_name');
        $user_id = $this->input->post('user_id');
        $a_id = $this->input->post('album_id');
        $file_type = $this->input->post('file_type');
        if($album_name != ''){
            $data = array('album_name' => $album_name, 'user_id' => $user_id, 'album_type' => $file_type);
            $this->db->insert('album_tbl', $data);
            $albm_id = $this->db->insert_id();
        }else{
            $albm_id = $a_id;
            
        }
         $data = array();
        // If file upload form submitted
        if(!empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                // $uploadPath = 'uploads/img_Gallery/';
                // $config['upload_path'] = $uploadPath;
                // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $config = array(
                    'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/img_Gallery",
                    'upload_url' => base_url() . "/uploads/img_Gallery",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite' => TRUE,
                    'max_size' => 1024*2,
                    'max_width' => 1900,
                    'max_height' => 1080,
                    'quality' => "100%",
                    'file_name' => rand(1, 1000000) . microtime(true) . '.jpg'
                );
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    
                    $fileData = $this->upload->data();
                    $uploadData[$i]['image_list'] = $fileData['file_name'];
                    $uploadData[$i]['album_id'] = $albm_id;
                    $uploadData[$i]['user_id'] = $user_id;
                }else{
                        
                        $data['get_album'] =  $this->img_model->get_img_album($user_id);
                        $data['error'] = $this->upload->display_errors();
                        $data['page'] = 'create_img';
                        $this->load->view('user/upload_image', $data);
                }

            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->img_model->insert($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                redirect('user/image_gallery');
            }
        }
   }
   
   public function create_audiogallery(){
        $album_name = $this->input->post('album_name');
        $user_id = $this->input->post('user_id');
        $a_id = $this->input->post('album_id');
        $file_type = $this->input->post('file_type');
        if($album_name != ''){
            $data = array('album_name' => $album_name, 'user_id' => $user_id, 'album_type' => $file_type);
            $this->db->insert('album_tbl', $data);
            $albm_id = $this->db->insert_id();
        }else{
            $albm_id = $a_id;
            
        }
         $data = array();
         $data['page'] = 'create_audio';
        // If file upload form submitted
        if(!empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                // $uploadPath = 'uploads/img_Gallery/';
                // $config['upload_path'] = $uploadPath;
                // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $config = array(
                    'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/audio_Gallery",
                    'upload_url' => base_url() . "/uploads/audio_Gallery",
                    'allowed_types' => "wav|mp3|3gp|ogg|aif|au|wma|aac|ra|gsm|m4a|mp4",
                    'overwrite' => TRUE,
                    'max_size' => 1024*10,
                );
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    
                    $fileData = $this->upload->data();
                    $uploadData[$i]['audio_list'] = $fileData['file_name'];
                    $uploadData[$i]['album_id'] = $albm_id;
                    $uploadData[$i]['user_id'] = $user_id;
                }else{
                        
                        $data['get_album'] =  $this->img_model->get_all_album($user_id);
                        $data['error'] = $this->upload->display_errors();
                        
                        $this->load->view('user/getaudioalbum', $data);
                }
            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->img_model->insert_audio($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                redirect('user/audio_gallery');
            }
        }
        
        
   }
   public function create_videogallery(){
        $album_name = $this->input->post('album_name');
        $user_id = $this->input->post('user_id');
        $a_id = $this->input->post('album_id');
        $file_type = $this->input->post('file_type');
        if($album_name != ''){
            $data = array('album_name' => $album_name, 'user_id' => $user_id, 'album_type' => $file_type);
            $this->db->insert('album_tbl', $data);
            $albm_id = $this->db->insert_id();
        }else{
            $albm_id = $a_id;
            
        }
         $data = array();
        // If file upload form submitted
        if(!empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                // $uploadPath = 'uploads/img_Gallery/';
                // $config['upload_path'] = $uploadPath;
                // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $config = array(
                    'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads/video_Gallery",
                    'upload_url' => base_url() . "/uploads/video_Gallery",
                    'allowed_types' => "avi|mp4",
                    'overwrite' => TRUE,
                    'max_size' => 1024*200,
                );
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    
                    $fileData = $this->upload->data();
                    $uploadData[$i]['video_list'] = $fileData['file_name'];
                    $uploadData[$i]['album_id'] = $albm_id;
                    $uploadData[$i]['user_id'] = $user_id;
                    $uploadData[$i]['video_type'] = $fileData['file_type'];
                }else{
                        
                        $data['get_album'] =  $this->img_model->get_video_album($user_id);
                        $data['error'] = $this->upload->display_errors();
                        $data['page']='create_video';
                        $this->load->view('user/getvideoalbum', $data);
                }
            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->img_model->insert_video($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
                redirect('user/video_gallery');
            }
        }
   }
   public function album(){
       $data['title'] = 'Album';
       $this->load->view('user/album',$data);
   }
   public function add_album(){
        $album_name = $this->input->post('album_name');
        $user_id = $this->input->post('user_id');
        $file_type = $this->input->post('file_type');
       
        $data = array('album_name' => $album_name, 'user_id' => $user_id, 'album_type' => $file_type);
        $this->db->insert('album_tbl', $data);
        $this->session->set_flashdata('alert', 'Data Updated successfully');
        redirect('user/album');
   }
   public function edit_album($id){
        $data['album'] = $this->img_model->editalbum($id);
        $this->load->view('user/edit_album', $data);
   }
   public function get_album_list(){
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
        $result = array('data' => array());
    $data =  $this->img_model->get_albums($uid);
    
    foreach ($data as $key => $value) {
      $btn = "<a data-id = '".$value['id']."' class='catdel btn btn-danger' onclick='return deleteAlbum(this)'><i class='fa fa-trash'></i></a>";
      $btn2 = "<a class='btn btn-info' href='".base_url('user/edit_album/').$value['id']."'><i class='fa fa-pencil'></i></a>";
      $result['data'][$key] = array(
      $value['id'],
      $value['album_name'],
      $value['album_type'],
      $btn.' '.$btn2
      );
        } 
    echo json_encode($result);
   }
   public function update_album(){
        $album_name = $this->input->post('album_name');
        $file_type = $this->input->post('file_type');
        $aid = $this->input->post('aid');
        $save_data = array(
          "album_name" => $album_name,
          "album_type" => $file_type
        );
        $this->db->where("id", $aid);  
        $this->db->update("album_tbl", $save_data); 
        $this->session->set_flashdata('alert', 'Data Updated successfully');
        redirect('user/album');
   }
   public function delete_album($id){
        $this->db->where('id', $id);
    $sql = $this->db->delete('album_tbl');
    
    echo json_encode(array('rs' => 1));
   }
   public function delete_Img($id){
        $this->db->where('id', $id);
    $sql = $this->db->delete('imggallery_tbl');
    
    echo json_encode(array('rs' => 1));
   }
   public function delete_Audio($id){
        $this->db->where('id', $id);
    $sql = $this->db->delete('audiogallery_tbl');
    
    echo json_encode(array('rs' => 1));
   }
   public function delete_Video($id){
        $this->db->where('id', $id);
    $sql = $this->db->delete('videogallery_tbl');
    
    echo json_encode(array('rs' => 1));
   }
   
    public function logout(){
      $data = $this->session->userdata();
          foreach($data as $key=> $val){
              $this->session->unset_userdata($key);
          }
      $this->session->sess_destroy();
    redirect(base_url(), 'refresh');
      exit();
  }
    
 //end of class   
}    