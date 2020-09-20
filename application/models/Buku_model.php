<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('buku_tamu');
		$this->db->order_by('id_buku_tamu');
		$query = $this->db->get();
		return $query->result();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_buku_tamu', $data['id_buku_tamu']);
		$this->db->delete('buku_tamu', $data);
	}


	// insert data
	function insert($data)
	{
		$this->db->insert($this->table, $data);
	}
}

/* End of file Buku_model.php */
