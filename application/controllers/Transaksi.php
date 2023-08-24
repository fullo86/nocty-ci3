<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	private $view  	= "backend/v_transaksi/";
	private $redirect 	= "Transaksi";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_transaksi');
		$this->load->helper('number');
		IsAdmin();
	}

	public function index(){
		if ($this->input->get('search')) {
			$read = $this->M_transaksi->search($this->input->get('search'));
		}else{
			$read = $this->M_transaksi->GetAll();
		}
		$data = array(
			'judul'	=> "Transaksi",
			'sub'	=> "Lihat Rincian Transaksi",
			'read'=> $read,
			'sidebar' => 'transaksi'
		);

		$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function delete(){
		$kd = $this->uri->segment(3);
		$data = array(
			'order_id' => $kd
		);
		$this->M_transaksi->delete($data);
		$this->session->set_flashdata('message_true','Data telah dihapus');
		redirect($this->redirect,'refresh');
	}
}
