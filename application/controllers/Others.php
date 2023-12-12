<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Others extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Others";
		$data['content'] = "others/index";

		return $this->load->view('layout/main', $data);
	}
}
