<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_loginMember extends CI_Model
{
    public function verifyMember($data)
    {
        //dari tb_member karena sudah ada pemilihan menu dari awal
        $query = $this->db->where("username", $data['username'])->where("password", $data['password'])->get("tb_member");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
