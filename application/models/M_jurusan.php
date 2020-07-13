<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class M_jurusan extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($data)
	{
		$this->db->insert('tb_jurusan', $data);		
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_jurusan');
		$result = $this->db->get();
		return $result->result();
	}
	public function jurusanId($where)
	{
		$this->db->from('tb_jurusan');
		$this->db->where('id_jurusan', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		$this->db->where('id_jurusan', $id);
		$this->db->delete('tb_jurusan');	
	}

	public function update($data)
	{
		$this->db->where('id_jurusan', $id_jurusan);
		$this->db->update('tb_jurusan', $data);
	}
}