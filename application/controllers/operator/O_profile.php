<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class O_profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_profile');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_profile'] = $this->db->get('tb_profile')->result();


		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_profile', $data);
		$this->load->view('operator/footer', $data);
	}

	public function tambahProfile()
	{
		$nama_profile = $this->input->post('nama_profile');
		$tentang_profile = $this->input->post('tentang_profile');
		$by_profile = $this->input->post('by_profile');
		// $foto_guru = $this->input->post('foto_guru');
		$config['upload_path'] = './upload/profile/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_profile')) {	
        	$data = array(
        		'nama_profile' => $nama_profile,
        		'tentang_profile' => $tentang_profile,
        		'by_profile' => $by_profile,
        		'foto_profile' => 'kosong'
        	);
        	$this->M_profile->input($data);
        	redirect('operator/O_profile');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
			
			'nama_profile' => $nama_profile,
        	'tentang_profile' => $tentang_profile,
        	'by_profile' => $by_profile,
        	'foto_profile' => $result1
		);	
		$this->M_profile->input($data);
		redirect('operator/O_profile');
        }
	}

	public function hapus($id)
	{
		$this->M_profile->hapus($id);
		redirect('operator/O_profile');
	}

	public function edit($id_profile)
	{
		$data['profile'] = $this->db->get_where('tb_profile', ['id_profile' => $id_profile])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_profile', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
	}

	public function prosesEdit()
	{
		$nama_profile = $this->input->post('nama_profile');
		$tentang_profile = $this->input->post('tentang_profile');
		$by_profile = $this->input->post('by_profile');
		$id_profile = $this->input->post('id_profile');
		$config['upload_path'] = './upload/profile/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_profile')) {
        	
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];

		$data = array(
			
			'nama_profile' => $nama_profile,
			'tentang_profile' => $tentang_profile,
			'by_profile' => $by_profile,
			'foto_profile' => $result1
		);
		$this->db->where('id_profile', $id_profile);
        $this->db->update('tb_profile', $data);
		redirect('operator/O_profile');
		}
	}

	public function editForm()
	{
		$id_profile = $this->input->post('id_berita');
		$data['data_profile'] = $this->M_profile->profileId($id_berita);
		$this->load->view('operator/V_edit_profile', $data);
	}
}