<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');

/**
 * 
 */
class M_operator extends CI_Model
{
	
	public function get($username)
	{
		$this->db->where('username', $username);
		$result = $this->db->get('tb_users')->row_array();
		return $result;
	}
}