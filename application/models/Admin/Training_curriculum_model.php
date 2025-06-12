<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_Curriculum_Model extends CI_Model
{
    public function create_curriculum($data)
    {
        return $this->db->insert('training_curricullum', $data);
    }

    public function get_curriculum_by_training($training_id)
    {
        $this->db->where('training_id', $training_id);
        return $this->db->get('training_curricullum')->result_array();
    }

    public function get_curriculum_by_id($curriculum_id)
    {
        $this->db->where('id', $curriculum_id);
        return $this->db->get('training_curricullum')->row_array();
    }

    public function update_curriculum($curriculum_id, $data)
    {
        $this->db->where('id', $curriculum_id);
        return $this->db->update('training_curricullum', $data);
    }

    public function delete_curriculum($curriculum_id)
    {
        $this->db->where('id', $curriculum_id);
        return $this->db->delete('training_curricullum');
    }
}
