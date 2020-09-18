<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		$kategori 	= $this->kategori_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Kategori Berita (' . count($kategori) . ')',
			'kategori'	=> $kategori,
			'isi'		=> 'admin/kategori/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// api create
	public function tambah()	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_kategori','Nama kategori','required|is_unique[kategori_berita.nama_kategori]',
			array(	'required'		=> 'Nama kategori harus diisi',
					'is_unique'		=> 'Nama kategori sudah ada. Buat Nama kategori baru!'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title'				=> 'Tambah Kategori Berita',
						'kategori_berita'	=> $this->kategori_model->listing(),
						'isi'				=> 'admin/kategori/tambah');

		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Proses masuk ke database
		}else{

			$i 	= $this->input;
			$slug 	= url_title($i->post('nama_kategori'),'dash',TRUE);

			$data = array(	'id_user'		=> $this->session->userdata('id_user'),
							'nama_kategori'	=> $i->post('nama_kategori'),
							'slug_kategori'	=> $slug,
		
						);
			$this->kategori_model->tambah($data);

			$this->session->set_flashdata('sukses', 'Data telah ditambah');

			redirect(base_url('admin/kategori'),'refresh');
		}
		// End proses masuk database
	}

	// Edit kategori
	public function edit($id_kategori)
	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama_kategori',
			'Nama kategori',
			'required',
			array('required'		=> 'Nama kategori harus diisi')
		);

		if ($valid->run() === FALSE) {
			// End validasi

			$data = array(

				'title'		=> 'Edit Kategori Berita',
				'kategori'	=> $this->kategori_model->detail($id_kategori),
				'isi'		=> 'admin/kategori/edit'
				
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
			// Proses masuk ke database
		} else {

			$i 	= $this->input;
			$slug 	= url_title($i->post('nama_kategori'), 'dash', TRUE);

			$data = array(
				'id_kategori'	=> $id_kategori,
				'id_user'		=> $this->session->userdata('id_user'),
				'nama_kategori'	=> $i->post('nama_kategori'),
				'slug_kategori'	=> $slug,
			);

			$this->kategori_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/kategori'), 'refresh');
		}
		// End proses masuk database
	}



}

/* End of file Kategori.php */
