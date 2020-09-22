<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('visi_misi_model');
		// $this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan', $url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	public function index()
	{
		$vm		 	= $this->visi_misi_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Visi & Misi (' . count($vm) . ')',
			'visi_misi'	=> $vm,
			'isi'		=> 'admin/visi-misi/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah
	public function tambah()
	{
		$vm				= $this->visi_misi_model->listing();

		// Validasi
		$v = $this->form_validation;


		$v->set_rules(
			'isi',
			'isi visi & misi',
			'required',
			array('required'		=> 'isi berita harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/vm/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'		=> 'Tambah Visi Misi',
					'visi_misi'	=> $vm,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/visi-misi/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/vm/';
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

				$this->visi_misi_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Berita telah ditambah');
				redirect(base_url('admin/visi_misi'));
			}
		}
		// End masuk database
		$data = array(

			'title'		=> 'Tambah Visi Misi ',
			'visi_misi'	=> $vm,
			'isi'		=> 'admin/visi-misi/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit galeri
	public function edit($id_visi_misi)
	{
		$vm			 	= $this->visi_misi_model->detail($id_visi_misi);

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

				$config['upload_path']   = './assets/upload/vm/';
				$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
				$config['max_size']      = '12000'; // KB  
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit Visi & Misi',
						'visi_misi'			=> $vm,
						'isi'				=> 'admin/visi-misi/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					// Masuk database
				} else {
					$upload_data        		= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image']     	= './assets/upload/vm/';
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
						'id_visi_misi'			=> $id_visi_misi,
						'isi'					=> $i->post('isi'),
						'gambar'				=> $upload_data['uploads']['file_name'],
					);
					$this->visi_misi_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit');
					redirect(base_url('admin/visi_misi'), 'refresh');
				}
			} else {
				$i 		= $this->input;

				$data = array(
					'id_user'				=> $this->session->userdata('id_user'),
					'id_visi_misi'			=> $id_visi_misi,
					'isi'					=> $i->post('isi'),
				);
				$this->visi_misi_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit');
				redirect(base_url('admin/visi_misi'), 'refresh');
			}
		}
		// End masuk database
		$data = array(
			'title'				=> 'Edit Visi & Misi',
			'visi_misi'			=> $vm,
			'isi'				=> 'admin/visi-misi/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Delete
	public function delete($visi_misi)
	{

		$data = array('id_visi_misi'	=> $visi_misi);
		$this->visi_misi_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Visi & Misi telah didelete');
		redirect(base_url('admin/visi_misi'));
	}


}

/* End of file Visi_misi.php */
