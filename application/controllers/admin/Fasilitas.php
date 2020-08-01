<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * 
 */
class Fasilitas extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_fasilitas');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_fasilitas'] = $this->db->get('tb_fasilitas')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_fasilitas', $data);
		$this->load->view('templates/footer', $data);
	}

	public function export()
	{
		$data['data_fasilitas'] = $this->db->get('tb_fasilitas')->result();
		$data_fasilitas = $this->M_excel->tampilFasilitas()->result();

		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1','No')
		->setCellValue('B1','Nama Fasilitas')
		->setCellValue('C1','Deskripsi Fasilitas')
		->setCellValue('D1','By');
		


		$kolom = 2;
		$no = 1;
		foreach ($data_fasilitas as $fasilitas) {
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A' . $kolom, $no)
			->setCellValue('B' . $kolom, $fasilitas->nama_fasilitas)
			->setCellValue('C' . $kolom, $fasilitas->deskripsi_fasilitas)
			->setCellValue('D' . $kolom, $fasilitas->by_fasilitas);
			


			$kolom++;
			$no++;    
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Fasilitas.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}