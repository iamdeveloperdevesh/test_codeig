<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_password extends CI_Controller {

    public function index() {
        // Load dashboard view
        $this->load->view('forgot_password');
    }
    public function verify_password(){
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if($this->form_validation->run()== FALSE){
            $this->load->view('forgot_password');
        }

    }


}

?>