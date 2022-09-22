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

	function get_emp_bank_by_id($emp_id)
	{
		$count = $this->db->where('e_id', $emp_id)
			->get('accstat')
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

	function get_emp_address_by_add_type($addType)
	{
		$this->db->where('fk_employee', $addType['emp_id']);
		$this->db->where('fk_address_type', $addType['add_type']);
		$query = $this->db->get('emp_address');

		return $query->row_array();
	}

	function ajax_add_employee_bank_details($bank_array)
	{
		$this->db->insert('accstat', $bank_array);

		return true;
	}

	function ajax_update_employee_bank_details($bank_array, $emp_id)
	{
		$this->db->where('e_id', $emp_id);
		$this->db->update('accstat', $bank_array);

		return true;
	}

	function ajax_add_relations($array)
	{
		$this->db->insert('emp_relation', $array);

		$this->db->trans_complete();
		// return $this->db->insert_id();

		return array(
			'er_id' => $this->db->insert_id(),
			'true' => true
		);
	}


	function ajax_update_relations($array, $id)
	{
		$this->db->where('er_id', $id);
		$this->db->update('emp_relation', $array);

		return true;
	}

	function ajax_delete_relations($er_id)
	{
		$this->db->where('er_id', $er_id);
		$this->db->delete('emp_relation');

		return true;
	}
}
