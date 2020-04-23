<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_posting extends CI_Model
{
    public function loadkomentar($data)
    {
        #ini dapet dari controller yang ngambil dari view
        #di view kasih php untuk add userdata
        $id_post = $data['id_post'];
        $query = $this->db->where('posting_id', $id_post)->get('tb_komentar');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }


    public function loadingpost($data)
    {
        #ini buat loading post kalau user atau dokter mau melihat semua postingan yang ada
        $query = $this->db->get('tb_posting');
        if ($query->num_rows() > 0) {
            return $query->result_array(); #return as array
        } else {
            return false;
        }
    }
}
