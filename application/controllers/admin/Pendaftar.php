<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Pendaftar extends CI_Controller
{
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_pendaftar'] = $this->db->get('tb_pendaftar')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_pendaftar', $data);
		$this->load->view('templates/footer', $data);
		
	}
}