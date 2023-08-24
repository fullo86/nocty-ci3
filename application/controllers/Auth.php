<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	private $redirect 	= "Auth";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_auth');
		$this->load->library('session');

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

	public function index()
	{
		$this->session->sess_destroy();
		$data = array(
					'login' 		=> ''
					);
		$this->load->view('backend/login', $data);
	}

public function login()
	{
		error_reporting(0);
		$kd 	= $this->input->post('kd_admin');
		$pwd	= md5($this->input->post('pswd_admin'));
		$data = $this->M_auth->CekLogin('admin','kd_admin',$kd);
		//jika login
		if($data['pswd_admin'] == $pwd AND $data['kd_admin'] == $kd)
		{
			$array = array(
				'kd_admin' 	=> $data['kd_admin'],
				'img_admin' 	=> $data['img_admin'],
				'nama_admin' 	=> $data['nama_admin'],
				'IsAdmin'		=> 1
			);
				$this->session->set_userdata($array);
				$this->session->set_flashdata('message_true','Hai, '. $this->session->userdata('nama_admin') .' Selamat Datang dihalaman administartor');
				redirect('Beranda','refresh');
		}else{
			$this->session->set_flashdata('message_false','<center>Login Gagal!<br>UserName/Password Salah</center>');
			redirect('Auth','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth','refresh');
	}

}
