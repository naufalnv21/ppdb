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
		$this->form_validation->set_rules('password_register','Retype Password', 'required|min_length[6]|matches[password_register]');
		$id = $this->uri->segment(4);
		if($this->form_validation->run())
		{
			$email_register = $this->input->post('email_register');
			$reset_key = random_string('alnum', 50);
			$this->M_reset->gantiPassword($this->input->post('email_register'), $this->input->post('password_register'));
			return redirect('pendaftar/C_calon_siswa');
		} else{
			$this->load->view('pendaftar/reset_password2');
		}
	}
	public function email_reset_password_validation()
	{
		$this->form_validation->set_rules('email_register','Email','required|valid_email|trim');
		if($this->form_validation->run())
		{
			$email_register = $this->input->post('email_register');
			$reset_key =  random_string('alnum', 50);
			$getID = $this->M_reset->getId($email_register);
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
				$config['smtp_user'] = "naufalharizxtkj1@gmail.com";
				$config['smtp_pass'] = "figcuqadvcjdxapz";
				$config['crlf'] = "\r\n";
				$config['newline'] = "\r\n";
				$config['wordwrap'] = TRUE;

				$this->email->initialize($config);
				//konfigurasi pengiriman
				$this->email->from($config['smtp_user']);
				$this->email->to($this->input->post('email_register'));
				$this->email->subject("Reset Your Password");

				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message = "<a href='".site_url('pendaftar/C_reset_password/reset_password_validation/'.$getID->id_register)."'>klik reset password</a>";
				$this->email->message($message);

				if($this->email->send())
				{
					echo "<script>alert('Silahkan cek email ".$this->input->post('email_register')." untuk melakukan reset passwrod'); window.history.go(-1);</script>";
				}else{
					echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
				}
				echo "<br><br><a href='".site_url("pendaftar/C_login/index")."'>Kembali ke Menu Login</a>";
			}else {
				die("Email yang anda masukan belum terdaftar");
			}
		} else{
			$this->load->view('pendaftar/login_pendaftaran');
		}
	}

	public function reset_password()
	{
		$reset_key = $this->uri->segment(3);

		if(!$reset_key){
			die('Jangan dihapus');
		}

		if($this->M_reset->check_reset_key($reset_key) == 1)
		{
			$this->load->view('pendaftar/reset_password2');
		}else{
			die("reset key salah");
		}
	}
}