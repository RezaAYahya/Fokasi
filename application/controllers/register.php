<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

 function __construct(){
  parent::__construct();
 }
 
 public function index()
 {
 }
 
 public function user(){
  $this->load->view('register-user');
 }
 public function dokter(){
  $this->load->view('register-dokter');
 }
}
?>