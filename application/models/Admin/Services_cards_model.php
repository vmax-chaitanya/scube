<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_cards_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_services_cards($service_id,$type)
    { 
        $this->db->where('service_id', $service_id);
        $this->db->where('type', $type);
        $query = $this->db->get('services_cards');
        return $query->result_array();
    }
    

    public function create_services_card($data)
    {
        return $this->db->insert('services_cards', $data);
    }

    public function get_services_card_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('services_cards');
        return $query->row_array();
    }

    public function update_services_card($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('services_cards', $data);
    }

    public function delete_services_card($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('services_cards');
    }
}
