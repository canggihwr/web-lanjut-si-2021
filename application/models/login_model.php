<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	private $table = 'login';

	public function getlogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get($this->table);
	}
}