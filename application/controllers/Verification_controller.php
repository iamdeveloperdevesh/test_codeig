<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification_controller extends CI_Controller {

    public function index() {
        // Load dashboard view
        $this->load->view('verification_view');
    }

    public function otp_verify() {

        $email = $this->input->post('email');
        $code = rand(100000,999999);
        $this->load->library('session');
        $this->session->set_userdata('verify_code', $code);
        
        $this->load->library('phpmailer_lib');
       
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.fyntune@gmail.com';
        $mail->Password = 'vqnw icyf zpgh ohyg';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('test.fyntune@gmail.com', 'Fyntune Test Project');
        // $mail->addReplyTo('info@example.com', 'CodexWorld');
       
        /* Add a recipient */
        $mail->addAddress($email);
       
        /* Add cc or bcc */
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
       
        /* Email subject */
        $mail->Subject = 'OTP Verification Code';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $mailContent = "<h4>You're Verification Code</h4>
        <h2>$code</h2>";
        $mail->Body = $mailContent;
       
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            redirect('otp_verify');
        }
    }
}
?>