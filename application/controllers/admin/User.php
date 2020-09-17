<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}


	public function index()
	{
		$user 	= $this->user_model->listing();
		// $total 	= $this->user_model->total();
		
		$data = array(
			'title'		=> 'Data User ('.count($user).')',
			'user'		=> $user,
			'isi'		=> 'admin/user/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah
	public function tambah()
	{
		// Validasi
		$validasi 	= $this->form_validation;

		$validasi->set_rules(
			'nama',
			'Nama User',
			'required',
			array('required'		=> '%s harus diisi')
		);

		$validasi->set_rules(
			'username',
			'Username',
			'required|is_unique[users.username]',
			array(
				'required'		=> '%s harus diisi',
				'is_unique'		=> '%s sudah ada. Buat kode baru'
			)
		);

		$validasi->set_rules(
			'password',
			'Password',
			'required',
			array('required'		=> '%s harus diisi')
		);

		if ($validasi->run() === FALSE) {
			// End validasi

			$data = array(
				'title'		=> 'Tambah User Baru',
				'isi'		=> 'admin/user/tambah'
			);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
			// Masuk ke database
		} else {

			$inp = $this->input;

			$data = array(
				'nama'			=> $inp->post('nama'),
				'email'			=> $inp->post('email'),
				'username'		=> $inp->post('username'),
				'password'		=> sha1($inp->post('password')),
				'akses_level'	=> $inp->post('akses_level'),
				'tanggal'		=> date('Y-m-d H:i:s')
			);
			$this->user_model->tambah($data);

			$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
			
			redirect(base_url('admin/user'), 'refresh');
		}
		// End masuk database
	}

}

/* End of file User.php */
