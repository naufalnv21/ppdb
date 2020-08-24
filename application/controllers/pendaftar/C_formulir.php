<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_formulir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_formulir');
    $this->load->model('M_register');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['title'] = 'Formulir Pendaftaran';
		$data['subtitle'] = 'Pendaftaran SMK RISTEK INDRAMAYU';
		$data['content'] = 'pendaftar/form_daftar';

    $id_register = $this->session->userdata('id_register');
    $data['notif'] = $this->db->get('tb_notif')->result();
    $data['count'] = $this->M_register->getCountNotif($id_register);

		$data['user'] = $this->db->get_where('tb_register', ['nama_register' => $this->session->userdata('nama_register')])->row_array();
    $data['formulir'] = $this->M_formulir->jurusan();

		$this->load->view('pendaftar/header', $data); 
		$this->load->view('pendaftar/menu', $data); 
		$this->load->view('pendaftar/template', $data);
		$this->load->view('pendaftar/footer', $data);
		
	}
	public function insertFormulir()
	{
        if(!empty($this->session->userdata('username_register'))){


        $id_jurusan = $this->input->post('id_jurusan');
        $nik_pendaftar = $this->input->post('nik_pendaftar');
        $skhun_pendaftar = $this->input->post('skhun_pendaftar');
        $nama_pendaftar = $this->input->post('nama_pendaftar');
        $jk_pendaftar = $this->input->post('jk_pendaftar');
        $ttl_pendaftar = $this->input->post('ttl_pendaftar');
        $almt_jl_pendaftar = $this->input->post('almt_jl_pendaftar');
        $almt_desa_pendaftar = $this->input->post('almt_desa_pendaftar');
        $almt_rt_rw_pendaftar = $this->input->post('almt_rt_rw_pendaftar');
        $almt_kec_pendaftar = $this->input->post('almt_kec_pendaftar');
        $almt_kab_pendaftar = $this->input->post('almt_kab_pendaftar');
        $telp_hp_pendaftar = $this->input->post('telp_hp_pendaftar');
        $asal_sekolah_pendaftar = $this->input->post('asal_sekolah_pendaftar');
        $no_ijazah_pendaftar = $this->input->post('no_ijazah_pendaftar');
        $thn_lulus_pendaftar = $this->input->post('thn_lulus_pendaftar');
        $nama_ayah_pendaftar = $this->input->post('nama_ayah_pendaftar');
        $nama_ibu_pendaftar = $this->input->post('nama_ibu_pendaftar');
        $prj_orang_tua_pendaftar = $this->input->post('prj_orang_tua_pendaftar');
        $ppn_orang_tua_pendaftar = $this->input->post('ppn_orang_tua_pendaftar');
        $pendidikan_orang_tua_pendaftar = $this->input->post('pendidikan_orang_tua_pendaftar');
        $almt_jl_orang_tua_pendaftar = $this->input->post('almt_jl_orang_tua_pendaftar');
        $almt_desa_orang_tua_pendaftar = $this->input->post('almt_desa_orang_tua_pendaftar');
        $almt_rt_rw_orang_tua_pendaftar = $this->input->post('almt_rt_rw_orang_tua_pendaftar');
        $almt_kec_orang_tua_pendaftar = $this->input->post('almt_kec_orang_tua_pendaftar');
        $almt_kab_orang_tua_pendaftar = $this->input->post('almt_kab_orang_tua_pendaftar');
        $telp_hp_orang_tua_pendaftar = $this->input->post('telp_hp_orang_tua_pendaftar');
        $check = $this->db->query("select * from tb_pendaftar where nik_pendaftar='$nik_pendaftar'")->num_rows();
        $config['upload_path'] = './upload/pendaftar/kk/';
          $config['allowed_types'] = 'pdf|img|doc|docx|jpg|png';
          $config['file_name']            = $this->input->post('nik_pendaftar');
          $config['overwrite']          = true;
          $config['max_size']             = 1024; // 1MB
       // $config['max_width']            = 1024;
       // $config['max_height']           = 768;
        // load library upload
        $this->load->library('upload', $config,'kkupload'); 
        $this->kkupload->initialize($config,'kkupload');
        $this->kkupload->do_upload('file_kk_pendaftar');
        $result1 = $this->kkupload->data();

          //BATES

        $config['upload_path'] = './upload/pendaftar/akte/';
        $config['allowed_types'] = 'pdf|img|doc|docx|jpg|png';
        $config['file_name']            = $this->input->post('nik_pendaftar');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // load library upload

        $this->load->library('upload', $config,'akteupload');   
        $this->akteupload->initialize($config,'akteupload');
        $this->akteupload->do_upload('file_akte_pendaftar' );
        $result2 = $this->akteupload->data();

        //BATES

        $config['upload_path'] = './upload/pendaftar/ktp_orangtua/';
        $config['allowed_types'] = 'pdf|img|doc|docx|jpg|png';
        $config['file_name']            = $this->input->post('nik_pendaftar');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // load library upload

        $this->load->library('upload', $config,'ktpupload');    
        $this->ktpupload->initialize($config,'ktpupload');
        $this->ktpupload->do_upload('file_ktp_orang_tua_pendaftar');
        $result3 = $this->ktpupload->data();


        //BATES
        $config['upload_path'] = './upload/pendaftar/ijazah/';
        $config['allowed_types'] = 'pdf|img|doc|docx|jpg|png';
        $config['file_name']            = $this->input->post('nik_pendaftar');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // load library upload

        $this->load->library('upload', $config,'ijazahupload'); 
        $this->ijazahupload->initialize($config,'ijazahupload');
        $this->ijazahupload->do_upload('file_ijazah_pendaftar' );
        $result4 = $this->ijazahupload->data();

        //BATES

        $config['upload_path'] = './upload/pendaftar/skhun/';
        $config['allowed_types'] = 'pdf|img|doc|docx|jpg|png';
        $config['file_name']            = $this->input->post('nik_pendaftar');
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // load library upload

        $this->load->library('upload', $config,'skhunupload');  
        $this->skhunupload->initialize($config,'skhunupload');
        $this->skhunupload->do_upload('file_skhun_pendaftar' );
        $result5 = $this->skhunupload->data();  

        //BATES

        $config['upload_path'] = './upload/pendaftar/sktm/';
        $config['allowed_types'] = 'pdf|img|doc|docx|jpg|png';
        $config['file_name'] = $this->input->post('nik_pendaftar');
        $config['overwrite'] = true;
        $config['max_size'] = 1024;


        $this->load->library('upload', $config,'sktmupload');
        $this->sktmupload->initialize($config,'sktmupload');
        $this->sktmupload->do_upload('file_sktm_pendaftar');
        $result6 = $this->sktmupload->data();

        $data = array(
          'id_register' => $this->session->userdata('id_register'),
          'id_jurusan' => $id_jurusan,
          'nik_pendaftar' => $nik_pendaftar,
          'skhun_pendaftar' => $skhun_pendaftar,
          'nama_pendaftar' => $nama_pendaftar,
          'jk_pendaftar' => $jk_pendaftar,
          'ttl_pendaftar' => $ttl_pendaftar,
          'almt_jl_pendaftar' => $almt_jl_pendaftar,
          'almt_desa_pendaftar' => $almt_desa_pendaftar,
          'almt_rt_rw_pendaftar' => $almt_rt_rw_pendaftar,
          'almt_kec_pendaftar' => $almt_kec_pendaftar,
          'almt_kab_pendaftar' => $almt_kab_pendaftar,
          'telp_hp_pendaftar' => $telp_hp_pendaftar,
          'asal_sekolah_pendaftar' => $asal_sekolah_pendaftar,
          'no_ijazah_pendaftar' => $no_ijazah_pendaftar,
          'thn_lulus_pendaftar' => $thn_lulus_pendaftar,
          'nama_ayah_pendaftar' => $nama_ayah_pendaftar,
          'nama_ibu_pendaftar' => $nama_ibu_pendaftar,
          'prj_orang_tua_pendaftar' => $prj_orang_tua_pendaftar,
          'ppn_orang_tua_pendaftar' => $ppn_orang_tua_pendaftar,
          'pendidikan_orang_tua_pendaftar' => $pendidikan_orang_tua_pendaftar,
          'almt_jl_orang_tua_pendaftar' => $almt_jl_orang_tua_pendaftar,
          'almt_desa_orang_tua_pendaftar' => $almt_desa_orang_tua_pendaftar,
          'almt_rt_rw_orang_tua_pendaftar' => $almt_rt_rw_orang_tua_pendaftar,
          'almt_kec_orang_tua_pendaftar' => $almt_kec_orang_tua_pendaftar,
          'almt_kab_orang_tua_pendaftar' => $almt_kab_orang_tua_pendaftar,
          'telp_hp_orang_tua_pendaftar' => $telp_hp_orang_tua_pendaftar,
          'file_kk_pendaftar' => $result1['file_name'],
          'file_akte_pendaftar' => $result2['file_name'],
          'file_ktp_orang_tua_pendaftar' => $result3['file_name'],
          'file_ijazah_pendaftar' => $result4['file_name'],
          'file_skhun_pendaftar' => $result5['file_name'],
          'file_sktm_pendaftar' => $result6['file_name']

      );
        $this->M_formulir->input($data);
        $this->load->view('pendaftar/berhasil_daftar');
    }
        else{
            echo "<script> alert('Harus Login Terlebih Dahulu!');window.history.go(-1)</script> ";
        }
    }

    public function cekNik($nik)
    {
      $this->db->select('*');
            $this->db->from('tb_pendaftar');
            $this->db->where('nik_pendaftar', $nik); // Cek berdasarkan nis
          

            $exist = $this->db->get()->row();

            // Jika kosong isi data
            if (empty($exist)){
              echo "kosong";
            }else{
              echo "ada";
            }
    }

}