<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_admin'] = $this->db->get('tb_users')->result();
		
		$this->load->view('user/V_admin', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
		
	}

	public function edit($id_users)
	{
		$data['berita'] = $this->db->get_where('tb_berita', ['id_berita' => $id_berita])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('V_edit_admin', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
	}

	public function prosesEdit()
	{
		$username = $this->input->post('username');
		$ttl_users = $this->input->post('ttl_users');
		$nuptk_users = $this->input->post('nuptk_users');
		$jk_users = $this->input->post('tmt_users');
		$ijazah_users = $this->input->post('ijazah_users');
		$mapel_users = $this->input->post('mapel_users');
		$password_users = $this->input->post('telp_users');
		$level_users  = $this->input->post('level_users');
		$alamat_users = $this->input->post('alamat_users');
		$updated_users = $this->input->post('updated_users');
		$id_users = $this->input->post('id_users');

		$data = array(
			'username' => $username,
			'ttl_users' => $ttl_users,
			'nuptk_users' => $nuptk_users,
			'jk_users' => $jk_users,
			'ijazah_users' => $ijazah_users,
			'mapel_users' => $mapel_users,
			'password_users' => $password_users,
			'level_users' => $level_users,
			'alamat_users' => $alamat_users,
			'updated_users' => $updated_users,
			'id_users' => $id_users,
		);
		$this->db->where('id_users', $id_users);
		$this->db->update('tb_users');
		redirect('admin/Admin');

	}
}