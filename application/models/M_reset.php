<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reset extends CI_Model {
	private $table 	= 'user';
	private $pk 	= 'id_user';


  public function update_reset_key($email_user,$reset_key)
  {
    $this->db->where('email_user','email_user');
    $data = array('lupapassword'=>$reset_key);
    $this->db->update('user',$data);
    if($this->db->affected_rows()>0)
    {
      return TRUE;
    }else{
      return FALSE;
    }
  }


}
