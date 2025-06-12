<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareersJobsModel extends CI_Model
{
    public function getJobs()
    {
        return $this->db->get('careers_jobs')->result_array();
    }

    public function getJobById($id)
    {
        return $this->db->get_where('careers_jobs', array('id' => $id))->row_array();
    }

    public function createJob($data)
    {
        return $this->db->insert('careers_jobs', $data);
    }

    public function updateJob($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('careers_jobs', $data);
    }

    public function deleteJob($id)
    {
        return $this->db->delete('careers_jobs', array('id' => $id));
    }
}
