<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_siswa extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($data)
	{
		$this->db->insert('tb_siswa', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$result = $this->db->get();
		return $result->result();
	}

	public function siswaId($where)
	{
		$this->db->from('tb_siswa');
		$this->db->where('id_siswa', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		// return $this->db->delete($this->tb_guru, array("id_guru" => $id));
		$this->db->where('id_siswa', $id);
		$this->db->delete('tb_siswa');	
	}

	public function update($data)
	{
		$this->db->where('id_siswa', $id_siswa);
		$this->db->update('tb_siswa', $data);
	}

	
}