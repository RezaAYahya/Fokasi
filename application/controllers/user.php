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
    
  }
  public function profile()
  {
    $this->load->view('profile');
  }
  public function edit_profile()
  {
    $this->load->view('edit_profile');
  }
}