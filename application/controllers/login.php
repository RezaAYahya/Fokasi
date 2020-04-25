<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_member');
    $this->load->model('m_loginMember');
    $this->load->model('m_dokter');
    $this->load->model('m_loginDokter');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['css'] = 'assets/css/style-login.css';
    $data['title'] = 'Home';
    $data['js'] = 'assets/js/index-all.js';
    $this->load->view('template/header', $data);
    $this->load->view('login-session');
    $this->load->view('template/footer', $data);
  }

  public function user()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    #ini validasi apakah form terisi dengan benar
    if ($this->form_validation->run() == false) {
      $this->load->view('login-user');
    } else {
      $verify['username'] = $this->input->post('username');
      $verify['password'] = $this->input->post('password');
      #ini validasi apakah data yang dimasukkan ada atau tidak
      if ($this->m_loginMember->verifyMember($verify)) {
        $user_d = $this->m_member->getprofile($this->input->post('username'));
        $this->session->set_userdata('username', $user_d['username']);
        redirect('/user');
      } else {
        $error['error_message'] = "Username or password invalid";
        $this->load->view('login-user', $error);
      }
    }
  }
  public function dokter()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    #ini validasi apakah form terisi dengan benar
    if ($this->form_validation->run() == false) {
      $this->load->view('login-dokter');
    } else {
      $verify['username'] = $this->input->post('username');
      $verify['password'] = $this->input->post('password');
      #ini validasi apakah data yang dimasukkan ada atau tidak
      if ($this->m_loginDokter->verifyDokter($verify)) {
        echo "anjirr masukk akhirnya ke menu dokter";
        // $user_d = $this->m_dokter->getprofile($this->input->post('username'));
        // $this->session->set_userdata('username', $user_d['username']);
        // $this->load->view('menu-dokter');
      } else {
        $error['error_message'] = "Username or password invalid";
        $this->load->view('login-dokter', $error);
      }
    }
  }
}
