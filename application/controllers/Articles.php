<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('application/libraries/Validation_rules.php');
Use Validation\ValidationRules;

class Articles extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('categories_model');
        $this->load->model('articles_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('article');
    }

    public function add() {
        $category_id = $this->input->get('category_id');

        if($this->input->server('REQUEST_METHOD') == 'GET') {
            $data = [
                'isArticleAdd' => TRUE,
                'categories' => $this->categories_model->get_categories(),
                'article' => [
                    'title' => '',
                    'text' => '',
                    'id' => '',
                    'category_id' => $category_id
                ]
            ];
            $this->load->view('modify_article', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules(ValidationRules::add_article());
            if($this->form_validation->run() == FALSE) {
                $data = [
                    'categories' => $this->categories_model->get_categories(),
                    'isArticleAdd' => TRUE,
                    'article' => [
                        'title' => $this->input->post('title'),
                        'text' => $this->input->post('text'),
                        'id' => '',
                        'category_id' => $category_id
                    ]
                ];
                $this->load->view('modify_article', $data);
            } else {
                $data = [
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('text'),
                    'category_id' => $category_id
                ];
                $this->articles_model->add_article($data);

                redirect('/category/'.$category_id.'/?limit=5');
            }
        }
    }

    public function edit($id) {
        if($this->input->server('REQUEST_METHOD') == 'GET') {
            $data = [
                'isArticleAdd' => FALSE,
                'article' => $this->articles_model->get_article($id),
                'categories' => $this->categories_model->get_categories(),
            ];

            if(!$data['article']) {
                show_404('application/views/errors/html/error_404.php');
                exit();
            }

            $this->load->view('modify_article', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {
            $article = $this->articles_model->get_article($id);
            if(!$article) {
                show_404('application/views/errors/html/error_404.php');
                exit();
            }

            $this->form_validation->set_rules(ValidationRules::add_article());
            
            $category_id = $this->input->get('category_id');
            if($this->form_validation->run() == FALSE) {
                $data = [
                    'isArticleAdd' => FALSE,
                    'categories' => $this->categories_model->get_categories(),
                    'article' => [
                        'title' => $this->input->post('title'),
                        'text' => $this->input->post('text'),
                        'id' => $id,
                        'category_id' => $category_id
                    ]
                ];

                $this->load->view('modify_article', $data);
            } else {
                $data = [
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('text'),
                    'id' => $id,
                    'category_id' => $category_id
                ];
                $query_result = $this->articles_model->edit_article($data);
                if(!$query_result) {
                    show_404('application/views/errors/html/error_404.php');
                    exit();
                }

                redirect('/category/'.$category_id.'/?limit=5');
            }
        }
    }
}