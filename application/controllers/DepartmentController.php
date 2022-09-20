<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepartmentController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!isset($_SERVER['HTTP_REFERER'])) {
			redirect(base_url());
			exit;
		}
	}


	function add_dept()
	{
		$dept = $this->Department_Model->add_dept($_POST);

		echo json_encode(array(
			'success' => 'success',
			'dept_name' => ucwords($_POST['dept_name']), 'd_id' => $dept
		));
	}

	function get_dept_by_id()
	{
		$dept = $this->Department_Model->get_dept_by_id($_POST['d_id']);

		$data['deptTypes'] = $this->HR_Model->get_dept_types();

		$data['success'] = 'success';
		$data['dept'] = $dept;
		echo json_encode($data);
	}

	function update_depts()
	{
		$this->Department_Model->update_dept($_POST);

		$dept_type = $this->Department_Model->get_dept_type_by_id($_POST['dept_type']);

		echo json_encode(array(
			'success' => 'success',
			'dept_name' => ucwords($_POST['dept_name']),
			'dept_type' => ucwords($dept_type['dept_type'])
		));
	}

	function delete_dept()
	{
		$dept = $this->Department_Model->delete_dept($_POST['d_id']);

		if ($dept == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}

	function add_dept_type()
	{
		$dept = $this->Department_Model->add_dept_type($_POST);

		echo json_encode(array(
			'success' => 'success',
			'dept_type' => ucwords($_POST['dept_type']),
			'tier' => ucwords($_POST['tier']),
			'dt_id' => $dept
		));
	}

	function delete_dept_type()
	{
		$dept = $this->Department_Model->delete_dept_type($_POST['dt_id']);

		if ($dept == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}

	function get_dept_type_by_id()
	{
		$dept = $this->Department_Model->get_dept_type_by_id($_POST['dt_id']);


		$data['success'] = 'success';
		$data['dept'] = $dept;
		echo json_encode($data);
	}

	function update_dept_type()
	{
		$this->Department_Model->update_dept_type($_POST);

		echo json_encode(array(
			'success' => 'success',
			'dept_type' => ucwords($_POST['dept_type']),
			'tier' => ucwords($_POST['tier']),
		));
	}
}
