<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');


class M_berita extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($data)
	{
		$this->db->insert('tb_berita', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_berita');
		$result = $this->db->get();
		return $result->result();
	}

	public function beritaId($where)
	{
		$this->db->from('tb_berita');
		$this->db->where('id_berita', $where);
		$result = $this->db->get();
		return $result->result();
	}

}