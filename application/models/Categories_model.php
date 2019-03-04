<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function get_categories()
    {
        $this->load->database();
        $query = $this->db->get('categories');
        $db_error = $this->db->error();
        if (!empty($db_error['code'])) {
            throw new DBException('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'], 500);
        } else {
            return $query->result_array();
        }
    }

    public function add_category($data)
    {
        $this->load->database();
        $this->db->insert('categories', $data);
        if(!empty($db_error['code'])) {
            throw new DBException('ошибка базы данных', 500);
        }
    }

    public function get_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $result = $this->db->get('categories');

        return $result->result_array()[0];
    }

    public function edit_category($data)
    {
        $this->load->database();
        $this->db->set('name', $data['name']);
        $this->db->where('id', $data['id']);
        $this->db->update('categories');
    }

    public function remove_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('categories');
    }
}
