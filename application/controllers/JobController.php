<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function job_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-dashboard');
		$this->load->view('template/footer');
	}

	function job_list()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-list');
		$this->load->view('template/footer');
	}

	function job_view()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-view');
		$this->load->view('template/footer');
	}

	function job_applictaion()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-applictaion');
		$this->load->view('template/footer');
	}

	function job_apply()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-apply');
		$this->load->view('template/footer');
	}

	function job_new()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-new');
		$this->load->view('template/footer');
	}

	function job_user()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('job/job-user');
		$this->load->view('template/footer');
	}

}