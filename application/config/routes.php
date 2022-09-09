<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['hr-dashboard'] 			= 'HRController/hr_dashboard';
$route['hr-department'] 		= 'HRController/hr_department';
$route['hr-emplist'] 			= 'HRController/hr_emplist';
$route['hr-empview'] 			= 'HRController/hr_empview';
$route['hr-addemployee'] 		= 'HRController/hr_addemployee';
$route['hr-attlist'] 			= 'HRController/hr_attlist';
$route['hr-attuser'] 			= 'HRController/hr_attuser';
$route['hr-attview'] 			= 'HRController/hr_attview';
$route['hr-overviewcldr'] 		= 'HRController/hr_overviewcldr';
$route['hr-attmark'] 			= 'HRController/hr_attmark';
$route['hr-leaves'] 			= 'HRController/hr_leaves';
$route['hr-leavesapplication'] 	= 'HRController/hr_leavesapplication';
$route['hr-recentleaves'] 		= 'HRController/hr_recentleaves';
$route['hr-award'] 				= 'HRController/hr_award';
$route['hr-holiday'] 			= 'HRController/hr_holiday';
$route['hr-notice'] 			= 'HRController/hr_notice';
$route['hr-expenses'] 			= 'HRController/hr_expenses';
$route['hr-empsalary'] 			= 'HRController/hr_empsalary';
$route['hr-addpayroll'] 		= 'HRController/hr_addpayroll';
$route['hr-editpayroll'] 		= 'HRController/hr_editpayroll';
$route['hr-events'] 			= 'HRController/hr_events';
$route['hr-settings'] 			= 'HRController/hr_settings';

// Employee Dashboard
$route['employee-dashboard'] 	= 'EmployeeController/employee_dashboard';
$route['employee-attendance'] 	= 'EmployeeController/employee_attendance';
$route['employee-leaves'] 		= 'EmployeeController/employee_leaves';
$route['employee-myleaves'] 	= 'EmployeeController/employee_myleaves';
$route['employee-payslips'] 	= 'EmployeeController/employee_payslips';
$route['employee-expenses'] 	= 'EmployeeController/employee_expenses';

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


$route['default_controller'] = 'HRController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
