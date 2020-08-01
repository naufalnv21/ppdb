<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/**
 * 
 */
class Profile extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_profile');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_profile'] = $this->db->get('tb_profile')->result();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_profile', $data);
		$this->load->view('templates/footer', $data);
	}
	public function export()
	{
		$data['data_profile'] = $this->db->get('tb_profile')->result();
		$data_profile = $this->M_excel->tampilProfile()->result();

		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1','No')
		->setCellValue('B1','Nama Profile')
		->setCellValue('C1','Tentang')
		->setCellValue('D1','By');



		$kolom = 2;
		$no = 1;
		foreach ($data_profile as $profile) {
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A' . $kolom, $no)
			->setCellValue('B' . $kolom, $profile->nama_profile)
			->setCellValue('C' . $kolom, $profile->tentang_profile)
			->setCellValue('D' . $kolom, $profile->by_profile);



			$kolom++;
			$no++;    
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Profile.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}