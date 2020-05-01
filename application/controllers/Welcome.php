<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Home';
		$data['js'] = 'assets/js/index.js';
		$this->load->view('template/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('template/footer', $data);
	}
	public function blog()
	{
		$data['title'] = 'Informasi Kesehatan';
		$data['js'] = 'assets/js/set-bg.js';
		$data['css'] = 'assets/css/blog.css';
		$this->load->view('template/header', $data);
		$this->load->view('blog');
		$this->load->view('template/footer', $data);
	}
	public function blog_detail($poto)
	{
		$data['title'] = 'Informasi Kesehatan';
		$data['js'] = 'assets/js/index-all.js';
		$data['css'] = 'assets/css/blog.css';
		$data['foto'] = $poto;
		$this->load->view('template/header', $data);
		$this->load->view('blog-detail', $data);
		$this->load->view('template/footer', $data);
	}
	public function about()
	{
		$data['title'] = 'About';
		$data['js'] = 'assets/js/index-all.js';
		$data['css'] = 'assets/css/about.css';
		$this->load->view('template/header', $data);
		$this->load->view('about');
		$this->load->view('template/footer', $data);
	}
	public function searchDok()
	{
		$data['title'] = 'Cari Dokter';
		$data['js'] = 'assets/js/index-all.js';
		$data['css'] = 'assets/css/search-dokter.css';
		$this->load->view('template/header', $data);
		$this->load->view('search-dokter');
		$this->load->view('template/footer', $data);
	}
	public function searchObat()
	{
		$data['title'] = 'Cari Obat';
		$data['js'] = 'assets/js/index-all.js';
		$data['css'] = 'assets/css/style-obat.css';
		$this->load->view('template/header', $data);
		$this->load->view('search-obat');
		$this->load->view('template/footer', $data);
	}
	public function daftar_obat()
	{
		$data['title'] = 'Cari Obat';
		$data['js'] = 'assets/js/index-all.js';
		$data['css'] = 'assets/css/search-dokter.css';
		$this->load->view('template/header', $data);
		$this->load->view('daftar-obat');
		$this->load->view('template/footer', $data);
	}
	public function forum()
	{
		$data['title'] = 'Forum';
		$data['js'] = 'assets/js/index-all.js';
		$data['css'] = 'assets/css/forum.css';
		$this->load->view('template/header', $data);
		$this->load->view('forum2');
		$this->load->view('template/footer', $data);
	}
}
