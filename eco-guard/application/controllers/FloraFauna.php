<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FloraFauna extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Flora & Fauna";
		$data['content'] = "flora_fauna/index";
		$data['flora'] = $this->db->get('flora_fauna')->result_array();

		return $this->load->view('layout/main', $data);
	}

	public function store()
	{
		
		$gambar = $this->input->post('gambar');

		$this->db->insert("flora_fauna",["gambar" => $gambar]);
		
		redirect("home");
	}
}
