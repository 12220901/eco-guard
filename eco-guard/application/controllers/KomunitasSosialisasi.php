<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KomunitasSosialisasi extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komunitas_model');
	}

	public function index()
	{
		$data['title'] = "Komunitas & Sosialisasi";
		$data['content'] = "komunitas_sosialisasi/index";

		return $this->load->view('layout/main', $data);
	}

	public function post_comments()
    {
        $comment = $this->input->post('comment');

        $result = $this->Komunitas_model->post_comments(['content'  => $comment, "user_id" => $this->session->userdata('user_id')]);

        if ($result) {
            // Comment posted successfully, redirect to a specific page
            redirect('home');
        } else {
            // Handle the case when comment posting fails
            echo "Failed to post comment.";
        }
    }
}
