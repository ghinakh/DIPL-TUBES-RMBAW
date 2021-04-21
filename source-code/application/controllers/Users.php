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
                    $con['returnType'] = 'single';
                    $con['conditions'] = array(
                        'email' => $this->input->post('email'),
                    );
                    $info_akun = $this->Database->getData($user_live, $con);
                    $data['notif_sukses'] = 'Selamat menikmati Layanan Kami	.';
                    $this->session->set_userdata('credentials', array($info_akun, $user_live));
                    redirect(base_url());
                else :
                    $data['notif_error'] = 'Email/Password Salah mohon inputkan ulang.';
                    $this->load->view('auth/login', $data);
                endif;
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

    public function riwayat()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(base_url('login'));
        else :
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
            if ($ses[1] == "penyewa") {
                $data["orderan"] = $this->Database->getData("riwayat", array('id_penyewa' => $ses[0]["id"]));
                $data["mobil"] = $this->Database->getData("mobil");
                $data["level"] = "Penyewa";
            } else if ($ses[1] == "admin") {
            } else if ($ses[1] == "staff_garasi") {
            }
            $this->load->view('include/head', $data);
            $this->load->view('page/riwayat', $data);
        endif;
    }

    public function password()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(base_url('login'));
        else :
            $data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
            $ses = $this->session->userdata('credentials');
            if ($this->input->post('oldpass') && $this->input->post('newpass') && $this->input->post('cpass')) :
                $old = md5($this->input->post('oldpass'));
                $new = md5($this->input->post('newpass'));
                $konfrim = md5($this->input->post('cpass'));
                if ($old == $ses[0]['password']) :
                    if ($new == $konfrim) :
                        $sql = array(
                            'password' => $konfrim,
                        );
                        $update = json_decode($this->Database->update($ses[1], $sql, $ses[0]['id']));
                        if ($update) :
                            redirect(base_url('logout'));
                        else :
                            $data['laporan'] = '<div class="alert alert-danger" role="alert">There is data that is still blank, please fill in first.</div>';
                        endif;
                    else :
                        $data['laporan'] = '<div class="alert alert-danger" role="alert">The new password is not the same as the confirmation password. Please retype it.</div>';
                    endif;
                else :
                    $data['laporan'] = '<div class="alert alert-danger" role="alert">Incorrect password, please enter correctly.</div>';
                endif;
            endif;
            $data['user'] =  $ses[0];
            $n = explode(' ', $ses[0]["nama_lengkap"]);
            $data["nama_dipisah"] = $n;
            $foto = '';
            for ($x = 0; $x <= 1; $x++) {
                $foto .= substr($n[$x], 0, 1);
            }
            $data["foto_profile"] = $foto;
            if ($ses[1] == "penyewa") {
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'id_penyewa' => $ses[0]["id"],
                );
                $data["total_orderan"] = $this->Database->getData("riwayat", $con);
                $data["level"] = "Penyewa";
            } else if ($ses[1] == "admin") {
            } else if ($ses[1] == "staff_garasi") {
            }
            $this->load->view('include/head', $data);
            $this->load->view('auth/password', $data);
        endif;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function profile()
    {
        if (!$this->session->userdata('credentials')) :
            redirect(base_url('login'));
        else :
            $data['web_config'] = $this->Database->getData("konfigurasi_web", array('id' => 1));
            $ses = $this->session->userdata('credentials');
            if ($this->input->post('fname') && $this->input->post('lname') && $this->input->post('phone') && $this->input->post('address') && $this->input->post('city')) :
                $sql = array(
                    'nama_lengkap' => $this->input->post('fname') . ' ' . $this->input->post('lname'),
                    'address' => $this->input->post('address'),
                    'city' => $this->input->post('city'),
                    'phone' => $this->input->post('phone'),
                );
                $update = json_decode($this->Database->update($ses[1], $sql, $ses[0]['id']));
                if ($update) :
                    $data['laporan'] = '<div class="alert alert-success" role="alert">The data has been updated successfully, make sure the data is valid.</div>';
                else :
                    $data['laporan'] = '<div class="alert alert-danger" role="alert">There is data that is still blank, please fill in first.</div>';
                endif;
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'id' => $ses[0]['id'],
                );
                $info_akun = $this->Database->getData($ses[1], $con);
                $this->session->set_userdata('credentials', array($info_akun, $ses[1]));
                $ses = $this->session->userdata('credentials');
            endif;
            $data['user'] =  $ses[0];
            $n = explode(' ', $ses[0]["nama_lengkap"]);
            $data["nama_dipisah"] = $n;
            $foto = '';
            for ($x = 0; $x <= 1; $x++) {
                $foto .= substr($n[$x], 0, 1);
            }
            $data["foto_profile"] = $foto;
            if ($ses[1] == "penyewa") {
                $con['returnType'] = 'count';
                $con['conditions'] = array(
                    'id_penyewa' => $ses[0]["id"],
                );
                $data["total_orderan"] = $this->Database->getData("riwayat", $con);
                $data["level"] = "Penyewa";
            } else if ($ses[1] == "admin") {
            } else if ($ses[1] == "staff_garasi") {
            }
            $this->load->view('include/head', $data);
            $this->load->view('auth/profile', $data);
        endif;
    }
}
