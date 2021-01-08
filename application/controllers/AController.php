<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AModel');
	}

	public function index()
	{
		$this->load->library('pagination');
		
		$config['base_url'] = 'http://localhost/ci/index.php/AController';
		$config['total_rows'] = $this->AModel->count();
		$config['per_page'] = 6;

		$data_brg['start'] = $this->uri->segment(3);

		

		$this->pagination->initialize($config);

		$this->load->view('templates/header');
		$data_brg['brg'] = $this->AModel->getAll($config['per_page'], $data_brg['start']);
		$key = $this->input->post('key');

		if ($this->input->post('key')) {
			$data_brg['brg'] = $this->AModel->search($key);
		}

		$this->load->view('mahasiswa/v_barang', $data_brg);
		$this->load->view('templates/footer');
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
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('AController/index');
	}

	public function delete($id_del)
	{
		$this->load->model('AModel');
		$this->AModel->del($id_del);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('AController/index');
	}

	public function edit($id)
	{
		$data_brg['brg'] = $this->AModel->getid($id);
		$this->load->view('mahasiswa/v_edit', $data_brg);
	}

	public function proses_edit()
	{
		$id = $this->input->post('tid');
		$merek = $this->input->post('tmerek');
		$jenis = $this->input->post('tjenis');
		$stok = $this->input->post('tstok');

		$data_a = ['id_017' => $id,'merek' => $merek,'jenis' => $jenis,'stok' => $stok];

		$simpan = $this->AModel->edit($data_a);
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('AController/index');
	}
}
