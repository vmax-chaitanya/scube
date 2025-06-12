<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_trainings()
    {
        $query = $this->db->get('training');
        return $query->result_array();
    }

    public function create_training($data)
    {
        return $this->db->insert('training', $data);
    }

    public function get_training_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('training');
        return $query->row_array();
    }

    public function update_training($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('training', $data);
    }

    public function delete_training($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('training');
    }
}
