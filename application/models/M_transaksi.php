<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {
	private $table 	= 'transaksi';
	private $pk 	= 'order_id';


	public function GetAll()
	{
		$this->db->select('transaksi.*, booking.jml_bayar as jumlah_bayar, booking.nama_pemesan as nama_pms, booking.id_user');
		$this->db->join('booking','booking.id_booking = transaksi.booking_id', 'inner');
		$this->db->from('transaksi');
		$this->db->order_by('transaksi.transaction_time', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function laporanPenjualan($bulan = NULL, $tahun = NULL)
	{
		if ($bulan == NULL) {
			$bulan = date('m');
		}

		if ($tahun == NULL) {
			$tahun = date('Y');
		}
		$this->db->select('transaksi.*, booking.jml_bayar as jumlah_bayar, booking.nama_pemesan as nama_pms, booking.id_user');
		$this->db->join('booking','booking.id_booking = transaksi.booking_id', 'inner');
		$this->db->from('transaksi');

		$this->db->where('MONTH(transaksi.transaction_time)',$bulan);
		$this->db->where('YEAR(transaksi.transaction_time)',$tahun);

		$this->db->order_by('transaksi.transaction_time', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function transaksiSuksesPerTanggal($tanggal)
	{
		$this->db->select('transaksi.*, booking.jml_bayar as jumlah_bayar, booking.nama_pemesan as nama_pms, booking.id_user');
		$this->db->join('booking','booking.id_booking = transaksi.booking_id', 'inner');
		$this->db->from('transaksi');

		$this->db->like('transaksi.transaction_time', $tanggal, 'after');
		$this->db->where('transaksi.status_code', '200');

		$this->db->order_by('transaksi.transaction_time', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function result($data)
	{
	return $this->db->insert($this->table, $data);
}

	public function delete($data)
	{
		$this->db->where($data);
		return $this->db->delete($this->table);
	}

}
