<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class O_operator extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_operator');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_operator'] = $this->db->get('tb_users')->result();

		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_operator', $data);
		$this->load->view('operator/footer', $data);

	}

	public function Gantipassword()
	{
		$data['user'] = $this->db->get_where('tb_users',['username' => $this->session->userdata('username')])->row_array();

		$data['data_operator'] = $this->db->get('tb_users')->result();

		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_password', $data);
		$this->load->view('operator/footer', $data);
	}

	public function updatePassword()
	{
		$new_password = $this->input->post('new_password');
		$confir_password = $this->input->post('confir_password');
		$id_users = $this->session->userdata('id_users');

		if ($new_password != $confir_password ) 
		{
			echo "<script>alert('Password Tidak Sama'); window.history.go(-1);</script>";
		}else{
			$where = [
				'id_users' => $id_users
			];
			$data = array(
			'password_users' => password_hash($new_password, PASSWORD_DEFAULT)
			
		);
		$this->db->where($where);
		$this->db->update('tb_users', $data);
		echo "<script>alert('Password Berhasil diubah'); window.history.go(-1);</script>";
		}

	}
}