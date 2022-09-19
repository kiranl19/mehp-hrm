<?php


class Department_Model extends CI_Model
{
	public function __construct()
	{
		// $this->load->database();

	}

	public function add_dept($dept)
	{
		$array = array(
			'dept_name' => ucwords($dept['dept_name']),
			'fk_dept_type' => ucwords($dept['dept_type']),
			'load_dt' => date('Y-m-d H:i:s'),
			// 'dept_status' => 1
		);

		$this->db->insert('dept', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	function get_dept_by_id($d_id)
	{
		$this->db->where('d_id', $d_id);
		$query = $this->db->get('dept');
		return $query->row_array();
	}

	function update_dept($dept)
	{

		$array = array(
			'dept_name' => ucwords($dept['dept_name']),
			'fk_dept_type' => $dept['dept_type'],
			'load_dt' => date('Y-m-d H:i:s'),
			// 'dept_status' => 1
		);


		$this->db->where('d_id', $dept['d_id']);
		$query = $this->db->update('dept', $array);
		return true;
	}

	function delete_dept($dept)
	{
		$this->db->where('d_id', $dept);
		$query = $this->db->delete('dept');
		return true;
	}



	function add_dept_type($dept)
	{
		$array = array(
			'dept_type' => ucwords($dept['dept_type']),
			'tier' => ucwords($dept['tier']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('dept_type', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	function delete_dept_type($dept_id)
	{
		$this->db->where('dt_id', $dept_id);
		$query = $this->db->delete('dept_type');
		return true;
	}

	function get_dept_type_by_id($dept_id)
	{
		$this->db->where('dt_id', $dept_id);
		$query = $this->db->get('dept_type');
		return $query->row_array();
	}

	function update_dept_type($dept)
	{
		$array = array(
			'dept_type' => ucwords($dept['dept_type']),
			'tier' => ucwords($dept['tier']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->where('dt_id', $dept['dt_id']);
		$query = $this->db->update('dept_type', $array);
		return true;
	}
}
