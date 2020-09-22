<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 

{
	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id_user');
		$query = $this->db->get();
		return $query->result();
	}

	// Login
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		// where
		$this->db->where(array(
			'username'	=> $username,
			'password'	=> sha1($password)
		));
		$this->db->order_by('id_user');
		$query = $this->db->get();
		return $query->row();
	}

	// Total
	public function total()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('users');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail
	public function detail($id_user)
	{
		$this->db->select('*');
		$this->db->from('users');
		// where
		$this->db->where('users.id_user', $id_user);
		$this->db->order_by('users.id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('users', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('users', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('users', $data);
	}
}

/* End of file User_model.php */
