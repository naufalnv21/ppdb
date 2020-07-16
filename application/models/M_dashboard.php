<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');



/**
 * 
 */
class M_dashboard extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_guru');
		$result = $this->db->get();
		return $result->result();
	}

	public function tampilSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$result = $this->db->get();
		return $result->result();
	}

	public function tampilPendaftar()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$result = $this->db->get();
		return $result->result();
	}
	public function tampilMultimedia()
	{
		$this->db->select('*');
		$this->db->from('tb_multimedia');
		$result = $this->db->get();
		return $result->result();
	}
	public function tampilBerita()
	{
		$this->db->select('*');
		$this->db->from('tb_berita');
		$result = $this->db->get();
		return $result->result();
	}

	public function tampilPerbank()
	{
		$this->db->select('*');
		$this->db->from('tb_perbank');
		$result = $this->db->get();
		return $result->result();
	}

	public function tampilFasilitas()
	{
		$this->db->select('*');
		$this->db->from('tb_fasilitas');
		$result = $this->db->get();
		return $result->result();
	}
}