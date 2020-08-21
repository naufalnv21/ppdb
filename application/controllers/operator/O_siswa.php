<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class O_siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		$this->load->model('M_excel');
		$this->load->model('M_broadcast');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$data['data_siswa'] = $this->db->get('tb_siswa')->result();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_siswa', $data);
		$this->load->view('operator/footer', $data);
		
	}

	public function tambahSiswa()
	{
		
		$nama_siswa = $this->input->post('nama_siswa');
		$jk_siswa = $this->input->post('jk_siswa');
		$kelas_siswa = $this->input->post('kelas_siswa');
		$jurusan_siswa = $this->input->post('jurusan_siswa');
		$alamat_siswa = $this->input->post('alamat_siswa');
		$telp_siswa = $this->input->post('telp_siswa');
		$id_siswa = $this->input->post('id_siswa');
		// $foto_guru = $this->input->post('foto_guru');
		$config['upload_path'] = './upload/siswa/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_siswa')) {	
        	
        } else {
            $result = $this->upload->data();
            $result1 =$result['file_name'];
            
            $data = array(
				
			'nama_siswa' => $nama_siswa,
			'jk_siswa' => $jk_siswa,
			'kelas_siswa' => $kelas_siswa,
			'jurusan_siswa' => $jurusan_siswa,
			'alamat_siswa' => $alamat_siswa,
			'telp_siswa' => $telp_siswa,
			'id_siswa' => $id_siswa,
			'foto_siswa' => $result1
		);	
		$this->M_siswa->input($data);
		redirect('operator/O_siswa');
        }	

	}

	public function hapus($id)
	{
		// if (!isset($id_guru)) show_404();

		// if($this->M_guru->hapus($id_guru)){
		// 	redirect(site_url('admin/guru'));
		// }
		// $id_guru = $this->input->post('id_guru');
		// $this->M_guru->hapus($id_guru);
		// $this->index();
		$this->M_siswa->hapus($id);
		redirect('operator/O_siswa');

	}

	public function edit($id_siswa)
	{
		$data['siswa'] = $this->db->get_where('tb_siswa', ['id_siswa' => $id_siswa])->row_array();
		$data['user'] = $this->db->get_where('tb_users', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('operator/V_edit_siswa', $data);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/footer', $data);
		$this->load->view('operator/sidebar', $data);
		
	}

	public function prosesEdit()
	{
		$nama_siswa = $this->input->post('nama_siswa');
		$jk_siswa = $this->input->post('jk_siswa');
		$kelas_siswa = $this->input->post('kelas_siswa');
		$jurusan_siswa = $this->input->post('jurusan_siswa');
		$alamat_siswa = $this->input->post('alamat_siswa');
		$telp_siswa = $this->input->post('telp_siswa');
		$id_siswa = $this->input->post('id_siswa');
		$config['upload_path'] = './upload/siswa/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_siswa')) {
        	$data = array(
			'nama_siswa' => $nama_siswa,
			'jk_siswa' => $jk_siswa,
			'kelas_siswa' => $kelas_siswa,
			'jurusan_siswa' => $jurusan_siswa,
			'alamat_siswa' => $alamat_siswa,
			'telp_siswa' => $telp_siswa,
			
		);
        	$this->db->where('id_siswa', $id_siswa);
        $this->db->update('tb_siswa', $data);
        redirect('operator/O_siswa');
        } else {

            $result = $this->upload->data();
            $result1 =$result['file_name'];

		$data = array(
			'nama_siswa' => $nama_siswa,
			'jk_siswa' => $jk_siswa,
			'kelas_siswa' => $kelas_siswa,
			'jurusan_siswa' => $jurusan_siswa,
			'alamat_siswa' => $alamat_siswa,
			'telp_siswa' => $telp_siswa,
			'foto_siswa' => $result1
		);
		$this->db->where('id_siswa', $id_siswa);
        $this->db->update('tb_siswa', $data);
	redirect('operator/O_siswa');
		}
	}

	public function editForm()
	{
		$id_guru = $this->input->post('id_siswa');
		$data['data_siswa'] = $this->M_siswa->siswaId($id_siswa);
		$this->load->view('operator/V_edit_siswa', $data);
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
		$this->load->view('operator/header', $data);
		$this->load->view('operator/navbar', $data);
		$this->load->view('operator/sidebar', $data);
		$this->load->view('operator/V_broadcast', $data);
		$this->load->view('operator/footer', $data);
	}

	public function tambahBroadcast()
	{
		$tele_id = $this->input->post('tele_id');
		$judul_broadcast = $this->input->post('judul_broadcast');
		$isi_broadcast = $this->input->post('isi_broadcast');
		$data = array(
			'tele_id' => $tele_id,
			'judul_broadcast' => $judul_broadcast,
			'isi_broadcast' => $isi_broadcast
		);
		$this->M_broadcast->input($data);
		redirect('operator/O_siswa');
	}

	public function hapusBroadcast($id)
	{
		$this->M_broadcast->hapus($id);
		redirect('operator/O_siswa');

	}

	public function sendMessage($tele_id)
	{
		// $tele_id = $this->uri->segment(3);
		// $isi_broadcast = $this->uri->segment(4);

		$data=$this->db->query("SELECT * FROM tb_broadcast WHERE tele_id='$tele_id'")->result();
		$isi=$data[0]->isi_broadcast;
		// $tele_id=tele_id;
		
		// $telegram_id= "-409298905";
		$message_text= $isi;
		// var_dump($messa/ge_text);exit();
		$secret_token= "1302362078:AAE-6lCIk019_3zlAFRA4wqCGMs8G9zgeqA";
		$url= "https://api.telegram.org/bot".$secret_token."/sendMessage?parse_mode=markdown&chat_id=".$tele_id;
    	$url= $url."&text=" . urlencode($message_text);
    	$ch=curl_init();
   	$optArray=array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch,$optArray);
    $result=curl_exec($ch);
    curl_close($ch);


	echo "<script>alert('Pesan berhasil terkirim!'); window.history.go(-1);</script>";
	}
}