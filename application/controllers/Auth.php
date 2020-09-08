<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_admin');
		// $this->load->library('form_validation');
	}
	public function index()
	{
		
		if ($this->session->userdata('level_users') == 1){
			redirect('admin/admin');
		}
		if ($this->session->userdata('level_users') == 2){
			redirect('operator/O_operator');
		}

		$this->form_validation->set_rules('username', 'Username', 'required|trim|valid_username');
		$this->form_validation->set_rules('password_users', 'Passwrod', 'trim|required');

		if ($this->form_validation->run() == false){

		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
		}
		// else{
		// 	$this->login();
		// }
	}
	
	public function login(){


		$username = $this->input->post('username');
		$password = $this->input->post('password_users');

		$user = $this->db->get_where('tb_users',['username' => $username])->row_array();
		//jika user ditemukan
		if($user){
			//jika user active
			if($user['active_id'] == 1){
				//cek password
				if(password_verify($password, $user['password_users'] )) {
					$data = [
						'username' => $user['username'],
						'level_users' => $user['level_users'],
						'id_users' => $user['id_users']
					];
					$this->session->set_userdata($data);
					if ($user['level_users'] == 1){
						redirect('admin/admin');
					}else{
						redirect('operator/O_dashboard');
					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Passwrod!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>');
					redirect('Auth');
				}
			}
		}else{
			redirect('Auth');
		}
		// $user = $this->M_admin->get($username);
		// if(empty($user)){
		// 	$this->session->set_flashdata('message','Username tidak ditemukan');
		// 	redirect('auth');
		// }else{
		// 	if(password_verify($password, $user['password_users'])) {
		// 		$data = [
		// 				'username' => $user['username'],
						
		// 			];
		// 			$this->session->set_userdata($data);
		// 		redirect('admin/Admin');
		// 	}else{
		// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 				<span aria-hidden="true">&times;</span>
		// 				</button></div>');
		// 			redirect('auth');
		// 	}
		// }
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level_users');
		

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">you have been logged out!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button></div>');  
		redirect('auth');

		// $this->session->session_destroy();
		// redirect('auth');
	}

	public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer', $data);
	}

	public function O_dashboard()
	{
		$this->load->view('operator/header');
		$this->load->view('operator/navbar');
		$this->load->view('operator/sidebar');
		$this->load->view('operator/O_dashboard');
		$this->load->view('operator/footer', $data);
	}

	public function lupaPassword()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('auth/lupa_password');
		$this->load->view('templates/auth_footer');
	}

	public function reset_password_validation()
	{
		$this->form_validation->set_rules('email_users','Email','required|valid_email|trim');
		$this->form_validation->set_rules('password_users','Retype Password', 'required|min_length[6]|matches[password_users');
		$id = $this->uri->segment(4);
		if($this->form_validation->run())
		{
			$email_users = $this->input->post('email_users');
			$reset_key = random_string('alnum', 50);
			$this->M_reset->gantiPassword($this->input->post('email_users'), $this->input->post('password_users'));
			return redirect('auth');
		} else{
			$this->load->view('auth/konfir_password');
		}
	}

	public function email_reset_password_validation()
	{
		$this->form_validation->set_rules('email_users','Email','required|valid_email|trim');
		if($this->form_validation->run())
		{
			$email_users = $this->input->post('email_users');
			$reset_key =  random_string('alnum', 50);
			$getID = $this->M_reset->getId($email_users);
			if($this->M_reset->update_reset_key($email_users,$reset_key))
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
				$this->email->to($this->input->post('email_users'));
				$this->email->subject("Reset Your Password");

				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message = "<a href='".site_url('Auth/reset_password_validation/'.$getID->id_users)."'>klik reset password</a>";
				$this->email->message($message);

				if($this->email->send())
				{
					echo "<script>alert('Silahkan cek email ".$this->input->post('email_users')." untuk melakukan reset passwrod'); window.history.go(-1);</script>";
				}else{
					echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
				}
				echo "<br><br><a href='".site_url("Auth")."'>Kembali ke Menu Login</a>";
			}else {
				die("Email yang anda masukan belum terdaftar");
			}
		} else{
			$this->load->view('auth/login');
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
			$this->load->view('auth/konfir_password');
		}else{
			die("reset key salah");
		}
	}
}
