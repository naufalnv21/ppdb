<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class C_login_register extends CI_Controller
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

	public function loginRegister()
	{
		
	}
}