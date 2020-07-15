<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class M_multimedia extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($data)
	{
		$this->db->insert('tb_multimedia', $data);		
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_multimedia');
		$result = $this->db->get();
		return $result->result();
	}
	public function multimediaId($where)
	{
		$this->db->from('tb_multimedia');
		$this->db->where('id_multimedia', $where);
		$result = $this->db->get();
		return $result->result();
	}

	public function hapus($id)
	{
		$this->db->where('id_multimedia', $id);
		$this->db->delete('tb_multimedia');	
	}

	public function update($data)
	{
		$this->db->where('id_multimedia', $id_multimedia);
		$this->db->update('tb_multimedia', $data);
	}
}