<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getData($nama_database, $params = array())
    {
        $this->db->select('*');
        $this->db->from($nama_database);

        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        if (array_key_exists("id", $params)) {
            $this->db->where('id', $params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } else if (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }
            if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
                $result = $this->db->count_all_results();
            } else if (array_key_exists("returnType", $params) && $params['returnType'] == 'single') {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->row_array() : false;
            } else {
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : false;
            }
        }
        return $result;
    }

    public function insert($nama_database, $data)
    {
        $insert = $this->db->insert($nama_database, $data);
        return $insert ? true : false;
    }

    public function update($nama_database, $data, $id)
    {
        $update = $this->db->update($nama_database, $data, array('id' => $id));
        return $update ? true : false;
    }

    public function delete($nama_database, $id)
    {
        $delete = $this->db->delete($nama_database, array('id' => $id));
        return $delete ? true : false;
    }
}
