<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// HR dashboard
$route['hr-dashboard'] 				= 'HRController/hr_dashboard';
$route['hr-department'] 			= 'HRController/hr_department';
$route['hr-emplist'] 				= 'HRController/hr_emplist';
$route['hr-empview'] 				= 'HRController/hr_empview';
$route['hr-addemployee'] 			= 'HRController/hr_addemployee';
$route['hr-attlist'] 				= 'HRController/hr_attlist';
$route['hr-attuser'] 				= 'HRController/hr_attuser';
$route['hr-attview'] 				= 'HRController/hr_attview';
$route['hr-overviewcldr'] 			= 'HRController/hr_overviewcldr';
$route['hr-attmark'] 				= 'HRController/hr_attmark';
$route['hr-leaves'] 				= 'HRController/hr_leaves';
$route['hr-leavesapplication'] 		= 'HRController/hr_leavesapplication';
$route['hr-recentleaves'] 			= 'HRController/hr_recentleaves';
$route['hr-award'] 					= 'HRController/hr_award';
$route['hr-holiday'] 				= 'HRController/hr_holiday';
$route['hr-notice'] 				= 'HRController/hr_notice';
$route['hr-expenses'] 				= 'HRController/hr_expenses';
$route['hr-empsalary'] 				= 'HRController/hr_empsalary';
$route['hr-addpayroll'] 			= 'HRController/hr_addpayroll';
$route['hr-editpayroll'] 			= 'HRController/hr_editpayroll';
$route['hr-events'] 				= 'HRController/hr_events';
$route['hr-settings'] 				= 'HRController/hr_settings';
$route['hr-job-title'] 				= 'HRController/hr_job_title';
$route['hr-education-level'] 		= 'HRController/hr_education_level';
$route['hr-address-types'] 			= 'HRController/hr_address_types';
$route['hr-department-type'] 		= 'HRController/hr_department_types';
$route['hr-relationships'] 			= 'HRController/hr_relationships';
$route['hr-kyc'] 					= 'HRController/hr_kyc';
$route['hr-occupation-relations']	= 'HRController/hr_occupation_relations';

// Employee Dashboard
$route['employee-dashboard'] 	= 'EmployeeController/employee_dashboard';
$route['employee-attendance'] 	= 'EmployeeController/employee_attendance';
$route['employee-leaves'] 		= 'EmployeeController/employee_leaves';
$route['employee-myleaves'] 	= 'EmployeeController/employee_myleaves';
$route['employee-payslips'] 	= 'EmployeeController/employee_payslips';
$route['employee-expenses'] 	= 'EmployeeController/employee_expenses';
$route['profile'] 				= 'EmployeeController/employee_profile';
$route['get-emp-address-by-add-type'] 	= 'EmployeeController/get_emp_address_by_add_type';

// Task Dashboard
$route['task-dashboard'] 	= 'TaskController/task_dashboard';
$route['task-list'] 		= 'TaskController/task_list';
$route['task-running'] 	   	= 'TaskController/task_running';
$route['task-hold'] 	   	= 'TaskController/task_hold';
$route['task-complete'] 	= 'TaskController/task_complete';
$route['task-view'] 	   	= 'TaskController/task_view';
$route['task-overclndr']	= 'TaskController/task_overclndr';
$route['task-board'] 	   	= 'TaskController/task_board';
$route['task-new'] 	   		= 'TaskController/task_new';
$route['task-profile'] 	   	= 'TaskController/task_profile';

// Project Dashboard
$route['project-dashboard']	= 'ProjectController/project_dashboard';
$route['project-list'] 	   	= 'ProjectController/project_list';
$route['project-view'] 	   	= 'ProjectController/project_view';
$route['project-overclndr'] = 'ProjectController/project_overclndr';
$route['project-new'] 	   	= 'ProjectController/project_new';


// Client Dashboard
$route['client-dashboard']	= 'ClientController/client_dashboard';
$route['client-list'] 	   	= 'ClientController/client_list';
$route['client-view'] 	   	= 'ClientController/client_view';
$route['client-new'] 		= 'ClientController/client_new';
$route['client-profile'] 	= 'ClientController/client_profile';

// Job Dashboard
$route['job-dashboard']		= 'JobController/job_dashboard';
$route['job-list'] 	   		= 'JobController/job_list';
$route['job-view'] 	   		= 'JobController/job_view';
$route['job-applictaion']	= 'JobController/job_applictaion';
$route['job-apply'] 		= 'JobController/job_apply';
$route['job-new'] 			= 'JobController/job_new';
$route['job-user'] 			= 'JobController/job_user';


// SuperAdmin Dashboard
$route['superadmin-dashboard']		= 'SuperadminController/superadmin_dashboard';
$route['superadmin-company']		= 'SuperadminController/superadmin_company';
$route['superadmin-subscription']	= 'SuperadminController/superadmin_subscription';
$route['superadmin-invoices']		= 'SuperadminController/superadmin_invoices';
$route['superadmin-admins'] 		= 'SuperadminController/superadmin_admins';
$route['superadmin-settings'] 		= 'SuperadminController/superadmin_settings';
$route['superadmin-role'] 			= 'SuperadminController/superadmin_role';

// Authentication
// $route['login']	= 'HRController/login';
$route['auth']		= 'AuthController/auth';
$route['logout']	= 'AuthController/logout';

// CRUD DEPT
$route['add-dept'] 		 = 'DepartmentController/add_dept';
$route['delete-dept'] 	 = 'DepartmentController/delete_dept';
$route['get-dept-by-id'] = 'DepartmentController/get_dept_by_id';
$route['update-depts'] 	 = 'DepartmentController/update_depts';

// CRUD DEPT Type
$route['add-dept-type'] 		= 'DepartmentController/add_dept_type';
$route['delete-dept-type'] 		= 'DepartmentController/delete_dept_type';
$route['get-dept-type-by-id'] 	= 'DepartmentController/get_dept_type_by_id';
$route['update-dept-type'] 	 	= 'DepartmentController/update_dept_type';

// CRUD Job Titles
$route['add-jt'] 		= 'HRController/add_jt';
$route['delete-jt'] 	= 'HRController/delete_jt';
$route['get-jt-by-id'] 	= 'HRController/get_jt_by_id';
$route['update-jt'] 	= 'HRController/update_jt';


// CRUD Education Level
$route['add-edl'] 		= 'HRController/add_edl';
$route['delete-edl'] 	= 'HRController/delete_edl';
$route['get-edl-by-id'] = 'HRController/get_edl_by_id';
$route['update-edl'] 	= 'HRController/update_edl';


// CRUD Education Level
$route['add-address-type'] 			= 'HRController/add_address_type';
$route['get-address-type-by-id'] 	= 'HRController/get_address_type_by_id';
$route['update-address-type'] 		= 'HRController/update_address_type';
$route['delete-address-type'] 		= 'HRController/delete_address_type';

// CRUD Employee
$route['ajax-add-employee'] 				= 'EmployeeController/ajax_add_employee';
$route['ajax-add-employee-profile'] 		= 'EmployeeController/ajax_add_employee_profile';
$route['ajax-add-employee-address'] 		= 'EmployeeController/ajax_add_employee_address';
$route['ajax-add-employee-bank-details'] 	= 'EmployeeController/ajax_add_employee_bank_details';
$route['upload-docs'] 						= 'EmployeeController/upload_docs';
$route['ajax-add-relations'] 				= 'EmployeeController/ajax_add_relations';
$route['ajax-delete-relations'] 			= 'EmployeeController/ajax_delete_relations';


// CRUD Relationships
$route['add-relationship'] 			= 'HRController/add_relationship';
$route['get-relationship-by-id'] 	= 'HRController/get_relationship_by_id';
$route['delete-relationship'] 		= 'HRController/delete_relationship';
$route['update-relationship'] 		= 'HRController/update_relationship';



// CRUD Relationships
$route['add-kyc'] 			= 'HRController/add_kyc';
$route['get-kyc-by-id'] 	= 'HRController/get_kyc_by_id';
$route['delete-kyc'] 		= 'HRController/delete_kyc';
$route['update-kyc'] 		= 'HRController/update_kyc';


// CRUD Relationships
$route['add-occupation'] 			= 'HRController/add_occupation';
$route['get-occupation-by-id'] 		= 'HRController/get_occupation_by_id';
$route['delete-occupation'] 		= 'HRController/delete_occupation';
$route['update-occupation'] 		= 'HRController/update_occupation';


$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
