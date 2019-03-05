<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function get_categories()
    {
        $this->load->database();
        $query = $this->db->get('categories');
        $db_error = $this->db->error();
        if (!empty($db_error['code'])) {
            throw new DBException('Ошибка базы данных! Код ошибки [' . $db_error['code'] . '] Ошибка: ' . $db_error['message'], 500);
        } else {
            return $query->result_array();
        }
    }

    public function add_category($data)
    {
        $this->load->database();
        $query_result = $this->db->insert('categories', $data);
        $db_error = $this->db->error();
        if(!empty($db_error['code'])) {
            throw new DBException('Ошибка базы данных! Код ошибки [' . $db_error['code'] . '] Ошибка: ' . $db_error['message'], 500);
        }
    }

    public function get_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $query_result = $this->db->get('categories');
        $db_error = $this->db->error();
        if(!empty($db_error['code'])) {
            throw new DBException('Ошибка базы данных! Код ошибки [' . $db_error['code'] . '] Ошибка: ' . $db_error['message'], 500);
        }

        if(empty($query_result->result_array()))
        {
            throw new NotFoundException('Категория не найдена! Код ошибки [' . $db_error['code'] . '] Ошибка: ' . $db_error['message'], 404);
        } else
        {
            return $query_result->result_array()[0];
        }
    }

    public function edit_category($data)
    {
        $this->load->database();
        $this->db->set('name', $data['name']);
        $this->db->where('id', $data['id']);
        $this->db->update('categories');
        $db_error = $this->db->error();
        if(!empty($db_error['code'])) {
            throw new DBException('Ошибка базы данных! Код ошибки [' . $db_error['code'] . '] Ошибка: ' . $db_error['message'], 500);
        }
    }

    public function remove_category($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('categories');
        $db_error = $this->db->error();
        if(!empty($db_error['code'])) {
            throw new DBException('Ошибка базы данных! Код ошибки [' . $db_error['code'] . '] Ошибка: ' . $db_error['message'], 500);
        }
    }
}
