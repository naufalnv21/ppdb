<?php
defined('BASEPATH') OR exit ('No direct script access allowed');



require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/**
 * 
 */
class Multimedia extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_multimedia');
    $this->load->model('M_excel');
    $this->load->helper('url');
  }

  public function index()
  {
    $data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
    $data['data_multimedia'] = $this->db->get('tb_multimedia')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('user/V_multimedia', $data);
    $this->load->view('templates/footer', $data);
  }

  public function export()
  {
    $data['data_multimedia'] = $this->db->get('tb_multimedia')->result();
    $data_multimedia = $this->M_excel->tampilMultimedia()->result();

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
    foreach ($data_multimedia as $multimedia) {
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A' . $kolom, $no)
      ->setCellValue('B' . $kolom, $multimedia->nama_multimedia)
      ->setCellValue('C' . $kolom, $multimedia->jml_siswa_multimedia)
      ->setCellValue('D' . $kolom, $multimedia->motto_multimedia)
      ->setCellValue('E' . $kolom, $multimedia->acara_multimedia)
      ->setCellValue('F' . $kolom, $multimedia->ketua_multimedia);


      $kolom++;
      $no++;    
    }

    $writer = new Xlsx($spreadsheet);

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Multimedia.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}