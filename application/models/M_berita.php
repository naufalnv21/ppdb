<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');

/**
 * 
 */
class M_berita extends CI_Model
{
	
	public function get($id_berita)
	{

		$query = $this->db->query("SELECT * FROM tb_berita ORDER BY id_berita DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}

		return $result;
	}
}