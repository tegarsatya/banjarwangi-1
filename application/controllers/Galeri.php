<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
	}

	// api Get
	public function index()
	{
		$galeri	= $this->galeri_model->listing();

		$data	= array(
			'title'			=> 'Halaman Berita ',
			'galeri'			=> $galeri,
			'isi'				=> 'galeri/list'
		);
		$this->load->view('layout/wrapper', $data); 
		
	}

}

/* End of file Galeri.php */
