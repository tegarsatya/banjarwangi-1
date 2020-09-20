<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan_model extends CI_Model 
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
		$this->db->from('penerimaan');
		$this->db->order_by('id_penerimaan');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($id_penerimaan)
	{
		$this->db->select('*');
		$this->db->from('penerimaan');
		$this->db->order_by('id_penerimaan');
		$query = $this->db->get();
		return $query->result();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('penerimaan', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_penerimaan', $data['id_penerimaan']);
		$this->db->update('penerimaan', $data);
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
		$this->db->where('id_penerimaan', $data['id_penerimaan']);
		$this->db->delete('penerimaan', $data);
	}

}

/* End of file Penerimaan_model.php */
