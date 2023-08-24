<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
	private $view  	= "frontend/v_page/";
	private $redirect 	= "Page";

	public function __construct(){
		parent::__construct();
		//Load model
		}

	public function aboutus(){
	$this->template->load('frontend/template',$this->view.'aboutus');
	}

	public function pricelist(){
	$this->template->load('frontend/template',$this->view.'pricelist');
	}

	public function gallery(){
	$this->template->load('frontend/template',$this->view.'gallery');
	}

}
