<?php

    

class errors {

    

  function global()
  {
    // return 'Hello, ';

	  return $levels = array(
        E_ERROR             => 'Error',
        E_WARNING           => 'Warning',
        E_PARSE             => 'Parsing Error',
        E_NOTICE            => 'Notice',
        E_CORE_ERROR        => 'Core Error',
        E_CORE_WARNING      => 'Core Warning',
        E_COMPILE_ERROR     => 'Compile Error',
        E_COMPILE_WARNING   => 'Compile Warning',
        E_USER_ERROR        => 'User Error',
        E_USER_WARNING      => 'User Warning',
        E_USER_NOTICE       => 'User Notice',
        E_STRICT            => 'Runtime Notice',
        E_RECOVERABLE_ERROR => 'Catchable error',
        E_DEPRECATED        => 'Runtime Notice',
        E_USER_DEPRECATED   => 'User Warning',
        'E_HRDASHBOARD'             => 'HRDashboard',
        'E_CLOCK_IN'                => 'Clock In',
        'E_CLOCK_OUT'               => 'Clock Out',
        'E_CONTACT'                 => 'Contact',
        'E_MAIL'                    => 'Mail',
        'E_E-MAIL'                  => 'E-mail',
        'E_INFO'                    => 'Info',
        'E_CLOSE'                   => 'Close',
        'E_CHAT'                    => 'Chat',
        'E_TOTAL_EMPLOYEES'         => 'Total Employees',
        'E_DEPARTMENT'              => 'Department',
        'E_EXPENSES'                => 'Expenses',
        'E_NOTICE_BOARD'            => 'Notice Board',
        'E_OVERVIEW'                => 'Overview',
        'E_UPCOMING_EVENTS'         => 'Upcoming Events',
        'E_PROJECT_OVERVIEW'        => 'Project Overview',
        'E_RECENT_ACTIVITY'         => 'Recent Activity',
        'E_GENDER_BY_EMPLOYEES'     => 'Gender By Employees',
        'E_RECENT_JOB_APPLICATION'  => 'Recent Job Application',
        'E_ATTENDANCE'              => 'Attendance',
        // 'E_DEPARTMENT'              => 'Department',
        'E_DEPARTMENT_SUMMARY'      => 'Department Summary',
        'E_SUBMIT'                  => 'Submit',
        'E_UPDATE'                  => 'Update',
        'E_EDIT'                    => 'Edit',
        'E_DELETE'                  => 'Delete',
        'E_ADD_DEPARTMENT'          => 'Add Department',
        'E_ADD_JOB_TITLE'           => 'Add Job Title',
        'E_JOB_TITLE'               => 'Job Title',
        'E_JOB_TITLE_SUMMARY'       => 'Job Title Summary',
        'E_ADD_EDUCATION_LEVEL'     => 'Add Education Level',
        'E_EDUCATION_LEVEL'         => 'Education Level',
        'E_EDUCATION_LEVEL_SUMMARY' => 'Education Level Summary',
        'E_EMPLOYEES'               => 'Employees',
        'E_EMPLOYEES_LIST'          => 'Employees List',
        // 'E_TOTAL_EMPLOYEES'         => 'Total Employees',
        'E_TOTAL_MALE_EMPLOYEES'    => 'Total Male Employees',
        'E_TOTAL_FEMALE_EMPLOYEES'  => 'Total Female Employees',
        'E_TOTAL_NEW_EMPLOYEES'     => 'Total New Employees',
        'E_EMPLOYEE_PROFILE'        => 'Employee Profile',
        'E_UPDATED'                 => 'Updated',
        'E_CANCLE'                  => 'Cancle',
        'E_CLEAR'                   => 'Clear',
        'E_SEARCH'                  => 'Search',
        'E_CHOOSE_FILE'             => 'Choose File',
        // 'E_STATISTICS_2021'         => 'Statistics-2021',
        'E_ADD_EMPLOYEE'            => 'Add Employee',
        'E_ADD_NEW_EMPLOYEE'            => 'Add New Employee',
        // 'E_ATTENDANCE'              => 'Attendance',
        'E_MARK_ATTENDANCE'         => 'Mark Attendance',
        'E_SAVE_ALL'                => 'Save All',
        'E_ATTENDANCE_BY_USER'      => 'Attendance By User',
        'E_ATTENDANCE_VIEW'         => 'Attendance View',
        'E_DAYS_OVERVIEW_THIS_MONTH' => 'Days Overview This Month',
        'E_OVERVIEW_CALENDAR'        => 'Overview Calendar',
        'E_LEAVE_SETTINGS'           => 'Leave Settings',
        'E_ADD_LEAVE_TYPE'             => 'Add Leave Type',
        'E_LEAVES_TYPES'             => 'Leaves Types',
        'E_LEAVE_APPLICATIONS'       => 'Leave Applications',
        'E_RECENT_EARNED_LEAVE_APPLICATIONS' => 'Recent Earned Leave Applications',
        'E_VIEW_ALL'                => 'View All',
        'E_EARNED_LEAVE_REQUEST'    => 'Earned Leave Request',
        'E_LEAVES_SUMMARY'          => 'Leaves Summary',
        'E_VIEW'                 => 'view',
        'E_VIEW'                 => 'View',
        'E_ACCEPT'               => 'Accept',
        'E_REJECT'               => 'Reject',
        'E_REJECTED'             => 'Rejected',
        'E_RECENT_LEAVE_APPLICATIONS'  => 'Recent Leave Applications',
        'E_AWARDS'             => 'Awards',
        'E_ADD_NEW_AWARDS'     => 'Add New Award',
        'E_HOLIDAYS'           => 'Holidays',
        'E_ADD_HOLIDAY'           => 'Add_Holiday',
        'E_HOLIDAYS_LISTS'     => 'Holidays Lists',
        // 'E_NOTICE_BOARD'       => 'Notice Board',
        'E_ADD_NEW_NOTICE'           => 'Add New Notice',
        'E_NOTICE_SUMMARY'     => 'Notice Summary',
        // 'E_EXPENSES'           => 'Expenses',
        'E_ADD_EXPENSES'           => 'Add Expenses',
        'E_ADD_NEW_EXPENSE_ITEM' => 'Add New Expense Item',
        'E_EXPENSE_SUMMARY'    => 'Expense Summary',
        'E_EMPLOYEE_SALARY'    => 'Employee Salary',
        'E_DOWNLOAD'           => 'Download',
        'E_PRINT'              => 'Print',
        'E_SHARE'              => 'Share',
        'E_ADD_PAYROLL'        => 'Add Payroll',
        'E_ADD_NEW_PAYROLL'     => 'Add New Payroll',
        'E_DOENLOAD_MONTHLY_EXCEL_REPORT'  => 'Download Monthly Excel Report',
        'E_SALARY_INFORMATION' => 'Salary Information',
        'E_SAVE'               => 'Save',
        'E_EDIT_PAYROLL'       => 'Edit Payroll',
        'E_EVENTS'             => 'Events',
        'E_ADD_NEW_EVENTS'     => 'Add New Events',
        // 'E_UPCOMING_EVENTS'    => 'Upcoming Events',
        'E_SETTINGS'           => 'Settings',
        'E_SAVE_CHANGES'       => 'Save Changes',
        'E_GENERAL_SETTINGS'   => 'General Settings',
        'E_PROFILE_SETTINGS'   => 'Profile Settings',
        'E_NOTIFICATION_SETTINGS' => 'Notification Settings',
        'E_ATTENDANCE_SETTINGS' => 'Attendance Settings',
        'E_THEME_SETTINGS'      => 'Theme Settings',
        'E_EMPLOYEEDASHBOARD'   => 'EmployeeDashboard',
        'E_COMPLETED_PROJECTS'  => 'Completed Projects',
        'E_TOTAL_ATTENDANCE'    => 'Total Attendance',
        'E_ABSENT'              => 'Absent',
        'E_SALARY_AND_ATTENDANCE_CHART' => 'Salary And Attendance Chart',
        'E_CALENDAR'             => 'Calendar',
        'E_UP_COMING_HOLIDAYS'   => 'Up Coming Holidays',
        'E_LEAVE_BALANCE'        => 'Leave Balance',
        'E_UP_COMING_BIRTHDAYS'  => 'Up Coming Birthdays',
        'E_ATTENDANCE_OVERVIEW'  => 'Attendance Overview',
        'E_APPLY_LEAVES'         => 'Apply Leaves',
        'E_APPLY_FOR_LEAVE'      => 'Apply For Leave',
        'E_LEAVES_OVERVIEW'      => 'Leaves Overview',
        'E_MY_LEAVES'            => 'My Leaves',
        'E_REPORT'               => 'Report',
        'E_PAYSLIPS'             => 'Payslips',
        'E_MY_PAYSLIPS_SUMMARY'  => 'My Payslips Summary',
        'E_MY_EXPENSES_SUMMARY'  => 'My Expenses Summary',
        'E_TASKDASHBOARD'        => 'TaskDashboard',
        'E_ALL_TASK'             => 'All Task',
        'E_MY_TASK'              => 'My Task',
        'E_PENDING_TASKS'        => 'Pending Tasks',
        'E_COMPLETED_TASKS'      => 'Completed Tasks',
        'E_TODAY_TASK_UPDATES'   => 'Today Task Updates',
        'E_CREATE_NEW_TASK'      => 'Create New Task',
        'E_ADD_TASK'             => 'Add Task',
        'E_LATEST'               => 'Latest',
        // 'E_DESIGN_UPDATED'       => 'Design Updated',
        // 'E_HTML_CODE_UPDATED'    => 'HTML Code Updated',
        // 'E_ANGULAR_ISSUES_FIXED' => 'Angular Issues fixed',
        // 'E_RESPONSIVE_ISSUES_FIXED' => 'Responsive Issues fixed',
        'E_TASK_REPORT'          => 'Task Report',
        'E_TASKS'                => 'Tasks',
        'E_ACTIVITY'             => 'Activity',
        'E_REMINDERS'            => 'Reminders',
        'E_ADVANCED_TASK_STATUS' => 'Advanced Task Status',
        'E_TIME_SPENT_ON_TASK'   => 'Time Spent On Task',
        'E_TASKS_SUMMARY'        => 'Tasks Summary',
        'E_TASK_LIST'            => 'Task List',
        'E_TOTAL_TASKS'          => 'Total Tasks',
        'E_RUNNING_TASKS'        => 'Running Tasks',
        'E_ON_HOLD_TASKS'        => 'On hold Tasks',
        'E_RECENT_TASK_SUMMARY'  => 'Recent Task Summary',
        'E_RUNNING_TASK'         => 'Running Task',
        'E_RUNNING_TASK_SUMMARY' => 'Running Task Summary',
        'E_VIEW_TASK'            => 'View Task',
        'E_EDIT_TASK'            => 'Edit task',
        'E_SEND_TASK'            => 'Send Task',
        'E_DELETE_TASK'          => 'Delete Task',
        'E_ONHOLD_TASK'          => 'OnHold Task',
        'E_ONHOLD_TASK_SUMMARY'  => 'Onhold Task Summary',
        'E_COMPLETED_TASK'       => 'Completed Task',
        'E_COMPLETED_TASK_SUMMARY' => 'Completed Task Summary',
        // 'E_TASK_01_DESIGN_UPDATED' => 'Task 01 Design Updated',
        'E_ASSIGNED_TO'            => 'Assigned To',
        'E_ADD_TASK'               => 'Add Task',
        'E_ADD_COMMENT'            => 'Add Comment',
        'E_ADD_FAQ'                => 'Add Faq',
        'E_TASK_OVERVIEW_CALENDAR'  => 'Task Overview Calendar',
        'E_TASK_OVERVIEW_THIS_MONTH' => 'Task Overview This Month',
        'E_TASK_BOARD'             => 'Task Board',
        'E_IN_PROGRESS'            => 'In Progress',
        'E_ON_HOLD'                => 'On Hold',
        'E_ON_PROGRESS'            => 'On Progress',
        'E_COMPLETED'              => 'Completed',
        'E_NEW_TASK'               => 'New Task',
        'E_USER_PROFILE'           => 'User Profile',
        'E_BASIC_INFO'             => 'Basic Info',
        'E_STATISTICS'             => 'Statistics',
        'E_PROJECTDASHBOARD'       => 'ProjectDashboard',
        'E_CREATE_NEW_PROJECT'     => 'Create New Project',
        'E_PROJECTS'               => 'Projects',
        'E_PENDING_PROJECTS'       => 'Pending Projects',
        'E_ON_GOING_PROJECTS'      => 'On going Projects',
        'E_RECENT_PROJECT_UPDATES' => 'Recent Project Updates',
        'E_ADD_PROJECT'            => 'Add Project',
        'E_MILESTONES'             => 'Milestones',
        'E_IN_PROGRESS_PROJECTS'   => 'In Progress Projects',
        'E_EMPLOYEE_GENDER'        => 'Employee Gender',
        'E_PROJECT_SUMMARY'        => 'Project Summary',
        'E_PROJECT_LIST'           => 'Project List',
        'E_TOTAL_PROJECTS'         => 'Total Projects',
        'E_ONGOING_PROJECTS'       => 'Ongoing Projects',
        'E_NOT_STARTED_PROJECTS'   => 'Not Started Projects',
        'E_CANCELED_PROJECTS'      => 'Canceled Projects',
        'E_RECENT_PROJECT_SUMMARY' => 'Recent Project Summary',
        // 'E_PROJECT_#67_MOBILE_APP' => 'Project #67 Mobile App',
        'E_PROJECT_DETAILS'        => 'Project Details',
        'E_ASSIGNED_TEAM'          => 'Assigned Team',
        'E_UPLOAD_FILES'           => 'Upload_Files',
        'E_ADD_MILESTONE'          => 'Add Milestone',
        'E_SEND_COMMENT'           => 'Send Comment',
        'E_Add_Invoice'            => 'Add Invoice',
        'E_PROJECT_OVERVIEW_CALENDAR' => 'Project Overview Calendar',
        'E_NEW_PROJECT'          => 'New Project',
        'E_CLIENTDASHBOARD'      => 'ClientDashboard',
        'E_ON_GOING'             => 'On Going',
        'E_SPEND_ANALYSIS'       => 'Spend Analysis',
        'E_TOTAL_EXPENSES'       => 'Total Expenses',
        'E_DESIGN_UPDATED'       => 'Design Updated',
        'E_COMPLETED_PROJECT'    => 'Completed Project',
        'E_RECENT_ORDERS'        => 'Recent Orders',
        'E_RECENT_INVOICES'      => 'Recent Invoices',
        'E_PROJECT'              => 'Project',
        'E_CLIENT_LIST'          => 'Client List',
        'E_ADD_NEW_CLIENT'       => 'Add New Client',
        'E_CLIENT_SUMMARY'       => 'Client Summary',
        'E_CLIENT_VIEW'          => 'Client View',
        'E_BASIC_DETAILS'        => 'Basic Details',
        'E_COMPANY_DETAILS'      => 'Company Details',
        'E_ABOUT'                => 'About',
        'E_DECRIPTION'           => 'Description',
        'E_ADD_PAYMENT'          => 'Add Payment',
        'E_ADD_TICKET'           => 'Add Ticket',
        'E_NEW_CLIENT'           => 'New Client',
        'E_PAID_INVOICE'         => 'Paid Invoice',
        'E_INPROGRESS_PROJECTS'  => 'Inprogress Projects',
        'E_PAID_AMOUNT'          => 'Paid Amount',
        'E_BASIC'                => 'Basic',
        'E_SEND_MESSAGE'         => 'Send Message',
        'E_RECRUITINGDASHBOARD'  => 'RecruitingDashboard',
        'E_ADD_NEW_JOB'          => 'Add New Job',
        'E_TOTAL_OPENINGS'       => 'Total Openings',
        'E_INTERVIEWS'           => 'Interviews',
        'E_HIRED'                => 'Hired',
        'E_REJECTED'             => 'Rejected',
        'E_RECENT_PUBLISHED_JOBS'=> 'Recent Published Jobs',
        'E_ADD_JOB'              => 'Add Job',
        'E_JOB_APPLICATIONS'     => 'Job Applications',
        'E_JOB_LISTS'            => 'Job Lists',
        'E_JOB_VIEW'             => 'Job View',
        'E_APPLY'                => 'Apply',
        'E_APPLY_NOW'            => 'Apply Now',
        'E_SHARE_JOB'            => 'Share Job',
        'E_JOB_DETAILS'          => 'Job Details',
        'E_CONTACT_NOW'          => 'Contact Now',
        'E_JOB_APPLICATIONS'     => 'Job Applications',
        'E_DOWNLOAD_RESUME'      => 'Download Resume',
        'E_APPLY_JOBS'           => 'Apply Jobs',
        'E_NEW_JOB'              => 'New Job',
        'E_EMPLOYMENT_DETAILS'   => 'Employment Details',
        'E_SHARE_PROFILE'        => 'Share Profile',
        'E_SUPER_ADMINDASHBOARD' => 'Super AdminDashboard',
        'E_TOTAL_COMPANIES'      => 'Total Companies',
        'E_TOTAL_INCOME'         => 'Total Income',
        'E_MONTHLY_ACTIVE_COMPANIES' => 'Monthly Active Companies',
        'E_TOTAL_PACKAGES'       => 'Total Packages',
        'E_EARNINGS_OVERVIEW'    => 'Earnings Overview',
        'E_RECENT_SUBSCRIPTION'  => 'Recent Subscription',
        'E_RECENT_REGISTERED_COMPANIES_SUMMARY' => 'Recent Registered Companies Summary',
        'E_RECENT_INACTIVE_COMPANIES'  => 'Recent Inactive Companies',
        'E_VIEW_INVOICE'        => 'View Invoice',
        'E_COMPANIES'           => 'Companies',
        'E_ADD_NEW_COMPANY'     => 'Add New Company',
        'E_RESET'               => 'Reset',
        'E_SUBSCRIPTIONS'       => 'Subscriptions',
        'E_ADD_NEW_PACKAGE'     => 'Add New Package',
        'E_INVOICES'            => 'Invoices',
        'E_SUPER_ADMINS'        => 'Super Admins',
        'E_ADD_NEW_ADMIN'     => 'Add New Admin',
        'E_Email_Settings'    => 'Email Settings',
        'E_SEND_TEST_EMAIL'   => 'Send Test Email',
        'E_PAYMENT_SETTINGS'  => 'Payment Settings',
        'E_SECURITY_SETTINGS' => 'Security Settings',
        'E_SOCIAL_SETTINGS'   => 'Social Settings',
        'E_GOOGLE_LOGIN'      => 'Google Login',
        'E_FACEBOOK_LOGIN'    => 'Facebook Login',
        'E_ROLE_ACCESS'       => 'Role Access'

    );
  }
}
