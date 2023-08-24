<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {
	private $view  	= "backend/v_pemesanan/";
	private $redirect 	= "Booking";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_booking');
		$this->load->model('M_service');
		IsAdmin();
	}

	public function index(){
		$service = $this->M_service->get_all();

		$service_data = [];
		foreach ($service->result_array() as $service_detail) {
			$service_data[$service_detail['id_service']] = $service_detail['service'];
		}

		$data = array(
			'judul'	=> "Data Pemesanan",
			'sub'	=> "Lihat Data Pemesanan",
			'service_data' => $service_data,
			'sidebar' => 'booking'
		);
		$data['booking'] = $this->M_booking->join();
		$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function ubah(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "Data Pemesanan",
			'sub'	=> "Ubah Data Pemesanan",
			'ubah' 	=> $this->M_booking->ubah($kd),
			'sidebar' => 'booking'
		);
	$this->template->load('backend/template',$this->view.'ubah', $data);
	}

	public function update(){
	$kd = $this->uri->segment(3);
{
		$data = array(
			'nama_pemesan'=> $this->input->post('nama_pemesan'),
			'no_hp'=> $this->input->post('no_hp'),
			'email_pemesan'=> $this->input->post('email_pemesan'),
			'waktu_pemesanan'=> $this->input->post('waktu_pemesanan'),
			'jam_kedatangan'=> $this->input->post('jam_kedatangan')
		);
	}
	$this->M_booking->update($kd,$data);
	$this->session->set_flashdata('message_true','Data Pemesanan Berhasil diperbaharui');
	redirect($this->redirect,'refresh');
	}

	public function delete(){
	$kd = $this->uri->segment(3);
	$data = array(
		'id_booking' => $kd
	);
	$this->M_booking->delete($data);
	$this->session->set_flashdata('message_true','Data telah dihapus');
	redirect($this->redirect,'refresh');
	}

}
