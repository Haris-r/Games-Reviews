<?php

if (! defined('BASEPATH')) exit('No direct script allowed');

class loginModel extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function insert_user(){

		$this->db->insert('users', $data);

	}

	public function LoginUser($data){

		$this->db->select('DISTINCT (UserName), UID');
		$this->db->from('users');
		$this->db->where('UserName', $data['Username']);
		$this->db->where('UserPassword', $data['Userpassword']);


		$query = $this->db->get();

		return $query->result();

		//queries to get the username and password

	}

	

}
