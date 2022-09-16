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

	function get_emp_address_by_id($emp_id)
	{
		$count = $this->db->where('fk_employee', $emp_id)
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
		// print_r($array);

		return true;
	}

	function ajax_update_employee($array, $emp_id)
	{
		print_r($array);

		return true;
	}

	function ajax_add_employee_address($array_address)
	{
		print_r($array_address);
	}

	function ajax_update_employee_address($array_address, $emp_id)
	{
		print_r($array_address);
	}
}
