<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tamu extends CI_Controller {

	// / Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('buku_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	// APi Get 
	public function index()
	{
		$buku			= $this->buku_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Buku Tamu (' . count($buku) . ')',
			'buku_tamu'	=> $buku,
			'isi'		=> 'admin/buku-tamu/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Api Delete
	public function delete($id_buku_tamu)
	{

		$data = array('id_buku_tamu'	=> $id_buku_tamu);
		$this->buku_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah didelete');
		redirect(base_url('admin/buku_tamu'));
	}

}

/* End of file Buku_tamu.php */
