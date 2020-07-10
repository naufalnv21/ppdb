<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class O_pendaftar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_formulir');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_pendaftar'] = $this->db->get('tb_pendaftar')->result();

		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_pendaftar', $data);
		$this->load->view('operator/footer', $data);
		
	}

	
}