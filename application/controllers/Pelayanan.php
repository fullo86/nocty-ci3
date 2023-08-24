<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelayanan extends CI_Controller {
	private $view  	= "backend/v_pelayanan/";
	private $redirect 	= "Pelayanan";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_pelayanan');
		IsAdmin();
	}

	public function index(){
		if ($this->input->get('search')) {
			$read = $this->M_pelayanan->search($this->input->get('search'));
		}else{
			$read = $this->M_pelayanan->GetAll();
		}
		$data = array(
			'judul'	=> "Pelayanan",
			'sub'	=> "Lihat Pelayanan",
			'read'=> $read,
			'sidebar' => 'pelayanan'
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create(){
		$data = array(
			'judul'	=> "Pelayanan",
			'sub'	=> "Tambah Pelayanan",
			'create' 	=> '',
			'sidebar' => 'pelayanan'
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save(){
		$data = array(
			'id_service'=> $this->input->post('id_service'),
			'service'=> $this->input->post('service'),
			'jml_bayar'=> $this->input->post('jml_bayar'),
		);
		$this->M_pelayanan->save($data);
		$this->session->set_flashdata('message_true','Data berhasil tersimpan');
		redirect($this->redirect,'refresh');
	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "Pelayanan",
			'sub'	=> "Ubah Pelayanan",
			'edit' 	=> $this->M_pelayanan->edit($kd),
			'sidebar' => 'pelayanan'
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update(){
	$kd = $this->uri->segment(3);
{
		$data = array(
			'service'=> $this->input->post('service'),
			'jml_bayar'=> $this->input->post('jml_bayar')
		);
	}
	$this->M_pelayanan->update($kd,$data);
	$this->session->set_flashdata('message_true','Data Pelayanan telah diperbaharui');
	redirect($this->redirect,'refresh');
	}

	public function delete(){
	$kd = $this->uri->segment(3);
	$data = array(
		'id_service' => $kd
	);
	$this->M_pelayanan->delete($data);
	$this->session->set_flashdata('message_true','Data telah dihapus');
	redirect($this->redirect,'refresh');
	}

}
