<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function jurusan()
	{
		echo 'D3 SISTEM INFORMASI';
	}

	public function lain()
	{
		echo 'METHOD DALAM KELAS LAIN (Mahasiswa)';
	}

	public function index()
	{
		$data['nama'] = 'Canggih';
		$data['nama2'] = 'Wahyu';
		$data['nama3'] = 'Rinaldi';
		$data['nim'] = '1901050017';
		$data['nim2'] = '1901050036';
		$data['nim3'] = '1901050099';
		$data['alamat'] = 'Kekalik';
		$data['alamat2'] = 'Mataram';
		$data['alamat3'] = 'Kekalik Mataram';
		$data['jurusan'] = 'D3 Sistem Informasi';
		$data['umur'] = '19';
		$this->load->view('mahasiswa/v_index', $data);
	}

	public function table()
	{
		$data_mhs['mhs'] = $this->m_mahasiswa->getAll();
		// var_dump($data);
		$this->load->view('mahasiswa/v_mahasiswa', $data_mhs);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa/v_tambah');
	}

	public function proses_tambah()
	{
		$nim = $this->input->post('tnim');
		$nama = $this->input->post('tnama');
		$jurusan = $this->input->post('tjurusan');
		$alamat = $this->input->post('talamat');
		$umur = $this->input->post('tumur');

		$data_input = ['nim' => $nim,'nama' => $nama,'jurusan' => $jurusan,'alamat' => $alamat,'umur' => $umur];

		$simpan = $this->m_mahasiswa->add($data_input);
		redirect('Mahasiswa/table');
	}

	public function delete($id)
	{
		$this->load->model('m_mahasiswa');
		$this->m_mahasiswa->del($id);
		redirect('Mahasiswa/table');
	}
}
