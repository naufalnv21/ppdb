<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class C_perbank extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_perbank');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/home';

		$data['user'] = $this->db->get_where('tb_register', ['nama_register' => $this->session->userdata('nama_register')])->row_array();
		$data['data_perbank'] = $this->M_perbank->tampil();

		$this->load->view('pendaftar/header', $data);
		$this->load->view('pendaftar/menu', $data);
		$this->load->view('pendaftar/perbank', $data);
	}
}