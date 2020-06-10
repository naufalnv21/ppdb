<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');


class M_admin extends CI_Model
{
	
	public function get($username)
	{
		$this->db->where('username', $username);
		$result = $this->db->get('tb_users')->row_array();

		// $query = $this->db->query("SELECT * FROM tb_users ORDER BY id_users DESC");
		// 	if ($query->num_rows() > 0) {
		// 		return $query->result();
		// 	}else {
		// 		return array();
		// 	}

		return $result;
	}
}