<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class M_perbank extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input($data)
	{
		$this->db->insert('tb_perbank', $data);		
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_perbank');
		$result = $this->db->get();
		return $result->result();
	}
	public function perbankId($where)
	{
		$this->db->from('tb_perbank');
		$this->db->where('id_perbank', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		$this->db->where('id_perbank', $id);
		$this->db->delete('tb_perbank');	
	}

	public function update($data)
	{
		$this->db->where('id_perbank', $id_perbank);
		$this->db->update('tb_perbank', $data);
	}
}