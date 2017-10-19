<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {

	public function index()
	{
		$paket = $this->input->post();
			//kita bisa cetak ada variabel apa saja yang dikirimkan form
			echo '<pre>';
			print_r($paket);
			echo '</pre>';
	}
}
