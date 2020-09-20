<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penerimaan_model');
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}


	// APi Get
	public function index()
	{
		$penerimaan		= $this->penerimaan_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'			=> 'Data Syarat Penerimaan Siswa  (' . count($penerimaan) . ')',
			'penerimaan'	=> $penerimaan,
			'isi'			=> 'admin/penerimaan/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Api Create
	public function tambah()
	{
		$penerimaan		= $this->penerimaan_model->listing();

		// Validasi
		$v = $this->form_validation;

		$v->set_rules(
			'keterangan',
			'keterangan',
			'required',
			array('required'		=> 'keterangan harus diisi')
		);


		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/penerimaan/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'			=> 'Tambah Data Syarat Penerimaan Siswa Baru',
					'penerimaan'	=> $penerimaan,
					'error'			=> $this->upload->display_errors(),
					'isi'			=> 'admin/penrimaan/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/penerimaan/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 200; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				// Proses ke database
				$i = $this->input;
				$data = array(

					'keterangan'			=> $i->post('keterangan'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);

				$this->penerimaan_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data telah ditambah');
				redirect(base_url('admin/penerimaan'));
			}
		}
		// End masuk database
		$data = array(

			'title'			=> 'Tambah Data Syarat Penerimaan Siswa Baru',
			'penerimaan'	=> $penerimaan,
			'isi'			=> 'admin/penerimaan/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Api Delete
	public function delete($id_penerimaan)
	{

		$data = array('id_penerimaan'	=> $id_penerimaan);
		$this->penerimaan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah didelete');
		redirect(base_url('admin/penerimaan'));
	}

}

/* End of file Penerimaan.php */
