<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataController extends CI_Controller {
	
	public function __construct()
  {
    parent::__construct();
    $this->load->model('Daerah_model');
	$this->load->model('Data_model');
  }

	public function index()
	{
		$this->load->view('templates/vHeader');
		$this->load->view('data/vBody');
		$this->load->view('templates/vFooter');
	}
	
	public function view(){
		$this->load->view('templates/vHeader');
		$this->load->view('data/vDataView');
		$this->load->view('templates/vFooter');
	}
	
	public function entry(){
		$data['provinsi']=$this->Daerah_model->getProv();
		$this->load->view('templates/vHeader');
		$this->load->view('data/vDataEntry', $data);
		$this->load->view('templates/vFooter');
	}
	
	public function update(){
		$this->load->view('templates/vHeader');
		$this->load->view('data/vDataUpdate');
		$this->load->view('templates/vFooter');
	}
	
	public function hapus(){
		$this->load->view('templates/vHeader');
		$this->load->view('data/vDataHapus');
		$this->load->view('templates/vFooter');
	}
	
	public function simpan(){
		
		$data = array(
		'nik'            => $this->input->post('nik'),
		'nama'           => strtoupper($this->input->post('nama')),
		'tempatlahir'    => strtoupper($this->input->post('tempatlahir')),
		'tanggallahir'   => $this->input->post('tanggallahir'),
		'jeniskelamin'   => $this->input->post('jeniskelamin'),
		'alamat'         => strtoupper($this->input->post('alamat')),
		'nomorrumah'     => strtoupper($this->input->post('nomorrumah')),
		'rt'             => $this->input->post('rt'),
		'rw'             => $this->input->post('rw'),
		'agama'          => strtoupper($this->input->post('agama')),
		'status'         => strtoupper($this->input->post('status')),
		'pekerjaan'      => strtoupper($this->input->post('pekerjaan')),
		'kewarganegaraan'=> strtoupper($this->input->post('kewarganegaraan')),
		'kota'           => $this->input->post('kota'),
		'kecamatan'     => $this->input->post('kec'),
		'kelurahan'     => $this->input->post('kel'),
		'kode' => $this->input->post('kode')
        );

        $this->db->insert('kependudukan', $data);
        
        echo "<script>alert('Berhasil Input Data');window.location.href='".base_url('data/entry')."';</script>";
	}
	
	public function get(){
		$ambilData = $this->Data_model->getDatas();
	}//end get
}
