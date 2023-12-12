<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaporan extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Pelaporan";
		$data['nav_theme'] = "bg-cream";
		$data['content'] = "pelaporan/index";

		return $this->load->view('layout/main', $data);
	}

	public function store()
	{
		
		$gambar = $this->input->post('gambar');
		$lokasi = $this->input->post('lokasi');
		$deskripsi = $this->input->post('deskripsi');

		$data = [
			"gambar" => $gambar,
			"lokasi"  => $lokasi,
			"deskripsi" => $deskripsi
		];

		$this->db->insert("pelaporan",$data);
		
		redirect("home");
	}
}
