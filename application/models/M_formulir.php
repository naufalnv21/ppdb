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

	public function getData($id_register,$table)
	{
		return $this->db->get_where($table,$id_register);
		// $data_formulir = $this->db->get('tb_pendaftar');
		// return $data_formulir->result();
	}

	public function jurusan()
	{
		$this->db->select('*');
		$this->db->from('tb_jurusan');
		$result = $this->db->get();
		return $result->result();
	}

	public function inputJurusan($data)
	{
		$this->db->insert('tb_jurusan', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id_jurusan', $id);
		$this->db->delete('tb_jurusan');	
	}

	public function getpendaftarOperator()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_pendaftar.id_jurusan');
		$result = $this->db->get();
		return $result->result();
	}

}