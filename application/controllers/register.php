<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
    }

    public function user()
    {
        $this->form_validation->set_rules('username');
        $this->load->view('register-user');
    }
    public function dokter()
    {

        $this->load->view('register-dokter');
    }
}
