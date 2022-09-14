<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperadminController extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->helper('url');
		// $this->load->library('session');
	}

	public function superadmin_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-dashboard');
		$this->load->view('template/footer');	
	}

	public function superadmin_company()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-company');
		$this->load->view('template/footer');	
	}

	public function superadmin_subscription()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-subscription');
		$this->load->view('template/footer');	
	}

	public function superadmin_invoices()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-invoices');
		$this->load->view('template/footer');	
	}

	public function superadmin_admins()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-admins');
		$this->load->view('template/footer');	
	}

	public function superadmin_settings()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-settings');
		$this->load->view('template/footer');	
	}

	public function superadmin_role()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('super-admin/superadmin-role');
		$this->load->view('template/footer');	
	}

}
