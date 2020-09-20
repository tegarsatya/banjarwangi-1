<?php
 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Profil extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
	}

	// api Get
	public function index()
	{
		$profil					= $this->profil_model->listing();

		$data	= array(
			'title'				=> 'Halaman Profil ',
			'profil'			=> $profil,
			'isi'				=> 'profil/list'
		);
		$this->load->view('layout/wrapper', $data);
	}
 }
 
 /* End of file Profil.php */
 