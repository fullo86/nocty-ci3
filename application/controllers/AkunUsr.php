<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AkunUsr extends CI_Controller {
	private $view  	= "frontend/v_akun/";
	private $redirect 	= "AkunUsr";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_akunusr');
		$this->load->model('M_booking');
		$this->load->model('M_service');
		$this->load->helper('number');
		$this->load->helper('date');
	}

	public function index(){
	$this->template->load('frontend/template',$this->view.'daftar');
	}

	public function save(){
		$pswd 	= $this->input->post('pswd_user');
		$kpswd	= $this->input->post('kpswd_user');
		$email_user 	= $this->input->post('email_user');
		if($pswd != $kpswd){
		$this->session->set_flashdata('message_false','Password tidak sama');
		redirect('AkunUsr','refresh');
		}
		else{
		$data = array(
		'email_user'=> $this->input->post('email_user'),
		'username'=> $this->input->post('username'),
		'hp_user'=> $this->input->post('hp_user'),
		'pswd_user'=> md5($this->input->post('pswd_user')),
		);
		$this->M_akunusr->save($data);
		$this->session->set_flashdata('message_true','Pendaftaran Akun Berhasil');
		redirect('AkunUsr','refresh');
		}
		$this->session->set_flashdata('message_false','Pendaftaran Gagal');
		redirect('AkunUsr','refresh');
	}

	public function akun(){
		IsUser();
		$kd   = $this->uri->segment(3);
		$data = array(
			'akun' 	=> $this->M_akunusr->akun($kd)
		);
		$this->template->load('frontend/template',$this->view.'akun', $data);
	}

	public function edit(){
		IsUser();
		$kd   = $this->uri->segment(3);
		$data = array(
			'edit' 	=> $this->M_akunusr->edit($kd)
		);
		$this->template->load('frontend/template',$this->view.'edit', $data);
	}
	public function pemesanan(){
		IsUser();

		$service = $this->M_service->get_all();

		$service_data = [];
		foreach ($service->result_array() as $service_detail) {
			$service_data[$service_detail['id_service']] = $service_detail['service'];
		}

		$kd   = $this->uri->segment(3);
		$data = array(
			'nama_user'    => $this->session->userdata('nama_user'),
			'email_user'   => $this->session->userdata('email_user'),
			'hp_user' 	   => $this->session->userdata('hp_user'),
			'booking'      => $this->M_booking->get_by_user($kd),
			'service_data' => $service_data
		);
		$this->template->load('frontend/template',$this->view.'pemesanan', $data);
	}
	public function update(){
		$kd = $this->uri->segment(3);
				$data = array(
					'username'=> $this->input->post('username'),
					'email_user'=> $this->input->post('email_user'),
					'hp_user'=> $this->input->post('hp_user')
				);

		$this->M_akunusr->update($kd,$data);
		$this->session->set_flashdata('message_true','Data Akun telah diperbaharui');
		redirect('AkunUsr/akun/'.$this->session->userdata('id_user'),'refresh');
	}

	public function changepswd(){
		IsUser();
		$kd   = $this->uri->segment(3);
		$data = array(
			'changepswd' 	=> $this->M_akunusr->changepswd($kd)
		);
		$this->template->load('frontend/template',$this->view.'changepswd', $data);
	}

	public function uchangepswd(){
		IsUser();
		$kd = $this->uri->segment(3);
		$pswd_user 	= md5($this->input->post('pswd_user'));
		$pswd_userb	= $this->input->post('pswd_userb');
		$pswd_useru 	= $this->input->post('pswd_useru');
		if($pswd_userb != $pswd_useru){
		$this->session->set_flashdata('message_false','Konfirmasi password tidak sama');
		redirect('AkunUsr/changepswd/'.$this->session->userdata('id_user'),'refresh');
		}
		else{
		$data = array(
			'pswd_user'=> md5($this->input->post('pswd_userb'))
			);
		}
		$this->M_akunusr->update($kd,$data);
		$this->session->set_flashdata('message_true','Password berhasil diubah');
		redirect('AkunUsr/akun/'.$this->session->userdata('id_user'),'refresh');
	}

	public function detail(){
		$kd   = $this->uri->segment(3);
		$data = array(
			$data['detail'] = $this->M_akunusr->detail()
		);
		$this->template->load('frontend/template',$this->view.'detail', $data);
	}

	public function reschedule(){
		IsUser();
		$idBooking   = $this->uri->segment(3);
		$data = array(
			'reschedule' => $this->M_booking->reschedule($idBooking)
		);
		$this->template->load('frontend/template',$this->view.'reschedule', $data);
	}

	public function updatedata(){
		$kd = $this->uri->segment(3);
		$data = array(
			'nama_pemesan'=> $this->input->post('nama_pemesan'),
			'no_hp'=> $this->input->post('no_hp'),
			'email_pemesan'=> $this->input->post('email_pemesan'),
			'waktu_pemesanan'=> $this->input->post('waktu_pemesanan'),
			'jam_kedatangan'=> $this->input->post('jam_kedatangan')
		);
		
		$this->M_booking->update($kd,$data);
		$this->session->set_flashdata('message_true','Data Pemesanan Berhasil diperbaharui');
		redirect($this->redirect,'refresh');
	}

	public function rescheduleBooking(){
		$idBooking = $this->input->post('id');
		$tgl 	   = $this->input->post('waktu_pemesanan');
		$jam       = $this->input->post('jam_kedatangan');

		$data = [
			'waktu_pemesanan' => $tgl,
			'jam_kedatangan'  => $jam,
		];
		
		$this->M_booking->update($idBooking,$data);
		$this->session->set_flashdata('message_true','Data Pemesanan Berhasil direschedule');
		redirect('AkunUsr/pemesanan/' . $this->session->userdata('id_user'),'refresh');
	}
}
