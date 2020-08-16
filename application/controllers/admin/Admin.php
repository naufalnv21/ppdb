<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_admin'] = $this->db->get('tb_users')->result();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_admin', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function operator()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_operator'] = $this->db->get('tb_users')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_operator', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function edit($id_users)
	{
		$data['berita'] = $this->db->get_where('tb_berita', ['id_berita' => $id_berita])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('V_edit_admin', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/sidebar', $data);
	}

	public function prosesEdit()
	{
		$username = $this->input->post('username');
		$ttl_users = $this->input->post('ttl_users');
		$nuptk_users = $this->input->post('nuptk_users');
		$jk_users = $this->input->post('tmt_users');
		$ijazah_users = $this->input->post('ijazah_users');
		$mapel_users = $this->input->post('mapel_users');
		$password_users = $this->input->post('telp_users');
		$level_users  = $this->input->post('level_users');
		$alamat_users = $this->input->post('alamat_users');
		$updated_users = $this->input->post('updated_users');
		$id_users = $this->input->post('id_users');

		$data = array(
			'username' => $username,
			'ttl_users' => $ttl_users,
			'nuptk_users' => $nuptk_users,
			'jk_users' => $jk_users,
			'ijazah_users' => $ijazah_users,
			'mapel_users' => $mapel_users,
			'password_users' => $password_users,
			'level_users' => $level_users,
			'alamat_users' => $alamat_users,
			'updated_users' => $updated_users,
			'id_users' => $id_users,
		);
		$this->db->where('id_users', $id_users);
		$this->db->update('tb_users');
		redirect('admin/Admin');

	}

	public function logout(){
		$this->session->session_destroy();
		redirect('Auth');
	}

	public function Gantipassword()
	{
		$data['user'] = $this->db->get_where('tb_users',['username' => $this->session->userdata('username')])->row_array();

		$data['data_operator'] = $this->db->get('tb_users')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_password', $data);
		$this->load->view('templates/footer', $data);
	}

	public function updatePassword()
	{
		$new_password = $this->input->post('new_password');
		$confir_password = $this->input->post('confir_password');
		$id_users = $this->session->userdata('id_users');

		if ($new_password != $confir_password ) 
		{
			echo "<script>alert('Password Tidak Sama'); window.history.go(-1);</script>";
		}else{
			$where = [
				'id_users' => $id_users
			];
			$data = array(
			'password_users' => password_hash($new_password, PASSWORD_DEFAULT)
			
		);
		$this->db->where($where);
		$this->db->update('tb_users', $data);
		echo "<script>alert('Password Berhasil diubah'); window.history.go(-1);</script>";
		}

	}

	public function export()
	{
		$data['data_admin'] = $this->db->get('tb_users')->result();
		$data_admin = $this->M_excel->tampilPengguna()->result();

		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
					 ->setCellValue('A1','No')
					 ->setCellValue('B1','Nama')
					 ->setCellValue('C1','Tempat Tanggal Lahir')
					 ->setCellValue('D1','Nuptk')
					 ->setCellValue('E1','Jenis Kelamin')
					 ->setCellValue('F1','Tamatan')
					 ->setCellValue('G1','Ijazah')
					 ->setCellValue('H1','Jabatan / Mapel')
					 ->setCellValue('I1','Telepon')
					 ->setCellValue('J1','Alamat')
					 ->setCellValue('K1','Email');
		$kolom = 2;
		$no = 1;
		foreach ($data_admin as $admin) {
			$spreadsheet->setActiveSheetIndex(0)
						 ->setCellValue('A' . $kolom, $no)
						 ->setCellValue('B' . $kolom, $admin->username)
						 ->setCellValue('C' . $kolom, $admin->ttl_users)
						 ->setCellValue('D' . $kolom, $admin->nuptk_users)
						 ->setCellValue('E' . $kolom, $admin->jk_users)
						 ->setCellValue('F' . $kolom, $admin->tmt_users)
						 ->setCellValue('G' . $kolom, $admin->ijazah_users)
						 ->setCellValue('H' . $kolom, $admin->mapel_users)
						 ->setCellValue('I' . $kolom, $admin->telp_users)
						 ->setCellValue('J' . $kolom, $admin->alamat_users)
						 ->setCellValue('K' . $kolom, $admin->email_users);
			$kolom++;
			$no++;		
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Data Pengguna.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}