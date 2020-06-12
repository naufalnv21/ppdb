<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Guru extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_guru'] = $this->db->get('tb_guru')->result();
		$this->load->view('user/V_guru', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
	}

	public function tambahGuru()
	{
		
		$nama_guru = $this->input->post('nama_guru');
		$nip_guru = $this->input->post('nip_guru');
		$email_guru = $this->input->post('email_guru');
		$alamat_guru = $this->input->post('alamat_guru');
		// $foto_guru = $this->input->post('foto_guru');
		$config['upload_path'] = './upload/guru/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_guru')) {
        	redirect('user/V_guru');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
			
			'nama_guru' => $nama_guru,
			'nip_guru' => $nip_guru,
			'email_guru' => $email_guru,
			'alamat_guru' => $alamat_guru,
			'foto_guru' => $result1
		);
		$this->M_guru->input($data);
        }	

	}
}