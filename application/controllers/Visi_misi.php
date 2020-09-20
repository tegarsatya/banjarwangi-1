<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('visi_misi_model');
	}

	// api Get
	public function index()
	{
		$vm					= $this->visi_misi_model->listing();

		$data	= array(
			'title'				=> 'Halaman Visi & Misi ',
			'visi_misi'			=> $vm,
			'isi'				=> 'visi-misi/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Visi_misi.php */
