<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {
	private $table 	= 'booking';
	private $pk 	= 'id_booking';

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

	public function join()
	{
		$this->db->select('booking.*,transaksi.order_id as order_id, transaksi.jml_bayar');
		$this->db->join('transaksi','booking.jml_bayar = transaksi.jml_bayar');
		$this->db->from('booking');
		$query = $this->db->get();
		return $query->result();
	}

	public function cekJam($tanggal, $jam)
	{
		$this->db->where('waktu_pemesanan', $tanggal);
		$this->db->where('jam_kedatangan', $jam);
		$this->db->from('booking');
		$total = $this->db->count_all_results();
		return $total;
	}

	public function ubah($kd)
	{
		$this->db->where($this->pk, $kd);
		return $this->db->get($this->table)->row_array();
	}

		public function update($kd,$data)
		{
			$this->db->where($this->pk, $kd);
			return $this->db->update($this->table, $data);
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

	public function get_by_user($id_user)
	{
		$this->db->select('booking.*,transaksi.order_id as order_id, transaksi.jml_bayar as total_bayar, transaksi.status_code');
		$this->db->join('transaksi','booking.id_booking = transaksi.booking_id');
		$this->db->where('booking.id_user', $id_user);
		$this->db->order_by('booking.waktu_pemesanan', 'ASC');
		$this->db->from('booking');
		$query = $this->db->get();
		return $query->result();
	}

	public function reschedule($idBooking)
	{
		$this->db->where($this->pk, $idBooking);
		return $this->db->get($this->table)->row_array();
	}
}
