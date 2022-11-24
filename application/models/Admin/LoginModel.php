<?php
    class LoginModel extends CI_Model{
        public function checklogin($email, $password){
            $query = $this->db->where('email', $email)->where('password', $password)->get('admin');
            return $query->result();
        }
    }

?>