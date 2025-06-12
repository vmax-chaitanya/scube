<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_addresses()
    {
        $query = $this->db->get('address');
        return $query->result_array();
    }

    public function create_address($data)
    {
        return $this->db->insert('address', $data);
    }

    public function get_address_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('address');
        return $query->row_array();
    }

    public function update_address($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('address', $data);
    }

    public function delete_address($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('address');
    }
}
