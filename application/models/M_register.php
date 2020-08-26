<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class M_register extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input($data)
	{
		$this->db->insert('tb_register', $data);
	}

	public function getCountNotif($id_register)
	{
		return $this->db->get_where('tb_notif', ['flag' => 0, 'id_register' => $id_register])->num_rows();
	}

	public function getForPDF($id_register,$table){
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_pendaftar.id_jurusan');
		return $this->db->get_where($table,$id_register);
		
	}
	public function getPdf()
	{
		$this->db->select('*');
		$this->db->from('tb_pendaftar');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_pendaftar.id_jurusan');
		$result = $this->db->get();
		return $result->result();
	}
}