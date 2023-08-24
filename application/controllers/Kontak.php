<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {
	private $view  	= "frontend/v_kontak/";
	private $redirect 	= "Kontak";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_kontak');
	}

	public function index(){
	$this->template->load('frontend/template',$this->view.'kontak');
	}

	public function save(){
		$nama 	= $this->input->post('nama');
		$email	= $this->input->post('email');
		$no_hp	= $this->input->post('no_hp');
    $pesan	= $this->input->post('pesan');
{
		$data = array(
		'nama'=> $this->input->post('nama'),
		'email'=> $this->input->post('email'),
		'no_hp'=> $this->input->post('no_hp'),
    'pesan'=> $this->input->post('pesan')
		);
		$this->M_kontak->save($data);
		$this->session->set_flashdata('message_true','Terimakasih telah mengirimi kami pesan, Kami akan segera menghubungi anda');
		redirect('Kontak','refresh');
		}
	}


}
