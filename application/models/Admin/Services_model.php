<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_services()
    {
        // $this->db->where('type',$type);
        $query = $this->db->get('services');
        return $query->result_array();
    }

    public function create_service($data)
    {
        return $this->db->insert('services', $data);
    }

    public function get_service_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('services');
        return $query->row_array();
    }

    public function update_service($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('services', $data);
    }

    public function delete_service($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('services');
    }
}
