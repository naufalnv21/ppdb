<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/**
 * 
 */
class Perbank extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_perbank');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_perbank'] = $this->db->get('tb_perbank')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_perbank', $data);
		$this->load->view('templates/footer', $data);
	}

	public function export()
  {
    $data['data_perbank'] = $this->db->get('tb_perbank')->result();
    $data_perbank = $this->M_excel->tampilPerbank()->result();

    $spreadsheet = new Spreadsheet;
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1','No')
    ->setCellValue('B1','Nama Jurusan')
    ->setCellValue('C1','Jumlah Siswa Jurusan')
    ->setCellValue('D1','Motto Jurusan')
    ->setCellValue('E1','Acara Multimedia')
    ->setCellValue('F1','Ketua Jurusan');


    $kolom = 2;
    $no = 1;
    foreach ($data_perbank as $perbank) {
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A' . $kolom, $no)
      ->setCellValue('B' . $kolom, $perbank->nama_perbank)
      ->setCellValue('C' . $kolom, $perbank->jml_siswa_perbank)
      ->setCellValue('D' . $kolom, $perbank->motto_perbank)
      ->setCellValue('E' . $kolom, $perbank->acara_perbank)
      ->setCellValue('F' . $kolom, $perbank->ketua_perbank);


      $kolom++;
      $no++;    
    }

    $writer = new Xlsx($spreadsheet);

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Perbank.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}