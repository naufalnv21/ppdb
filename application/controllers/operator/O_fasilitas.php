<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/**
 * 
 */
class O_fasilitas extends CI_Controller
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

		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_fasilitas', $data);
		$this->load->view('operator/footer', $data);
	}
	public function tambahFasilitas()
	{
		$nama_fasilitas = $this->input->post('nama_fasilitas');
		$deskripsi_fasilitas = $this->input->post('deskripsi_fasilitas');
		$by_fasilitas = $this->input->post('by_fasilitas');
		
		$config['upload_path'] = './upload/fasilitas/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_fasilitas')) {
        	$data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'foto_fasilitas' => 'kosong'
		);	
		$this->M_fasilitas->input($data);
		redirect('operator/O_fasilitas');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'foto_fasilitas' => $result1
		);	
		$this->M_fasilitas->input($data);
		redirect('operator/O_fasilitas');
        }	
	}
	public function hapus($id)
	{
		$this->M_fasilitas->hapus($id);
		redirect('operator/O_fasilitas');
	}

	public function edit($id_fasilitas)
	{
		$data['fasilitas'] = $this->db->get_where('tb_fasilitas', ['id_fasilitas' => $id_fasilitas])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_fasilitas', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
	}

	public function prosesEdit()
	{
		$nama_fasilitas = $this->input->post('nama_fasilitas');
		$deskripsi_fasilitas = $this->input->post('deskripsi_fasilitas');
		$by_fasilitas = $this->input->post('by_fasilitas');
		
		$id_fasilitas = $this->input->post('id_fasilitas');
		$config['upload_path'] = './upload/fasilitas/';
        $config['allowed_types'] = 'pdf|img|jpg|png';

         $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_fasilitas')) {
        	$data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'id_fasilitas' => $id_fasilitas,
			'foto_fasilitas' => 'kosong'
		);	
		$this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->update('tb_multimedia', $data);
		redirect('operator/O_multimedia');
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_fasilitas' => $nama_fasilitas,
			'deskripsi_fasilitas' => $deskripsi_fasilitas,
			'by_fasilitas' => $by_fasilitas,
			'id_fasilitas' => $id_fasilitas,
			'foto_fasilitas' => $result1
		);	
		$this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->update('tb_fasilitas', $data);
		redirect('operator/O_fasilitas');
        }
    }

    public function editForm()
	{
		$id_fasilitas = $this->input->post('id_fasilitas');
		$data['data_fasilitas'] = $this->M_fasilitas->fasilitasId($id_fasilitas);
		$this->load->view('operator/V_edit_fasilitas', $data);
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