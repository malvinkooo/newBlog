<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

    public function get_articles_by_category($id, $limit)
    {
        $this->load->database();

        $this->db->where('id', $id);
        $category = $this->db->get('categories');
        if(!$category) {
            return FALSE;
        }

        $this->db->where('category_id', $id);
        if(isset($limit)) {
            $this->db->limit($limit);
        }
        $this->db->order_by('date', 'DESC');
        $query_result = $this->db->get('articles');

        return $query_result->result_array();
    }

    public function add_article($data) {
        $data['date'] = date("y-m-d");
        $this->load->database();
        $this->db->insert('articles', $data);
    }
}

