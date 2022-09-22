<?php


class HR_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_departments()
	{
		$this->db->join('dept_type', 'dept_type.dt_id = dept.fk_dept_type');
		$query = $this->db->get('dept');

		return $query->result_array();
	}


	public function get_dept_types()
	{
		$query = $this->db->get('dept_type');

		return $query->result_array();
	}

	public function get_job_titles()
	{
		$query = $this->db->get('job_title');

		return $query->result_array();
	}

	public function get_education_level()
	{
		$query = $this->db->get('edu_level');

		return $query->result_array();
	}

	function get_gender()
	{
		$query = $this->db->get('gender');

		return $query->result_array();
	}

	function get_add_type()
	{
		$query = $this->db->get('address_type');

		return $query->result_array();
	}

	function get_dept_type()
	{
		$query = $this->db->get('dept_type');

		return $query->result_array();
	}

	function get_relationships()
	{
		$query = $this->db->get('relationships');

		return $query->result_array();
	}

	function get_kyc()
	{
		$query = $this->db->get('kyc_list');

		return $query->result_array();
	}


	function hr_occupation_relations()
	{
		$query = $this->db->get('occu_relation');

		return $query->result_array();
	}


	function add_jt($jt)
	{
		$array = array(
			'job_title' => ucwords($jt['jt_name']),
			'loaddt' => date('Y-m-d H:i:s'),
			// 'dept_status' => 1
		);

		$this->db->insert('job_title', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}
	function delete_jt($jtid)
	{
		$this->db->where('jtid', $jtid);
		$query = $this->db->delete('job_title');
		return true;
	}
	function get_jt_by_id($jtid)
	{
		$this->db->where('jtid', $jtid);
		$query = $this->db->get('job_title');
		return $query->row_array();
	}
	function update_jt($jt)
	{
		$array = array(
			'job_title' => ucwords($jt['jt_name']),
		);

		$this->db->where('jtid', $jt['jtid']);
		$query = $this->db->update('job_title', $array);
		return true;
	}

	function add_edl($edl)
	{
		$array = array(
			'edu_level_nm' => ucwords($edl['edu_level_nm']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('edu_level', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	function delete_edl($edl)
	{
		$this->db->where('edl_id', $edl);
		$query = $this->db->delete('edu_level');
		return true;
	}

	function get_edl_by_id($edl)
	{
		$this->db->where('edl_id', $edl);
		$query = $this->db->get('edu_level');
		return $query->row_array();
	}

	function update_edl($edl)
	{
		$array = array(
			'edu_level_nm' => ucwords($edl['edu_level_nm']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->where('edl_id', $edl['edl_id']);
		$query = $this->db->update('edu_level', $array);
		return true;
	}

	function add_address_type($addType)
	{
		$array = array(
			'add_type' => ucwords($addType['add_type']),
			'load_dt' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('address_type', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	function delete_address_type($addType)
	{
		$this->db->where('adty_id', $addType);
		$query = $this->db->delete('address_type');
		return true;
	}

	function get_address_type_by_id($addType)
	{
		$this->db->where('adty_id', $addType);
		$query = $this->db->get('address_type');
		return $query->row_array();
	}

	function update_address_type($addType)
	{
		$array = array(
			'add_type' => ucwords($addType['add_type']),
			'load_dt' => date('Y-m-d H:i:s'),
		);

		$this->db->where('adty_id', $addType['adty_id']);
		$query = $this->db->update('address_type', $array);
		return true;
	}

	function get_emp_by_id($empcode)
	{
		$this->db->where('emplid', $empcode);
		$query = $this->db->get('employee');
		return $query->row_array();
	}

	function get_emp_profile_by_id($empcode)
	{
		$this->db->where('fk_employee', $empcode);
		$query = $this->db->get('emp_profile');
		return $query->row_array();
	}

	function get_emp_address_by_id($empcode)
	{
		$this->db->order_by('ead_id', 'DESC');
		$this->db->where('fk_employee', $empcode);
		$query = $this->db->get('emp_address');
		return $query->row_array();
	}

	function get_emp_bank_by_id($empcode)
	{
		$this->db->where('e_id', $empcode);
		$query = $this->db->get('accstat');
		return $query->row_array();
	}

	function get_emp_relations_by_id($empcode)
	{
		$this->db->order_by('er_id', 'ASC');
		$this->db->where('fk_employee', $empcode);
		$query = $this->db->get('emp_relation');
		return $query->result_array();
	}

	function add_relationship($relation)
	{
		$array = array(
			'name' => ucwords($relation['name']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('relationships', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	function get_relationship_by_id($empcode)
	{
		$this->db->where('rs_id', $empcode);
		$query = $this->db->get('relationships');
		return $query->row_array();
	}

	function delete_relationship($relation)
	{
		$this->db->where('rs_id', $relation);
		$query = $this->db->delete('relationships');
		return true;
	}

	function update_relationship($relation)
	{
		$array = array(
			'name' => ucwords($relation['name']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->where('rs_id', $relation['rs_id']);
		$query = $this->db->update('relationships', $array);
		return true;
	}

	function add_kyc($kyc)
	{
		$array = array(
			'kyc_name' => ucwords($kyc['kyc_name']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('kyc_list', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}
	
	function get_kyc_by_id($empcode)
	{
		$this->db->where('kyc_id', $empcode);
		$query = $this->db->get('kyc_list');
		return $query->row_array();
	}
	
	function delete_kyc($kyc)
	{
		$this->db->where('kyc_id', $kyc);
		$query = $this->db->delete('kyc_list');
		return true;
	}
	
	function update_kyc($kyc)
	{
		$array = array(
			'kyc_name' => ucwords($kyc['kyc_name']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->where('kyc_id', $kyc['kyc_id']);
		$query = $this->db->update('kyc_list', $array);
		return true;
	}

	function add_occupation($occupation)
	{
		$array = array(
			'name' => ucwords($occupation['name']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->insert('occu_relation', $array);

		$this->db->trans_complete();
		return $this->db->insert_id();
	}

	function get_occupation_by_id($empcode)
	{
		$this->db->where('or_id', $empcode);
		$query = $this->db->get('occu_relation');
		return $query->row_array();
	}

	function delete_occupation($occupation)
	{
		$this->db->where('or_id', $occupation);
		$query = $this->db->delete('occu_relation');
		return true;
	}

	function update_occupation($occupation)
	{
		$array = array(
			'name' => ucwords($occupation['name']),
			'loaddt' => date('Y-m-d H:i:s'),
		);

		$this->db->where('or_id', $occupation['or_id']);
		$query = $this->db->update('occu_relation', $array);
		return true;
	}

}
