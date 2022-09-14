<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->helper('url');
	}

	public function client_dashboard()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('client/client-dashboard');
		$this->load->view('template/footer');
	}

	public function client_list()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('client/client-list');
		$this->load->view('template/footer');
	}

	public function client_view()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('client/client-view');
		$this->load->view('template/footer');
	}

	public function client_new()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('client/client-new');
		$this->load->view('template/footer');
	}

	public function client_profile()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('client/client-profile');
		$this->load->view('template/footer');
	}

}
