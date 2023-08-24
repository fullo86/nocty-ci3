<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {
	private $table 	= 'booking';
	private $pk 	= 'id_booking';

	public function finish($data){
		$add_book = $this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function detail($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}
	

}
