<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('categories');
		$data['categories'] = $this->categories->get_categories();
		$this->load->view('common/main', $data);
	}
}
