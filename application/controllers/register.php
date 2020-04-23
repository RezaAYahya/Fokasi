<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_dokter');
        $this->load->model('m_member');
    }

    public function index()
    {
    }

    public function user()
    {
        $this->form_validation->set_rules('username', 'username', 'is_unique[tb_member.username]|required|trim', [
            'is_unique' => "Username yang anda masukkan telah dipakai"
        ]);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_member.email]', [
            'valid_email' => "Email anda tidSak valid",
            'is_unique' => "Email Telah digunakan"
        ]);
        $this->form_validation->set_rules('number', 'Number', 'required|is_unique[tb_member.phonenumber]');

        if ($this->form_validation->run() == false) {
            $this->load->view('register-user');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'name' => $this->input->post('name'),
                'phonenumber' => $this->input->post('number'),
                'email' => $this->input->post('email'),
                'profile_pict' => "default.jpg",
            ];
            echo $data['username'];
            echo $data['name'];
            echo 'Data ditambahakn';
            $this->m_member->regisMember($data);
            redirect('/login');
        }
    }
    public function dokter()
    {

        $this->form_validation->set_rules('usernamedok', 'username', 'is_unique[tb_dokter.usernamedok]|required|trim', [
            'is_unique' => "Username yang anda masukkan telah dipakai"
        ]);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_dokter.email]', [
            'valid_email' => "Email anda tidSak valid",
            'is_unique' => "Email Telah digunakan"
        ]);
        $this->form_validation->set_rules('number', 'Number', 'required|is_unique[tb_dokter.phonenumber]');

        if ($this->form_validation->run() == false) {
            $this->load->view('register-dokter');
        } else {
            $data = [
                'usernamedok' => $this->input->post('usernamedok'),
                'password' => $this->input->post('password'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'profile_pict' => "default.jpg",
                'bidang_id' => (int) $this->input->post('bidang'),
                'rating' => 0,
                'phonenumber' => $this->input->post('number'),
            ];
            // echo 'Data ditambahakn';
            $this->m_dokter->regisDokter($data);
            redirect('/login');
        }
    }
}
