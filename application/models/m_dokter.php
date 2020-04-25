<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model
{

    public function getprofile($username)
    {
        $query = $this->db->where('usernamedok', $username)->get('tb_dokter')->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    public function setprofile($data)
    {
        // $this->db->set('usernamedok', $data['usernamedok']); tidak terpakai
        $this->db->set('name', $data['name']);
        $this->db->set('phonenumber', $data['phonenumber']);
        $this->db->set('email', $data['email']);
        $this->db->where('usernamedok', $data['usernamedok']);
        $this->db->update('tb_dokter');
    }

    public function regisDokter($data)
    {
        $this->db->insert('tb_dokter', $data);
    }

    public function increaserating($username)
    {
        $rating = $this->db->select('rating')->where('usernamedok', $username)->get('tb_dokter')->result();
        $rating = $rating + 1;
        $this->db->set('rating', $rating)->where('usernamedok', $username)->update('tb_dokter');
    }

    public function decreaserating($username)
    {
        $rating = $this->db->select('rating')->where('usernamedok', $username)->get('tb_dokter')->result();
        $rating = $rating - 1;
        $this->db->set('rating', $rating)->where('usernamedok', $username)->update('tb_dokter');
    }

    public function getkomendokter($username)
    {
        $query = $this->db->where('usernamedok', $username)->get('tb_komen');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function addkomendokter($data)
    {
        #usernamedok untuk menambah ke tabel komentar
        $username = $data['usernamedok'];
        #untuk menambah isi komentar
        $komentar = $data['komentar'];
        #jelas ini perlu bangettt
        $id = $data['post_id'];

        $this->db->where('post_id', $id)->set('usernamedok', $username);
        $this->db->set('komentar', $komentar);
        $this->db->insert('tb_komen');
    }

    public function getBidang($username)
    {
        $this->db->select('status_bidang');
        $this->db->where('usernamedok', $username);
        $this->db->join('tb_bidang', 'bidang_id');
        return $this->db->get('tb_dokter')->row_array();
    }
}
