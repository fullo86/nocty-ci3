<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_service extends CI_Model {
	private $table 	= 'service';
	private $pk 	= 'id_service';

    public function get_all()
    {
        return $this->db->get($this->table);
    }
    public function detail($id)
    {
        return $this->db->get_where($this->table, [$this->pk => $id]);
    }
}
