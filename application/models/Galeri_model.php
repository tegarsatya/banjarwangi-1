
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
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
		$this->db->from('galeri');
		$this->db->order_by('id_galeri');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_galeri)
	{
		$this->db->select('*');
		$this->db->from('galeri');
		$this->db->order_by('id_galeri');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('galeri', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_galeri', $data['id_galeri']);
		$this->db->update('galeri', $data);
	}

	// detail perkategori_berita
	public function detail($id_galeri)
	{
		$query = $this->db->get_where('galeri', array('id_galeri'  => $id_galeri));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_galeri', $data['id_galeri']);
		$this->db->delete('galeri', $data);
	}
}

/* End of file Galeri.php */
