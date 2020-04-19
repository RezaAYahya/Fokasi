<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct(){
    parent::__construct();
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
  public function user(){
    $this->load->view('login-user');
  }
  public function dokter(){
    $this->load->view('login-dokter');
  }
}
?>