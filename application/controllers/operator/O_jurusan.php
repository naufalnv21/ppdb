<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class O_jurusan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_formulir');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_jurusan'] = $this->db->get('tb_jurusan')->result();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_jurusan', $data);
		$this->load->view('operator/footer', $data);
	}

	public function tambahJurusan()
	{
		$id_jurusan = $this->input->post('id_berita');
		$nama_jurusan = $this->input->post('nama_jurusan');
		$data = array(
			'id_jurusan' => $id_jurusan,
			'nama_jurusan' => $nama_jurusan
		);
		$this->M_formulir->inputJurusan($data);
		redirect('operator/O_jurusan');
	}

	public function hapus($id)
	{
		$this->M_formulir->hapus($id);
		redirect('operator/O_jurusan');	
	}

		public function edit($id_jurusan)
	{
		$data['jurusan'] = $this->db->get_where('tb_jurusan', ['id_jurusan' => $id_jurusan])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_jurusan', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
	}

	public function prosesEdit()
	{
		$id_jurusan = $this->input->post('id_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');
		$data = array (
			'id_jurusan' => $id_jurusan,
			'nama_jurusan' => $nama_jurusan
		);
		$this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tb_jurusan', $data);
		redirect('operator/O_jurusan');
	}
}