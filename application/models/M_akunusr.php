<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akunusr extends CI_Model {
	private $table 	= 'user';
	private $pk 	= 'id_user';

	public function save($data){
		return $this->db->insert($this->table, $data);
	}

	public function detail()
	{
		$this->db->select('user.*,booking.id_booking as id_booking, booking.nama_pemesan');
		$this->db->join('booking','user.id_booking = booking.id_booking');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function akun($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

	public function edit($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

	public function update($kd,$data){
		$this->db->where($this->pk, $kd);
		return $this->db->update($this->table, $data);
	}

	public function changepswd($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

	function CekPswd($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function uchangepswd($kd,$data){
		$this->db->where($this->pk, $kd);
		return $this->db->update($this->table, $data);
	}

	public function join()
	{
		$this->db->select('user.*,booking.service as service, booking.service');
		$this->db->join('booking','user.service = booking.service');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function reschedule($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

	public function updatedata($kd,$data){
		$this->db->where($this->pk, $kd);
		return $this->db->update($this->table, $data);
	}

	public function booking($id_user = ''){
		$this->db->where('id_user',$id_user);
		$this->db->order_by('id_booking','DESC');
		return $this->db->get('booking');
	}


}
