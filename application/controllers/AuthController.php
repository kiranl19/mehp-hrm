<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('cookie');
	}

	public function index()
	{
		if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
			redirect('hr-dashboard');
		} else {

			$this->load->view('template/header-script');
			$this->load->view('login/login-1');
		}
	}

	public function auth()
	{
		$emp_id = $_POST['emp_id'];
		$password = md5($_POST['password']);

		$user = $this->Auth_Model->auth($emp_id, $password);

		$autoLogin = $this->input->post("autologin", true);

		if ($autoLogin == 1) {
			$cookie = array(
				'name'   => 'autologin',
				'value'  => '1',
				'expire' => '31536000',
				'path'   => '/'
			);
			$this->input->set_cookie($cookie);
		} else {
			delete_cookie("autologin");
		}
		// die;

		// print_r($user);die;

		if ($user == 0) {
			$this->session->set_flashdata('error', 'Username or Password is Incorrect..!');
			redirect('/');
		} else {

			$session_array = array(
				'username' 	=> $user['fname'] . " " . $user['lname'],
				'fname' 	=> $user['fname'],
				'lname' 	=> $user['lname'],
				'mngr' 		=> $user['mngr'],
				'emp_id' 	=> $user['emp_id'],
				'empcode'	=> $user['empcode'],
				'designation'	=> $user['designation'],
				'profile'	=> $user['profile'],
				'login'	=> TRUE,
			);

			$this->session->set_userdata($session_array);
			// print_r($_SESSION);die;

			redirect('hr-dashboard');
		}
	}

	function logout()
	{
		// session_destroy();
		$this->session->sess_destroy();
		redirect('/');
	}
}
