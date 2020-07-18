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
}