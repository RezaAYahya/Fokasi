<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_member extends CI_Model
{
    public function getprofile($username)
    {
        $query = $this->db->where('username', $username)->get('tb_member')->row_array();
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
        $this->db->where('username', $data['prevuser']);
        $this->db->update('tb_member');
    }

    // kalau foreign key gak berubah
    // public function setpostowner($data){
    //     $this->db->set('username', $data['username']);
    //     $this->db->where('username',$data['prevuser']);
    //     $this->db->update('tb_post')
    // }

    //kakau mau output data postingan kita pake if di tampilan, jadi kalau datanya ada bisa ditampilin,
    // kalau datanya gak ada tinggal output belum ada postingan.
    public function getmypost($username)
    {
        $query = $this->db->where('username', $username)->get('tb_posting')->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
}
