<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class O_dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_dashboard');
	}
	

	public function index()
	{
		if(!$this->session->userdata('username'))
			redirect('auth');
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data2['dashboard'] = [
			'pegawai'=>$this->M_dashboard->tampil(),
			'siswa'=>$this->M_dashboard->tampilSiswa(),
			'pendaftar'=>$this->M_dashboard->tampilPendaftar(),
			'multimedia' =>$this->M_dashboard->tampilMultimedia(),
			'berita' =>$this->M_dashboard->tampilBerita(),
			'perbank' =>$this->M_dashboard->tampilPerbank(),
			'fasilitas' =>$this->M_dashboard->tampilFasilitas(),
			'smk' =>$this->M_dashboard->tampilSmk(),
		];
		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/O_dashboard', $data2);
		$this->load->view('operator/footer', $data);
	}
}
