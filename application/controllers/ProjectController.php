<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function project_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('project/project-dashboard');
		$this->load->view('template/footer');
	}
	public function project_list()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('project/project-list');
		$this->load->view('template/footer');
	}
	public function project_view()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('project/project-view');
		$this->load->view('template/footer');
	}
	public function project_overclndr()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('project/project-overclndr');
		$this->load->view('template/footer');
	}
	public function project_new()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('project/project-new');
		$this->load->view('template/footer');
	}
}
