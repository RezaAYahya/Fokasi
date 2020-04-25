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
        // $this->db->set('username', $data['username']);
        $this->db->set('name', $data['name']);
        $this->db->set('phonenumber', $data['phonenumber']);
        $this->db->set('email', $data['email']);
        $this->db->where('username', $data['username']);
        $this->db->update('tb_member');
    }

    public function regisMember($data)
    {
        $this->db->insert('tb_member', $data);
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

    public function deletemypost($data)
    {
        $user = $data['username']; #username yang punya post ambil aja dari session
        $posting_id = $data['posting_id']; #kalau ini ambil dari param controller
        $this->db->where('username', $user);
        $this->db->where('posting_id', $posting_id);
        $this->db->delete('tb_posting');
    }

    //query untuk mencari dokter
    // SELECT * FROM `tb_dokter` WHERE usernamedok LIKE '%mantap%'
}
