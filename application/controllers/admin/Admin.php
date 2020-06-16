<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_admin'] = $this->db->get('tb_users')->result();
		
		$this->load->view('user/V_admin', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
		
	}
}