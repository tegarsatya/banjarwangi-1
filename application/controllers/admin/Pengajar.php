<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajar_model');
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
		$pengajar		= $this->pengajar_model->listing();
		// $total 	= $this->user_model->total();

		$data = array(
			'title'		=> 'Data Guru  (' . count($pengajar) . ')',
			'pengajar'	=> $pengajar,
			'isi'		=> 'admin/guru/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	// Api Create
	public function tambah()
	{
		$pengajar		= $this->pengajar_model->listing();

		// Validasi
		$v = $this->form_validation;

		$v->set_rules(
			'nama_pengajar',
			'nama pengajar',
			'required',
			array('required'		=> 'nama harus diisi')
		);

		$v->set_rules(
			'jabatan_pengajar',
			'jabatan pengajar',
			'required',
			array('required'		=> 'jabatan pengajar harus diisi')
		);

		$v->set_rules(
			'pengampu',
			'Pengampu ',
			'required',
			array('required'		=> 'Pengampu Mata Pelajaran harus diisi')
		);

		$v->set_rules(
			'isi',
			'isi Guru',
			'required',
			array('required'		=> 'isi  harus diisi')
		);

		if ($v->run()) {
			$config['upload_path'] 		= './assets/upload/guru/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				// End validasi

				$data = array(
					'title'		=> 'Tambah Guru',
					'pengajar'	=> $pengajar,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/guru/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data);
				// Masuk database
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/guru/';
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

					'nama_pengajar'			=> $i->post('nama_pengajar'),
					'jabatan_pengajar'		=> $i->post('jabatan_pengajar'),
					'pengampu'				=> $i->post('pengampu'),
					'isi'					=> $i->post('isi'),
					'gambar'				=> $upload_data['uploads']['file_name'],
				);

				$this->pengajar_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data pengajar telah ditambah');
				redirect(base_url('admin/pengajar'));
			}
		}
		// End masuk database
		$data = array(

			'title'		=> 'Tambah Guru',
			'pengajar'	=> $pengajar,
			'isi'		=> 'admin/guru/tambah'

		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Edit galeri
	public function edit($id_pengajar)
	{
		$pengajar 	= $this->pengajar_model->detail($id_pengajar);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules(
			'isi',
			'Isi',
			'required',
			array('required'	=> 'Isi guru harus diisi')
		);

		$valid->set_rules(
			'nama_pengajar',
			'nama pengajar',
			'required',
			array('required'	=> 'nama guru harus diisi')
		);

		$valid->set_rules(
			'jabatan_pengajar',
			'jabatan pengajar',
			'required',
			array('required'	=> 'jabatan pengajar harus diisi')
		);

		$valid->set_rules(
			'pengampu',
			'pengampu',
			'required',
			array('required'	=> 'pengampu harus diisi')
		);

		if ($valid->run()) {

			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']   = './assets/upload/guru/';
				$config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
				$config['max_size']      = '12000'; // KB  
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					// End validasi

					$data = array(
						'title'				=> 'Edit guru',
						'pengajar'			=> $pengajar,
						'isi'				=> 'admin/guru/edit'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					// Masuk database
				} else {
					$upload_data        		= array('uploads' => $this->upload->data());
					// Image Editor
					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/' . $upload_data['uploads']['file_name'];
					$config['new_image']     	= './assets/upload/guru/';
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
						'id_pengajar'			=> $id_pengajar,
						'nama_pengajar'			=> $i->post('nama_pengajar'),
						'jabatan_pengajar'		=> $i->post('jabatan_pengajar'),
						'pengampu'				=> $i->post('pengampu'),
						'isi'					=> $i->post('isi'),
						'gambar'				=> $upload_data['uploads']['file_name'],
					);
					$this->pengajar_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit');
					redirect(base_url('admin/guru'), 'refresh');
				}
			} else {
				$i 		= $this->input;

				$data = array(
					'id_pengajar'			=> $id_pengajar,
					'nama_pengajar'			=> $i->post('nama_pengajar'),
					'jabatan_pengajar'		=> $i->post('jabatan_pengajar'),
					'pengampu'				=> $i->post('pengampu'),
					'isi'					=> $i->post('isi'),
				);
				$this->pengajar_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit');
				redirect(base_url('admin/guru'), 'refresh');
			}
		}
		// End masuk database
		$data = array(
			'title'				=> 'Edit guru',
			'pengajar'			=> $pengajar,
			'isi'				=> 'admin/guru/edit'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Api Delete
	public function delete($id_pengajar)
	{

		$data = array('id_pengajar'	=> $id_pengajar);
		$this->pengajar_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Guru telah didelete');
		redirect(base_url('admin/pengajar'));
	}

}

/* End of file Pengajar.php */
