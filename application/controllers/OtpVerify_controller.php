<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OtpVerify_controller extends CI_Controller {

    public function index() {
        // Load dashboard view
        $this->load->view('OtpVerify_view');
    }

    public function verify_otp() {

        $user_code = $this->input->post('code');
        
        $this->load->library('session');
        
        if(isset($_SESSION['verify_code'])) {
            $org_code = (string) $_SESSION['verify_code'];

            if($user_code === $org_code) {
                redirect('forgot_password');
            }
            else {
                echo $org_code . " " . $user_code;
                echo 'Incorrect OTP';
            }
        }

        else {
            echo 'OTP Not Found';
        }
    }
}
?>