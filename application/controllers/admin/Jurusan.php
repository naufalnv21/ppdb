<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class Jurusan extends CI_Controller
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

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('user/V_jurusan', $data);
    $this->load->view('templates/footer', $data);
  }
}