<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/vHeader');
		$this->load->view('home/vBody');
		$this->load->view('templates/vFooter');
	}
	
}
