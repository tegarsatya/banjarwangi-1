<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
	}
	
	// Index 
	public function index() {
		$berita		= $this->berita_model->home();
		$kategori	= $this->kategori_model->listing();
		
		$data	= array( 'title'			=> 'Berita ',
						 'keywords' 		=> 'Berita ',
						 'berita'			=> $berita,
						 'kategori'			=> $kategori,
						 'isi'				=> 'berita/list');
		$this->load->view('layout/wrapper',$data); 
	}


	// Kategori 
	public function kategori($slug_kategori)
	{
		$kategori			= $this->kategori_model->read($slug_kategori);
		$id_kategori		= $kategori->id_kategori;
		$berita				= $this->berita_model->kategori($id_kategori);

		$data	= array(
			'title'	=> 'Kategori Berita ' . $kategori->nama_kategori,
			'keywords' => 'Kategori Berita ' . $kategori->nama_kategori,
			'berita'	=> $berita,
			'isi'		=> 'berita/list'
		);
		$this->load->view('layout/wrapper', $data);
	}

	// Read
	public function read($slug_berita)
	{
		$berita	= $this->berita_model->home();
		$read	= $this->berita_model->read($slug_berita);

		$data	= array(
			'title'	=> $read->nama_berita,
			'keywords' => $read->nama_berita,
			'berita'	=> $berita,
			'read'		=> $read,
			'isi'		=> 'berita/read'
		);
		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file Berita.php */
