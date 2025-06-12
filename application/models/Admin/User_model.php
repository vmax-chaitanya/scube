<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function authenticate_user($username_email, $password) {
        // Check if the provided username or email exists in the database
        $this->db->where('username', $username_email);
        $this->db->or_where('email', $username_email);
        $this->db->or_where('mobile_number', $username_email);
        $query = $this->db->get('users');
      
        if ($query->num_rows() === 1) {
            $user = $query->row();
            // Verify the password (assuming it's hashed using bcrypt)
            if (password_verify($password, $user->password)) {

                return $user;
            }
        }

        return false;
    }
}
