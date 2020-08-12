<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_calon_siswa extends CI_Controller {
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
		$data['user'] = $this->db->get_where('tb_register', ['nama_register' => $this->session->userdata('nama_register')])->row_array();
		$id_register = $this->session->userdata('id_register');
		$data['notif'] = $this->db->get('tb_notif')->result();
		$data['count'] = $this->M_register->getCountNotif($id_register);

		

		// if(!empty($this->session->userdata('id_register'))){
		// $id_register=$this->session->userdata('id_register');
		// $data['notif']=$this->db->query("SELECT * FROM tb_notif WHERE id_register='$id_register'");

	
		$this->load->view('pendaftar/header', $data); 
		$this->load->view('pendaftar/menu', $data); 
		$this->load->view('pendaftar/template', $data);
		$this->load->view('pendaftar/footer', $data);
	}	
}