
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pengajar');
		$this->db->order_by('id_pengajar');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_galeri)
	{
		$this->db->select('*');
		$this->db->from('pengajar');
		$this->db->order_by('id_pengajar');
		$query = $this->db->get();
		return $query->result();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('pengajar', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_pengajar', $data['id_pengajar']);
		$this->db->update('pengajar', $data);
	}

	// detail perkategori_berita
	public function detail($id_pengajar)
	{
		$query = $this->db->get_where('pengajar', array('id_pengajar'  => $id_pengajar));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_pengajar', $data['id_pengajar']);
		$this->db->delete('pengajar', $data);
	}
}

/* End of file Galeri.php */
