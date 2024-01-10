<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        // Check if user is logged in
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); // Redirect to login if not logged in
        }
        
        // Load dashboard view
        $this->load->view('dashboard_view');
    }
}
?>