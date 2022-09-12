<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HRController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		// print_r($_SESSION);die;

		if (!isset($_SESSION['login'])) {
			redirect('/');
		}
	}
	

	public function hr_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('index/index');
		$this->load->view('template/footer');
	}

	public function hr_department()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-department');
		$this->load->view('template/footer');
	}

	public function hr_emplist()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-emplist');
		// $this->load->view('template/footer');
	}

	public function hr_empview()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-empview');
		$this->load->view('template/footer');
	}

	public function hr_addemployee()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-addemployee');
		$this->load->view('template/footer');
	}

	public function hr_attlist()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-attlist');
		$this->load->view('template/footer');
	}

	public function hr_attuser()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-attuser');
		$this->load->view('template/footer');
	}

	public function hr_attview()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-attview');
		$this->load->view('template/footer');
	}

	public function hr_overviewcldr()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-overviewcldr');
		$this->load->view('template/footer');
	}

	public function hr_attmark()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-attmark');
		$this->load->view('template/footer');
	}

	public function hr_leaves()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-leaves');
		$this->load->view('template/footer');
	}

	public function hr_leavesapplication()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-leavesapplication');
		$this->load->view('template/footer');
	}

	public function hr_recentleaves()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-recentleaves');
		$this->load->view('template/footer');
	}

	public function hr_award()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-award');
		$this->load->view('template/footer');
	}

	public function hr_holiday()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-holiday');
		$this->load->view('template/footer');
	}

	public function hr_notice()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-notice');
		$this->load->view('template/footer');
	}

	public function hr_expenses()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-expenses');
		$this->load->view('template/footer');
	}

	public function hr_empsalary()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-empsalary');
		$this->load->view('template/footer');
	}

	public function hr_addpayroll()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-addpayroll');
		$this->load->view('template/footer');
	}

	public function hr_editpayroll()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-editpayroll');
		$this->load->view('template/footer');
	}

	public function hr_events()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-events');
		$this->load->view('template/footer');
	}

	public function hr_settings()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-settings');
		$this->load->view('template/footer');
	}
}
