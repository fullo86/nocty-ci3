<?php
	//-->session
function IsAdmin(){
	$ci =& get_instance();
	if($ci->session->userdata('IsAdmin')<>1){
		redirect('Auth','refresh');
	}
}
	//-->Endsession

	//-->sessionuser
function IsUser(){
	$ci =& get_instance();
	if($ci->session->userdata('IsUser')<>1){
		redirect('AuthUsr','refresh');
	}
}
	//-->Endsessionuser

	//-->format_img
function UploadImg($file,$dst,$style,$size){
	$date= date('YmdHis').'_'.$style;
		//Penjabaran File
	$filename 	= $file['name'];
	$filetype 	= $file['type'];
	$filetmp 	= $file['tmp_name'];
	$fileupload = $dst.$filename;
		//upload ukuran sebenarnya
	move_uploaded_file($filetmp, $fileupload);
			//Identifikasi Gambar
	if ($filetype == 'image/jpeg' || $filetype == 'image/jpg') {
		$src 	= imagecreatefromjpeg($fileupload);
	}elseif ($filetype == 'image/png') {
		$src 	= imagecreatefrompng($fileupload);
	}
	$wsrc = imageSX($src);
	$hsrc = imageSY($src);
			//Set Ukuran Gambar
	$wdst = $size;
	$hdst = ($wdst / $wsrc) * $hsrc;
			//Proses Perubahan Ukuran
	$filecreate = imagecreatetruecolor($wdst, $hdst);
	imagecopyresampled($filecreate, $src, 0, 0, 0, 0, $wdst, $hdst, $wsrc, $hsrc);
			//Nama Acak
	$x 			= explode(".", $filename);
	$name 		= $x[0];
	$extension 	= $x[1];
	$filename 	= $date.'.'.$extension;
			//Reupload
	if ($filetype == 'image/jpeg' || $filetype == 'image/jpg') {
		imagejpeg($filecreate,$dst.$filename);
	}elseif ($filetype == 'image/png') {
		imagepng($filecreate,$dst.$filename);
	}
			//Hapus Foto Lama
	unlink($fileupload);
	return $filename;
}
	//-->Endformat_img
function sendMail($email_user) {
	$CI =& get_instance();
	$CI->load->library('email');
	$config = [
		'mailtype'  => 'html',
		'charset'   => 'utf-8',
		'protocol'  => 'smtp',
		'smtp_host' => 'smtp.gmail.com',
		'smtp_user' => 'suratmulyo05@gmail.com',
		'smtp_pass'   => 'suratmulyo0502',
		'smtp_crypto' => 'ssl',
		'smtp_port'   => 465,
		'crlf'    => "\r\n",
		'newline' => "\r\n"
	];
	$CI->email->initialize($config);
	$CI->email->from('no-reply@noctysalon.com', 'Nocty Salon');
	$list = array($email_user);
	$CI->email->to($list);
	$CI->email->subject('Lupa Password');
	$CI->email->message('
		<h1>Nocty Salon</h1><br>
		<h3> Lupa Password</h3><br>

		<p>Klik <a href="'.site_url('AuthUsr/reset_password').'">disini</a> untuk merubah password </p>
		');
	if ($CI->email->send()) {
		return true;
	} else {
		return false;
	}        

}

?>
