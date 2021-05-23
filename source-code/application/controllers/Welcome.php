<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Database');
	}

	public function index()
	{
		if (!$this->session->userdata('credentials')) :
			$this->load->view('welcome_message');
		else :
			$data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
			$ses = $this->session->userdata('credentials');
			$data['user'] =  $ses[0];
			$n = explode(' ', $ses[0]["nama_lengkap"]);
			$foto = '';
			if (count($n) > 1) {
				$total = 1;
			} else {
				$total = count($n) - 1;
			}
			for ($x = 0; $x <= $total; $x++) {
				$foto .= substr($n[$x], 0, 1);
			}
			$con['conditions'] = array(
				'id_penyewa' => $ses[0]["id"],
			);
			$data["orderan"] = $this->Database->getData("riwayat", $con);
			$data["foto_profile"] = $foto;
			$data["pemilik"] = $this->Database->getData("staff_garasi");
			$data["mobil"] = $this->Database->getData("mobil");
			$rekomendasi_by = array("jenis", "harga", "rating");
			$rekomendasi = array_rand($rekomendasi_by);
			$data["mobil_rekomendasi"] = $this->Database->urut_secara("mobil", "rand", $rekomendasi_by[$rekomendasi]);
			// $data["level"] = "Penyewa";
			$this->load->view('include/head', $data);
			$this->load->view('page/dashboard_penyewa', $data);
		endif;
	}
}
