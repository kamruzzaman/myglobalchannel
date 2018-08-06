<?php
	class Comment extends CI_Controller{
	    public function __construct()
        {
            parent::__construct();
            $this->load->model('blog_model');
            $this->load->model('comment_model');
    
        }
		public function create(){
			$post_id = $this->input->post('post_id');
			$data['post'] = $this->blog_model->get_post_by_id($post_id);
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');
			if($this->form_validation->run() === FALSE){
			    
				$this->load->view('welcome/view_post/'.$post_id, $data);
			} else {
				$this->comment_model->create_comment($post_id);
				redirect('welcome/view_post/'.$post_id, $data);
			}
		}
	}