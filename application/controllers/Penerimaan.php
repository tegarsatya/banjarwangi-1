<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penerimaan_model');
	}

	// api Get
	public function index()
	{
		$penerimaan				= $this->penerimaan_model->listing();

		$data	= array(
			'title'				=> 'Halaman Syarat Penerimaan Siswa Baru ',
			'penerimaan'		=> $penerimaan,
			'isi'				=> 'penerimaan/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Penerimaan.php */
