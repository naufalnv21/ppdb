<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class C_reset_password extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_reset');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/home';

		// $data['user'] = $this->db->get_where('tb_register', ['nama_register' => $this->session->userdata('nama_register')])->row_array();

		$this->load->view('pendaftar/header', $data);
		$this->load->view('pendaftar/menu', $data);
		$this->load->view('pendaftar/reset_password', $data);
	}
	public function reset_password_validation()
	{
		$this->form_validation->set_rules('email_register','Email','required|valid_email|trim');
		$this->form_validation->set_rules('password_register',)
		if($this->form_validation->run())
		{
			$email_register = $this->input->post('email_register');
			$reset_key = random_string('alnum', 50);

			if($this->M_reset->update_reset_key($email_register,$reset_key))
			{
				var_dump("Email ada");
			}else{
				var_dump("error");
			}
		} else{
			echo 0;
			$this->load->view('pendaftar/reset_password');
		}
	}
	public function email_reset_password_validation()
	{
		$this->form_validation->set_rules('email_register','Email','required|valid_email|trim');
		if($this->form_validation->run())
		{
			$email_register = $this->input->post('email_register');
			$reset_key =  random_string('alnum', 50);

			if($this->M_reset->update_reset_key($email_register,$reset_key))
			{
				$this->load->library('email');
				$config = array();
				$config['charset'] = 'utf-8';
				$config['useragent'] = 'Codeigniter';
				$config['protocol'] = "smtp";
				$config['mailtype'] = "html";
				$config['smtp_host'] = "ssl://smtp.gmail.com";
				$config['smtp_port'] = "465";
				$config['smtp_timeout'] = "5";
				$config['smtp_user'] = "smkristekindramayu@gmail.com";
				$config['smtp_pass'] = "indramayu123";
				$config['crlf'] = "\r\n";
				$config['newline'] = "\r\n";
				$config['wordwrap'] = TRUE;

				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($this->input->post('email_register'));
				$this->email->subject("Reset Your Password");

				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message = "<a href='".site_url('pendaftar/C_reset_password/reset_password_validation'.$reset_key)."'>klik reset password</a>";
				$this->email->message($message);

				if($this->email->send())
				{
					echo "silahkan cek email <b>".$this->input->post('email_register').'</b> untuk melakukan reset password';
				}else
				{
					echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
				}
				echo "<br><br><a href='".site_url("pendaftar/C_register/index")."'>Kembali ke Menu Login</a>";
			}else {
				die("Email yang anda masukan belum terdaftar");
			}
		} else{
			$this->load->view('pendaftar/login_pendaftaran');
		}
	}
}