<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Database');
    }

    public function mobil()
    {
        $this->load->view('page/admin_mobil');
    }

    public function staff()
    {
        $this->load->view('page/admin_staffgarasi');
    }
}
