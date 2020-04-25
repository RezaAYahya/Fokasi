<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_member');
        $this->load->library('form_validation');
    }
    public function index()
    {
        //isinya ke dashboard
    }

    public function profileMember()
    {
        $user = $this->session->userdata('username');
        $user = 'arditAja';
        if ($user != NULL) {
            $data['dataMember'] = $this->m_member->getprofile($user);
            $this->load->view('profileMember', $data);
        } else {
            redirect('/Welcome');
        }
    }

    public function edit_profileMember()
    {
        $user = $this->session->userdata('username');
        // $user = 'arditAja';
        if ($user != NULL) {
            $datamember['dataMember'] = $this->m_member->getprofile($user);
            // $data['dataDok'] = $this->m_dokter->getprofile($this->session->userdata('username'));
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('number', 'Number', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('edit-Member', $datamember);
            } else {
                $data = [
                    // 'usernamedok' => $this->session->userdata('username'),
                    'username' => $user,
                    'password' => $this->input->post('password'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phonenumber' => $this->input->post('number')
                ];
                // echo 'Data diubah';
                $this->m_member->setprofile($data);

                // $user = $this->session->set_userdata('username', $data['usernamedok']); kalau mau ganti username aja
                redirect('/user/edit_profileMember/');
            }
        } else {
            redirect('/Welcome');
        }
        // $user = $this->session->userdata('username');
        // if ($user != NULL) {
        //   $this->load->view('edit-Dokter');
        // } else {
        //   redirect('/Welcome');
        // }
    }
}
