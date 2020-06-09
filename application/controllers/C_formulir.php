<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_formulir extends CI_Controller
{
	
	public function index()
	{
		$data['title'] = 'Formulir Pendaftaran';
		$data['subtitle'] = 'Pendaftaran Baru';
		$data['content'] = 'calon_siswa/form_daftar';

		$this->load->view('calon_siswa/header', $data); 
		$this->load->view('calon_siswa/menu', $data); 
		$this->load->view('calon_siswa/template', $data);
		$this->load->view('calon_siswa/footer', $data);
		
	}
}