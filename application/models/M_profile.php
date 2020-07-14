<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');

/**
 * 
 */
class M_profile extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input($data)
	{
		$this->db->insert('tb_profile',$data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_profile');
		$result = $this->db->get();
		return $result->result();
	}

	public function profileId($where)
	{
		$this->db->from('tb_profile');
		$this->db->where('id_profile', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		$this->db->where('id_profile', $id);
		$this->db->delete('tb_profile');
	}

	public function update($data)
	{
		$this->db->where('id_profle', $id_profle);
		$this->db->update('tb_profile', $data);
	}
}