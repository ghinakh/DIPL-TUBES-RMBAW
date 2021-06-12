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
            if ($this->session->userdata('credentials')) :
                $ses = $this->session->userdata('credentials');
                $data['user'] =  $ses[0];
                $n = explode(' ', $ses[0]["nama_lengkap"]);
                $foto = '';
                if (
                    count($n) > 1
                ) {
                    $total = 1;
                } else {
                    $total = count($n) - 1;
                }
                for ($x = 0; $x <= $total; $x++) {
                    $foto .= substr($n[$x], 0, 1);
                }
                $data["foto_profile"] = $foto;
            endif;
            $con['conditions'] = array(
                'id_mobil' => $route_url[0]['id'],
                'status' => 0,
            );
            $riwayat = $this->Database->getData("riwayat", $con);
            if ($riwayat) {
                $data['total_pemesanan'] = count($riwayat);
            } else {
                $data['total_pemesanan'] = 0;
            }
            $data['rate'] = $riwayat;
            $data['bintang'] = $this->Database->avg_data("riwayat", $route_url[0]['id']);
            $data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
            $data['data_mobil'] = $route_url[0];
            $data['penyewa'] = $this->Database->getData("penyewa");
            $this->load->view('include/head', $data);
            $this->load->view('page/detail_mobil', $data);
        } else {
            $this->load->view('page/error');
        }
    }

    public function Buy()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(base_url());
        else :
            $id_mobil = $this->input->post('id_mobil');
            // var_dump($id_mobil);
            // exit();
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
            $con['conditions'] = array(
                'id' => $id_mobil,
            );
            $route_url = $this->Database->getData("mobil", $con);
            if ($route_url) {
                if ($this->input->post('rentbysaldo')) {
                    var_dump("awawa");
                    exit();
                }
                $data['mobil'] = $route_url[0];
                $this->load->view('include/head', $data);
                $this->load->view('page/checkout', $data);
            } else {
                $this->load->view('page/error');
            }
        endif;
    }

    public function rate_car()
    {
        $id  = $this->input->post('id_sewa');
        $data = [
            'rate' => $this->input->post('rating'),
            'status' => 0
        ];
        $this->Database->update("riwayat", $data, $id);
        redirect(base_url('history'));
    }

    public function cek()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(show_404());
        else :
            if ($this->input->post('id_mobil') && $this->input->post('harga') && $this->input->post('nama') && $this->input->post('service') && $this->input->post('alamat') && $this->input->post('sewanya') && $this->input->post('metode')) {
            } else {
                redirect(show_404());
            }
        endif;
    }
}
