<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskController extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->helper('url');
	}

	public function task_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-dashboard');
		$this->load->view('template/footer');
	}
	
	public function task_list()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-list');
		$this->load->view('template/footer');
	}
	
	public function task_running()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-running');
		$this->load->view('template/footer');
	}
	
	public function task_hold()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-hold');
		$this->load->view('template/footer');
	}
	
	public function task_complete()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-complete');
		$this->load->view('template/footer');
	}
	
	public function task_view()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-view');
		$this->load->view('template/footer');
	}
	
	public function task_overclndr()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-overclndr');
		$this->load->view('template/footer');
	}
	
	public function task_board()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-board');
		$this->load->view('template/footer');
	}
	
	public function task_new()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-new');
		$this->load->view('template/footer');
	}
	
	public function task_profile()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('task/task-profile');
		$this->load->view('template/footer');
	}
	
}
