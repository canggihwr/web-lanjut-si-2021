<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AModel extends CI_Model {

	private $table = 'tabel_a';

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}

	public function add($data_a)
	{
		$this->db->insert($this->table, $data_a);
	}

	public function del($id)
	{
		$this->db->where('id_017' ,$id);
		$this->db->delete('tabel_a');
	}

}