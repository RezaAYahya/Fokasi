<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model
{

    public function getprofile($username)
    {
        $query = $this->db->where('username', $username)->get('tb_dokter')->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }

    public function setprofile($data)
    {
        $this->db->set('username', $data['username']);
        $this->db->set('name', $data['name']);
        $this->db->set('phone_number', $data['phone_number']);
        $this->db->set('email', $data['email']);
        $this->db->set('bidang', $data['bidang']);
        $this->db->where('username', $data['prevuser']);
        $this->db->update('tb_member');
    }

    public function increaserating($username)
    {
        $rating = $this->db->select('rating')->where('username', $username)->get('tb_dokter')->result();
        $rating = $rating + 1;
    }

    public function decreaserating($username)
    {
        $rating = $this->db->select('rating')->where('username', $username)->get('tb_dokter')->result();
        $rating = $rating - 1;
    }
}
