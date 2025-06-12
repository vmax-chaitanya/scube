<?php
class StaticPagesSeoModel extends CI_Model
{
    public function getSeoRecords()
    {
        // Retrieve a list of static page SEO records
        return $this->db->get('static_pages_seo')->result_array();
    }

    public function createSeoRecord($data)
    {
        // Insert a new SEO record into the database
        $this->db->insert('static_pages_seo', $data);
    }

    public function getSeoRecordById($id)
    {
        // Retrieve a specific SEO record by ID
        return $this->db->get_where('static_pages_seo', array('id' => $id))->row_array();
    }

    public function updateSeoRecord($id, $data)
    {
        // Update an existing SEO record
        $this->db->where('id', $id);
        $this->db->update('static_pages_seo', $data);
    }

    public function deleteSeoRecord($id)
    {
        // Delete an SEO record by ID
        $this->db->delete('static_pages_seo', array('id' => $id));
    }
}
