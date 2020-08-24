<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class M_broadcast extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function input($data)
	{
		$this->db->insert('tb_broadcast', $data);
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_broadcast');
		$result = $this->db->get();
		return $result->result();
	}
	public function hapus($id)
	{
		// return $this->db->delete($this->tb_guru, array("id_guru" => $id));
		$this->db->where('id_broadcast', $id);
		$this->db->delete('tb_broadcast');	
	}

	public function update($data)
	{
		$this->db->where('id_broadcast', $id_broadcast);
		$this->db->update('tb_broadcast', $data);
	}
}