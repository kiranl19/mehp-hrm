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
		// print_r(test);/* die; */

		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('index/index');
		$this->load->view('template/footer');
	}

	public function hr_department()
	{
		$data['depts'] = $this->HR_Model->get_departments();
		$data['deptTypes'] = $this->HR_Model->get_dept_types();
		// print_r($data['depts']);die;
		// $data['lib'] = $this->errors;
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
		$data['emp'] = $this->HR_Model->get_emp_by_id($_SESSION['emp_id']);
		$data['profile'] = $this->HR_Model->get_emp_profile_by_id($_SESSION['emp_id']);
		$data['address'] = $this->HR_Model->get_emp_address_by_id($_SESSION['emp_id']);
		$data['bank'] = $this->HR_Model->get_emp_bank_by_id($_SESSION['emp_id']);
		$data['relations'] = $this->HR_Model->get_emp_relations_by_id($_SESSION['emp_id']);
		$data['relationships'] = $this->HR_Model->get_relationships();
		$data['occupations'] = $this->HR_Model->hr_occupation_relations();

		$data['addTypes'] = $this->HR_Model->get_add_type();

		$data['gender'] = $this->HR_Model->get_gender();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-empview', $data);
		$this->load->view('template/footer');
	}

	public function hr_addemployee()
	{
		$data['gender'] = $this->HR_Model->get_gender();
		$data['addTypes'] = $this->HR_Model->get_add_type();
		$data['depts'] = $this->HR_Model->get_departments();
		$data['relationships'] = $this->HR_Model->get_relationships();
		$data['occupations'] = $this->HR_Model->hr_occupation_relations();
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
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-settings');
		$this->load->view('template/footer');
	}

	public function hr_address_types()
	{
		$data['addTypes'] = $this->HR_Model->get_add_type();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-address-types', $data);
		$this->load->view('template/footer');
	}

	public function hr_department_types()
	{
		$data['deptTypes'] = $this->HR_Model->get_dept_type();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-department-types', $data);
		$this->load->view('template/footer');
	}

	public function hr_relationships()
	{
		$data['relationships'] = $this->HR_Model->get_relationships();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-relationships', $data);
		$this->load->view('template/footer');
	}

	public function hr_kyc()
	{
		$data['kycs'] = $this->HR_Model->get_kyc();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-kyc', $data);
		$this->load->view('template/footer');
	}

	public function hr_occupation_relations()
	{
		$data['occupations'] = $this->HR_Model->hr_occupation_relations();
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('hr/hr-occupation-relations', $data);
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

	function add_address_type()
	{
		$addType = $this->HR_Model->add_address_type($_POST);

		echo json_encode(array(
			'success' => 'success',
			'add_type' => ucwords($_POST['add_type']), 'adty_id' => $addType
		));
	}

	function get_address_type_by_id()
	{
		$addType = $this->HR_Model->get_address_type_by_id($_POST['adty_id']);

		$data['success'] = 'success';
		$data['add_type'] = $addType;
		echo json_encode($data);
	}

	function update_address_type()
	{
		$this->HR_Model->update_address_type($_POST);

		echo json_encode(array(
			'success' => 'success',
			'add_type' => ucwords($_POST['add_type'])
		));
	}

	function delete_address_type()
	{
		$addType = $this->HR_Model->delete_address_type($_POST['adty_id']);

		if ($addType == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}


	function add_relationship()
	{
		$relation = $this->HR_Model->add_relationship($_POST);

		echo json_encode(array(
			'success' => 'success',
			'name' => ucwords($_POST['name']),
			'rs_id' => $relation
		));
	}

	function get_relationship_by_id()
	{
		$getRelation = $this->HR_Model->get_relationship_by_id($_POST['rs_id']);

		$data['success'] = 'success';
		$data['relationship'] = $getRelation;

		echo json_encode($data);
	}

	function delete_relationship()
	{
		$relation = $this->HR_Model->delete_relationship($_POST['rs_id']);

		if ($relation == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}

	function update_relationship()
	{
		$this->HR_Model->update_relationship($_POST);

		echo json_encode(array(
			'success' => 'success',
			'name' => ucwords($_POST['name'])
		));
	}

	function add_kyc()
	{
		$kyc = $this->HR_Model->add_kyc($_POST);

		echo json_encode(array(
			'success' => 'success',
			'kyc_name' => ucwords($_POST['kyc_name']),
			'kyc_id' => $kyc
		));
	}

	function get_kyc_by_id()
	{
		$getKyc = $this->HR_Model->get_kyc_by_id($_POST['kyc_id']);

		$data['success'] = 'success';
		$data['kyc'] = $getKyc;

		echo json_encode($data);
	}

	function delete_kyc()
	{
		$kyc = $this->HR_Model->delete_kyc($_POST['kyc_id']);

		if ($kyc == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}

	function update_kyc()
	{
		$this->HR_Model->update_kyc($_POST);

		echo json_encode(array(
			'success' => 'success',
			'kyc_name' => ucwords($_POST['kyc_name'])
		));
	}


	function add_occupation()
	{
		$occupation = $this->HR_Model->add_occupation($_POST);

		echo json_encode(array(
			'success' => 'success',
			'name' => ucwords($_POST['name']),
			'or_id' => $occupation
		));
	}

	function get_occupation_by_id()
	{
		$getOccupation = $this->HR_Model->get_occupation_by_id($_POST['or_id']);

		$data['success'] = 'success';
		$data['occupation'] = $getOccupation;

		echo json_encode($data);
	}

	function delete_occupation()
	{
		$occupation = $this->HR_Model->delete_occupation($_POST['or_id']);

		if ($occupation == true) {
			echo json_encode(array(
				'success' => 'success',
			));
		}
	}

	function update_occupation()
	{
		$this->HR_Model->update_occupation($_POST);

		echo json_encode(array(
			'success' => 'success',
			'name' => ucwords($_POST['name'])
		));
	}

}
