<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
{


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajar_model');
	}

	// api Get
	public function index()
	{
		$pengajar	= $this->pengajar_model->listing();

		$data	= array(
			'title'				=> 'Halaman Guru ',
			'pengajar'			=> $pengajar,
			'isi'				=> 'pengajar/list'
		);
		$this->load->view('layout/wrapper', $data);
	}
}

/* End of file Galeri.php */
