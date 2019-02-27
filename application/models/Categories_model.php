<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function get_categories()
    {
        $this->load->database();
        $query = $this->db->get('categories');
        return $query->result_array();
    }

    public function add_category($data)
    {
        $this->load->database();
        $this->db->insert('categories', $data);
    }

    public function get_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $result = $this->db->get('categories');

        return $result->result_array()[0];
    }

    public function remove_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('categories');
    }
}
