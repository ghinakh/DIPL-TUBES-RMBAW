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
        $this->load->view('page/dashboard_staff');
    }
    public function insert()
    {
        $this->load->view('page/form_tambah_mobil');
    }
}
