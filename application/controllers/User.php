<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	private $view  	= "backend/v_user/";
	private $redirect 	= "User";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_user');
		IsAdmin();
	}

	public function index(){
		if ($this->input->get('search')) {
			$read = $this->M_user->search($this->input->get('search'));
		}else{
			$read = $this->M_user->GetAll();
		}
		$data = array(
			'judul'	=> "Data Member",
			'sub'	=> "Lihat Member",
			'read'=> $read,
			'sidebar' => 'user'
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "Data Member",
			'sub'	=> "Ubah Data Member",
			'edit' 	=> $this->M_user->edit($kd),
			'sidebar' => 'user'
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update(){
	$kd = $this->uri->segment(3);
{
		$data = array(
			'username'=> $this->input->post('username'),
			'email_user'=> $this->input->post('email_user'),
			'hp_user'=> $this->input->post('hp_user')
		);
	}
	$this->M_user->update($kd,$data);
	$this->session->set_flashdata('message_true','Data Member telah diperbaharui');
	redirect($this->redirect,'refresh');
	}

	public function delete(){
	$kd = $this->uri->segment(3);
	$data = array(
		'id_user' => $kd
	);
	$this->M_user->delete($data);
	$this->session->set_flashdata('message_true','Data telah dihapus');
	redirect($this->redirect,'refresh');
	}

}
