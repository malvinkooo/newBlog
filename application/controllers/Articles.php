<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('categories_model');
        $this->load->model('articles_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('article');
    }

    public function add()
    {
        $data['isArticleAdd'] = TRUE;

        if($this->input->server('REQUEST_METHOD') == 'GET') {
            $data['categories'] = $this->categories_model->get_categories();
            $data['title'] = 'Title';
            $data['text'] = 'Test';
            $data['id'] = '';
            $data['category_id'] = $this->input->get('category_id');
            $this->load->view('modify_article', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('title', 'Title', array('required', 'min_length[2]', 'max_length[255]'));
            $this->form_validation->set_rules('text', 'Article content', array('required', 'min_length[2]', 'max_length[16777215]'));

            if($this->form_validation->run() == FALSE) {
                $data['categories'] = $this->categories_model->get_categories();
                $data['title'] = $this->input->post('title');
                $data['text'] = $this->input->post('text');
                $data['id'] = '';
                $data['category_id'] = $this->input->get('category_id');
                $this->load->view('modify_article', $data);
            } else {
                $data = $this->input->post();
                $data['category_id'] = $this->input->get('category_id');
                $this->articles_model->add_article($data);

                $category_id = $this->input->get('category_id');
                redirect('/category/'.$category_id.'/?limit=5');
            }
        }
    }
}
