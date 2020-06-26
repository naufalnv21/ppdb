<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Siswa extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_siswa'] = $this->db->get('tb_siswa')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_siswa', $data);
		$this->load->view('templates/footer', $data);
	}

	// public function tambahGuru()
	// {
		
	// 	$nama_guru = $this->input->post('nama_guru');
	// 	$ttl_guru = $this->input->post('ttl_guru');
	// 	$nuptk_guru = $this->input->post('nuptk_guru');
	// 	$jk_guru = $this->input->post('jk_guru');
	// 	$email_guru = $this->input->post('email_guru');
	// 	$tmt_guru = $this->input->post('tmt_guru');
	// 	$ijazah_guru = $this->input->post('ijazah_guru');
	// 	$mapel_guru = $this->input->post('mapel_guru');
	// 	$alamat_guru = $this->input->post('alamat_guru');
	// 	// $foto_guru = $this->input->post('foto_guru');
	// 	$config['upload_path'] = './upload/guru/';
 //        $config['allowed_types'] = 'gif|jpg|png';
 //        // load library upload
 //        $this->load->library('upload', $config);
 //        if (!$this->upload->do_upload('foto_guru')) {
        	
 //        } else {
 //            $result = $this->upload->data();
 //            $result1 =$result['file_name'];
            
 //            $data = array(
				
	// 		'nama_guru' => $nama_guru,
	// 		'ttl_guru' => $ttl_guru,
	// 		'nuptk_guru' => $nuptk_guru,
	// 		'jk_guru' => $jk_guru,
	// 		'email_guru' => $email_guru,
	// 		'tmt_guru' => $tmt_guru,
	// 		'ijazah_guru' => $ijazah_guru,
	// 		'mapel_guru' => $mapel_guru,
	// 		'alamat_guru' => $alamat_guru,
	// 		'foto_guru' => $result1
	// 	);	
	// 	$this->M_guru->input($data);
	// 	redirect('admin/Guru');
 //        }	

	// }

	// public function hapus($id)
	// {
	// 	// if (!isset($id_guru)) show_404();

	// 	// if($this->M_guru->hapus($id_guru)){
	// 	// 	redirect(site_url('admin/guru'));
	// 	// }
	// 	// $id_guru = $this->input->post('id_guru');
	// 	// $this->M_guru->hapus($id_guru);
	// 	// $this->index();
	// 	$this->M_guru->hapus($id);
	// 	redirect('admin/Guru');

	// }

	// public function edit($id_guru)
	// {
	// 	$data['guru'] = $this->db->get_where('tb_guru', ['id_guru' => $id_guru])->row_array();
	// 	$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
	// 	$this->load->view('V_edit_guru', $data);
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/footer', $data);
	// 	$this->load->view('templates/sidebar', $data);
		
	// }

	// public function prosesEdit()
	// {
	// 	$nama_guru = $this->input->post('nama_guru');
	// 	$ttl_guru = $this->input->post('ttl_guru');
	// 	$nuptk_guru = $this->input->post('nuptk_guru');
	// 	$jk_guru = $this->input->post('jk_guru');
	// 	$email_guru = $this->input->post('email_guru');
	// 	$tmt_guru = $this->input->post('tmt_guru');
	// 	$ijazah_guru = $this->input->post('ijazah_guru');
	// 	$mapel_guru = $this->input->post('mapel_guru');
	// 	$alamat_guru = $this->input->post('alamat_guru');
	// 	$id_guru = $this->input->post('id_guru');
	// 	$config['upload_path'] = './upload/guru/';
 //        $config['allowed_types'] = 'gif|jpg|png';
 //        // load library upload
 //        $this->load->library('upload', $config);
 //        if (!$this->upload->do_upload('foto_guru')) {
        	
 //        } else {
 //            $result = $this->upload->data();
 //            $result1 =$result['file_name'];

	// 	$data = array(
	// 		'nama_guru' => $nama_guru,
	// 		'ttl_guru' => $ttl_guru,
	// 		'nuptk_guru' => $nuptk_guru,
	// 		'jk_guru' => $jk_guru,
	// 		'email_guru' => $email_guru,
	// 		'tmt_guru' => $tmt_guru,
	// 		'ijazah_guru' => $ijazah_guru,
	// 		'mapel_guru' => $mapel_guru,
	// 		'alamat_guru' => $alamat_guru,
	// 		'id_guru' => $id_guru,
	// 		'foto_guru' => $result1,
	// 	);
	// 	$this->db->where('id_guru', $id_guru);
 //        $this->db->update('tb_guru', $data);
	// redirect('admin/Guru');
	// 	}
	// }

	// public function editForm()
	// {
	// 	$id_guru = $this->input->post('id_guru');
	// 	$data['data_guru'] = $this->M_guru->guruId($id_guru);
	// 	$this->load->view('V_edit_guru', $data);
	// }
}