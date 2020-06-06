<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_calon_siswa extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$data['subtitle'] = 'PPDB SMK';
		$data['content'] = 'calon_siswa/home';
		$this->load->view('calon_siswa/template',$data);
	}

}