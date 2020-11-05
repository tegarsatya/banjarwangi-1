<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('buku_model');
	}
	// api Get
	public function index()
	{
		$data	= array(
			'title'				=> 'Halaman Kontak ',
			'isi'				=> 'kontak/list'
		);
		$this->load->view('layout/wrapper', $data); 
	}


	public function simpan_kontak()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan'),
		);
		$simpan = $this->db->insert('buku_tamu', $data);
		if ($simpan) {
						?>
			<script type="text/javascript">
				alert('Terima Kasih telah Mmengisi Buku Tamu !');
				window.location = '<?php echo base_url('kontak'); ?>'
			</script>
		<?php
		} else {
		?>
			<script type="text/javascript">
				alert('Oopps ! Ada kesalahan, silahkan ulangi !');
				window.location = '<?php echo base_url('kontak'); ?>'
			</script>
		<?php
		}
	}
}

/* End of file Kontak.php */
