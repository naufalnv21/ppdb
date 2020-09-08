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

	public function update_reset_key($email_users,$reset_key)
	{
		$this->db->where('email_users', $email_users);
		$data = array('password_users'=>$reset_key);
		$this->db->update('tb_users',$data);
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function reset_password($reset_key, $password_users)
	{
		$this->db->where('auth/konfir_password',$reset_key);
		$data = array('password_users' => $password_users);
		$this->db->update('tb_users',$data);
		return ($this->db->affected_rows()>0 )? TRUE:FALSE;
	}

	public function check_reset_key($reset_key)
	{
		$this->db->where('auth/konfir_password', $reset_key);
		$this->db->from('tb_users');
		return $this->db->count_all_results();
	}

	public function getId($email_users)
	{
		return $this->db->from('tb_users')->where('email_users', $email_users)->get()->row();
	}

	public function gantiPassword($email_users,$password_users)
	{
		$this->db->from('tb_users')->where('email_users',$email_users);
		$data = array('password_users' => $password_users);
		$this->db->update('tb_users',$data);
	}
}