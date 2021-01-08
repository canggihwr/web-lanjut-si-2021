<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mahasiswa extends CI_Model {

	private $table = 'mahasiswa';

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}

	public function add($data_input)
	{
		$this->db->insert($this->table, $data_input);
	}

	public function del($id)
	{
		$this->db->where('nim' ,$id);
		$this->db->delete('mahasiswa');
	}

}
