<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
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
		$galeri		= $this->galeri_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Galeri (' . count($galeri) . ')',
			'galeri'	=> $galeri,
			'isi'		=> 'admin/galeri/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Api Create
	public function tambah()
	{
		$galeri		= $this->galeri_model->listing();

		// Validasi
		$v = $this->form_validation;


		$v->set_rules(
			'isi',
			'isi Galeri',
			'required',
			array('required'		=> 'isi berita harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/galeri/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'		=> 'Tambah Galeri',
					'galeri'	=> $galeri,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/galeri/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/galeri/';
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

					'id_user'				=> $this->session->userdata('id_user'),
					'isi'					=> $i->post('isi'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);

				$this->galeri_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data Galeri telah ditambah');
				redirect(base_url('admin/galeri'));
			}
		}
		// End masuk database
		$data = array(

			'title'		=> 'Tambah Galeri ',
			'galeri'	=> $galeri,
			'isi'		=> 'admin/galeri/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit galeri
	public function edit($id_galeri)
	{
		$galeri 	= $this->galeri_model->detail($id_galeri);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'isi',
			'Isi',
			'required',
			array('required'	=> 'Isi galeri harus diisi')
		);

		if ($valid->run()) {

			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']   = './assets/upload/galeri/';
				$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
				$config['max_size']      = '12000'; // KB  
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit Galeri',
						'galeri'			=> $galeri,
						'error'    			=> $this->upload->display_errors(),
						'isi'				=> 'admin/galeri/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					// Masuk database
				} else {
					$upload_data        		= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image']     	= './assets/upload/galeri/';
					$config['create_thumb']   	= TRUE;
					$config['quality']       	= "100%";
					$config['maintain_ratio']   = TRUE;
					$config['width']       		= 360; // Pixel
					$config['height']       	= 360; // Pixel
					$config['x_axis']       	= 0;
					$config['y_axis']       	= 0;
					$config['thumb_marker']   	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					// Proses hapus gambar
					// if ($galeri->gambar != "") {
					// 	unlink('./assets/upload/' . $galeri->gambar);
					// 	unlink('./assets/upload/galeri/' . $galeri->gambar);
					
					// }
					// End hapus gambar

					$i 		= $this->input;

					$data = array(
						'id_galeri'			=> $id_galeri,
						'id_user'			=> $this->session->userdata('id_user'),
						'isi'				=> $i->post('isi'),
						'gambar'			=> $upload_data['uploads']['file_name'],
					);
					$this->galeri_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit');
					redirect(base_url('admin/galeri'), 'refresh');
				}
			} else {
				$i 		= $this->input;

				$data = array(
					'id_galeri'			=> $id_galeri,
					'id_user'			=> $this->session->userdata('id_user'),
					'isi'				=> $i->post('isi'),
					// 'gambar'			=> $upload_data['uploads']['file_name'],
				);
				$this->galeri_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit');
				redirect(base_url('admin/galeri'), 'refresh');
			}
		}
		// End masuk database
		$data = array(
			'title'				=> 'Edit Galeri',
			'galeri'			=> $galeri,
			'isi'				=> 'admin/galeri/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Api Delete
	public function delete($id_galeri)
	{

		$data = array('id_galeri'	=> $id_galeri);
		$this->galeri_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Galeri telah didelete');
		redirect(base_url('admin/galeri'));
	}


}

/* End of file Galeri.php */
