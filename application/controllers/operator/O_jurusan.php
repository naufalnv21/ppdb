<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class O_jurusan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jurusan');
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
		$nama_jurusan = $this->input->post('nama_jurusan');
		$jml_siswa_jurusan = $this->input->post('jml_siswa_jurusan');

		$config['upload_path'] = './upload/jurusan/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo_jurusan')) {
        	$data = array(
				
			'nama_jurusan' => $nama_jurusan,
			'jml_siswa_jurusan' => $jml_siswa_jurusan,
			'logo_jurusan' => 'kosong'
		);	
		$this->M_jurusan->input($data);
		redirect('operator/O_jurusan');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_jurusan' => $nama_jurusan,
			'jml_siswa_jurusan' => $jml_siswa_jurusan,
			'logo_jurusan' => $result1
		);	
		$this->M_jurusan->input($data);
		redirect('operator/O_jurusan');
        }	
	}

	public function hapus($id)
	{
		$this->M_jurusan->hapus($id);
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
		$nama_jurusan = $this->input->post('nama_jurusan');
		$jml_siswa_jurusan = $this->input->post('jml_siswa_jurusan');
		$id_jurusan = $this->input->post('id_jurusan');
		$config['upload_path'] = './upload/jurusan/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo_jurusan')) {
        	$data = array(
				
			'nama_jurusan' => $nama_jurusan,
			'jml_siswa_jurusan' => $jml_siswa_jurusan,
			'id_jurusan' => $id_jurusan,
			'logo_jurusan' => 'kosong'
		);	
		$this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tb_jurusan', $data);
		redirect('operator/O_jurusan');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_jurusan' => $nama_jurusan,
			'jml_siswa_jurusan' => $jml_siswa_jurusan,
			'id_jurusan' => $id_jurusan,
			'logo_jurusan' => $result1
		);	
		$this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tb_jurusan', $data);
		redirect('operator/O_jurusan');
        }
    }

    public function editForm()
	{
		$id_jurusan = $this->input->post('id_jurusan');
		$data['data_jurusan'] = $this->M_jurusan->jurusanId($id_jurusan);
		$this->load->view('operator/V_edit_jurusan', $data);
	}
}