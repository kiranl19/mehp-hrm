<?php


class Auth_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();

	}

	public function auth($emp_id, $password)
	{

		$this->db->join('comp_details', 'users.emp_id = comp_details.emp_id');
		$this->db->where('users.emp_id', $emp_id);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		$users = $query->row_array();
		/* echo "<pre>";

		print_r($users);
		die; */

		if ($query->num_rows() == 1) {
			return $users;
		} else {
			
			return 0;
		}
	}
/* 
	function is_logged_in()
	{
		if (isset($_SESSION['login'])){

			return true;
		}else{
			redirect('/');

		}
		// if (isset($_SESSION))
	} */
}
