<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class O_fasilitas extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_fasilitas');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_fasilitas'] = $this->db->get('tb_fasilitas')->result();

		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_fasilitas', $data);
		$this->load->view('operator/footer', $data);
	}
	public function tambahFasilitas()
	{
		$nama_fasilitas = $this->input->post('nama_fasilitas');
		$deskripsi_fasilitas = $this->input->post('deskripsi_fasilitas');
		$by_fasilitas = $this->input->post('by_fasilitas');
		
		$config['upload_path'] = './upload/fasilitas/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_fasilitas')) {
        	$data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'foto_fasilitas' => 'kosong'
		);	
		$this->M_fasilitas->input($data);
		redirect('operator/O_fasilitas');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'foto_fasilitas' => $result1
		);	
		$this->M_fasilitas->input($data);
		redirect('operator/O_fasilitas');
        }	
	}
	public function hapus($id)
	{
		$this->M_fasilitas->hapus($id);
		redirect('operator/O_fasilitas');
	}

	public function edit($id_fasilitas)
	{
		$data['fasilitas'] = $this->db->get_where('tb_fasilitas', ['id_fasilitas' => $id_fasilitas])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_fasilitas', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
	}

	public function prosesEdit()
	{
		$nama_fasilitas = $this->input->post('nama_fasilitas');
		$deskripsi_fasilitas = $this->input->post('deskripsi_fasilitas');
		$by_fasilitas = $this->input->post('by_fasilitas');
		
		$id_fasilitas = $this->input->post('id_fasilitas');
		$config['upload_path'] = './upload/fasilitas/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_fasilitas')) {
        	$data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'id_fasilitas' => $id_fasilitas,
			'foto_fasilitas' => 'kosong'
		);	
		$this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->update('tb_multimedia', $data);
		redirect('operator/O_multimedia');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'id_fasilitas' => $id_fasilitas,
			'foto_fasilitas' => $result1
		);	
		$this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->update('tb_fasilitas', $data);
		redirect('operator/O_fasilitas');
        }
    }

    public function editForm()
	{
		$id_fasilitas = $this->input->post('id_fasilitas');
		$data['data_fasilitas'] = $this->M_fasilitas->fasilitasId($id_fasilitas);
		$this->load->view('operator/V_edit_fasilitas', $data);
	}

}