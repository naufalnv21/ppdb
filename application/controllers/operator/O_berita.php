<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class O_berita extends CI_Controller
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
		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_berita', $data);
		$this->load->view('operator/footer', $data);
	}

	public function tambahBerita()
	{
		$id_berita = $this->input->post('id_berita');
		$tgl_berita = $this->input->post('tgl_berita');
		$isi_berita = $this->input->post('isi_berita');
		$penulis_berita = $this->input->post('penulis_berita');
		// $foto_guru = $this->input->post('foto_guru');
		$config['upload_path'] = './upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_berita')) {	
        	$data = array(
        		'id_berita' => $id_berita,
        		'tgl_berita' => $tgl_berita,
        		'isi_berita' => $isi_berita,
        		'penulis_berita' => $penulis_berita,
        		'foto_berita' => 'kosong'
        	);
        	$this->M_berita->input($data);
        	redirect('operator/O_berita');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
			
			'id_berita' => $id_berita,		
			'tgl_berita' => $tgl_berita,
			'isi_berita' => $isi_berita,
			'penulis_berita' => $penulis_berita,
			'foto_berita' => $result1
		);	
		$this->M_berita->input($data);
		redirect('operator/O_berita');
        }
	}

	// public function tambahBerita()
	// {

	// 	$tgl_berita = $this->input->post('tgl_berita');
	// 	$isi_berita = $this->input->post('isi_berita');
	// 	$penulis_berita = $this->input->post('penulis_berita');
	// 	$id_berita = $this->input->post('id_berita');
	// 	$config['upload_path'] = './upload/berita/';
 //        $config['allowed_types'] = 'gif|jpg|png';
 //        // load library upload
 //        $this->load->library('upload', $config);
 //        if (!$this->upload->do_upload('foto_berita')) {
        	
 //        } else {
 //            $result = $this->upload->data();
 //            $result1 =$result['file_name'];
            
 //            $data = array(
				
	// 		'tgl_berita' => $tgl_berita,
	// 		'isi_berita' => $isi_berita,
	// 		'penulis_berita' => $penulis_berita,
	// 		'id_berita' => $id_berita,
	// 		'foto_berita' => $result1
	// 	);
	// 	$this->M_berita->input($data);
	// 	redirect('operator/O_berita');
	// 	}
	// }

	public function hapus($id)
	{
		$this->M_berita->hapus($id);
		redirect('operator/O_berita');
	}

	public function edit($id_berita)
	{
		$data['berita'] = $this->db->get_where('tb_berita', ['id_berita' => $id_berita])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_berita', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
	}

	public function prosesEdit()
	{
		$tgl_berita = $this->input->post('tgl_berita');
		$isi_berita = $this->input->post('isi_berita');
		$penulis_berita = $this->input->post('penulis_berita');
		$id_berita = $this->input->post('id_berita');
		$config['upload_path'] = './upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_berita')) {
        	
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];

		$data = array(
			
			'tgl_berita' => $tgl_berita,
			'isi_berita' => $isi_berita,
			'penulis_berita' => $penulis_berita,
			'foto_berita' => $result1
		);
		$this->db->where('id_berita', $id_berita);
        $this->db->update('tb_berita', $data);
		redirect('operator/O_berita');
		}
	}

	public function editForm()
	{
		$id_berita = $this->input->post('id_berita');
		$data['data_berita'] = $this->M_berita->beritaId($id_berita);
		$this->load->view('operator/V_edit_berita', $data);
	}
}