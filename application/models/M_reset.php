<?php
if (! defined('BASEPATH')) exit ('No direct script access allowed');


/**
 * 
 */
class M_reset extends CI_Model
{
	
	public function update_reset_key($email_register,$reset_key)
	{
		$this->db->where('email_register', $email_register);
		$data = array('password_register'=>$reset_key);
		$this->db->update('tb_register',$data);
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function reset_password($reset_key, $password_register)
	{
		$this->db->where('pendaftar/reset_password2',$reset_key);
		$data = array('password_register' => $password_register);
		$this->db->update('tb_register',$data);
		return ($this->db->affected_rows()>0 )? TRUE:FALSE;
	}

	public function check_reset_key($reset_key)
	{
		$this->db->where('pendaftar/reset_password2', $reset_key);
		$this->db->from('tb_register');
		return $this->db->count_all_results();
	}

	public function getId($email_register)
	{
		return $this->db->from('tb_register')->where('email_register', $email_register)->get()->row();
	}

	public function gantiPassword($email_register,$password_register)
	{
		$this->db->from('tb_register')->where('email_register',$email_register);
		$data = array('password_register' => $password_register);
		$this->db->update('tb_register',$data);
	}
}