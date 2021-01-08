<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AModel');
	}

	public function barang()
	{
		$data_brg['brg'] = $this->AModel->getAll();
		// var_dump($data_brg);
		$this->load->view('mahasiswa/v_barang', $data_brg);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa/v_tambah');
	}

	public function proses()
	{
		$id = $this->input->post('tid');
		$merek = $this->input->post('tmerek');
		$jenis = $this->input->post('tjenis');
		$stok = $this->input->post('tstok');

		$data_a = ['id_017' => $id,'merek' => $merek,'jenis' => $jenis,'stok' => $stok];

		$simpan = $this->AModel->add($data_a);
		redirect('AController/barang');
	}

	public function delete($id_del)
	{
		$this->load->model('AModel');
		$this->AModel->del($id_del);
		redirect('AController/barang');
	}
}
