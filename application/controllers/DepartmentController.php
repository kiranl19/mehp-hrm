<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepartmentController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->helper('url');
		// $this->load->library('session');

	}


	function add_dept()
	{
		$dept = $this->Department_Model->add_dept($_POST);

		echo json_encode(array(
			'success' => 'success',
			'dept_name' => ucwords($_POST['dept_name']), 'dept_id' => $dept
		));
	}

	function get_dept_by_id()
	{
		$dept = $this->Department_Model->get_dept_by_id($_POST['dept_id']);

		$data['success'] = 'success';
		$data['dept'] = $dept;
		echo json_encode($data);

	}

	function update_depts()
	{
		$this->Department_Model->update_depts($_POST);

		echo json_encode(array(
			'success' => 'success',
			'dept_name' => ucwords($_POST['dept_name'])
		));

	}

	function delete_dept()
	{
		$this->Department_Model->delete_dept($_POST['dept_id']);

		echo json_encode(array(
			'success' => 'success',
			// 'dept_name' => ucwords($_POST['dept_name'])
		));

	}

}
