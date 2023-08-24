<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthUsr extends CI_Controller {
	private $view  	= "frontend/v_akun/";
	private $redirect 	= "AuthUsr";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_authusr');
	}

	public function index()
	{
		$this->session->sess_destroy();
		$this->template->load('frontend/template',$this->view.'login');
	}


	public function login()
	{
		error_reporting(0);
		$id 	= $this->input->post('email_user');
		$pwd	= md5($this->input->post('pswd_user'));
		$data = $this->M_authusr->CekLogin('user','email_user',$id);
		if($data['pswd_user'] == $pwd AND $data['email_user'] == $id){
			$array = array(
				'id_user' 	    => $data['id_user'],
				'email_user' 	=> $data['email_user'],
				'nama_user' 	=> $data['username'],
				'hp_user'     	=> $data['hp_user'],
				'IsUser'		=> 1
			);
			$this->session->set_userdata($array);
			$this->session->set_flashdata('message_true','Hai, '. $this->session->userdata('nama_user') .' Selamat Datang Di Dashboard Akun Anda');
			redirect('AkunUsr/akun/'.$this->session->userdata('id_user'),'refresh');
		}else{
			$this->session->set_flashdata('message_false','<center>Login Gagal!<br>Email/Password Salah</center>');
			redirect('AuthUsr','refresh');
		}
	}

	public function lupapassword()
	{
		$this->template->load('frontend/template',$this->view.'lupapassword');
	}

	public function aksi_lupa(){
		$email_user = $this->input->post('email_user');
		$data = $this->db->where('email_user',$email_user)->get('user');
		if ($data->num_rows() > 0) {
			$row = $data->row();
			// echo sendMail($email_user);


			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'smtp.hostinger.com',
            'smtp_user' => 'no-reply@noctysalon.com',  // Email gmail
            'smtp_pass'   => 'Nocty123',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@noctysalon.com', 'Nocty Salon');

        // Email penerima
        $this->email->to($email_user); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Reset Password');

        // Isi email
        $this->email->message('<h1>Nocty Salon</h1><br>
        	<h3> Lupa Password</h3><br>

        	<p>Klik <a href="'.site_url('AuthUsr/reset_password/'.$row->id_user).'">disini</a> untuk merubah password </p>');

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
        	$this->session->set_flashdata('message_true','<center>Email Reset Password Berhasil dikirim, silahkan cek email anda</center>');
        	redirect('AuthUsr','refresh');
        } else {
        	$this->session->set_flashdata('message_false','<center>Terjadi Kesalahan, Email gagal dikirim</center>');
        	redirect('AuthUsr/lupapassword','refresh');
        }

    }else{
			$this->session->set_flashdata('message_false','<center>Email Tidak Terdaftar</center>');
			redirect('AuthUsr/lupapassword','refresh');
    }

}

public function reset_password($id){
	$data['id_user'] = $id;
	$this->template->load('frontend/template',$this->view.'reset_password',$data);
}
public function aksi_reset(){
	$id_user= $this->input->post('id_user');
	$password_baru= $this->input->post('password_baru');
	$konfirmasi_password= $this->input->post('konfirmasi_password');
	if ($konfirmasi_password != $password_baru) {
		$this->session->set_flashdata('message_false','<center>Password tidak sama, silahkan ulangi</center>');
        	redirect('AuthUsr/reset_password/'.$id_user,'refresh');
	}else{
		$data = array(
			'pswd_user' => md5($password_baru),
		);
		$this->db->set($data)->where('id_user',$id_user)->update('user');
		$this->session->set_flashdata('message_true','<center>Password berhasil di ubah, silahkan login</center>');
        	redirect('AuthUsr','refresh');
	}
}

public function logout(){
	$this->session->sess_destroy();
	redirect('AuthUsr','refresh');
}




}
