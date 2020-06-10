<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Siswa extends CI_Controller
{
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('user/V_siswa', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
		
	}
}