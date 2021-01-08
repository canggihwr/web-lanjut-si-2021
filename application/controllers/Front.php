<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front_m');
	}

	public function index()
	{
		$data_brg['brg'] = $this->front_m->getAll();

		$this->load->view('templates/header');
		$this->load->view('frontend/v_front', $data_brg);
		$this->load->view('templates/footer');
	}
}