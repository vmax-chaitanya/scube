<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesCategoriesModel extends CI_Model
{
    public function getServicesCategories()
    {
        return $this->db->get('services_categories')->result_array();
    }
    public function getActiveServicesCategories()
    {
        return $this->db->get_where('services_categories', array('status' => '1'))->result_array();
    }

    public function getServicesCategoryById($id)
    {
        return $this->db->get_where('services_categories', array('id' => $id))->row_array();
    }

    public function createServicesCategory($data)
    {
        return $this->db->insert('services_categories', $data);
    }

    public function updateServicesCategory($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('services_categories', $data);
    }

    public function deleteServicesCategory($id)
    {
        return $this->db->delete('services_categories', array('id' => $id));
    }
}
