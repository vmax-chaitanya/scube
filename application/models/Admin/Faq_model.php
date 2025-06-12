<?php
class Faq_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_faqs($page_id = null)
    {
        if ($page_id !== null) {
            $this->db->where('page_id', $page_id);
        }else{
            $this->db->where('page_id', '0');

        }

        $query = $this->db->get('faq');
        return $query->result_array();
    }

    public function create_faq($data)
    {
        return $this->db->insert('faq', $data);
    }

    public function get_faq_by_id($id)
    {
        $query = $this->db->get_where('faq', array('id' => $id));
        return $query->row_array();
    }

    public function update_faq($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('faq', $data);
    }

    public function delete_faq($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('faq');
    }

    // public function get_all_pages()
    // {
    //     // Assuming you have another table named 'pages' to store page data
    //     // Fetch all pages from the 'pages' table and return them as an array of objects
    //     $query = $this->db->get('pages');
    //     return $query->result();
    // }
}
?>