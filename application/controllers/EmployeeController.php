<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

	function __construct()
	{
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

	public function employee_profile()
	{
		$this->load->view('template/header-script');
		$this->load->view('template/header');
		$this->load->view('employee/profile');
		$this->load->view('template/footer');
	}

	public function ajax_add_employee()
	{
		$emp_id = $_POST['emp_id'];

		$getEmp = $this->Employee_Model->get_emp_by_id($emp_id);

		// Add Employee Details

		$array = array(
			'emplid' 	=> $_POST['emp_id'],
			'fname'		=> ucwords($_POST['fname']),
			'lname' 	=> ucwords($_POST['lname']),
			'fk_gender' => $_POST['gender'],
			'birthdt' 	=> $_POST['dob'],
			'doj' 		=> $_POST['doj'],
			'primary_contact'	=> $_POST['phone'],
			'company_email_me'	=> $_POST['company_email_me'],
			'company_email_hp'	=> $_POST['company_email_hp'],
			'company_email_tmb' => $_POST['company_email_tmb'],
			'company_email_int' => $_POST['email'],
			'fk_address_type' => 1,
			'load_dt' => date('Y-m-d'),
		);

		// print_r($array);die;
		if ($getEmp == true) {

			$addEmp = $this->Employee_Model->ajax_add_employee($array);

			if ($addEmp == true) {
				echo json_encode(array('status' => 'Added'));
			} else {
				echo "Something Went wrong";
			}
		} else {

			$updateEmp = $this->Employee_Model->ajax_update_employee($array, $emp_id);

			if ($updateEmp == true) {
				echo json_encode(array('status' => 'Updated'));
			} else {
				echo "Something Went wrong";
			}
		}
	}


	public function ajax_add_employee_profile()
	{
		$emp_id = $_POST['emp_id6'];

		$getEmp = $this->Employee_Model->get_emp_profile_by_id($emp_id);



		$array = array(
			'fk_employee' => $_POST['emp_id6'],
			'blood_group' => $_POST['b_group'],
			'date_of_birth' => $_POST['dob'],
			'place_of_birth' => $_POST['pob'],
			'is_indian' => $_POST['is_indian'],
			'nationality' => $_POST['nationality'],
			'marital_status' => $_POST['m_status'],
			'siblings' => $_POST['siblings'],
			'physicallly_challenged' => $_POST['phy_challenged'],
			// 'religion' => $_POST['religion'],
			'total_wrk_exp' => $_POST['experience'],
			'no_of_compny_wrkd' => $_POST['no_of_comp'],
			'load_dt' => date('Y-m-d'),
		);

		// print_r($array);die;
		if ($getEmp == true) {
			$addEmpProfile = $this->Employee_Model->ajax_add_employee_profile($array);

			if ($addEmpProfile == true) {
				echo json_encode(array('status' => 'Added'));
			} else {
				echo "Something Went wrong";
			}
		} else {
			$updateEmpProfile = $this->Employee_Model->ajax_update_employee_profile($array, $emp_id);

			if ($updateEmpProfile == true) {
				echo json_encode(array('status' => 'Updated'));
			} else {
				echo "Something Went wrong";
			}
		}
	}

	public function ajax_add_employee_address()
	{
		$emp_id = $_POST['emp_id5'];
		$addType =  $_POST['add_type'];
		// print_r($_POST);die;

		$getEmp_address = $this->Employee_Model->get_emp_address_by_id($emp_id, $addType);
		// Add Address


		$array_address = array(
			'name' => ucwords($_POST['add_fname']) . " " . ucwords($_POST['add_lname']),
			'email' => $_POST['email'],
			'address1' => $_POST['curr_add'],
			'address2' => $_POST['pr_add'],
			'city' => $_POST['city'],
			'state' => $_POST['state'],
			'phone1' => $_POST['emrg_phone1'],
			'phone2' => $_POST['emrg_phone2'],
			'mobile' => $_POST['phone'],
			'fk_address_type' => $addType,
			'fk_employee' => $_POST['emp_id5'],
			'load_dt' => date('Y-m-d'),
		);


		if ($getEmp_address == true) {
			$addEmpAdd = $this->Employee_Model->ajax_add_employee_address($array_address);

			if ($addEmpAdd == true) {
				echo json_encode(array('status' => 'Added'));
			} else {
				echo "Something Went wrong";
			}
		} else {
			$updateEmpAdd = $this->Employee_Model->ajax_update_employee_address($array_address, $emp_id, $addType);

			if ($updateEmpAdd == true) {
				echo json_encode(array('status' => 'Updated'));
			} else {
				echo "Something Went wrong";
			}
		}
	}

	function ajax_add_employee_bank_details()
	{
		$emp_id = $_POST['emp_id3'];
		$get_bank = $this->Employee_Model->get_emp_bank_by_id($emp_id);

		$bank_array = array(
			'e_id'				  => $emp_id,
			'account_holder_name' => ucwords($_POST['ac_full_name']),
			'account_type'		  => $_POST['acc_type'],
			'account_number'	  => $_POST['acc_no'],
			'bank_name'			  => ucwords($_POST['acc_bank_name']),
			'branch_name'		  => ucwords($_POST['acc_branch']),
			'account_ifsc'		  => $_POST['acc_ifsc'],
			'account_pan'		  => $_POST['acc_pan'],
			'pf_number'			  => $_POST['acc_pf'],
			'uan'				  => $_POST['acc_uan'],
			'loaddt'			  => date('Y-m-d'),
		);

		if ($get_bank == true) {
			$addBank = $this->Employee_Model->ajax_add_employee_bank_details($bank_array);

			if ($addBank == true) {
				echo json_encode(array('success' => 'Added'));
			} else {
				echo "Something Went wrong";
			}
		} else {
			$updateBank = $this->Employee_Model->ajax_update_employee_bank_details($bank_array, $emp_id);

			if ($updateBank == true) {
				echo json_encode(array('success' => 'Updated'));
			} else {
				echo "Something Went wrong";
			}
		}
	}

	function upload_docs()
	{

		$emp_id = $_GET['emp_id'];
		$config['upload_path'] = "./documents/$emp_id";
		$config['allowed_types'] = '*';
		$config['overwrite'] = TRUE;
		// $config['max_size'] = '100';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';

		$this->load->library('upload', $config);
		// $this->upload->overwrite = true;
		$this->upload->initialize($config);


		$files = $_FILES;
		print_r($_FILES['text1']['name']);die;
		$c = count($files['text1']['name']); //die;

		for ($i = 0; $i < $c; $i++) {
			$_FILES = array();
			foreach ($files['text1'] as $k => $v) {
				$_FILES['text1'][$k] = $v[$i];
			}

			/* print_r($_FILES['text1']['name']);
			echo "\n"; */
			if (!is_dir($config['upload_path'])) {
				mkdir($config['upload_path'], 0777, TRUE);
			} else {
			}
			$this->upload->do_upload('text1');
		}
		echo json_encode(
			array(
				'msg' => 'success'
			)
		);
	}


	function get_emp_address_by_add_type()
	{
		$emp_add_by_type = $this->Employee_Model->get_emp_address_by_add_type($_POST);
		if (!empty($emp_add_by_type)) {
			echo json_encode(
				array(
					'msg' => 'success',
					'data' => $emp_add_by_type
				)
			);
		} else {
			echo json_encode(
				array(
					'msg' => 'error'
				)
			);
		}
	}

	function ajax_add_relations()
	{
		$i = 0;


		$emp_id = $_POST['emp_id11'];

		if (isset($_POST['er_id'])) {
			$er_id = $_POST['er_id'];

		}
		$relation = $_POST['relation'];
		$rel_name = $_POST['rel_name'];
		$rel_dob = $_POST['rel_dob'];
		$rel_occ = $_POST['rel_occ'];
		$rel_occ_name = $_POST['rel_occ_name'];

		$array = array();

		for ($i = 0; $i < sizeof($emp_id); $i++) {

			if (isset($er_id[$i])) {

				$dataSet[$i] = array(
					// 'fk_employee' => $emp_id[$i],
					'rel_name' => $rel_name[$i],
					'rel_dob' => $rel_dob[$i],
					'relation' => $relation[$i],
					'occupation' => $rel_occ[$i],
					'occupation_name' => $rel_occ_name[$i],
				);

				$updateRelations = $this->Employee_Model->ajax_update_relations($dataSet[$i], $er_id[$i]);
			} else {

				$dataSet1[$i] = array(
					'fk_employee' => $emp_id[$i],
					'rel_name' => $rel_name[$i],
					'rel_dob' => $rel_dob[$i],
					'relation' => $relation[$i],
					'occupation' => $rel_occ[$i],
					'occupation_name' => $rel_occ_name[$i],
				);

				$addRelations = $this->Employee_Model->ajax_add_relations($dataSet1[$i]);

				$arr[] = array_merge($array, array('er_id' => $addRelations['er_id']));

			}
		}


		if (isset($addRelations['true']) && $addRelations['true'] == true) {
			echo json_encode(
				array(
					'status' => 'added',
					'er_id' => $arr
				)
			);
		} else {
			echo json_encode(
				array(
					'status' => 'updated',
				)
			);
		}
	}

	function ajax_delete_relations()
	{
		$removeRelation = $this->Employee_Model->ajax_delete_relations($_POST['er_id']);

		if ($removeRelation == true) {
			echo json_encode(
				array(
					'status' => 'success'
				)
			);
		} else {
			echo json_encode(
				array(
					'status' => 'error'
				)
			);
		}
 	}
}

