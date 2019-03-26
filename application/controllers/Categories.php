<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('application/libraries/Validation_rules.php');
Use Validation\ValidationRules;

class Categories extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('categories_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $data['categories'] = $this->categories_model->get_categories();
        $this->load->view('categories', $data);
    }

    public function add() {
        if($this->input->server('REQUEST_METHOD') == 'GET') {
            $data = [
                'isCategoryAdd' => TRUE,
                'categories' => $this->categories_model->get_categories(),
                'category' => [
                    'name' => '',
                    'id' => ''
                ]
            ];
            $this->load->view('modify_category', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules(ValidationRules::modify_category());

            if ($this->form_validation->run() == FALSE) {

                $data = [
                    'isCategoryAdd' => TRUE,
                    'categories' => $this->categories_model->get_categories(),
                    'category' => [
                        'name' => $this->input->post('name'),
                        'id' => ''
                    ]
                ];

                $this->load->view('modify_category', $data);
            } else {
                $data = [
                    'name' => $this->input->post('name')
                ];
                $this->categories_model->add_category($data);

                redirect('/categories/');
            }
        }
    }

    public function remove_confirm($id) {
        if(!$this->categories_model->is_category_exist($id)) {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        $data = [
            'categories' => $this->categories_model->get_categories(),
            'category' => $this->categories_model->get_category($id)
        ];
        $this->load->view('category_remove_confirm', $data);
    }

    public function remove($id) {
        $query_result = $this->categories_model->remove_category($id);

        if(!$query_result) {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        redirect('/categories/');
    }

    public function edit($id) {
        if(!$this->categories_model->is_category_exist($id)) {
            show_404('application/views/errors/html/error_404.php');
            exit();
        }

        if($this->input->server('REQUEST_METHOD') == 'GET') {

            $data = [
                'categories' => $this->categories_model->get_categories(),
                'category' => $this->categories_model->get_category($id)
            ];
            $this->load->view('modify_category', $data);
        } else if($this->input->server('REQUEST_METHOD') == 'POST') {

            $this->form_validation->set_rules(ValidationRules::modify_category());

            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'categories' => $this->categories_model->get_categories(),
                    'category' => [
                        'name' => $this->input->post('name'),
                        'id' => $id
                    ]
                ];
                $this->load->view('modify_category', $data);
            } else {
                $data = [
                    'name' => $this->input->post('name'),
                    'id' => $id
                ];
                $this->categories_model->edit_category($data);

                redirect('/categories/');
            }
        }
    }
}