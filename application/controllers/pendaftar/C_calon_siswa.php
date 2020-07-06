<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_calon_siswa extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/home';

		$data['user'] = $this->db->get_where('tb_register', ['nama_register' => $this->session->userdata('nama_register')])->row_array();

		$this->load->view('pendaftar/header', $data); 
		$this->load->view('pendaftar/menu', $data); 
		$this->load->view('pendaftar/template', $data);
		$this->load->view('pendaftar/footer', $data);
		
	
	}

}