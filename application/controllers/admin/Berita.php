<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_berita');
		$this->load->model('M_excel');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_berita'] = $this->db->get('tb_berita')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/V_berita', $data);
		$this->load->view('templates/footer', $data);
	}

	public function export()
	{
		$data['data_berita'] = $this->db->get('tb_berita')->result();
		$data_berita = $this->M_excel->tampilBerita()->result();

		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1','No')
		->setCellValue('B1','Tanggal')
		->setCellValue('C1','Isi Berita')
		->setCellValue('D1','Penulis');
		


		$kolom = 2;
		$no = 1;
		foreach ($data_berita as $berita) {
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A' . $kolom, $no)
			->setCellValue('B' . $kolom, $berita->tgl_berita)
			->setCellValue('C' . $kolom, $berita->isi_berita)
			->setCellValue('D' . $kolom, $berita->penulis_berita);
			


			$kolom++;
			$no++;    
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Berita.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}

	// public function tambahBerita()
	// {
	
	// 	$tgl_berita = $this->input->post('tgl_berita');
	// 	$isi_berita = $this->input->post('isi_berita');
	// 	$penulis_berita = $this->input->post('penulis_berita');
	// 	$status_berita = $this->input->post('status_berita');

	// 	$data = array(
	
	// 		'tgl_berita' => $tgl_berita,
	// 		'isi_berita' => $isi_berita,
	// 		'penulis_berita' => $penulis_berita,
	// 		'status_berita' => $status_berita
	// 	);
	// 	$this->M_berita->input($data);
	// 	redirect('admin/Berita');
	// }

	// public function hapus($id)
	// {
	// 	$this->M_berita->hapus($id);
	// 	redirect('admin/Berita');
	// }

	// public function edit($id_berita)
	// {
	// 	$data['berita'] = $this->db->get_where('tb_berita', ['id_berita' => $id_berita])->row_array();
	// 	$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
	// 	$this->load->view('V_edit_berita', $data);
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/footer', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// }

	// public function prosesEdit()
	// {
	// 	$tgl_berita = $this->input->post('tgl_berita');
	// 	$isi_berita = $this->input->post('isi_berita');
	// 	$penulis_berita = $this->input->post('penulis_berita');
	// 	$status_berita = $this->input->post('status_berita');
	// 	$id_berita = $this->input->post('id_berita');

	// 	$data = array(
	
	// 		'tgl_berita' => $tgl_berita,
	// 		'isi_berita' => $isi_berita,
	// 		'penulis_berita' => $penulis_berita,
	// 		'status_berita' => $status_berita,
	// 	);
	// 	$this->db->where('id_berita', $id_berita);
 //        $this->db->update('tb_berita', $data);
	// 	redirect('admin/Berita');
	// }

	// public function editForm()
	// {
	// 	$id_berita = $this->input->post('id_berita');
	// 	$data['data_berita'] = $this->M_berita->beritaId($id_berita);
	// 	$this->load->view('V_edit_berita', $data);
	// }
}