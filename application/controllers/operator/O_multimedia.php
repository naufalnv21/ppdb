<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class O_multimedia extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_multimedia');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_multimedia'] = $this->db->get('tb_multimedia')->result();

		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_multimedia', $data);
		$this->load->view('operator/footer', $data);
	}

	public function tambahMultimedia()
	{
		$nama_multimedia = $this->input->post('nama_multimedia');
		$jml_siswa_multimedia = $this->input->post('jml_siswa_multimedia');
		$motto_multimedia = $this->input->post('motto_multimedia');
		$ketua_multimedia = $this->input->post('ketua_multimedia');

		$config['upload_path'] = './upload/multimedia/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo_multimedia')) {
        	$data = array(
				
			'nama_multimedia' => $nama_multimedia,
			'jml_siswa_multimedia' => $jml_siswa_multimedia,
			'motto_multimedia' => $motto_multimedia,
			'ketua_multimedia' => $ketua_multimedia,
			'logo_multimedia' => 'kosong'
		);	
		$this->M_multimedia->input($data);
		redirect('operator/O_multimedia');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_multimedia' => $nama_multimedia,
			'jml_siswa_multimedia' => $jml_siswa_multimedia,
			'motto_multimedia' => $motto_multimedia,
			'ketua_multimedia' => $ketua_multimedia,
			'logo_multimedia' => $result1
		);	
		$this->M_multimedia->input($data);
		redirect('operator/O_multimedia');
        }	
	}

	public function hapus($id)
	{
		$this->M_multimedia->hapus($id);
		redirect('operator/O_multimedia');
	}

	public function edit($id_multimedia)
	{
		$data['multimedia'] = $this->db->get_where('tb_multimedia', ['id_multimedia' => $id_multimedia])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_multimedia', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
	}

	public function prosesEdit()
	{
		$nama_multimedia = $this->input->post('nama_multimedia');
		$jml_siswa_multimedia = $this->input->post('jml_siswa_multimedia');
		$motto_multimedia = $this->input->post('motto_multimedia');
		$ketua_multimedia = $this->input->post('ketua_multimedia');
		$id_multimedia = $this->input->post('id_multimedia');
		$config['upload_path'] = './upload/multimedia/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('logo_multimedia')) {
        	$data = array(
				
			'nama_multimedia' => $nama_multimedia,
			'jml_siswa_multimedia' => $jml_siswa_multimedia,
			'id_multimedia' => $id_multimedia,
			'logo_jurusan' => 'kosong'
		);	
		$this->db->where('id_multimedia', $id_multimedia);
        $this->db->update('tb_multimedia', $data);
		redirect('operator/O_multimedia');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_multimedia' => $nama_multimedia,
			'jml_siswa_multimedia' => $jml_siswa_multimedia,
			'motto_multimedia' => $motto_multimedia,
			'ketua_multimedia' => $ketua_multimedia,
			'id_multimedia' => $id_multimedia,
			'logo_multimedia' => $result1
		);	
		$this->db->where('id_multimedia', $id_multimedia);
        $this->db->update('tb_multimedia', $data);
		redirect('operator/O_multimedia');
        }
    }

    public function editForm()
	{
		$id_jurusan = $this->input->post('id_multimedia');
		$data['data_multimedia'] = $this->M_multimedia->multimediaId($id_multimedia);
		$this->load->view('operator/V_edit_multimedia', $data);
	}
}