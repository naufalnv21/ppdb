<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class M_formulir extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input($data)
	{
		$this->db->insert('tb_pendaftar', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$result = $this->db->get();
		return $result->result();
	}
}