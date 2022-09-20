<?php


class Employee_Model extends CI_Model
{
	public function __construct()
	{
		// 
	}

	public function get_emp_by_id($emp_id)
	{
		$count = $this->db->where('emplid', $emp_id)
			->get('employee')
			->num_rows();

		if ($count >= 1) {
			return false;
		} else {
			return true;
		}
	}

	public function get_emp_profile_by_id($emp_id)
	{
		$count = $this->db->where('fk_employee', $emp_id)
			->get('emp_profile')
			->num_rows();

		if ($count >= 1) {
			return false;
		} else {
			return true;
		}
	}

	function get_emp_address_by_id($emp_id, $addType)
	{
		$count = $this->db->where('fk_employee', $emp_id)
			->where('fk_address_type', $addType)
			->get('emp_address')
			->num_rows();

		if ($count >= 1) {
			return false;
		} else {
			return true;
		}
	}

	function ajax_add_employee($array)
	{
		$this->db->insert('employee', $array);

		return true;
	}

	function ajax_update_employee($array, $emp_id)
	{
		$this->db->where('emplid', $emp_id);
		$this->db->update('employee', $array);

		return true;
	}

	function ajax_add_employee_profile($array)
	{
		$this->db->insert('emp_profile', $array);

		return true;
	}

	function ajax_update_employee_profile($array, $emp_id)
	{
		$this->db->where('fk_employee', $emp_id);
		$this->db->update('emp_profile', $array);

		return true;
	}

	function ajax_add_employee_address($array_address)
	{
		$this->db->insert('emp_address', $array_address);

		return true;
	}

	function ajax_update_employee_address($array_address, $emp_id, $addType)
	{
		$this->db->where('fk_employee', $emp_id);
		$this->db->where('fk_address_type', $addType);
		$this->db->update('emp_address', $array_address);
		return true;
	}
}
