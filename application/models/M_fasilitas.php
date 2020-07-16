<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_fasilitas extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($data)
	{
		$this->db->insert('tb_fasilitas', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_fasilitas');
		$result = $this->db->get();
		return $result->result();
	}

	public function fasilitasId($where)
	{
		$this->db->from('tb_fasilitas');
		$this->db->where('id_fasilitas', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		$this->db->where('id_fasilitas', $id);
		$this->db->delete('tb_fasilitas');	
	}

	public function update($data)
	{
		$this->db->where('id_fasilitas', $id_fasilitas);
		$this->db->update('tb_fasilitas', $data);
	}

	
}