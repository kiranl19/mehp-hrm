<?php


class HR_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();

	}

	public function get_departments()
	{
		$query = $this->db->get('depts');

		return $query->result_array();

    }
}
