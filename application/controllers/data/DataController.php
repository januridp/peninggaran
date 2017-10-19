<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('templates/vHeader');
		$this->load->view('data/vDataEntry');
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
}
