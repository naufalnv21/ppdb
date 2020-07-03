<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_login extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($username_register)
	{
		$this->db->where('username_register', $username_register);
		$result = $this->db->get('tb_register')->row();

		return $result;
	}
}