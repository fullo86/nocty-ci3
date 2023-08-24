<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	private $view  	= "backend/v_laporan/";
	private $redirect 	= "Laporan";

	public function __construct(){
		parent::__construct();
		//Load model
		$this->load->model('M_booking');
		$this->load->model('M_transaksi');
		$this->load->model('M_service');
		$this->load->helper('number');
		$this->load->helper('date');
		IsAdmin();
	}
    public function index(){
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        $laporan = $this->M_transaksi->laporanPenjualan($bulan, $tahun);

        $data = array(
			'judul'	   => "Laporan",
			'sub'	   => "Lihat Laporan",
            'laporan'  => $laporan,
            'getBulan' => $bulan,
            'getTahun' => $tahun,
			'sidebar'  => 'laporan',
		);
		$this->template->load('backend/template',$this->view.'index', $data);
    }
}
