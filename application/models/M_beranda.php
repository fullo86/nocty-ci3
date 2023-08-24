<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

	public function total($table){
			$query = $this->db->get($table)->num_rows();
			return $query;
	}

	public function akun($user)
	{
		$this->db->where('kd_admin', $user);
		return $this->db->get('admin')->row_array();
	}


}
