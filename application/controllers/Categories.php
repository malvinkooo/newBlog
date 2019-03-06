<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Validator.php');
require('Exceptions.php');

class Categories extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->validator = new Validator();
    }

    public function index()
    {
        $this->load->model('categories_model');
        $data['categories'] = $this->categories_model->get_categories();
        $this->load->view('categories', $data);
        // show_error("Что-то пошло не так...", 500, $heading = 'An Error Was Encountered');
    }

    public function add_form()
    {
        try
        {
            $this->load->model('categories_model');
            $data['categories'] = $this->categories_model->get_categories();
            $this->load->view('modify_category', $data);
        } catch(Exception $e)
        {
            show_error("Что-то пошло не так...", 500, $heading = 'An Error Was Encountered');
        }
    }

    public function add() {
        try {
            $data['name'] = $this->input->post('name');
            $this->validator->is_category_name_valid($data['name']);
            $this->load->model('categories_model');
            $this->categories_model->add_category($data);
            $this->load->helper('url');
            redirect('/categories/');
        } catch (ValidateException $e) {
            show_error("Данные не валидны, проверьте их и отправте форму снова.", 400, $heading = 'An Error Was Encountered');
        } catch (DBException $e)
        {
            show_error("Ошибка в базе данных.", 500, $heading = 'An Error Was Encountered');
        } catch (Exception $e)
        {
            show_error("Что-то пошло не так...", 500, $heading = 'An Error Was Encountered');
        }
    }

    public function remove_confirm($id)
    {
        try
        {
            $this->load->model('categories_model');
            $data['category'] = $this->categories_model->get_category($id);
            $this->load->view('category_remove_confirm', $data);
        } catch (ValidateException $e) {
            show_error("Данные не валидны, проверьте их и отправте форму снова.", 400, $heading = 'An Error Was Encountered');
        } catch (NotFoundException $e)
        {
            show_error("Такой категории нет.", 500, $heading = 'An Error Was Encountered');
        } catch (DBException $e)
        {
            show_error("Ошибка в базе данных.", 500, $heading = 'An Error Was Encountered');
        } catch (Exception $e)
        {
            show_error("Что-то пошло не так...", 500, $heading = 'An Error Was Encountered');
        }
    }

    public function remove($id)
    {
        try
        {
            $this->load->model('categories_model');
            $this->categories_model->remove_category($id);
            $this->load->helper('url');
            redirect('/categories/');
        } catch (ValidateException $e) {
            show_error("Данные не валидны, проверьте их и отправте форму снова.", 400, $heading = 'An Error Was Encountered');
        } catch (NotFoundException $e)
        {
            show_error("Такой категории нет.", 500, $heading = 'An Error Was Encountered');
        } catch (DBException $e)
        {
            show_error("Ошибка в базе данных.", 500, $heading = 'An Error Was Encountered');
        } catch (Exception $e)
        {
            show_error("Что-то пошло не так...", 500, $heading = 'An Error Was Encountered');
        }
    }

    public function edit_form($id)
    {
        $this->load->model('categories_model');
        $data['category'] = $this->categories_model->get_category($id);
        $this->load->view('modify_category', $data);
    }

    public function edit() {
        try
        {
            $data = $this->input->post('name');
            $this->load->model('categories_model');
            $this->categories_model->edit_category($data);
            $this->load->helper('url');
            redirect('/categories/');
        } catch (DBException $e)
        {
            show_error("Ошибка в базе данных.", 500, $heading = 'An Error Was Encountered');
        } catch (Exception $e) {
            show_error("Что-то пошло не так...", 500, $heading = 'An Error Was Encountered');
        }
    }
}
