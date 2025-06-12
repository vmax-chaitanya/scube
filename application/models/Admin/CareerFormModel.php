<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CareerFormModel extends CI_Model
{
    public function getCareerFormSubmissions($status)
    {
        $this->db->select('career_form.*');
        $this->db->from('career_form');
        // $this->db->join('careers_jobs', 'careers_jobs.id = career_form.career_id', 'inner');
        $this->db->where('status', $status);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $this->db->select('career_form.*');
        $this->db->from('career_form');
        // $this->db->join('careers_jobs', 'careers_jobs.id = career_form.career_id', 'inner');
        $this->db->where('career_form.id', $id);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function createCareerFormSubmission($data)
    {
        return $this->db->insert('career_form', $data);
    }

    public function updateCareerFormSubmission($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('career_form', $data);
    }

    public function deleteCareerFormSubmission($id)
    {
        return $this->db->delete('career_form', array('id' => $id));
    }
    public function updateStatus($id, $newStatus)
    {
        $this->db->where('id', $id);
        $data = array('status' => $newStatus);
        return $this->db->update('career_form', $data);
    }
}
