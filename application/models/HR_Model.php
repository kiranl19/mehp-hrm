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
            // 'loaddt' => date('Y-m-d H:i:s'),
            // 'dept_status' => 1
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
            // 'dept_status' => 1
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

}
