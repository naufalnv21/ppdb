<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_berita');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_berita'] = $this->db->get('tb_berita')->result();
		$this->load->view('user/V_berita', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
	}

	public function tambahBerita()
	{
		
		$tgl_berita = $this->input->post('tgl_berita');
		$isi_berita = $this->input->post('isi_berita');
		$penulis_berita = $this->input->post('penulis_berita');
		$status_berita = $this->input->post('status_berita');

		$data = array(
			
			'tgl_berita' => $tgl_berita,
			'isi_berita' => $isi_berita,
			'penulis_berita' => $penulis_berita,
			'status_berita' => $status_berita
		);
		$this->M_berita->input($data);
		redirect('admin/Berita');
	}
}