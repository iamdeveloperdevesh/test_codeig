<?php
defined('BASEPATH') or exit('No direct script allowed');

class Signup_model extends CI_Model{

    public function add_data($postdata){
      
        $post['user_email']=$postdata['email'];
        $post['user_password']=$postdata['password'];
        // print_r($post);
        $this->db->insert('user_login',$post);
        
    }

}
?>