<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		$profile 	= $this->profil_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Profile (' . count($profile) . ')',
			'profil'	=> $profile,
			'isi'		=> 'admin/profile/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah
	public function tambah()
	{
		$profile	= $this->profil_model->listing();

		// Validasi
		$v = $this->form_validation;


		$v->set_rules(
			'isi',
			'isi profil',
			'required',
			array('required'		=> 'isi berita harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/profil/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'		=> 'Tambah Data Profil',
					'profil'	=> $profile,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/profile/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/profil/';
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

				$this->profil_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Berita telah ditambah');
				redirect(base_url('admin/profile'));
			}
		}
		// End masuk database
		$data = array(

			'title'		=> 'Tambah Profil ',
			'profil'	=> $profile,
			'isi'		=> 'admin/profile/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit galeri
	public function edit($id_profil)
	{
		$profil		 	= $this->profil_model->detail($id_profil);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'isi',
			'isi',
			'required',
			array('required'	=> 'isi harus diisi')
		);


		if ($valid->run()) {

			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']   = './assets/upload/profil/';
				$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
				$config['max_size']      = '12000'; // KB  
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit Profil',
						'profil'			=> $profil,
						'isi'				=> 'admin/profile/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					// Masuk database
				} else {
					$upload_data        		= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image']     	= './assets/upload/profil/';
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
						'id_user'				=> $this->session->userdata('id_user'),
						'id_profil'				=> $id_profil,
						'isi'					=> $i->post('isi'),
						'gambar'				=> $upload_data['uploads']['file_name'],
					);
					$this->profil_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit');
					redirect(base_url('admin/profile'), 'refresh');
				}
			} else {
				$i 		= $this->input;

				$data = array(
					'id_user'				=> $this->session->userdata('id_user'),
					'id_profil'				=> $id_profil,
					'isi'					=> $i->post('isi'),
				);
				$this->profil_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit');
				redirect(base_url('admin/profile'), 'refresh');
			}
		}
		// End masuk database
		$data = array(
			'title'				=> 'Edit Profil',
			'profil'			=> $profil,
			'isi'				=> 'admin/profile/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Delete
	public function delete($id_profil)
	{

		$data = array('id_profil'	=> $id_profil);
		$this->profil_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Profil telah didelete');
		redirect(base_url('admin/Profile'));
	}

}

/* End of file Profile.php */
