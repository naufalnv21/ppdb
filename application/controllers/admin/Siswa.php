<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Siswa extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_guru');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_siswa'] = $this->db->get('tb_siswa')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_siswa', $data);
		$this->load->view('templates/footer', $data);
	}

	public function export()
	{
		$data['data_siswa'] = $this->db->get('tb_siswa')->result();
		$data_siswa = $this->M_excel->tampilSiswa()->result();

		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
					 ->setCellValue('A1','No')
					 ->setCellValue('B1','Nama Siswa')
					 ->setCellValue('C1','Jenis Kelamin')
					 ->setCellValue('D1','Kelas')
					 ->setCellValue('E1','Jurusan')
					 ->setCellValue('F1','Alamat');
					 
					 // ->setCellValue('J1','RT/RW')
		$kolom = 2;
		$no = 1;
		foreach ($data_siswa as $siswa) {
			$spreadsheet->setActiveSheetIndex(0)
						 ->setCellValue('A' . $kolom, $no)
						 ->setCellValue('B' . $kolom, $siswa->nama_siswa)
						 ->setCellValue('C' . $kolom, $siswa->jk_siswa)
						 ->setCellValue('D' . $kolom, $siswa->kelas_siswa)
						 ->setCellValue('E' . $kolom, $siswa->jurusan_siswa)
						 ->setCellValue('F' . $kolom, $siswa->alamat_siswa);
						 

			$kolom++;
			$no++;		
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Data Siswa.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}

	public function broadcast()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_broadcast'] = $this->db->get('tb_broadcast')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_broadcast', $data);
		$this->load->view('templates/footer', $data);
	}
}