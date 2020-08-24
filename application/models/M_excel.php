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
		// $this->db->select('*');
		// $this->db->from('tb_pendaftar');
		// $this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_pendaftar.id_jurusan');
		// $result = $this->db->get();
		// return $result->result();
		$this->db->select('*');
		$this->db->from('tb_pendaftar');

		return $this->db->get();
	}

	public function getExcel()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_pendaftar.id_jurusan');
		$result = $this->db->get();
		return $result->result();
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

	public function tampilMultimedia()
	{
		$this->db->select('*');
		$this->db->from('tb_multimedia');
		return $this->db->get();
	}

	public function tampilPerbank()
	{
		$this->db->select('*');
		$this->db->from('tb_perbank');
		return $this->db->get();
	}

	public function tampilFasilitas()
	{
		$this->db->select('*');
		$this->db->from('tb_fasilitas');
		return $this->db->get();
	}

	public function tampilBerita()
	{
		$this->db->select('*');
		$this->db->from('tb_berita');
		return $this->db->get();
	}

	public function tampilProfile()
	{
		$this->db->select('*');
		$this->db->from('tb_profile');
		return $this->db->get();
	}

	public function tampilPengguna()
	{
		$this->db->select('*');
		$this->db->from('tb_users');
		return $this->db->get();
	}
}