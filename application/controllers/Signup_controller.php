<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('signup_view');
    }

    public function handleSignup()
    {
        if($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
    
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div id="validationServerUsernameFeedback" class="invalid-feedback">', '</div>');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            // $getdata = $this->input->get();
            $postdata = $this->input->post();
            
            
            
            if($this->form_validation->run() == FALSE){
                
            }
            else {
                echo"<pre>";                
                $this->load->model('signup_model');
                $this->signup_model->add_data($postdata);
                // print_r($postdata);
                // redirect('login');
            }
        }
        $this->load->view('signup_view');
    }
}
?>