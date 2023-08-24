<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
	private $view  	= "backend/v_beranda/";
	private $redirect 	= "Beranda";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_beranda');
		IsAdmin();
	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA ADMIN",
			'sub'	=> "Ubah Admin",
			'edit' 	=> $this->M_admin->edit($kd)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function index(){
		$user= $this->session->userdata('kd_admin');
		//$user = $this->M_beranda->UserLogin($user);
		$data = array(
			'judul'	=> "Beranda",
			'sub'	=> "Halaman Beranda",
			'total_admin' 	=> $this->M_beranda->total('admin'),
			'total_user' 	=> $this->M_beranda->total('user'),
			'total_transaksi' 	=> $this->M_beranda->total('transaksi'),
			'total_booking' 	=> $this->M_beranda->total('booking'),
			'total_service' 	=> $this->M_beranda->total('service'),
			'total_kontak' 	=> $this->M_beranda->total('kontak'),
			'akun' 	=> $this->M_beranda->akun($user),
			'sidebar' => 'beranda'
		);
	$this->template->load('backend/template',$this->view.'read', $data);
	}

}
