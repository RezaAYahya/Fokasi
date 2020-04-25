
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dokter');
        $this->load->library('form_validation');
    }

    public function index()
    {
    }

    public function profileDokter()
    {
        $this->load->view('profile');
    }

    public function edit_profileDokter()
    {
        $user = $this->session->userdata('username');
        // $user = 'amantap'; percobaan
        if ($user != NULL) {
            $datadok['dataDok'] = $this->m_dokter->getprofile('amantap');
            // $data['dataDok'] = $this->m_dokter->getprofile($this->session->userdata('username'));
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('number', 'Number', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('edit-Dokter', $datadok);
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
}
