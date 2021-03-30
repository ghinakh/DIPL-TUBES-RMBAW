<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Database');
    }

    public function login()
    {
        if (!$this->session->userdata('credentials')) :
            if ($this->input->post('email') && $this->input->post('password')) :
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $cek_user_admin = $this->Database->getData("admin", $con);
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $cek_user_user = $this->Database->getData("penyewa", $con);
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $cek_user_garasi = $this->Database->getData("staff_garasi", $con);
                if ($cek_user_admin == 1) {
                    $user_live = "admin";
                } else if ($cek_user_user == 1) {
                    $user_live = "penyewa";
                } else if ($cek_user_garasi == 1) {
                    $user_live = "staff_garasi";
                }
                if ($cek_user_admin == 1 || $cek_user_user == 1 || $cek_user_garasi == 1) :
                    $info_akun = $this->Database->getData($user_live, array('email' => $this->input->post('email')));
                    $data['notif_sukses'] = 'Selamat menikmati Layanan Kami	.';
                    $this->session->set_userdata('credentials', $info_akun);
                else :
                    $data['notif_error'] = 'Email/Password Salah mohon inputkan ulang.';
                endif;
                $this->load->view('auth/login', $data);
            else :
                $this->load->view('auth/login');
            endif;
        else :
            redirect(base_url());
        endif;
    }

    public function register()
    {
        if (!$this->session->userdata('credentials')) :
            $data['web_config'] = $this->Database->getData("konfigurasi_web")[0];
            if ($this->input->post('nama') && $this->input->post('nik') && $this->input->post('sim') && $this->input->post('email') && $this->input->post('password')) :
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                );
                $cek_user = $this->Database->getData("penyewa", $con);
                if ($cek_user == 1) :
                    $data['notif_error'] = 'Email is already registered, please log in.';
                else :
                    $sql = array(
                        'nama_lengkap' => $this->input->post('nama'),
                        'nik' => $this->input->post('nik'),
                        'sim' => $this->input->post('sim'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                    );
                    $insert = json_decode($this->Database->insert("penyewa", $sql));
                    if ($insert) :
                        $data['notif_sukses'] = 'Email registered successfully.';
                    else :
                        $data['notif_error'] = 'Error Insert.';
                    endif;
                endif;
                $this->load->view('auth/regis', $data);
            else :
                $this->load->view('auth/regis', $data);
            endif;
        else :
            redirect(base_url());
        endif;
    }

    public function register_staff()
    {
        if (!$this->session->userdata('credentials')) :
            $data['web_config'] = $this->Database->getData("konfigurasi_web")[0];
            if ($this->input->post('nama') && $this->input->post('nik') && $this->input->post('sim') && $this->input->post('email') && $this->input->post('password')) :
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                );
                $cek_user = $this->Database->getData("penyewa", $con);
                if ($cek_user == 1) :
                    $data['notif_error'] = 'Email is already registered, please log in.';
                else :
                    $sql = array(
                        'nama_lengkap' => $this->input->post('nama'),
                        'nik' => $this->input->post('nik'),
                        'sim' => $this->input->post('sim'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                    );
                    $insert = json_decode($this->Database->insert("penyewa", $sql));
                    if ($insert) :
                        $data['notif_sukses'] = 'Email registered successfully.';
                    else :
                        $data['notif_error'] = 'Error Insert.';
                    endif;
                endif;
                $this->load->view('auth/regis', $data);
            else :
                $this->load->view('auth/regis', $data);
            endif;
        else :
            redirect(base_url());
        endif;
    }
}
