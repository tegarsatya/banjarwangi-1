
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi_misi_model extends CI_Model
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
		$this->db->from('visi_misi');
		$this->db->order_by('id_visi_misi');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_visi_misi)
	{
		$this->db->select('*');
		$this->db->from('visi_misi');
		$this->db->order_by('id_visi_misi');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('visi_misi', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_visi_misi', $data['id_visi_misi']);
		$this->db->update('visi_misi', $data);
	}

	// detail perkategori_berita
	public function detail($id_visi_misi)
	{
		$query = $this->db->get_where('visi_misi', array('id_visi_misi'  => $id_visi_misi));
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_visi_misi', $data['id_visi_misi']);
		$this->db->delete('visi_misi', $data);
	}
}

/* End of file Profil.php */
