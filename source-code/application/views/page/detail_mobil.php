<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        if (admin() == false) exit(redirect(base_url('admin/auth/logout')));
    }
    public function index()
    {
        // FORM INPUT //
        $field = [
            'service.id' => 'ID',
            'service_category.name' => 'KATEGORI',
            'api.name' => 'API',
            'service.api_service_id' => 'API ID LAYANAN',
            'service.name' => 'NAMA',
            'service.price' => 'HARGA',
            'service.profit' => 'KEUNTUNGAN',
            'service.status' => 'STATUS',
        ];
        $operator = [
            'equal' => 'WHERE =',
            'not_equal' => 'WHERE <>',
            'less_than' => 'WHERE <=',
            'more_than' => 'WHERE >=',
            'like' => 'LIKE %value%'
        ];
        $status = [
            '1' => ['name' => '<i class="fa fa-check fa-fw"></i>', 'color' => 'success'],
            '0' => ['name' => '<i class="fa fa-times fa-fw"></i>', 'color' => 'danger'],
        ];
        // END FORM INPUT //
        // SETTINGS //
        $data_query = [
            'select' => 'service.*, service_category.name AS service_category_name, api.name AS api_name',
            'join' => [
                [
                    'table' => 'service_category',
                    'on' => 'service_category.id = service.service_category_id',
                    'param' => 'left'
                ],
                [
                    'table' => 'api',
                    'on' => 'api.id = service.api_id',
                    'param' => 'left'
                ]
            ],
            'order_by' => 'service.id DESC',
            'limit' => '30',
            'offset' => ($this->uri->segment(4)) ? $this->uri->segment(4) : 0
        ];
        // END SETTINGS //
        // SORT & SEARCH
        if ($this->input->get('sort_field') <> '' and $this->input->get('sort_type') <> '') {
            if (array_key_exists($this->input->get('sort_field'), $field) == false) {
                exit(redirect(base_url('admin/' . $this->uri->segment(2) . '/index')));
            }
            if (in_array($this->input->get('sort_type'), array('asc', 'desc')) == false) {
                exit(redirect(base_url('admin/' . $this->uri->segment(2) . '/index')));
            }
            $data_query['order_by'] = $this->input->get('sort_field') . ' ' . $this->input->get('sort_type');
        }
        if ($this->input->get('field') <> '' and $this->input->get('operator') <> '' and $this->input->get('value') <> '') {
            if (array_key_exists($this->input->get('field'), $field) == false) {
                exit(redirect(base_url('admin/' . $this->uri->segment(2) . '/index')));
            }
            if (array_key_exists($this->input->get('operator'), $operator) == false) {
                exit(redirect(base_url('admin/' . $this->uri->segment(2) . '/index')));
            }
            if ($this->input->get('operator') == 'equal') {
                $data_query['where'][] = [$this->input->get('field') => $this->input->get('value')];
            } elseif ($this->input->get('operator') == 'not_equal') {
                $data_query['where'][] = [$this->input->get('field') . ' <>' => $this->input->get('value')];
            } elseif ($this->input->get('operator') == 'less_than') {
                $data_query['where'][] = [$this->input->get('field') . ' <=' => $this->input->get('value')];
            } elseif ($this->input->get('operator') == 'more_than') {
                $data_query['where'][] = [$this->input->get('field') . ' >=' => $this->input->get('value')];
            } else {
                $data_query['where'][] = $this->input->get('field') . " LIKE '%" . $this->input->get('value') . "%'";
            }
        }
        // END SORT & SEARCH
        // SESSION FILTER //
        if ($this->session->userdata('filter_service_service_category') <> '') {
            $data_query['where'][]['service.service_category_id'] = $this->session->userdata('filter_service_service_category');
        }
        if ($this->session->userdata('filter_service_api') <> '') {
            $data_query['where'][]['service.api_id'] = $this->session->userdata('filter_service_api');
        }
        // END SESSION FILTER //
        // PAGINATION //
        if ($this->uri->segment(4) <> '' and is_numeric($this->uri->segment(4)) == false) exit('No direct script access allowed');
        $config['base_url'] = base_url('admin/' . $this->uri->segment(2) . '/index');
        $config['total_rows'] = $this->service_model->get_count($data_query);
        $config['per_page'] = $data_query['limit'];
        $this->pagination->initialize($config);
        // END PAGINATION //
        $this->render_admin('admin/' . $this->uri->segment(2) . '/index', ['table' => $this->service_model->get_rows($data_query), 'total_data' => $config['total_rows'], 'field' => $field, 'operator' => $operator, 'status' => $status, 'service_category' => $this->service_category_model->get_rows(), 'api' => $this->api_model->get_rows()]);
    }
    public function form($i = '')
    {
        $target = $this->service_model->get_by_id($i);
        $last = $this->db->order_by('id', "desc")->limit(1)->get('service')->row();
        if ($target == false) { // add
            if ($this->input->post()) {
                $this->form_validation->set_rules('service_category_id', 'Kategori', 'required|numeric');
                $this->form_validation->set_rules('api_id', 'API', 'required|numeric');
                $this->form_validation->set_rules('api_service_id', 'API ID Layanan', 'required|alpha_numeric_spaces');
                $this->form_validation->set_rules('name', 'Nama', 'required|min_length[1]|max_length[100]');
                $this->form_validation->set_rules('description', 'Deskripsi', 'required');
                $this->form_validation->set_rules('price', 'Harga', 'required|numeric');
                $this->form_validation->set_rules('profit', 'Keuntungan', 'required|numeric');
                $this->form_validation->set_rules('min', 'Minimal Pesan', 'required|numeric');
                $this->form_validation->set_rules('max', 'Maksimal Pesan', 'required|numeric');
                $this->form_validation->set_rules('type', 'Tipe', 'required|in_list[primary,custom_comments,custom_link]');
                if ($this->form_validation->run() == true) {
                    $data_input = [
                        'service_category_id' => $this->db->escape_str($this->input->post('service_category_id')),
                        'api_id' => $this->db->escape_str($this->input->post('api_id')),
                        'api_service_id' => $this->db->escape_str($this->input->post('api_service_id')),
                        'name' => $this->db->escape_str($this->input->post('name')),
                        'description' => strip_tags($this->input->post('description')),
                        'price' => $this->db->escape_str($this->input->post('price')),
                        'profit' => $this->db->escape_str($this->input->post('profit')),
                        'min' => $this->db->escape_str($this->input->post('min')),
                        'max' => $this->db->escape_str($this->input->post('max')),
                        'api' => ($this->input->post('api') <> '') ? '1' : '0',
                        'type' => $this->db->escape_str($this->input->post('type')),
                    ];
                    if ($this->service_model->get_row(['name' => $data_input['name']])) {
                        $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Nama sudah ada didatabase.'));
                    } else {
                        $report = [
                            'service_id' => $last->id + 1,
                            'type' => "enable",
                            'description' => "LAYANAN DIAKTIFKAN",
                            'created_at' => date('Y-m-d H:i:s'),
                        ];
                        $insert_data = $this->service_model->insert_report($report);
                        $insert_data = $this->service_model->insert($data_input);
                        if ($insert_data) {
                            $this->session->set_flashdata('result', array('alert' => 'success', 'title' => 'Tambah data berhasil!', 'msg' => 'Data <b>#' . $insert_data . '</b> berhasil ditambahkan.'));
                            exit(redirect(base_url('admin/' . $this->uri->segment(2))));
                        } else {
                            $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Kesalahan tidak terduga.'));
                        }
                    }
                } else {
                    $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => '<br />' . validation_errors()));
                }
            }
            $this->render_admin('admin/' . $this->uri->segment(2) . '/add', ['service_category' => $this->service_category_model->get_rows(), 'api' => $this->api_model->get_rows()]);
        } else { // edit
            if ($this->input->post()) {
                $this->form_validation->set_rules('service_category_id', 'Kategori', 'required|numeric');
                $this->form_validation->set_rules('api_id', 'API', 'required|numeric');
                $this->form_validation->set_rules('api_service_id', 'API ID Layanan', 'required|alpha_numeric_spaces');
                $this->form_validation->set_rules('name', 'Nama', 'required|min_length[1]|max_length[100]');
                $this->form_validation->set_rules('description', 'Deskripsi', 'required');
                $this->form_validation->set_rules('price', 'Harga', 'required|numeric');
                $this->form_validation->set_rules('profit', 'Keuntungan', 'required|numeric');
                $this->form_validation->set_rules('min', 'Minimal Pesan', 'required|numeric');
                $this->form_validation->set_rules('max', 'Maksimal Pesan', 'required|numeric');
                $this->form_validation->set_rules('type', 'Tipe', 'required|in_list[primary,custom_comments,custom_link]');
                if ($this->form_validation->run() == true) {
                    $data_input = [
                        'service_category_id' => $this->db->escape_str($this->input->post('service_category_id')),
                        'api_id' => $this->db->escape_str($this->input->post('api_id')),
                        'api_service_id' => $this->db->escape_str($this->input->post('api_service_id')),
                        'name' => $this->db->escape_str($this->input->post('name')),
                        'description' => strip_tags($this->input->post('description')),
                        'price' => $this->db->escape_str($this->input->post('price')),
                        'profit' => $this->db->escape_str($this->input->post('profit')),
                        'min' => $this->db->escape_str($this->input->post('min')),
                        'max' => $this->db->escape_str($this->input->post('max')),
                        'api' => ($this->input->post('api') <> '') ? '1' : '0',
                        'type' => $this->db->escape_str($this->input->post('type')),
                    ];
                    if ($data_input['name'] <> $target->name and $this->service_model->get_row(['name' => $data_input['name']])) {
                        $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Nama sudah ada didatabase.'));
                    } else {
                        $update_target = $this->service_model->update($data_input, ['id' => $i]);
                        if ($update_target) {

                            $report = [
                                'service_id' => $i,
                                'type' => "enable",
                                'description' => "LAYANAN DIAKTIFKAN",
                                'created_at' => date('Y-m-d H:i:s'),
                            ];
                            $this->service_model->insert_report($report);
                            $this->session->set_flashdata('result', array('alert' => 'success', 'title' => 'Perubahan data berhasil!', 'msg' => 'Data <b>#' . $i . '</b> berhasil diperbaharui.'));
                            exit(redirect(base_url('admin/' . $this->uri->segment(2))));
                        } else {
                            $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Kesalahan tidak terduga.'));
                        }
                    }
                } else {
                    $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => '<br />' . validation_errors()));
                }
            }
            $this->render_admin('admin/' . $this->uri->segment(2) . '/edit', ['target' => $target, 'service_category' => $this->service_category_model->get_rows(), 'api' => $this->api_model->get_rows()]);
        }
    }
    public function delete($i = '')
    {
        $target = $this->service_model->get_by_id($i);
        if ($target == false) show_404();
        $delete_target = $this->service_model->delete(['id' => $i]);
        if ($delete_target) {
            $this->session->set_flashdata('result', array('alert' => 'success', 'title' => 'Hapus data berhasil!', 'msg' => 'Data <b>#' . $i . '</b> berhasil dihapus.'));
        } else {
            $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Kesalahan tidak terduga.'));
        }
        redirect(base_url('admin/' . $this->uri->segment(2)));
    }
    public function detail($i = '')
    {
        $target = $this->service_model->get_by_id($i);
        if ($target == false) show_404();
        $this->load->view('admin/' . $this->uri->segment(2) . '/detail', ['target' => $target, 'service_category' => $this->service_category_model->get_by_id($target->service_category_id), 'api' => $this->api_model->get_by_id($target->api_id)]);
    }
    public function status($i = '', $status = '')
    {
        $target = $this->service_model->get_by_id($i);
        if ($target == false) show_404();
        if (in_array($status, ['0', '1']) == false) show_404();
        if ($status == 1) {
            $report = [
                'service_id' => $i,
                'type' => "enable",
                'description' => "LAYANAN DIAKTIFKAN",
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $this->service_model->insert_report($report);
        } else if ($status == 0) {
            $report = [
                'service_id' => $i,
                'type' => "disable",
                'description' => "LAYANAN DINONAKTIFKAN",
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $this->service_model->insert_report($report);
        }
        $update_target = $this->service_model->update(['status' => $status], ['id' => $i]);
        if ($update_target) {
            $this->session->set_flashdata('result', array('alert' => 'success', 'title' => 'Perubahan status berhasil!', 'msg' => 'Data <b>#' . $i . '</b> berhasil diubah.'));
        } else {
            $this->session->set_flashdata('result', array('alert' => 'danger', 'title' => 'Gagal!', 'msg' => 'Kesalahan tidak terduga.'));
        }
        redirect(base_url('admin/' . $this->uri->segment(2)));
    }
    public function filter()
    {
        $api = $this->api_model->get_by_id($this->input->post('api'));
        if ($api) {
            $this->session->set_userdata('filter_service_api', $this->input->post('api'));
        } else {
            $this->session->unset_userdata('filter_service_api');
        }
        $service_category = $this->service_category_model->get_by_id($this->input->post('service_category'));
        if ($service_category) {
            $this->session->set_userdata('filter_service_service_category', $this->input->post('service_category'));
        } else {
            $this->session->unset_userdata('filter_service_service_category');
        }
        redirect(base_url('admin/' . $this->uri->segment(2)));
    }
}
