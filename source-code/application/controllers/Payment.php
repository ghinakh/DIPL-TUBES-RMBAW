<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Database');
    }

    public function Detail($id)
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

    public function rent()
    {
        if (!$this->session->userdata('credentials')) :
        else :
            $id  = $this->input->post('id_mobil');
            var_dump($id);
        // $data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
        // $ses = $this->session->userdata('credentials');
        // $data['user'] =  $ses[0];
        // $n = explode(' ', $ses[0]["nama_lengkap"]);
        // $data["nama_dipisah"] = $n;
        // $foto = '';
        // for ($x = 0; $x <= 1; $x++) {
        //     $foto .= substr($n[$x], 0, 1);
        // }
        // $data["foto_profile"] = $foto;
        // $this->load->view('include/head', $data);
        // $this->load->view('page/detail', $data);
        endif;
    }
}
