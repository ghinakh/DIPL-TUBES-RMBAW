<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Database');
    }

    public function index()
    {
    }

    public function insert()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(base_url('login'));
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
            $data["foto_profile"] = $foto;
            $con['conditions'] = array(
                'id_staff' => $ses[0]["id"],
                'status' => NULL,
            );
            $data["mobil"] = $this->Database->getData("mobil", $con);
            if ($this->input->post('nama_mobil') && $this->input->post('stnk') && $this->input->post('tipe') && $this->input->post('harga')) :
                $image = time() . '-' . $_FILES["gambarnya"]['name'];

                $config = array(
                    'upload_path' => "./assets/images/mobil/",
                    'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
                    'overwrite' => TRUE,
                    'max_size' => "10024",
                    'max_height' => "6000",
                    'max_width' => "6000",
                    'file_name' => $image
                );
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambarnya')) {
                    $sql = array(
                        'id_staff ' => $ses[0]["id"],
                        'stnk' => $this->input->post('stnk'),
                        'nama_mobil' => $this->input->post('nama_mobil'),
                        'jenis' => $this->input->post('tipe'),
                        'harga' => $this->input->post('harga'),
                        'gambar' => $image,
                        'status' => NULL,
                        'rating' => '0',
                        'url_view' => md5('mobilview' . rand(00000, 99999)),
                    );
                    $insert = json_decode($this->Database->insert("mobil", $sql));
                }
                $data['laporan'] = 'Car under inspection';
                $this->load->view('include/nav_staff', $data);
                $this->load->view('page/form_tambah_mobil', $data);
            else :
                $this->load->view('include/nav_staff', $data);
                $this->load->view('page/form_tambah_mobil', $data);
            endif;
        endif;
    }

    public function show_rating()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(base_url('login'));
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
            $data["foto_profile"] = $foto;
            $data["riwayat"] = $this->Database->getData("riwayat");
            $con['conditions'] = array(
                'id_staff' => $ses[0]["id"],
            );
            $data["mobil"] = $this->Database->getData("mobil", $con);
            $this->load->view('include/nav_staff', $data);
            $this->load->view('page/show_ratecar', $data);
        endif;
    }
}
