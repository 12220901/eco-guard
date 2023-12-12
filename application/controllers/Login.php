<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		return $this->load->view("auth/login");
	}

	public function store()
    {
        $username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->Login_model->cek_user($username, $password);

		if ($user) {
			// User is logged in
			$this->session->set_userdata('username', $user['username']);
			$this->session->set_userdata('user_id', $user['id']);
			redirect('home');
		} else {
			// Invalid login
			$this->data['error'] = 'Invalid username or password';
		}
    }
}
