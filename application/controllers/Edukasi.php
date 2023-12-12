<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edukasi extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Edukasi";
		$data['nav_theme'] = "bg-cream";
		$data['content'] = "edukasi/index";

		return $this->load->view('layout/main', $data);
	}
}
