<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_posting extends CI_Model
{

    ##NOTEEE
    #kalau nyari get post berdasarkan user yang punya, ada di model member
    #gitu juga kalau komentar, untuk loading komentar apa aja yang dipost dokter ada di model dokter

    public function loadDatakomentarData($data)
    {
        #ini dapet dari controller yang ngambil dari view
        #di view kasih php untuk add userdata
        #mengembalikan data-data yang komen dan isi komentar
        $id_post = $data['id_post'];
        $query = $this->db->where('posting_id', $id_post)->join('tb_dokter', 'usernamedok')->get('tb_komentar');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getPosterDataByPostID($data)
    {
        #mengembalikan isi postingan dan data data yang melakukan posting
        $id = $data['post_id'];
        $query = $this->db->where('posting_id', $id)->join('tb_member', 'username')->get('tb_posting');
        if ($query->num_rows > 0) {
            return $query->row_result();
        } else {
            return false;
        }
    }


    public function loadingpost()
    {
        #ini buat loading post kalau user atau dokter mau melihat semua postingan yang ada
        $query = $this->db->get('tb_posting');
        if ($query->num_rows() > 0) {
            return $query->result_array(); #return as array
        } else {
            return false;
        }
    }

    public function hapusposting($id_posting)
    {
        $this->db->where('posting_id', $id_posting)->delete('tb_posting');
    }

    public function checkposting($id_posting)
    {
        #ini cuma ngecek ada apa enggak si postingannya
        $query = $this->db->where('posting_id', $id_posting)->get('tb_posting');
        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }
}
