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
                    $info_akun = $this->Pengguna->getData($user_live, array('email' => $this->input->post('email')));
                    if ($info_akun['status'] == 0) :
                        $data['notif_error'] = 'Akun anda di non-aktifkan, segerah hubungi admin.';
                    else :
                        $data['notif_sukses'] = 'Selamat menikmati Layanan Kami	.';
                        $this->session->set_userdata('credentials', $info_akun);
                    endif;
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
            if ($this->input->post('email') && $this->input->post('password')) :
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );
                $cek_user = $this->Pengguna->getData($con);
                if ($cek_user == 1) :
                    $info_akun = $this->Pengguna->getData(array('email' => $this->input->post('email')));
                    if ($info_akun['status'] == 0) :
                        $data['notif_error'] = 'Akun anda di non-aktifkan, segerah hubungi admin.';
                    else :
                        $data['notif_sukses'] = 'Selamat menikmati Layanan Kami	.';
                        $this->session->set_userdata('credentials', $info_akun);
                    endif;
                else :
                    $data['notif_error'] = 'Email/Password Salah mohon inputkan ulang.';
                endif;
                $this->load->view('auth/regis');
            else :
                $this->load->view('auth/regis');
            endif;
        else :
            redirect(base_url());
        endif;
    }
}
