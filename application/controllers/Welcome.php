<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('halaman_awal');
	}

	public function index2()
	{
		$this->load->view('welcome_message');
	}

	public function contoh()
	{
		echo 'CONTOH METHOD LAIN';
	}

	public function parameter($param = null)
	{
		echo 'CONTOH METHOD DENGAN MENGAMBIL PARAMETER = '.$param;
	}
}
