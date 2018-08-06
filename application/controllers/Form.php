<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|callback_username_check',array('required'=>"Username must not empty"));
        $this->form_validation->set_rules('password', 'Password', 'required|md5', array('required' => 'You must provide a password'));
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]|md5',array('required'=>"Password Confirmation field is required."));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',array('required'=>"Please enter your valid email address"));
        $this->form_validation->set_rules('mycheck', 'mycheck', 'required',array('required'=>"Please choose your language"));
        $this->form_validation->set_rules('myradio', 'myradio', 'required',array('required'=>"Pleage select your gender"));
        $this->form_validation->set_rules('myselect', 'myselect', 'required',array('required'=>"Pleage select your class"));

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }


    public function username_check($str)
    {
        if ($str == 'test')
        {
            $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}