<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$data['title'] = 'Login Page';
		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}

	public function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('admin', ['username' => $username])->row_array();

		if ($user['password'] == $password) {
			$this->session->set_userdata($user['username']);
			redirect('Dashboard');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> The password is incorrect! </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">You have been logout!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
		redirect('auth');
	}
}
