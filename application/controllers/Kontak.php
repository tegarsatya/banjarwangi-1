<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// api Get
	public function index()
	{
		$data	= array(
			'title'				=> 'Halaman Kontak ',
			'isi'				=> 'kontak/list'
		);
		$this->load->view('layout/wrapper', $data); 
	}
}

/* End of file Kontak.php */
