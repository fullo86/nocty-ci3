<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim_email extends CI_Controller{
  private $view  	= "frontend/v_akun/";
	private $redirect 	= "Kirim_email";

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('M_reset');

  }

  public function lupapassword()
	{
		$this->template->load('frontend/template',$this->view.'lupapassword');
	}

	public function reset_password_validation()
	{
		$this->form_validation->set_rules('email_user','Email','required|vaild_email|trim');
		if($this->form_validation->run()){

			$email_user = $this->input->post('email_user');
			$reset_key = random_string('alnum',50);

			if ($this->M_reset->update_reset_key($email_user,$reset_key))
		{
		var_dump("ada");
	}else{
		var_dump("error");
	}
}else{
		echo 0;
		$this->template->load('frontend/template',$this->view.'lupapassword');
	}
}

public function email_reset_password_validation(){
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
	if($this->form_validation->run()){

		$email = $this->input->post('email_user');
		$reset_key =  random_string('alnum', 50);

		if($this->reset_m->update_reset_key($email,$reset_key))
		{

				$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "noctysalon@gmail.com"; // isi dengan email kamu
			$config['smtp_pass']= "Nocty123"; // isi dengan password kamu
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email

			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);
			$this->email->to($this->input->post('email_user'));
			$this->email->subject("Reset your password");

			$message = "<p>Anda melakukan permintaan reset password</p>";
			$message .= "<a href='".site_url('welcome/reset_password/'.$reset_key)."'>klik reset password</a>";
			$this->email->message($message);

			if($this->email->send())
			{
				echo "silahkan cek email <b>".$this->input->post('email_user').'</b> untuk melakukan reset password';
			}else
			{
				echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
			}

			echo "<br><br><a href='".site_url("member-login")."'>Kembali ke Menu Login</a>";

		}else {
			die("Email yang anda masukan belum terdaftar");
		}
	} else{
		$this->template->load('frontend/template',$this->view.'lupapassword');
	}
}

}
