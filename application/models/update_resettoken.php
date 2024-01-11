   <?php
   // application/models/User_model.php
   class User_model extends CI_Model {
   
       public function getUserByEmail($email) {
           $query = $this->db->get_where('users', array('email' => $email));
           return $query->row();
       }
   
       public function updateResetToken($user_id, $reset_token) {
           $this->db->where('id', $user_id);
           $this->db->update('users', array('reset_token' => $reset_token));
       }
   }