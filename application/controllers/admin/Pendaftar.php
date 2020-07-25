<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pendaftar extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_formulir');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_pendaftar'] = $this->db->get('tb_pendaftar')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_pendaftar', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function export()
	{
		$data['data_pendaftar'] = $this->db->get('tb_pendaftar')->result();
		$data_pendaftar = $this->M_excel->tampil()->result();

		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
					 ->setCellValue('A1','No')
					 ->setCellValue('B1','Jurusan')
					 ->setCellValue('C1','Nik')
					 ->setCellValue('D1','Skhun')
					 ->setCellValue('E1','Nama')
					 ->setCellValue('F1','Jenis Kelamin')
					 ->setCellValue('G1','Tempat Tanggal Lahir')
					 ->setCellValue('H1','Alamat')
					 ->setCellValue('I1','Desa')
					 ->setCellValue('J1','RT/RW')
					 ->setCellValue('K1','Kecamatan')
					 ->setCellValue('L1','Kabupaten')
					 ->setCellValue('M1','Nomor Telephon')
					 ->setCellValue('N1','Asal Sekolah')
					 ->setCellValue('O1','No Ijazah')
					 ->setCellValue('P1','Tahun Lulus')
					 ->setCellValue('Q1','Nama Ayah')
					 ->setCellValue('R1','Nama Ibu')
					 ->setCellValue('S1','Pekerjaan Orang Tua')
					 ->setCellValue('T1','Pendapatan Perbulan')
					 ->setCellValue('U1','Pendidikan Terakhir Orang Tua')
					 ->setCellValue('V1','Alamat Orang Tua')
					 ->setCellValue('W1','Desa Orang Tua')
					 ->setCellValue('X1','RT/RW Orang Tua')
					 ->setCellValue('Y1','Kecamatan Orang Tua')
					 ->setCellValue('Z1','Kabupaten Orang Tua')
					 ->setCellValue('AA1','Telp/Hp Orang Tua');
					 // ->setCellValue('J1','RT/RW')
		$kolom = 2;
		$no = 1;
		foreach ($data_pendaftar as $pendaftar) {
			$spreadsheet->setActiveSheetIndex(0)
						 ->setCellValue('A' . $kolom, $no)
						 ->setCellValue('B' . $kolom, $pendaftar->id_jurusan)
						 ->setCellValue('C' . $kolom, $pendaftar->nik_pendaftar)
						 ->setCellValue('D' . $kolom, $pendaftar->skhun_pendaftar)
						 ->setCellValue('E' . $kolom, $pendaftar->nama_pendaftar)
						 ->setCellValue('F' . $kolom, $pendaftar->jk_pendaftar)
						 ->setCellValue('G' . $kolom, $pendaftar->ttl_pendaftar)
						 ->setCellValue('H' . $kolom, $pendaftar->almt_jl_pendaftar)
						 ->setCellValue('I' . $kolom, $pendaftar->almt_desa_pendaftar)
						 ->setCellValue('J' . $kolom, $pendaftar->almt_rt_rw_pendaftar)
						 ->setCellValue('K' . $kolom, $pendaftar->almt_kec_pendaftar)
						 ->setCellValue('L' . $kolom, $pendaftar->almt_kab_pendaftar)
						 ->setCellValue('M' . $kolom, $pendaftar->telp_hp_pendaftar)
						 ->setCellValue('N' . $kolom, $pendaftar->asal_sekolah_pendaftar)
						 ->setCellValue('O' . $kolom, $pendaftar->no_ijazah_pendaftar)
						 ->setCellValue('p' . $kolom, $pendaftar->thn_lulus_pendaftar)
						 ->setCellValue('Q' . $kolom, $pendaftar->nama_ayah_pendaftar)
						 ->setCellValue('R' . $kolom, $pendaftar->nama_ibu_pendaftar)
						 ->setCellValue('S' . $kolom, $pendaftar->prj_orang_tua_pendaftar)
						 ->setCellValue('T' . $kolom, $pendaftar->ppn_orang_tua_pendaftar)
						 ->setCellValue('U' . $kolom, $pendaftar->pendidikan_orang_tua_pendaftar)
						 ->setCellValue('V' . $kolom, $pendaftar->almt_jl_orang_tua_pendaftar)
						 ->setCellValue('W' . $kolom, $pendaftar->almt_desa_orang_tua_pendaftar)
						 ->setCellValue('X' . $kolom, $pendaftar->almt_rt_rw_orang_tua_pendaftar)
						 ->setCellValue('Y' . $kolom, $pendaftar->almt_kec_orang_tua_pendaftar)
						 ->setCellValue('Z' . $kolom, $pendaftar->almt_kab_orang_tua_pendaftar)
						 ->setCellValue('AA' . $kolom, $pendaftar->telp_hp_orang_tua_pendaftar);

			$kolom++;
			$no++;		
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Pendaftar.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}