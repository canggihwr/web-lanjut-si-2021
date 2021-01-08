<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// $data_brg['brg'] = $this->login_model->getAll();
		$this->load->view('templates/header');
		$this->load->view('login/v_login');
		$this->load->view('templates/footer');
	}

	public function verifikasi()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('login_model');
		$verifikasi = $this->login_model->getlogin($username, $password);

		if ($verifikasi->num_rows() > 0) {
			$sesi = $verifikasi->row_object();
			$data_session = [
				'nama_pengguna' => $sesi->nama_lengkap,
				'hak_pengguna' => $sesi->hak_akses
			];

			$this->session->set_userdata($data_session);
			redirect('AController/index');
		} else {
			$this->session->set_flashdata('pesan', 'MAAF Username atau Password anda salah!');
			redirect('login/index');
		}
	}
}
