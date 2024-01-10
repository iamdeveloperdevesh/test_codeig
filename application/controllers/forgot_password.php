<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_password extends CI_Controller {

    public function index() {
        // Load dashboard view
        $this->load->view('forgot_password');
    }

    public function handleChangePassword(){

        if($this->input->post()) {
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');
    
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div id="validationServerUsernameFeedback" class="invalid-feedback">', '</div>');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
    
            if($this->form_validation->run() == FALSE){
                
            }
            else {
                redirect('login');
            }
        }
        $this->load->view('forgot_password');

    }


}

?>