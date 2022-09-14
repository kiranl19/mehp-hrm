<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	function __construct(){
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
}
