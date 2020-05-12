
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dokter');
        $this->load->model('m_member');
        $this->load->model('m_posting');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        if ($user != NULL) {
            $data['dataDokter'] = $this->m_dokter->getprofile($user);
            $data['class_home'] = 'active';
            $data['role'] = 'Dokter';
            $this->load->view('template/header-dashboard-dokter', $data);
            $this->load->view('dokter/home');
        } else {
            redirect('/login/dokter');
            // echo 'test';
        }
    }

    public function profileDokter()
    {
        $user = $this->session->userdata('username');
        if ($user != NULL) {
            $data['dataDokter'] = $this->m_dokter->getprofile($user);
            $data['bidangDokter'] = $this->m_dokter->getBidang($user);
            $data['profile'] = 'assets/css/style-profile-dokter.css';
            $this->load->view('template/header-dashboard-dokter', $data);
            $this->load->view('dokter/dashboard-dokter-profile', $data);
        } else {
            redirect('/Welcome');
        }
    }

    public function edit_profileDokter()
    {
        $user = $this->session->userdata('username');
        if ($user != NULL) {
            $datadok['dataDok'] = $this->m_dokter->getprofile('amantap');
            // $data['dataDok'] = $this->m_dokter->getprofile($this->session->userdata('username'));
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('number', 'Number', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('dokter/edit-Dokter', $datadok);
            } else {
                $data = [
                    // 'usernamedok' => $this->session->userdata('username'),
                    'usernamedok' => $user,
                    'password' => $this->input->post('password'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phonenumber' => $this->input->post('number')
                ];
                // echo 'Data diubah';
                $this->m_dokter->setprofile($data);

                // $user = $this->session->set_userdata('username', $data['usernamedok']); kalau mau ganti username aja
                redirect('/dokter/edit_profileDokter/');
            }
        } else {
            redirect('/Welcome');
        }
        // batas
    }
    public function forum()
    {
        $user = $this->session->userdata('username');
        if ($user != NULL) {
            $data['dataMember'] = $this->m_member->getprofile($user);
            $data['class_forum'] = 'active';
            $data['forum'] = 'assets/css/dashboard-forum1.css';
            $data['dataForum'] = $this->m_posting->loadingpost();

            $data['dataDokter'] = $this->m_dokter->getprofile($user);
            $data['class_home'] = 'active';
            $data['role'] = 'Dokter';

            $this->load->view('template/header-dashboard-dokter', $data);
            $this->load->view('dokter/dashboard-dokter-forum', $data);
        } else {
            redirect('/Welcome');
        }
    }
}
