<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {
	private $view  	= "frontend/v_pemesanan/";
	private $redirect 	= "Snap";

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
				//Load model
		$this->load->model('M_pemesanan');
		$this->load->model('M_service');
		$this->load->model('M_transaksi');

		$params = array('server_key' => 'SB-Mid-server-_k5RuqEQvdvhOAugY3oBfM5U', 'production' => false);
		$this->load->library('midtrans');
		$this->load->library('session');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->helper('number');
	}

	public function index()
	{
		$service = $this->M_service->get_all();
		$data = [
			'service'    => $service,
			'nama_user'  => $this->session->userdata('nama_user'),
			'email_user' => $this->session->userdata('email_user'),
			'hp_user' 	 => $this->session->userdata('hp_user')
		];

		$this->template->load('frontend/template',$this->view.'book', $data);
	}

	public function Transaksi()
	{
		$this->template->load('backend/template',$this->views.'read');
	}

	public function token()
	{
		$nama_pemesan    = $this->input->post('nama_pemesan');
		$email_pemesan   = $this->input->post('email_pemesan');
		$service         = $this->input->post('service');
		$waktu_pemesanan = $this->input->post('waktu_pemesanan');
		$no_hp           = $this->input->post('no_hp');
		$jml_bayar       = $this->input->post('jml_bayar');

		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $jml_bayar, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $jml_bayar,
			'quantity' => 1,
			'name' => 'Pemesanan Anda ' . $nama_pemesan
		);

		// Optional
		$item_details = array ($item1_details);

		// Optional
		$customer_details = array(
			'first_name'    => $nama_pemesan,
			'email'         => $email_pemesan,
			'phone'         => $no_hp,
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O",$time),
			'unit' => 'minute',
			'duration'  => 120
		);

		$transaction_data = array(
			'transaction_details'=> $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result          = json_decode($this->input->post('result_data'), true);
		$nama_pemesan    = trim($this->input->post('nama_pemesan'));
		$service	     = $this->input->post('service');
		$waktu_pemesanan = $this->input->post('waktu_pemesanan');
		$jml_bayar 	     = $this->input->post('jml_bayar');
		$no_hp	         = trim($this->input->post('no_hp'));
		$email_pemesan	 = trim($this->input->post('email_pemesan'));

		$new_service = [];
		foreach ($service as $selected_service) {
			if (empty($selected_service) || $selected_service == '') {
			}
			else {
				array_push($new_service, $selected_service);
			}
		}

		$data = array(
			'nama_pemesan'    => $nama_pemesan,
			'service'         => json_encode($new_service),
			'waktu_pemesanan' => $waktu_pemesanan,
			'jml_bayar'       => $jml_bayar,
			'no_hp'           => $no_hp,
			'email_pemesan'   => $email_pemesan,
			'id_user'         => $this->session->userdata('id_user')
		);
		$finish_book = $this->M_pemesanan->finish($data);

		$data = [
			'order_id'         => $result['order_id'],
			'jml_bayar'        => $result['gross_amount'],
			'payment_type'     => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'status_code'      => $result['status_code'],
			'booking_id'       => $finish_book
		];

		$simpan = $this->M_transaksi->result($data);
		if ($simpan) {
			echo "Sukses";
		} else {
			echo "Gagal";
		}

		$this->session->set_flashdata('message_true','Pemesanan Anda Telah Berhasil Segera Lakukan Pembayaran');
		redirect($this->redirect,'refresh');
	}

	public function GetService(){
		$service = $this->input->post('service');
		$this->db->select('*');
		$this->db->from('service');
		$this->db->where('service',$service);

		$query = $this->db->get()->row();

		// $query = $this->db->query("SELECT * FROM service WHERE service='$service' ")->row();
		echo $query->jml_bayar;
	}

}
