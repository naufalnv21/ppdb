<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class C_dashboard extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();

	// 	$this->load->model('M_admin');
	// }
	

	public function index()
	{
		if(!$this->session->userdata('username'))
			redirect('auth');
		$this->load->view('dashboard');
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}
}
