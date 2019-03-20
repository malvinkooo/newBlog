<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function get_categories()
    {
        $this->load->database();
        $query_result = $this->db->get('categories');
        return $query_result->result_array();
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
        $query_result = $this->db->get('categories');

        return $query_result->result_array()[0] ?? FALSE;
    }

    public function edit_category($data)
    {
        $this->load->database();
        $this->db->set('name', $data['name']);
        $this->db->where('id', $data['id']);
        $this->db->update('categories');

        return $this->db->affected_rows();
    }

    public function remove_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('categories');

        return $this->db->affected_rows();
    }
}
