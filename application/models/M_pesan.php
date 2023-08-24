<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {
	private $table 	= 'kontak';
	private $pk 	= 'id_kontak';

	public function GetAll()
	{
		$this->db->order_by($this->pk, 'desc');
		return $this->db->get($this->table);
	}

	public function detail($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

	public function delete($data)
	{
		$this->db->where($data);
		return $this->db->delete($this->table);
	}

	public function search($data){
		$this->db->like($this->pk, $data);
		$this->db->or_like('nama_admin', $data);
		$this->db->or_like('hp_admin', $data);
    $this->db->or_like('email_admin', $data);
		return $this->db->get($this->table);
	}

}
