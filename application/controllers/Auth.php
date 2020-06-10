<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_admin');
	}
	public function index()
	{
		
		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}
	
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password_users');
		$user = $this->M_admin->get($username);
		if(empty($user)){
			$this->session->set_flashdata('message','Username tidak ditemukan');
			redirect('auth');
		}else{
			if(password_verify($password, $user['password_users'])) {
				$data = [
						'username' => $user['username'],
						
					];
					$this->session->set_userdata($data);
				redirect('admin/operator');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>');
					redirect('auth');
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		// $this->session->unset_userdata('role');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">you have been logged out!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button></div>');  
		redirect('auth');

		// $this->session->session_destroy();
		// redirect('auth');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}
}
