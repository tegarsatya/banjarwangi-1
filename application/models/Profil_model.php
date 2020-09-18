
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model 
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
		$this->db->from('profil');
		$this->db->order_by('id_profil');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_profil)
	{
		$this->db->select('*');
		$this->db->from('profil');
		$this->db->order_by('id_profil');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('profil', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_profil', $data['id_profil']);
		$this->db->update('profil', $data);
	}

	// detail perkategori_berita
	public function detail($id_profil)
	{
		$query = $this->db->get_where('profil', array('id_profil'  => $id_profil));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_profil', $data['id_profil']);
		$this->db->delete('profil', $data);
	}

}

/* End of file Profil.php */
