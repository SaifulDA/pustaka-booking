<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class ModelKategori extends CI_Model
{

	public function getAll()
	{
		return $this->db->get('kategori');
	}

	public function getWhere($where = Null)
	{
		return $this->db->get('kategori', $where);
	}

	public function inData($data)
	{
		$this->db->insert('kategori', $data);
	}

	public function upData($data, $where)
	{
		$this->db->update('kategori', $data, $where);
	}

	public function delData($where)
	{
		$this->db->delete('kategori', $where);
	}
}
