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
	public function index()
	{
		if (!$this->session->userdata('credentials')) :
			$this->load->view('welcome_message');
		else :
			$ses = $this->session->userdata('credentials');
			$data['user'] =  $ses[0];
			$n = explode(' ', $ses[0]["nama_lengkap"]);
			$foto = '';
			if (count($n) > 2) {
				$total = 2;
			} else {
				$total = count($n) - 1;
			}
			for ($x = 0; $x <= $total; $x++) {
				$foto .= substr($n[$x], 0, 1);
			}
			$data["foto_profile"] = $foto;
			$this->load->view('include/head', $data);
		endif;
	}
}
