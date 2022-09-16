<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HRController extends CI_Controller
{
	public $errors;

	function __construct()
	{
		parent::__construct();
		
		$this->errors = $this->errors->global();
		/* if (!isset($_SERVER['HTTP_REFERER'])) {
			redirect(base_url());
			exit;
		} */

		if (!isset($_SESSION['login'])) {
			redirect('/');
		}
	}
	

	public function hr_dashboard()
	{
		// print_r($this->errors[E_ERROR]);die;
		
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('index/index');
		$this->load->view('template/footer');
	}

	public function hr_department()
	{
		$data['depts'] = $this->HR_Model->get_departments();
		// print_r($data['depts']);die;
		$data['lib'] = $this->errors;
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-department', $data);
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
		$data['gender'] = $this->HR_Model->get_gender();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-addemployee', $data);
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

	public function hr_job_title()
	{
		$data['jts'] =  $this->HR_Model->get_job_titles();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-job-title', $data);
		$this->load->view('template/footer');
	}

	public function hr_education_level()
	{
		$data['edu'] =  $this->HR_Model->get_education_level();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-education-level', $data);
		$this->load->view('template/footer');
	}

	public function hr_settings()
	{
		/* $error =  $this->errors->error();
		print_r($error[E_ERROR]); */
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-settings');
		$this->load->view('template/footer');
	}


	function add_jt()
	{
		$jt = $this->HR_Model->add_jt($_POST);

		echo json_encode(array(
			'success' => 'success',
			'jt_name' => ucwords($_POST['jt_name']), 'jtid' => $jt
		));
	}
	function delete_jt()
	{
		$jt = $this->HR_Model->delete_jt($_POST['jtid']);

		if ($jt == true) {
			echo json_encode(array(
				'success' => 'success',
				// 'dept_name' => ucwords($_POST['dept_name'])
			));
		}
	}
	function get_jt_by_id()
	{
		$jt = $this->HR_Model->get_jt_by_id($_POST['jtid']);

		$data['success'] = 'success';
		$data['jt'] = $jt;
		echo json_encode($data);
	}
	function update_jt()
	{
		$this->HR_Model->update_jt($_POST);

		echo json_encode(array(
			'success' => 'success',
			'jt_name' => ucwords($_POST['jt_name'])
		));
	}


	function add_edl()
	{
		$edl = $this->HR_Model->add_edl($_POST);

		echo json_encode(array(
			'success' => 'success',
			'edu_level_nm' => ucwords($_POST['edu_level_nm']), 'edl_id' => $edl
		));
	}

	function delete_edl()
	{
		$edl = $this->HR_Model->delete_edl($_POST['edl_id']);

		if ($edl == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}

	function get_edl_by_id()
	{
		$edl = $this->HR_Model->get_edl_by_id($_POST['edl_id']);

		$data['success'] = 'success';
		$data['edl'] = $edl;
		echo json_encode($data);
	}

	function update_edl()
	{
		$this->HR_Model->update_edl($_POST);

		echo json_encode(array(
			'success' => 'success',
			'edu_level_nm' => ucwords($_POST['edu_level_nm'])
		));
	}

}
