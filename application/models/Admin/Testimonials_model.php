<?php
class Testimonials_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_testimonials()
    {
        $query = $this->db->get('testimonials');
        return $query->result();
    }

    public function create_testimonial($data)
    {
        return $this->db->insert('testimonials', $data);
    }

    public function get_testimonial_by_id($id)
    {
        $query = $this->db->get_where('testimonials', array('id' => $id));
        return $query->row();
    }

    public function update_testimonial($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('testimonials', $data);
    }

    public function delete_testimonial($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('testimonials');
    }
}
?>
