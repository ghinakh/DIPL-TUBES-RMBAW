<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Database');
    }

    public function getDetail($url_view)
    {

        $data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
        $ses = $this->session->userdata('credentials');
        $data['user'] =  $ses[0];
        $n = explode(' ', $ses[0]["nama_lengkap"]);
        $data["nama_dipisah"] = $n;
        $foto = '';
        for ($x = 0; $x <= 1; $x++) {
            $foto .= substr($n[$x], 0, 1);
        }
        $data["foto_profile"] = $foto;
        $this->load->view('include/head', $data);
        $this->load->view('page/detail', $data);
    }
}
