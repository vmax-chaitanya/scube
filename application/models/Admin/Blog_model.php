<?php
class Blog_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_blogs()
    {
        // Fetch all blogs from the 'blogs' table
        $query = $this->db->get('blogs');
        return $query->result_array();
    }

    public function create_blog($data)
    {
        // Insert a new blog into the 'blogs' table
        return $this->db->insert('blogs', $data);
    }

    public function get_blog_by_id($id)
    {
        // Fetch a specific blog from the 'blogs' table using its ID
        $query = $this->db->get_where('blogs', array('id' => $id));
        return $query->row_array();
    }

    public function update_blog($id, $data)
    {
        // Update a specific blog in the 'blogs' table using its ID
        $this->db->where('id', $id);
        return $this->db->update('blogs', $data);
    }

    public function delete_blog($id)
    {
        // Delete a specific blog from the 'blogs' table using its ID
        $this->db->where('id', $id);
        return $this->db->delete('blogs');
    }
}
?>
