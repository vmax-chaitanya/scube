<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function authenticate_user($username_email, $password)
    {
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

    // Get all users
    public function get_all_users()
    {
        return $this->db->get('users')->result();
    }

    // Insert new user
    public function insert_user($data)
    {
        return $this->db->insert('users', $data);
    }

    public function get_user_by_id($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function update_user($id, $data)
    {
        return $this->db->where('id', $id)->update('users', $data);
    }

    public function delete_user($id)
    {
        return $this->db->where('id', $id)->delete('users');
    }
    // Get user by username excluding a specific ID (used for update validation)
    public function get_user_by_username_except_id($username, $id)
    {
        return $this->db
            ->where('username', $username)
            ->where('id !=', $id)
            ->get('users')
            ->row();
    }

    // Get user by email excluding a specific ID (used for update validation)
    public function get_user_by_email_except_id($email, $id)
    {
        return $this->db
            ->where('email', $email)
            ->where('id !=', $id)
            ->get('users')
            ->row();
    }
    // public function get_user_by_id($id)
    // {
    //     return $this->db->where('id', $id)->get('users')->row();
    // }

    // public function update_user($id, $data)
    // {
    //     return $this->db->where('id', $id)->update('users', $data);
    // }
}
