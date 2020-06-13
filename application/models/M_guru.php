<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_guru extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($data)
	{
		$this->db->insert('tb_guru', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_guru');
		$result = $this->db->get();
		return $result->result();
	}

	public function guruId($where)
	{
		$this->db->from('tb_guru');
		$this->db->where('id_guru', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		// return $this->db->delete($this->tb_guru, array("id_guru" => $id));
		$this->db->where('id_guru', $id);
		$this->db->delete('tb_guru');	
	}

	public function update($tb_guru, $data, $where)
	{
		$this->db->where('id_guru', $where);
		$this->db->update($tb_guru, $data);
	}

	
}