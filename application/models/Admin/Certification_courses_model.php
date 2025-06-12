<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certification_courses_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_courses()
    {
        return $this->db->get('certification_courses')->result_array();
    }

    public function create_course($data)
    {
        return $this->db->insert('certification_courses', $data);
    }

    public function get_course_by_id($id)
    {
        return $this->db->get_where('certification_courses', array('id' => $id))->row_array();
    }

    public function update_course($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('certification_courses', $data);
    }

    public function delete_course($id)
    {
        return $this->db->delete('certification_courses', array('id' => $id));
    }
}
