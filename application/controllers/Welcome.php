<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



    public function __construct()
    {
    parent::__construct();
     $this->load->model('reg_model');
     $this->load->model('event_model');
     $this->load->model('blog_model');
     $this->load->model('img_model');
     $this->load->model('comment_model');
     $this->load->library('form_validation');
     $this->load->helper('web_helper');
     
    }



    public function index()
    {
        $data['get_notice'] = $this->reg_model->get_notice();
        $data['get_slider'] = $this->reg_model->get_slider();
        $data['get_rotor'] = $this->reg_model->get_rotor();
        $this->load->view('index', $data);

//        $this->load->helper(array('form', 'url'));
//
//        $this->load->library('form_validation');
//
//
//        $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check',array('required'=>"Username must not empty"));
//        $this->form_validation->set_rules('email', 'email', 'required', array('required' => 'You must provide a password'));
//        $this->form_validation->set_rules('tel', 'Telephone No', 'required',array('required'=>"Password Confirmation field is required."));
//        $this->form_validation->set_rules('Userpassword', 'password', 'required',array('required'=>"Please enter your valid email address"));
//        $this->form_validation->set_rules('confirmPassord', 'password', 'required',array('required'=>"Please choose your language"));
//        $this->form_validation->set_rules('checkbox', 'checkbox', 'required',array('required'=>"Pleage select your gender"));
//
//        if ($this->form_validation->run() == FALSE)
//        {
//            $this->load->view('index');
//        }
//        else
//        {
//            $this->load->view('formsuccess');
//        }

    }
    public function wall()
    {
        $user_data = $this->session->userdata('user_info');
        // $data['upload_data'] = $this->blog_model->get_all_img();
        $data['logged_in'] = $user_data['is_login'];
        $data['user_info'] = $this->reg_model->get_all_user_info($user_data['user_id']);
        $this->load->view('wall', $data);
    }
    public function update_post(){
        
        $desc = $this->input->post('desc');
        $type = $this->input->post('update_status');
        $user_id = $this->input->post('user_id');
        $data = array();
        $data_save = array('post_desc'=>$desc,'user_post_type'=> $type, 'user_id' => $user_id);
        
        // $this->db->set('created_time', 'NOW() + INTERVAL 24 HOUR', FALSE);
        // $this->db->set('created_time', 'NOW()', FALSE);
        $sql = $this->db->insert('wall_post', $data_save);
        
        if($sql){
            $this->db->where('id', $user_id);
            $query = $this->db->get('users');
            if($query->num_rows() == 1){
                $data['rs'] = 1;
                $data['msg'] = $desc;
                $data['user_name'] = $query->row()->first_name;
                $data['user_img'] = $query->row()->profile_image;
              //  header('Content-Type: application/json');
                
                echo json_encode($data);
                return;
            }
            
        }
        else{
            echo json_encode(array('rs'=>0));
            return;
        }
            
    }
    public function upload_photo() {
        $upload_data = array(
            'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads",
            'upload_url' => base_url() . "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1024*2",
            'width' => 1900,
            'height' => 1080,
            'quality' => "100%",
            'file_name' => rand(1, 1000000) . microtime(true) . '.jpg'
        );



        $file_name = null;

        $this->load->library('upload', $upload_data);

        if ($this->upload->do_upload('userfile')) {

            $uploaded_file = $this->upload->data();

            $file_name = $uploaded_file['file_name'];
            $type = $this->input->post('update_status');
            $user_id = $this->input->post('user_id');
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'post_img' => base_url() . 'uploads/' . $file_name,
                'user_post_type' => $type
                
            );
            $sql = $this->db->insert('wall_post', $data);
            if($sql){
                $this->db->where('id', $user_id);
                $query = $this->db->get('users');
                if($query->num_rows() == 1){
                    $data['result'] = 1;
                    $data['msg'] = $file_name;
                    $data['user_name'] = $query->row()->first_name;
                    $data['user_img'] = $query->row()->profile_image;
                  //  header('Content-Type: application/json');
                    $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
                }
                
            }
            
            

        }else{
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('result' => 0, 'msg' => $this->upload->display_errors())));
        }
    }
    public function add_likes(){
        if(!empty($_POST["id"])) {
            switch($_POST["action"]){
                case "like":
                    
                    $data = array('post_id' => $_POST['id'], 'user_id' => $_POST['user_id']);
                    $result = $this->db->insert('like_tbl', $data);
                    if(!empty($result)) {
                         
                        $query_statement ="UPDATE wall_post SET likes = likes + 1 WHERE id='" . $_POST["id"] . "'";
                        $result = $this->db->query($query_statement);               
                    }           
                break;      
                case "unlike":
                    $query = "DELETE FROM like_tbl WHERE user_id = '" . $_POST['user_id'] . "' and post_id = '" . $_POST["id"] . "'";
                    
                    $result = $this->db->query($query); 
                    if(!empty($result)) {
                        
                        $query_statement ="UPDATE wall_post SET likes = likes - 1 WHERE id='" . $_POST["id"] . "'and likes > 0";
                        $result = $this->db->query($query_statement);   
                    }
                break;      
            }
        }
    }


    public function blog($offset = 0)
    {
        $config['base_url'] = base_url() . 'welcome/blog/';
		$config['total_rows'] = $this->db->count_all('post_tbl');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');
		// Init Pagination
		$this->pagination->initialize($config);
		$data['posts'] = $this->blog_model->get_posts(FALSE, $config['per_page'], $offset);
        // $data['posts'] = $this->blog_model->get_all_posts();
        $this->load->view('blog', $data);
    }
    
    public function view_post($id){
        $data['post'] = $this->blog_model->get_post_by_id($id);
       
		$data['comments'] = $this->comment_model->get_comments($id);
		if(empty($data['post'])){
			show_404();
		}
        $this->load->view('single_post', $data);
    }
    public function gallery()
    {
        $user_data = $this->session->userdata('user_info');
        $uid = $user_data['user_id'];
        
        $data['get_album'] =  $this->img_model->get_img_album($uid);
        $this->load->view('gallery', $data);
    }
    public function create_new_gallery(){
        $data['get_album'] =  $this->img_model->get_all_album();
        $this->load->view('create_gallery', $data);
    }
    public function create_photogallery()
    {   
        $album_name = $this->input->post('album_name');
        $data = array('album_name' => $album_name);
        $this->db->insert('album_tbl', $data);
        $albm_id = $this->db->insert_id();
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
                    'max_size' => "2048KB",
                    'width' => 400,
                    'height' => 1,
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
                }
            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->img_model->insert($uploadData);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
        
        // Get files data from the database
        $data['get_album'] =  $this->img_model->get_all_album();
        // Pass the files data to view
        $this->load->view('create_gallery', $data);
    }
    public function get_album_id($id){
       
    	$this->db->where('album_id',$id);
	    $sql = $this->db->get('imggallery_tbl');
	
	    if($sql->num_rows() > 0){
	  
    	    foreach($sql->result_array() as $row){
    	       echo  "<li class='g-img'><a href='".base_url('uploads/img_Gallery/').$row['id']."' rel='prettyPhoto[gallery1]'><img class='g-img' src='".base_url('uploads/img_Gallery/').$row['image_list']."' width='420' height='420' alt='Teacup'/></a></li>";
    	         
    	    }
	    
	    }
    }

    public function myform()
    {
        $this->load->view('myform');
    }

    public function audioGallery()
    {
        $this->load->view('audioGallery');
    }

    public function videoGallery()
    {
        $this->load->view('videoGallery');
    }
    public function audio2()
    {
        $this->load->view('audio2');
    }


    public function admin_login()
    {

        $data['title']='Admin login form';
        $this->load->view('admin_login',$data);
    }

    function login_validation(){

       
        $this->form_validation->set_rules('useremail', 'first name', 'required|trim');


    }

    public function test()
    {
        $this->load->view('test');
    }
    public function web_login(){
        $this->load->view('login_page');
    }

    public function save_new_info()
    {
        
        
        $data=array();
        $this->form_validation->set_rules('first_name', 'first name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'last name', 'required|trim');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('tel', 'Telephone No', 'required|trim|numeric');
        $this->form_validation->set_rules('Userpassword', 'password', 'required|trim');
        $this->form_validation->set_rules('confirmPassord', 'password', 'required|matches[Userpassword]');
        if ($this->form_validation->run() == FALSE){
            header('Content-Type: application/json');
	        echo json_encode(array('rs'=>0,'msg'=>validation_errors(), 'csrf' => $this->security->get_csrf_hash()));
	    	return;
        }else{
        
            $data['first_name']=$this->input->post('first_name');
            $data['last_name']=$this->input->post('last_name');
            $data['dob']= date('Y-m-d', strtotime($this->input->post('dob')));
            $data['email']=$this->input->post('email');
            $data['tel']=$this->input->post('tel');
            $data['password'] = $this->input->post('Userpassword');
            $data['active_link'] = md5(uniqid());
            $sql ='INSERT INTO users (first_name, last_name, dob, email, tel, password,active_link) VALUES ("'.$data['first_name'].'","'.$data['last_name'].'","'.$data['dob'].'", "'.$data['email'].'","'.$data['tel'].'",PASSWORD("'.$data['password'].'"), "'.$data['active_link'].'");';
		    	$this->db->query($sql);
            	$pageMsg = 'Thank you for creating a Blog account. You Can Login to your Account onlty after Activation. Click the link Below. ';    
                 sendEmail('Registration Successfull - Blog',$data['email'],$pageMsg,$data,'','account_activation_email','','registration');
            	
                header('Content-Type: application/json');
		        echo json_encode(array('rs' => 1, 'msg' => 'Just an Email sent to Your inbox. please check email for active your account ! ', 'csrf' => $this->security->get_csrf_hash()));
		    	return;
           
        }
    }

    
    
    public function activation(){
        $code = $this->input->get('s');
        $email = $this->input->get('e');
        $this->db->where('active_link',$code );
       
        $this->db->where('email',$email);
        $this->db->where('status', 'inactive');
        $sql = $this->db->get('users');
        
        if($sql->num_rows() == 1){
    	    $row = $sql->row_array();
    	    $this->db->where('id', $row['id']);
    	    $this->db->update('users', array('active_link'=>'', 'status'=> 'active'));
    	    $this->session->set_flashdata('alert', 'Your Account activated Successfully , Thank you.');
            redirect('welcome/web_login');
        	     
    	}else{
    		    
		    echo 'Wrong Email Address ! ';
		    show_404();
		}
        // if($sql->num_rows() != 1){
        //     redirect('welcome');
        //     exit();
        // }else{
            
        //     $user_id = $sql->row()->id;
        //     $data = array('active_link'=>'', 'status'=> 'active');
        //     $this->db->where('id', $user_id);
        //     $this->db->update('users', $data);
        //     $this->session->set_flashdata('alert', 'Hi ! Your Account activated successfully ! Now Your Can Login to Manage Your Bookings. Just Click on Login button you find on Top Right. ');
        //   $this->load->view('login_page');
        // }
    }

    function my_simple_crypt( $string, $action) {
           
            $secret_key = 'my_simple_secret_key';
            $secret_iv = 'my_simple_secret_iv';
         
            $output = false;
            $encrypt_method = "AES-256-CBC";
            $key = hash( 'sha256', $secret_key );
            $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
         
            if( $action == 'e' ) {
                $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
            }
            else if( $action == 'd' ){
                $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
            }
         
            return $output;
        }

    public function login_check()
    {
//         if (!$this->input->is_ajax_request()) {
// 		   redirect(base_url(), 'refresh');
// 			exit();
// 		}
        
         $this->form_validation->set_rules('useremail', 'email', 'required|trim');
         $this->form_validation->set_rules('userpassword', 'password', 'required|trim');
        $hash=$this->security->get_csrf_hash();
          if ($this->form_validation->run() == FALSE){
               header('Content-Type: application/json');
    			echo json_encode(array('status' => 0, 'msg' => validation_errors(), 'csrf' => $hash));
    			return;
              
          }else{
              
                $data = array(
                  'email' => $this->input->post('useremail'),
                  'password' => $this->input->post('userpassword')
                  );
                $login=$this->reg_model->user_login($data);
                $url ='';
                
               if($login==false){
				$rs=0;
				$msg = 'Email or Password invalid ! ';
			}else{
			    $user_info = $this->session->userdata('user_info');
			    $msg = 'Hi '.$user_info['user_name'].' <br/> You are redirecting to account... ';
				switch($user_info['role']){
				    case 'admin': 
				         $rs=1;
			             $url=base_url().'admin';
				        break;
				        
				    case 'user':
				        	$rs=1;
			                $url=base_url().'user';
				        break;
				   case 'manager':
				        $rs=1;
			              $url=base_url().'manager';
				        break;
				     default:
				         $rs=1;
			             $url=base_url().'user';
				         break;    
				}
			
			}
			 header('Content-Type: application/json');
			echo json_encode(array('status' => $rs, 'msg' => $msg, 'page' => $url, 'csrf' => $hash));
			return;
              
          }

    }
    public function passwordReset(){
        $validator['success'] = 0;
		$validator['messages'] = '';
		$email = $this->input->post('email');
		$email_info = $this->reg_model->read_db(array('table'=> 'users', 'where'=>array('email'=>$email,'status'=>'active')));
	    $this->db->where('email', $this->input->post('email'));
	    $this->db->where('status', 'active');
	    $sql = $this->db->get('users');
	    
		if($sql->num_rows() == 1){
            $row = $sql->row_array();	  
    				$subject = 'Password reset request for '.get_company_name();
        			$to = $row['email'];
        			$user_info['active_link'] = md5(uniqid());
    				$user_info['email'] = $this->my_simple_crypt($row['email'], 'e');
        		    $user_info['user_name']= $row['first_name'];
        				
        			$msg = 'We are requested to reset your password. <br/> Just Click the Password Reset button below. ';
                 
        		    $mail_error = sendEmail($subject,$to,$msg,$user_info,$altMsg='','reset_password_mail',$form='');
        		    
    			if($mail_error=='0'){
    			    
    			    $this->reg_model->update_db('users',array('id'=>$row['id']), array('active_link'=>$user_info['active_link']));
    				$validator['success'] = 1;
    				$validator['messages'] = 'An email sent with an password reset link. Please check your email . Thank you. ';
    			}else{
    				$validator['success'] = 0;
    				$validator['messages'] = 'Sorry. Try again';
    			}
            	

		}else{
		    	$validator['success'] = 0;
                $validator['messages'] = 'Sorry. We dont find any Email address like yours. Try again or Register now.';
		}
		 header('Content-Type: application/json');
		echo json_encode(array('validator' => $validator, 'csrf' => $this->security->get_csrf_hash()));
    }
    public function setNewPassword(){
		
		$user_id = '';
		$activation_id = $_GET['k'];
		$email_id = $this->my_simple_crypt($_GET['e'], 'd');	
		$this->db->where('email', $email_id);
		$this->db->where('active_link', $activation_id);
		$sql = $this->db->get('users');
		if($sql->num_rows()==1){
		    $user_id = $sql->row_array()['id'];
		    $user_id = $this->my_simple_crypt($user_id, 'e');
			$this->load->view('set_new_password', array('user' =>$user_id));
		    
		}else{
		    $this->session->set_flashdata('alert', 'We Can not complete your request. Please Try Again.');
			redirect('welcome/web_login');
			exit();
		}
		
	}
	
	
	public function update_password(){
	    $validator['success'] = 0;
		$validator['messages'] = '';
		$msg = '';		 
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confpassword', 'Confirm Password', 'trim|required|matches[password]');

	
		if ($this->form_validation->run() == FALSE)
		{
			$validator['messages']  =  validation_errors();
		}else{
			$user_id =  $this->my_simple_crypt($this->input->post('user'), 'd');
			$result = $this->reg_model->read_db(array('table'=>'users', 'where'=>array('id'=>$user_id)));
			
			if(!empty($result)){
				$password = $this->input->post('password');
				$query_statement = "UPDATE users SET  password = PASSWORD('".$password."') , active_link = '' WHERE id = '".$user_id."' ";
				
				if($this->db->query($query_statement)){
					 $validator['success'] = 1;
					 $validator['messages'] = base_url().'welcome/web_login';
					$this->session->set_flashdata('alert', 'Your Password Reset was successful. You Can Login With New Password !');
				}
				
				
			}
		
		}
		 header('Content-Type: application/json');
			echo json_encode(array('validator' => $validator, 'csrf' => $this->security->get_csrf_hash()));
		
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
    
    public function upload_photos() {
        $upload_data = array(
            'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"]) . "/uploads",
            'upload_url' => base_url() . "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048KB",
            'width' => 400,
            'height' => 1,
            'quality' => "100%",
            'file_name' => rand(1, 1000000) . microtime(true) . '.jpg'
        );



        $file_name = null;

        $this->load->library('upload', $upload_data);

        if ($this->upload->do_upload('userfile')) {

            $uploaded_file = $this->upload->data();

            $file_name = $uploaded_file['file_name'];



            $image_config["image_library"] = "gd2";
            $image_config["source_image"] = $upload_data["upload_path"] . "/" . $file_name;
            $image_config['create_thumb'] = FALSE;
            $image_config['maintain_ratio'] = TRUE;
            $image_config['new_image'] = $upload_data["upload_path"] . "/" . $file_name;
            $image_config['quality'] = "100%";
            $image_config['width'] = 400;
            $image_config['height'] = 1;
            $dim = (intval($upload_data["width"]) / intval($upload_data["height"])) - ($image_config['width'] / $image_config['height']);
            $image_config['master_dim'] = ($dim > 0) ? "height" : "width";

            $this->load->library('image_lib');
            $this->image_lib->initialize($image_config);

            if (!$this->image_lib->resize()) { //Resize image
            }
        }
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'image' => base_url() . 'uploads/' . $file_name
            );




            $this->blog_model->insert_item($data);
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array('result' => 1, 'msg' => 'Successfully uploaded images')));
       
    }

}




