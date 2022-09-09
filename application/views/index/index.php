<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">HR<span class="font-weight-normal text-muted ms-2">Dashboard</span></div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="d-flex">
						<div class="header-datepicker me-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="feather feather-calendar"></i>
									</div>
								</div><input class="form-control fc-datepicker" placeholder="19 Feb 2020" type="text">
							</div>
						</div>
						<div class="header-datepicker me-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="feather feather-clock"></i>
									</div>
								</div><!-- input-group-prepend -->
								<input id="tpBasic" type="text" placeholder="09:30am" class="form-control input-small">
							</div>
						</div><!-- wd-150 -->
					</div>
					<div class="d-lg-flex d-block">
						<div class="btn-list">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#clockinmodal">Clock In</button>
							<button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
							<button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"> <i class="feather feather-phone-call"></i> </button>
							<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"> <i class="feather feather-info"></i> </button>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Page header-->

		<!--Row-->
		<div class="row">
			<div class="col-xl-9 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-8">
										<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Total Employees</span>
											<h3 class="mb-0 mt-1 mb-2">6,578</h3>
											<span class="text-muted">
												<span class="text-success fs-12 mt-2 me-1"><i class="feather feather-arrow-up-right me-1 bg-success-transparent p-1 brround"></i>124</span>
												for last month
											</span>
										</div>
									</div>
									<div class="col-4">
										<div class="icon1 bg-success my-auto  float-end"> <i class="feather feather-users"></i> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-8">
										<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Department</span>
											<h3 class="mb-0 mt-1 mb-2">124</h3>
											<span class="text-muted">
												<span class="text-danger fs-12 mt-2 me-1"><i class="feather feather-arrow-down-left me-1 bg-danger-transparent p-1 brround"></i>13</span>
												for last month
											</span>
										</div>
									</div>
									<div class="col-4">
										<div class="icon1 bg-primary my-auto  float-end"> <i class="feather feather-box"></i> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-8">
										<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Expenses</span>
											<h3 class="mb-0 mt-1  mb-2">$2,7853</h3>
										</div>
										<span class="text-muted">
											<span class="text-danger fs-12 mt-2 me-1"><i class="feather feather-arrow-up-right me-1 bg-danger-transparent p-1 brround"></i>21.1% </span>
											for last month
										</span>
									</div>
									<div class="col-4">
										<div class="icon1 bg-secondary brround my-auto  float-end"> <i class="feather feather-dollar-sign"></i> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header border-0 responsive-header">
								<h4 class="card-title">Overview</h4>
								<div class="card-options">
									<div class="btn-list">
										<a href="javascript:void(0);" class="btn  btn-outline-light text-dark float-start d-flex  my-1"><span class="dot-label bg-light4 me-2 my-auto"></span>Employees</a>
										<a href="javascript:void(0);" class="btn  btn-outline-light text-dark float-start d-flex  my-1"><span class="dot-label bg-primary me-2 my-auto"></span>Budget</a>
										<a href="javascript:void(0);" class="btn btn-outline-light  my-1" data-bs-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
										<ul class="dropdown-menu dropdown-menu-end" role="menu">
											<li><a href="javascript:void(0);">Monthly</a></li>
											<li><a href="javascript:void(0);">Yearly</a></li>
											<li><a href="javascript:void(0);">Weekly</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<canvas id="chartLine"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-12 col-lg-12">
				<div class="card overflow-hidden">
					<div class="card-header border-0">
						<h4 class="card-title">Notice Board</h4>
					</div>
					<div class="pt-2">
						<div class="list-group">
							<div class="list-group-item d-flex pt-3 pb-3 border-0">
								<div class="me-3 me-xs-0">
									<div class="calendar-icon icons">
										<div class="date_time bg-pink-transparent"> <span class="date">18</span> <span class="month">FEB</span> </div>
									</div>
								</div>
								<div class="ms-1">
									<div class="h5 fs-14 mb-1">Board meeting Completed</div> <small class="text-muted">attend the company mangers...</small>
								</div>
							</div>
							<div class="list-group-item d-flex pt-3 pb-3 border-0">
								<div class="me-3 me-xs-0">
									<div class="calendar-icon icons">
										<div class="date_time bg-success-transparent "> <span class="date">16</span> <span class="month">FEB</span> </div>
									</div>
								</div>
								<div class="ms-1">
									<div class="h5 fs-14 mb-1">Updated the Company Policy</div>
									<small class="text-muted">some changes & add the terms & conditions </small>
								</div>
							</div>
							<div class="list-group-item d-flex pt-3 pb-3 border-0">
								<div class="me-3 me-xs-0">
									<div class="calendar-icon icons">
										<div class="date_time bg-orange-transparent "> <span class="date">17</span> <span class="month">FEB</span> </div>
									</div>
								</div>
								<div class="ms-1">
									<div class="h5 fs-14 mb-1">Office Timings Changed</div> <small class="text-muted"> this effetct after March 01st 9:00 Am To 5:00 Pm</small>
								</div>
							</div>
							<div class="list-group-item d-flex pt-3 pb-5 border-0">
								<div class="me-3 me-xs-0">
									<div class="calendar-icon icons">
										<div class="date_time bg-info-transparent "> <span class="date">26</span> <span class="month">JAN</span> </div>
									</div>
								</div>
								<div class="ms-1">
									<div class="h5 fs-15 mb-1"> Republic Day Celebrated </div> <small class="text-muted">participate the all employess </small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="mb-4">
					<div class="card-header border-bottom-0 pt-2 ps-0">
						<h4 class="card-title">Upcoming Events</h4>
					</div>
					<ul class="vertical-scroll">
						<li class="item">
							<div class="card p-4 ">
								<div class="d-flex">
									<img src="<?php echo base_url() ?>assets/images/users/16.jpg" alt="img" class="avatar avatar-md bradius me-3">
									<div class="me-3 mt-0 mt-sm-1 d-block">
										<h6 class="mb-1">Vanessa James</h6>
										<span class="clearfix"></span>
										<small>Birthday on Feb 16</small>
									</div>
									<span class="avatar bg-primary ms-auto bradius mt-1"> <i class="feather feather-mail text-white"></i> </span>
								</div>
							</div>
						</li>
						<li class="item">
							<div class="card p-4 ">
								<div class="d-flex comming_events calendar-icon icons">
									<span class="date_time bg-success-transparent bradius me-3"><span class="date fs-18">21</span>
										<span class="month fs-10">Feb</span>
									</span>
									<div class="me-3 mt-0 mt-sm-1 d-block">
										<h6 class="mb-1">Anniversary</h6>
										<span class="clearfix"></span>
										<small>3rd Anniversary on 21st Feb</small>
									</div>
								</div>
							</div>
						</li>
						<li class="item">
							<div class="card p-4 ">
								<div class="d-flex">
									<img src="<?php echo base_url() ?>assets/images/users/4.jpg" alt="img" class="avatar avatar-md bradius me-3">
									<div class="me-3 mt-0 mt-sm-1 d-block">
										<h6 class="mb-1">Faith Harris</h6>
										<span class="clearfix"></span>
										<small>Smart Device Trade Show</small>
									</div>
								</div>
							</div>
						</li>
						<li class="item">
							<div class="card p-4 ">
								<div class="d-flex comming_events calendar-icon icons">
									<span class="date_time bg-pink-transparent bradius me-3"><span class="date fs-18">25</span>
										<span class="month fs-10">Mar</span>
									</span>
									<div class="me-3 mt-0 mt-sm-1 d-block">
										<h6 class="mb-1">Meeting</h6>
										<span class="clearfix"></span>
										<small>It will be held in meeting room</small>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 col-lg-6">
				<div class="card">
					<div class="card-header border-0">
						<h4 class="card-title">Project Overview</h4>
						<div class="card-options">
							<div class="dropdown"> <a href="javascript:void(0);" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"> Week <i class="feather feather-chevron-down"></i> </a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="javascript:void(0);">Monthly</a></li>
									<li><a href="javascript:void(0);">Yearly</a></li>
									<li><a href="javascript:void(0);">Weekly</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="mt-5">
							<canvas id="sales-summary" class=""></canvas>
						</div>
						<div class="sales-chart mt-4 row text-center">
							<div class="d-flex my-auto col-sm-4 mx-auto text-center justify-content-center"><span class="dot-label bg-primary me-2 my-auto"></span>On progress</div>
							<div class="d-flex my-auto col-sm-4 mx-auto text-center justify-content-center"><span class="dot-label bg-secondary me-2 my-auto"></span>Pending</div>
							<div class="d-flex my-auto col-sm-4 mx-auto text-center justify-content-center"><span class="dot-label bg-light4  me-2 my-auto"></span>Completed</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 col-lg-6">
				<div class="card">
					<div class="card-header border-0">
						<h4 class="card-title">Recent Activity</h4>
						<div class="card-options">
							<div class="dropdown"> <a href="javascript:void(0);" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i> </a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="javascript:void(0);">Monthly</a></li>
									<li><a href="javascript:void(0);">Yearly</a></li>
									<li><a href="javascript:void(0);">Weekly</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<ul class="timeline">
							<li>
								<a target="_blank" href="javascript:void(0);" class="font-weight-semibold fs-15 ms-3">Leave Approval Request</a>
								<a href="javascript:void(0);" class="text-muted float-end fs-13">6 min ago</a>
								<p class="mb-0 pb-0 text-muted pt-1 fs-11 ms-3">From "RuthDyer" UiDesign Leave</p>
								<span class="text-muted  ms-3 fs-11"> On Monday 12 Jan 2020.</span>
							</li>
							<li class="primary">
								<a target="_blank" href="javascript:void(0);" class="font-weight-semibold fs-15 mb-2 ms-3">Wok Update</a>
								<a href="javascript:void(0);" class="text-muted float-end fs-13">10 min ago</a>
								<p class="mb-0 pb-0 text-muted fs-11 pt-1 ms-3">From "Robert Marshall" Developer</p>
								<span class="text-muted ms-3 fs-11">Task Completed.</span>
							</li>
							<li class="pink">
								<a target="_blank" href="javascript:void(0);" class="font-weight-semibold fs-15 mb-2 ms-3">Received Mail</a>
								<a href="javascript:void(0);" class="text-muted float-end fs-13">15 min ago</a>
								<p class="mb-0 pb-0 text-muted fs-11 pt-1 ms-3">Emergency Sick Leave from "jacob Berry"</p>
								<span class="text-muted ms-3 fs-11">Ui Designer, Designer Team.</span>
							</li>
							<li class="success mb-0 pb-0">
								<a target="_blank" href="javascript:void(0);" class="font-weight-semibold fs-15 mb-2 ms-3">Job Application Mail</a>
								<a href="javascript:void(0);" class="text-muted float-end fs-13">1 Hour ago</a>
								<p class="mb-0 pb-0 text-muted fs-11 pt-1 ms-3">From jobmail@gmail.com laravel developer.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 col-lg-12">
				<div class="card chart-donut1">
					<div class="card-header  border-0">
						<h4 class="card-title">Gender by Employees</h4>
					</div>
					<div class="card-body">
						<div id="employees" class="mx-auto apex-dount"></div>
						<div class="sales-chart pt-5 pb-3 d-flex mx-auto text-center justify-content-center ">
							<div class="d-flex me-5"><span class="dot-label bg-primary me-2 my-auto"></span>Male</div>
							<div class="d-flex"><span class="dot-label bg-secondary  me-2 my-auto"></span>Female</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-12 col-md-12">
				<div class="card">
					<div class="card-header border-bottom-0">
						<h3 class="card-title">Recent Job Application</h3>
						<div class="card-options">
							<div class="dropdown"> <a href="javascript:void(0);" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="javascript:void(0);">Monthly</a></li>
									<li><a href="javascript:void(0);">Yearly</a></li>
									<li><a href="javascript:void(0);">Weekly</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-menu-heading table_tabs mt-2 p-0 ">
						<div class="tabs-menu1">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class="ms-sm-4"><a href="#tab5" data-bs-toggle="tab">Job Applications</a></li>
								<li><a href="#tab6" class="active" data-bs-toggle="tab">Job Opening</a></li>
								<li><a href="#tab7" data-bs-toggle="tab">Hired Candidates</a></li>
							</ul>
						</div>
					</div>
					<div class="panel-body tabs-menu-body table_tabs1 p-0 border-0">
						<div class="tab-content">
							<div class="tab-pane" id="tab5">
								<div class="table-responsive recent_jobs pt-2 pb-2 ps-2 pe-2 card-body">
									<table class="table mb-0 text-nowrap">
										<tbody>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/16.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Faith Harris</h6>
															<div class="clearfix"></div>
															<small class="text-muted">UI designer</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">5 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">James Paige</h6>
															<div class="clearfix"></div>
															<small class="text-muted">UI designer</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">2 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>India</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/4.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Liam Miller</h6>
															<div class="clearfix"></div>
															<small>WireFrameing</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">1 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>Germany</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/8.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Kimberly Berry</h6>
															<div class="clearfix"></div>
															<small>Senior Prototyper</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">3 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/9.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Kimberly Berry</h6>
															<div class="clearfix"></div>
															<small>Senior Prototyper</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">3 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane active" id="tab6">
								<div class="table-responsive recent_jobs pt-2 pb-2 ps-2 pe-2 card-body">
									<table class="table mb-0 text-nowrap">
										<tbody>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="bg-light brround fs-12">UI/UX</span>
														</div>
														<div class="me-3 mt-3 d-block">
															<h6 class="mb-0 fs-13 font-weight-semibold">UI UX Designers</h6>
															<div class="clearfix"></div>
															<small class="text-muted">12 Dec 2020</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">4 vacancies</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-check text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-help-circle  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-x text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<img src="<?php echo base_url() ?>assets/images/photos/html.png" alt="img" class=" bg-light brround">
														</div>
														<div class="me-3 mt-3 d-block">
															<h6 class="mb-0 fs-13 font-weight-semibold">Experienced Html Developer</h6>
															<div class="clearfix"></div>
															<small class="text-muted">28 Nov 2020</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">2 vacancies</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-check text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-help-circle  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-x text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<img src="<?php echo base_url() ?>assets/images/photos/jquery.png" alt="img" class=" bg-light brround">
														</div>
														<div class="me-3 mt-3 d-block">
															<h6 class="mb-0 fs-13 font-weight-semibold">Experienced Jquery Developer</h6>
															<div class="clearfix"></div>
															<small>12 Nov 2020</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">1 vacancies</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-check text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-help-circle  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-x text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<img src="<?php echo base_url() ?>assets/images/photos/vue.png" alt="img" class=" bg-light brround">
														</div>
														<div class="me-3 mt-3 d-block">
															<h6 class="mb-0 fs-13 font-weight-semibold">Vue js Developer</h6>
															<div class="clearfix"></div>
															<small>24 Oct 2020</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">6 vacancies</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-check text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-help-circle  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-x text-danger"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<img src="<?php echo base_url() ?>assets/images/photos/html.png" alt="img" class=" bg-light brround">
														</div>
														<div class="me-3 mt-3 d-block">
															<h6 class="mb-0 fs-13 font-weight-semibold">Kimberly Berry</h6>
															<div class="clearfix"></div>
															<small>14 Oct 2020</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">4 vacancies</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-check text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-help-circle  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns"><i class="feather feather-x text-danger"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane " id="tab7">
								<div class="table-responsive recent_jobs pt-2 pb-2 ps-2 pe-2 card-body">
									<table class="table mb-0 text-nowrap">
										<tbody>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/16.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Faith Harris</h6>
															<div class="clearfix"></div>
															<small class="text-muted">UI designer</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">5 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">James Paige</h6>
															<div class="clearfix"></div>
															<small class="text-muted">UI designer</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">2 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>India</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/4.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Liam Miller</h6>
															<div class="clearfix"></div>
															<small>WireFrameing</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">1 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>Germany</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/8.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Kimberly Berry</h6>
															<div class="clearfix"></div>
															<small>Senior Prototyper</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">3 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex">
														<img src="<?php echo base_url() ?>assets/images/users/9.jpg" alt="img" class="avatar avatar-md brround me-3">
														<div class="me-3 mt-0 mt-sm-1 d-block">
															<h6 class="mb-0">Kimberly Berry</h6>
															<div class="clearfix"></div>
															<small>Senior Prototyper</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13">3 years</td>
												<td class="text-start fs-13"><i class="feather feather-map-pin text-muted me-2"></i>USA</td>
												<td class="text-end">
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
													<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-12 col-md-12">
				<div class="card">
					<div class="card-header border-0">
						<h3 class="card-title">Attendance</h3>
						<div class="card-options ">
							<a href="javascript:void(0);" class="btn btn-outline-light me-3">View All</a>
							<div class="dropdown"> <a href="javascript:void(0);" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Date <i class="feather feather-chevron-down"></i> </a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="javascript:void(0);">Monthly</a></li>
									<li><a href="javascript:void(0);">Yearly</a></li>
									<li><a href="javascript:void(0);">Weekly</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="table-responsive attendance_table mt-4">
						<table class="table mb-0 text-nowrap">
							<thead>
								<tr>
									<th class="text-center">S.No</th>
									<th class="text-start">Employee</th>
									<th class="text-center">Status</th>
									<th class="text-center">CheckIn</th>
									<th class="text-center">CheckOut</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr class="border-bottom">
									<td class="text-center"><span class="avatar avatar-sm brround">1</span></td>
									<td class="font-weight-semibold fs-14">Diane Nolan</td>
									<td class="text-center"><span class="badge bg-success-transparent">Present</span></td>
									<td class="text-center">09:30 Am</td>
									<td class="text-center">06:30 Pm</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
								<tr class="border-bottom">
									<td class="text-center"><span class="avatar avatar-sm brround">2</span></td>
									<td class="font-weight-semibold fs-14">Deirdre Russell</td>
									<td class="text-center"><span class="badge bg-success-transparent">Present</span></td>
									<td class="text-center">09:45 Am</td>
									<td class="text-center">06:30 Pm</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
								<tr class="border-bottom">
									<td class="text-center"><span class="avatar avatar-sm brround">3</span></td>
									<td class="font-weight-semibold fs-14">Joanne Hills</td>
									<td class="text-center"><span class="badge bg-danger-transparent">Absent</span></td>
									<td class="text-center">00:00:00</td>
									<td class="text-center">00:00:00</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
								<tr class="border-bottom">
									<td class="text-center"><span class="avatar avatar-sm brround">4</span></td>
									<td class="font-weight-semibold fs-14">Luke Ince</td>
									<td class="text-center"><span class="badge bg-success-transparent">Present</span></td>
									<td class="text-center">09:30 Am</td>
									<td class="text-center">05:15 Pm</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
								<tr class="border-bottom">
									<td class="text-center"><span class="avatar avatar-sm brround">5</span></td>
									<td class="font-weight-semibold fs-14">Grace Mackay</td>
									<td class="text-center"><span class="badge bg-danger-transparent">Absent</span></td>
									<td class="text-center">00:00:00</td>
									<td class="text-center">00:00:00</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
								<tr class="border-bottom">
									<td class="text-center"><span class="avatar avatar-sm brround">6</span></td>
									<td class="font-weight-semibold fs-14">Wanda Quinn</td>
									<td class="text-center"><span class="badge bg-success-transparent">Present</span></td>
									<td class="text-center">09:30 Am</td>
									<td class="text-center">06:30 Pm</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
								<tr>
									<td class="text-center"><span class="avatar avatar-sm brround">7</span></td>
									<td class="font-weight-semibold fs-14">Liam</td>
									<td class="text-center"><span class="badge bg-success-transparent">Present</span></td>
									<td class="text-center">09:30 Am</td>
									<td class="text-center">06:30 Pm</td>
									<td class="text-center">
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Contact"><i class="feather feather-phone-call text-primary"></i></a>
										<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat"><i class="feather-message-circle  text-success"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end app-content-->

<!--sidebar-right-->
<div class="sidebar sidebar-right sidebar-animate">
				<div class="card-header border-bottom pb-5">
					<h4 class="card-title">Notifications </h4>
					<div class="card-options">
						<a  href="javascript:void(0);" class="btn btn-sm btn-icon btn-light text-primary"  data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="feather feather-x"></i> </a>
					</div>
				</div>
				<div class="">
					<div class="list-group-item  align-items-center border-0">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Liam <span class="text-muted font-weight-normal">Sent Message</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>30 mins ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Paul<span class="text-muted font-weight-normal"> commented on you post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 hour ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-pink-transparent"><span class="feather feather-shopping-cart"></span></span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">James<span class="text-muted font-weight-normal"> Order Placed</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 day ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)">
								<span class="avatar-status bg-green"></span>
							</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Diane<span class="text-muted font-weight-normal"> New Message Received</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 day ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)">
								<span class="avatar-status bg-muted"></span>
							</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Vinny<span class="text-muted font-weight-normal"> shared your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>2 days ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-primary-transparent">M</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Mack<span class="text-muted font-weight-normal"> your admin lanuched</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 week ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)">
								<span class="avatar-status bg-green"></span>
							</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Vinny<span class="text-muted font-weight-normal"> shared your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>04 Jan 2021 1:56 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/8.jpg)">	</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Anna<span class="text-muted font-weight-normal"> likes your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>25 Dec 2020 11:25 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/14.jpg)">	</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Kimberly<span class="text-muted font-weight-normal"> Completed one task</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>24 Dec 2020 9:30 Pm</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)">	</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Rina<span class="text-muted font-weight-normal"> your account has Updated</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>28 Nov 2020 7:16 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-success-transparent">J</span>
							<div class="mt-1 w-65">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Julia<span class="text-muted font-weight-normal"> Prepare for Presentation</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>18 Nov 2020 11:55 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/sidebar-right-->

			<!--Clock-IN Modal -->
			<div class="modal fade"  id="clockinmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><span class="feather feather-clock  me-1"></span>Clock In</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="countdowntimer"><span id="clocktimer" class="border-0"></span></div>
							<div class="form-group">
								<label class="form-label">Note:</label>
								<textarea class="form-control" rows="3">Some text here...</textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Clock In</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Clock-IN Modal  -->

			<!--Change password Modal -->
			<div class="modal fade"  id="changepasswordnmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Change Password</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-primary">Confirm</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Change password Modal  -->
