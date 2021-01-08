<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class front_m extends CI_Model {

	private $table = 'tabel_a';

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}
}