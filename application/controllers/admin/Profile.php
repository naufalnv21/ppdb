<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 * 
 */
class Profile extends CI_Controller
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


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_profile', $data);
		$this->load->view('templates/footer', $data);
	}
}