9<?php
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
			redirect('admin/operator');
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
						'level_users' => $user['level_users']
					];
					$this->session->set_userdata($data);
					if ($user['level_users'] == 1){
						redirect('admin/admin');
					}else{
						redirect('admin/operator');
					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Passwrod!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>');
					redirect('Auth');
				}
			}
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
		$this->load->view('dashboard');
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar');
	}
}
