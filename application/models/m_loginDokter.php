<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_loginDokter extends CI_Model
{
    public function verifyDokter($data)
    {
        //dari tb_member karena sudah ada pemilihan menu dari awal
        $query = $this->db->where("usernamedok", $data['username'])->where("password", $data['password'])->get("tb_dokter");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
