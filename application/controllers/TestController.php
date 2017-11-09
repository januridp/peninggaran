<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {
    function __construct(){
		 parent::__construct();
		 $this->load->database();
		 $this->load->library('unit_test');

	}

	public function index(){
		$data = array(
			'nik'            => '3174052605950001',
			'nama'           => 'Januri Dwi Prasetyo',
			'tempatlahir'    => 'Jakarta',
			'tanggallahir'   => '1995/05/26',
			'jeniskelamin'   => 'L',
			'alamat'         => 'Peninggaran Timur 3',
			'nomorrumah'     => '10D',
			'rt'             => '09',
			'rw'             => '009',
			'agama'          => 'Islam',
			'status'         => 'Belum Kawin',
			'pekerjaan'      => 'Web Developer',
			'kewarganegaraan'=> 'WNI',
			'kota'           => '3174',
			'kecamatan'      => '317405',
			'kelurahan'      => '3174051001',
			'kode' 			 => '1'
			);
		$test = $this->masuk($data);
		$testName = 'Testing Input Data';
		$testExpected = array(
			'nik'            => '3174052605950001',
			'nama'           => 'Januri Dwi Prasetyo',
			'tempatlahir'    => 'Jakarta',
			'tanggallahir'   => '1995/05/26',
			'jeniskelamin'   => 'L',
			'alamat'         => 'Peninggaran Timur 3',
			'nomorrumah'     => '10D',
			'rt'             => '09',
			'rw'             => '009',
			'agama'          => 'Islam',
			'status'         => 'Belum Kawin',
			'pekerjaan'      => 'Web Developer',
			'kewarganegaraan'=> 'WNI',
			'kota'           => '3174',
			'kecamatan'      => '317405',
			'kelurahan'      => '3174051001',
			'kode' 			 => '1'
			);
		
		echo $this->unit->run($test,$testName,$testExpected);
	}//end index

	function masuk($data){
		return json_encode($data);
	}
}
