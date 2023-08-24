<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BerandaUsr extends CI_Controller {
	private $view  	= "frontend/v_beranda/";
	private $redirect 	= "BerandaUsr";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_transaksi');
		$this->load->library('midtrans');

		$params = array('server_key' => 'SB-Mid-server-_k5RuqEQvdvhOAugY3oBfM5U', 'production' => false);
		$this->midtrans->config($params);

		$semuaTransaksi = $this->db->get('transaksi')->result();

		foreach ($semuaTransaksi as $transaksi) {
			$status  = $transaksi->status_code;
			$orderId = $transaksi->order_id;

			if ($status == '201') {
				$status = $this->midtrans->status($orderId);

				$midtransStatus = $status->status_code;

				if ($status != $midtransStatus) {
					$this->db->where('order_id', $orderId);
					$this->db->update('transaksi', ['status_code' => $midtransStatus]);
				}
			}
		}
	}

	public function index(){
		$this->template->load('frontend/template',$this->view.'read');
	}
}
