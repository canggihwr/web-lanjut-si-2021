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

	public function getid($id)
	{
		return $this->db->get_where('tabel_a', ['id_017' => $id])->row_array();
	}

	public function edit($data_a)
	{
		$id = $data_a['id_017'];

		$this->db->where('id_017' ,$id);
		$this->db->update($this->table, $data_a);
	}

	public function search($keyword)
	{
		$key = $keyword;
		$this->db->like('id_017', $key);
		$this->db->or_like('merek', $key);
		$this->db->or_like('jenis', $key);
		$this->db->or_like('stok', $key);
		return $this->db->get('tabel_a')->result();
	}

	public function count()
	{
		return $this->db->get('tabel_a')->num_rows();
	}

}