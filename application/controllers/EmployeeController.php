<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->helper('url');
	}


	public function employee_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/employee-dashboard');
		$this->load->view('template/footer');
	}

	public function employee_attendance()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/employee-attendance');
		$this->load->view('template/footer');
	}

	public function employee_leaves()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/employee-leaves');
		$this->load->view('template/footer');
	}

	public function employee_myleaves()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/employee-myleaves');
		$this->load->view('template/footer');
	}

	public function employee_payslips()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/employee-payslips');
		$this->load->view('template/footer');
	}

	public function employee_expenses()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/employee-expenses');
		$this->load->view('template/footer');
	}

	public function ajax_add_employee()
	{
		$emp_id = $_POST['emp_id'];
		$getEmp = $this->Employee_Model->get_emp_by_id($emp_id);
		$getEmp_address = $this->Employee_Model->get_emp_address_by_id($emp_id);

		/* print_r($getEmp_address);
		die; */

		// Add Employee Details

		$array = array(
			'emplid' 	=> $_POST['emp_id'],
			'fname'		=> ucwords($_POST['fname']),
			'lname' 	=> ucwords($_POST['lname']),
			'fk_gender' => $_POST['gender'],
			// 'birthdt'	=> $_POST['dob'],
			'primary_contact' 	=> $_POST['phone'],
			'company_email_int' => $_POST['email'],
			'fk_address_type' => 1,
			'load_dt' => date('Y-m-d'),
		);

		if ($getEmp == true) {

			$addEmp = $this->Employee_Model->ajax_add_employee($array);

			if ($addEmp == true) {
				echo json_encode(array('success' => 'success'));
			} else {
				echo "Something Went wrong";
			}
		} else {

			$updateEmp = $this->Employee_Model->ajax_update_employee($array, $emp_id);

			if ($updateEmp == true) {
				echo "Emp Updated";
			} else {
				echo "Something Went wrong";
			}
		}

		// Add Address


		/* $array_address = array(
			'name' => ucwords($_POST['fname']) . " " . ucwords($_POST['lname']),
			'email' => $_POST['email'],
			'address1' => $_POST['curr_add'],
			'address2' => $_POST['pr_add'],
			'phone1' => $_POST['emrg_phone1'],
			'phone2' => $_POST['emrg_phone2'],
			'mobile' => $_POST['phone'],
			'fk_address_type' => 1,
			'fk_employee' => $_POST['emp_id'],
			'load_dt' => date('Y-m-d'),
		); */


		/* if ($getEmp_address == true) {
			$addEmpAdd = $this->Employee_Model->ajax_add_employee_address($array_address);

			if ($addEmpAdd == true) {
				echo "Address Added";
			} else {
				echo "Something Went wrong";
			}
		} else {
			$updateEmpAdd = $this->Employee_Model->ajax_update_employee_address($array_address, $emp_id);

			if ($updateEmpAdd == true) {
				echo "Address Updated";
			} else {
				echo "Something Went wrong";
			}
		} */
	}

	function upload_docs()
	{
		$empcode = 125;

		$config['upload_path'] = "./documents/$empcode";
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['max_size'] = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';


		if (!is_dir($config['upload_path'])) {
			mkdir($config['upload_path'], 0777, TRUE);
		} else {
		}
	}
}
