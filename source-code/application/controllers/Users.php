<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function login()
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
                $this->load->view('auth/login');
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
