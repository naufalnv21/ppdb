<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class C_download extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download'));
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/home';

		$data['user'] = $this->db->get_where('tb_register', ['nama_register' => $this->session->userdata('nama_register')])->row_array();
		

		$this->load->view('pendaftar/header', $data);
		$this->load->view('pendaftar/menu', $data);
		$this->load->view('pendaftar/download', $data);
	}

	public function lakukan_download()
	{
		force_download('./upload/formulir/logo_ristek.jpg',NULL);
	}
}