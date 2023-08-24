<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	private $view  	= "backend/v_admin/";
	private $redirect 	= "Admin";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_admin');
		IsAdmin();
	}

	public function index(){
		if ($this->input->get('search')) {
			$read = $this->M_admin->search($this->input->get('search'));
		}else{
			$read = $this->M_admin->GetAll();
		}
		$data = array(
			'judul'	=> "Data Admin",
			'sub'	=> "Lihat Admin",
			'read'=> $read
		);

	$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function create(){
		$data = array(
			'judul'	=> "Data Admin",
			'sub'	=> "Tambah Admin",
			'create' 	=> ''
		);
	$this->template->load('backend/template',$this->view.'create', $data);
	}

	public function save(){
		$data = array(
			'kd_admin'=> $this->input->post('kd_admin'),
			'nama_admin'=> $this->input->post('nama_admin'),
			'email_admin'=> $this->input->post('email_admin'),
			'hp_admin'=> $this->input->post('hp_admin'),
			'img_admin'=>'0000_00_00.jpg',
			'pswd_admin'=> md5($this->input->post('pswd_admin')),
		);
		$this->M_admin->save($data);
		$this->session->set_flashdata('message_true','Data berhasil tersimpan');
		redirect($this->redirect,'refresh');
	}

	public function edit(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "Data Admin",
			'sub'	=> "Ubah Admin",
			'edit' 	=> $this->M_admin->edit($kd)
		);
	$this->template->load('backend/template',$this->view.'edit', $data);
	}

	public function update(){
	$kd = $this->uri->segment(3);
	//img_admin
	$name_imgadmin = $_FILES['img_admin']['name'];
	$type_imgadmin = $_FILES['img_admin']['type'];
	$tmp_imgadmin  = $_FILES['img_admin']['tmp_name'];
	//upload img
	if (!empty($tmp_imgadmin)){
		if ($type_imgadmin != "image/jpeg" AND $type_imgadmin != "image/jpg" AND $type_imgadmin != "image/png"){
			$this->session->set_flashdata('message_false','Format gambar yang digunakan jpeg|jpg|png');
			redirect($this->redirect,'refresh');
		}
		else{
			$img_admin = UploadImg($_FILES['img_admin'],'./assets/img_admin/','admin',150);
			$data = array(
				'nama_admin'=> $this->input->post('nama_admin'),
				'email_admin'=> $this->input->post('email_admin'),
				'hp_admin'=> $this->input->post('hp_admin'),
				'img_admin'			=> $img_admin
			);
		}
	}
	else{
		$data = array(
			'nama_admin'=> $this->input->post('nama_admin'),
			'email_admin'=> $this->input->post('email_admin'),
			'hp_admin'=> $this->input->post('hp_admin')
		);
	}
	$this->M_admin->update($kd,$data);
	$this->session->set_flashdata('message_true','Data Admin Berhasil Diperbaharui');
	redirect($this->redirect,'refresh');
	}

	public function ubahpassword(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'judul'	=> "DATA ADMIN",
			'sub'	=> "Ubah Password",
			'ubahpassword' 	=> $this->M_admin->ubahpassword($kd)
		);
		$this->template->load('backend/template',$this->view.'ubahpassword', $data);
	}

	public function uchangepswd(){
		$kd = $this->uri->segment(3);
		$pswd_admin 	= md5($this->input->post('pswd_admin'));
		$pswd_adminb	= $this->input->post('pswd_adminb');
		$pswd_adminu 	= $this->input->post('pswd_adminu');
		if($pswd_adminb != $pswd_adminu){
		$this->session->set_flashdata('message_false','Konfirmasi password tidak sama');
		redirect('Admin/ubahpassword/'.$this->session->userdata('kd_admin'),'refresh');
		}
		else{
		$data = array(
			'pswd_admin'=> md5($this->input->post('pswd_adminb'))
			);
		}
		$this->M_admin->update($kd,$data);
		$this->session->set_flashdata('message_true','Password berhasil diubah');
		redirect($this->session->userdata('kd_admin'),'refresh');
	}

	public function read(){
		$kd   = $this->uri->segment(3);
		$data = array(
			'read' 	=> $this->M_admin->read($kd)
		);
		$this->template->load('backend/template',$this->view.'read', $data);
	}

	public function delete(){
	$kd = $this->uri->segment(3);
	$data = array(
		'kd_admin' => $kd
	);
	$this->M_admin->delete($data);
	$this->session->set_flashdata('message_true','Data telah dihapus');
	redirect($this->redirect,'refresh');
	}

}
