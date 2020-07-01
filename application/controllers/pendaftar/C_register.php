<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class C_register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/home';

		
		$this->load->view('pendaftar/header', $data);
		$this->load->view('pendaftar/menu', $data);
		$this->load->view('pendaftar/register_pendaftar', $data);
	}

	public function register()
	{
		$nama_register = $this->input->post('nama_register');
		$username_register = $this->input->post('username_register');
		$telp_register = $this->input->post('telp_register');
		$password_register = $this->input->post('password_register');

		$data = array(
			'nama_register' => $nama_register,
			'username_register' => $username_register,
			'telp_register' => $telp_register,
			'password_register' => $password_register
		);
		$this->M_register->input($data);
		redirect('pendaftar/C_register');
	}
}