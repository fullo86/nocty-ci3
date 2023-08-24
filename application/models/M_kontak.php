<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model {
	private $table 	= 'kontak';
	private $pk 	= 'id_kontak';

	public function save($data){
		return $this->db->insert($this->table, $data);
	}

}
