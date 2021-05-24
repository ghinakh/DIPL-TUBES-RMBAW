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
        $con['conditions'] = array(
            'url_view' => $url_view,
        );
        $route_url = $this->Database->getData("mobil", $con);
        if ($route_url) {
            $data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
            $this->load->view('include/head', $data);
            $this->load->view('page/detail_mobil', $data);
        } else {
            $this->load->view('errors/error');
        }
    }
}
