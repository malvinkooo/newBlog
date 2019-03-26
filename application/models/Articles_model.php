<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();        
    }

    public function get_articles_by_category_id($id, $limit) {
        $this->db->where('category_id', $id);
        if(isset($limit)) {
            $this->db->limit($limit);
        }
        $this->db->order_by('date', 'DESC');
        $query_result = $this->db->get('articles');

        return $query_result->result_array();
    }

    public function get_article($id) {
        $this->db->where('id', $id);
        $query_result = $this->db->get('articles');

        return $query_result->result_array()[0] ?? FALSE;
    }

    public function is_article_exist($id) {
       $this->db->where('id', $id);
       $this->db->select('count(*) AS count');
       $query_result = $this->db->get('articles');

       return boolval( $query_result->result_array()[0]['count'] );
    }

    public function add_article($data) {
        $this->db->insert('articles', $data);
    }

    public function edit_article($data) {        
        $this->db->where('id', $data['id']);
        $this->db->set('title', $data['title']);
        $this->db->set('text', $data['text']);
        $this->db->update('articles');
    }

    public function remove_article($id) {
        $this->db->where('id', $id);
        $this->db->delete('articles');

        return boolval($this->db->affected_rows());
    }
}

