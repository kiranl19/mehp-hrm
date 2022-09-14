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
            'dept_created_dt' => date('Y-m-d H:i:s'),
            'dept_status' => 1
        );

		$this->db->insert('depts', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
    }

	function get_dept_by_id($dept_id)
	{
		$this->db->where('dept_id', $dept_id);
		$query = $this->db->get('depts');
		return $query->row_array();
	}

	function update_depts($dept)
	{

		$array = array(
            'dept_name' => ucwords($dept['dept_name']),
            'dept_updated_dt' => date('Y-m-d H:i:s'),
            'dept_status' => 1
        );


		$this->db->where('dept_id', $dept['dept_id']);
		$query = $this->db->update('depts', $array);
		return true;
	}

	function delete_dept($dept)
	{
		$this->db->where('dept_id', $dept);
		$query = $this->db->delete('depts');
		return true;
	}
}
