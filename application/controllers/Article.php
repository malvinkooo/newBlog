<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{
		$this->load->view('article');
	}
}
