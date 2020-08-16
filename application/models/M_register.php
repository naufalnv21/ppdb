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
		return $this->db->get_where($table,$id_register);
		
	}
}