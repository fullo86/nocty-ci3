<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pesan extends CI_Controller {
	private $view  	= "backend/v_pesan/";
	private $redirect 	= "Pesan";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_pesan');
		IsAdmin();
	}

	public function index(){
		if ($this->input->get('search')) {
			$read = $this->M_pesan->search($this->input->get('search'));
		}else{
			$read = $this->M_pesan->GetAll();
		}
		$data = array(
			'judul'	=> "Pesan",
			'sub'	=> "Lihat Pesan",
			'read'=> $read,
			'sidebar' => 'pesan'
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function detail(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "Pesan",
			'sub'	=> "Pesan",
			'edit' 	=> $this->M_pesan->detail($kd),
			'sidebar' => 'pesan'
		);
	$this->template->load('backend/template',$this->view.'detail', $data);
	}

	public function delete(){
	$kd = $this->uri->segment(3);
	$data = array(
		'id_kontak' => $kd
	);
	$this->M_pesan->delete($data);
	$this->session->set_flashdata('message_true','Pesan telah dihapus');
	redirect($this->redirect,'refresh');
	}

}
