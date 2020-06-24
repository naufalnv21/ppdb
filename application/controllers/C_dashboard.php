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
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer', $data);
	}
}
