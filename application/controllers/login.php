<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
    {
        
    parent::__construct();
  //  echo 123;die;
}

    public function index() {

        // Load login view
        $this->load->view('login_views');
    }

    public function process_login() {
        // Process login logic here
        // Validate user credentials and set session

        // Example: Assuming validation passed, set user session
        $this->load->library('session');
        $this->session->set_userdata('logged_in', true);
        
        redirect('dashboard'); // Redirect to dashboard after successful login
    }

    public function logout() {
        // Destroy session on logout
        $this->load->library('session');
        $this->session->unset_userdata('logged_in');
        redirect('login'); // Redirect to login page after logout
    }
}
?>