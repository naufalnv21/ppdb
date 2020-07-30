<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');


/**
 * 
 */
class M_excel extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');

		return $this->db->get();
	}

	public function tampilSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');

		return $this->db->get();
	}

	public function tampilGuru()
	{
		$this->db->select('*');
		$this->db->from('tb_guru');
		return $this->db->get();
	}
}