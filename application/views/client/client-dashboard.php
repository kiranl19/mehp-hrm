<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Client<span class="font-weight-normal text-muted ms-2">Dashboard</span></div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newprojectmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Create New Project</button>
						<button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
						<button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
						<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
					</div>
				</div>
			</div>
		</div>
		<!--End Page header-->

		<!-- Row -->
		<div class="row">
			<div class="col-xxl-9 col-xl-12  col-lg-12 col-md-12">
				<div class="row">
					<div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 ">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-9">
										<div class="mt-0 text-start">
											<span class="fs-16 font-weight-semibold">Total Projects</span>
											<h3 class="mb-0 mt-1 text-primary fs-25">12,548</h3>
										</div>
									</div>
									<div class="col-3">
										<div class="icon1 bg-primary my-auto  float-end"> <i class="feather feather-briefcase"></i> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-9">
										<div class="mt-0 text-start">
											<span class="fs-16 font-weight-semibold">On Going</span>
											<h3 class="mb-0 mt-1 text-secondary fs-25">94</h3>
										</div>
									</div>
									<div class="col-3">
										<div class="icon1 bg-secondary my-auto  float-end"> <i class="feather feather-info"></i> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-9">
										<div class="mt-0 text-start">
											<span class="fs-16 font-weight-semibold">Completed Projects</span>
											<h3 class="mb-0 mt-1 text-success fs-25">11,134</h3>
										</div>
									</div>
									<div class="col-3">
										<div class="icon1 bg-success my-auto  float-end"> <i class="feather feather-check"></i> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header  border-0 responsive-header">
								<h4 class="card-title">Statistics</h4>
								<div class="card-options">
									<div class="btn-list">
										<a href="javascript:void(0);" class="btn ripple btn-outline-light text-dark float-start me-4 d-flex   my-1"><span class="dot-label bg-primary me-2 my-auto"></span>Expenses</a>
										<a href="javascript:void(0);" class="btn ripple btn-outline-light text-dark float-start me-4 d-flex   my-1"><span class="dot-label bg-light4 me-2 my-auto"></span>Projects</a>
										<a href="javascript:void(0);" class="btn ripple btn-outline-light   my-1" data-bs-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
										<ul class="dropdown-menu dropdown-menu-end" role="menu">
											<li><a href="javascript:void(0);">Yearly</a></li>
											<li><a href="javascript:void(0);">Monthly</a></li>
											<li><a href="javascript:void(0);">Weekly</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-wrapper">
									<canvas id="chartbar-statistics" class=""></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header  border-0">
								<h4 class="card-title">Spend Analysis </h4>
							</div>
							<div class="card-body">
								<div id="analysis" class="mx-auto apex-dount"></div>
								<div class="row">
									<div class="col-10 mx-auto">
										<table class="table mb-0">
											<tbody>
												<tr>
													<td class="p-2 d-flex"><span class="dot-label bg-primary me-2 mt-1"></span><span class="font-weight-normal"> Design</span></td>
													<td class="p-2"><span class="me-4 fs-16">:</span><span class="ms-auto font-weight-semibold fs-16">$953</span></td>
												</tr>
												<tr>
													<td class="p-2 d-flex"><span class="dot-label bg-secondary me-2 mt-1"></span> <span class="font-weight-normal">Development</span></td>
													<td class="p-2"><span class="me-4 fs-16">:</span><span class="ms-auto font-weight-semibold fs-16">$12,426</span></td>
												</tr>
												<tr>
													<td class="p-2 d-flex"><span class="dot-label bg-success me-2 mt-1 "></span> <span class="font-weight-normal">Service</span></td>
													<td class="p-2"><span class="me-4 fs-16">:</span><span class="ms-auto font-weight-semibold fs-16">$25,453</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12">
				<div class="row">
					<div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<div class="">
										<div class="mt-0 text-start">
											<span class="fs-16 font-weight-semibold">Total Expenses</span>
											<h3 class="mb-1 mt-1 fs-35">$21,5489</h3>
											<div class="">
												<span class="fs-13 mt-2 text-danger">
													<i class="feather feather-arrow-up-right me-1 p-1 brround bg-danger-transparent text-danger"></i>+24%
												</span><span class="ms-2 text-muted fs-13">then Last Year</span>
											</div>
										</div>
									</div>
									<div class="ms-auto">
										<div class="dropdown"> <a href="javascript:void(0);" class="btn ripple btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
											<ul class="dropdown-menu dropdown-menu-end" role="menu">
												<li><a href="javascript:void(0);">Yearly</a></li>
												<li><a href="javascript:void(0);">Monthly</a></li>
												<li><a href="javascript:void(0);">Weekly</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="chart-wrapper mt-5">
									<canvas id="expenses"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12">
						<div class="card">
							<div id="carousel-indicator" class="carousel slide dashboard-carousel" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="card-body">
											<h4 class="card-title mb-4">Completed Project</h4>
											<div class="d-flex">
												<div class="task-img bg-primary-transparent me-4">
													<img src="../assets/images/png/task3.png" alt="img" class="">
												</div>
												<div class="mt-2 carousel-body">
													<h6 class="mb-1 font-weight-semibold fs-16 text-over">Angular App Development</h6>
													<p class="fs-14 text-muted">Application Development</p>
												</div>
											</div>
											<h6 class="fs-16 font-weight-normal mt-4 text-muted"><a href="javascript:void(0);" class="text-primary">Congratulations!</a> Your Angular Project Completed Chcek Your Demo</h6>
											<a href="javascript:void(0);" class="btn btn-light btn-block text-primary mt-5">Preview</a>
										</div>
									</div>
									<div class="carousel-item">
										<div class="card-body">
											<h4 class="card-title mb-4">Design Updated</h4>
											<div class="d-flex">
												<div class="task-img bg-primary-transparent me-4">
													<img src="../assets/images/png/task1.png" alt="img" class="">
												</div>
												<div class="mt-2 carousel-body">
													<h6 class="mb-1 font-weight-semibold fs-16 text-over">Adobe XD Project</h6>
													<p class="fs-14 text-muted">Mobile App Ui Designing</p>
												</div>
											</div>
											<h6 class="fs-16 font-weight-normal mt-4 text-muted"><a href="javascript:void(0);" class="text-primary">Congratulations!</a> Your App Design uploaded Chcek Your Demo</h6>
											<a href="javascript:void(0);" class="btn btn-light btn-block text-primary mt-5">Preview</a>
										</div>
									</div>
									<div class="carousel-item">
										<div class="card-body">
											<h4 class="card-title mb-4">Completed Project</h4>
											<div class="d-flex">
												<div class="task-img bg-primary-transparent me-4">
													<img src="../assets/images/png/task2.png" alt="img" class="">
												</div>
												<div class="mt-2 carousel-body">
													<h6 class="mb-1 font-weight-semibold fs-16 text-over">HTML Design Project</h6>
													<p class="fs-14 text-muted">Mobile App Ui Designing</p>
												</div>
											</div>
											<h6 class="fs-16 font-weight-normal mt-4 text-muted"><a href="javascript:void(0);" class="text-primary">Congratulations!</a> Your App Design uploaded Chcek Your Demo</h6>
											<a href="javascript:void(0);" class="btn btn-light btn-block text-primary mt-5">Preview</a>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carousel-indicator" role="button" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carousel-indicator" role="button" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row -->

		<!--Row-->
		<div class="row">
			<div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
				<div class="card">
					<div class="card-header border-bottom-0">
						<h4 class="card-title">Recent Orders</h4>
						<div class="card-options pr-3">
							<div class="dropdown"> <a href="javascript:void(0);" class="btn ripple btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
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
								<li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">Projects</a></li>
								<li><a href="#tab6" data-bs-toggle="tab">Services</a></li>
								<li><a href="#tab7" data-bs-toggle="tab">Support</a></li>
							</ul>
						</div>
					</div>
					<div class="panel-body tabs-menu-body table_tabs1 p-0 border-0">
						<div class="tab-content">
							<div class="tab-pane active" id="tab5">
								<div class="table-responsive">
									<table class="table table-vcenter text-nowrap  mb-0 orders-table">
										<thead>
											<tr>
												<th class="wd-10p border-bottom-0">Order Projects</th>
												<th class="wd-15p border-bottom-0">Order Date</th>
												<th class="wd-15p border-bottom-0">Deadline</th>
												<th class="wd-20p border-bottom-0">Status</th>
												<th class="wd-15p border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<img src="../assets/images/png/task1.png" alt="img" class="">
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Adobe Xd Ui Design</h6>
															<div class="clearfix"></div>
															<small class="text-muted">Ui Designing And Prototype</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13 text-muted">12-2-2020</td>
												<td class="text-start fs-13 text-muted">15-2-2020</td>
												<td>
													<div class="chart-circle chart-circle-xs" data-value="0.67" data-thickness="3" data-color="#3366ff">
														<div class="chart-circle-value text-primary fs-12">67%</div>
													</div>
												</td>
												<td class="text-start">
													<div class="d-flex">
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
														<ul class="dropdown-menu dropdown-menu-end" role="menu">
															<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="feather feather-globe text-primary ms-1"></span>
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Website Redesign</h6>
															<div class="clearfix"></div>
															<small class="text-muted">Admin project theme Redesign</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13 text-muted">16-1-2020</td>
												<td class="text-start fs-13 text-muted">12-2-2020</td>
												<td>
													<div class="chart-circle chart-circle-xs" data-value="0.46" data-thickness="3" data-color="#ffad00">
														<div class="chart-circle-value text-secondary fs-12">46%</div>
													</div>
												</td>
												<td class="text-start">
													<div class="d-flex">
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
														<ul class="dropdown-menu dropdown-menu-end" role="menu">
															<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<img src="../assets/images/png/task2.png" alt="img" class="">
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">HTML Updated</h6>
															<div class="clearfix"></div>
															<small class="text-muted">4.2.3 New Version Updated</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13 text-muted">16-1-2020</td>
												<td class="text-start fs-13 text-muted">10-2-2020</td>
												<td>
													<div class="chart-circle chart-circle-xs" data-value="0.82" data-thickness="3" data-color="#0dcd94">
														<div class="chart-circle-value text-success fs-12">82%</div>
													</div>
												</td>
												<td class="text-start">
													<div class="d-flex">
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
														<ul class="dropdown-menu dropdown-menu-end" role="menu">
															<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="feather feather-trending-up text-primary ms-1"></span>
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Project Updated</h6>
															<div class="clearfix"></div>
															<small class="text-muted">Senior Protoyper</small>
														</div>
													</div>
												</td>
												<td class="text-start fs-13 text-muted">16-1-2021</td>
												<td class="text-start fs-13 text-muted">9-2-2021</td>
												<td>
													<div class="chart-circle chart-circle-xs" data-value="0.38" data-thickness="3" data-color="#fe7f00">
														<div class="chart-circle-value text-orange fs-12">38%</div>
													</div>
												</td>
												<td class="text-start">
													<div class="d-flex">
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="send"><i class="feather feather-send primary text-primary"></i></a>
														<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
														<ul class="dropdown-menu dropdown-menu-end" role="menu">
															<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
															<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane" id="tab6">
								<div class="table-responsive">
									<table class="table table-vcenter text-nowrap  mb-0 orders-table">
										<thead>
											<tr>
												<th class="wd-10 border-bottom-0">Order Services</th>
												<th class="wd-10 border-bottom-0">Start Date</th>
												<th class="wd-10 border-bottom-0">End Date</th>
												<th class="wd-15 border-bottom-0">Status</th>
												<th class="wd-15 border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="feather feather-globe text-primary ms-1"></span>
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Domain Register</h6>
															<div class="clearfix"></div>
															<small class="text-muted">www.beauty.com</small>
														</div>
													</div>
												</td>
												<td class="fs-13 text-muted">12-2-2020</td>
												<td class="fs-13 text-muted">15-2-2020</td>
												<td>
													<span class="badge badge-success">Paid</span>
												</td>
												<td class="">
													<a href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="fa fa-bullhorn text-pink ms-1"></span>
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Digital Marketing</h6>
															<div class="clearfix"></div>
															<small class="text-muted">Angular Project</small>
														</div>
													</div>
												</td>
												<td class=" fs-13 text-muted">16-2-2020</td>
												<td class="fs-13 text-muted">18-2-2020</td>
												<td>
													<span class="badge badge-danger">Pending</span>
												</td>
												<td class="">
													<a href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
												</td>
											</tr>
											<tr class="border-bottom">
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="feather feather-airplay text-info ms-1"></span>
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Website Maintenance</h6>
															<div class="clearfix"></div>
															<small class="text-muted">Wordpress Template</small>
														</div>
													</div>
												</td>
												<td class="fs-13 text-muted">10-2-2020</td>
												<td class="fs-13 text-muted">18-2-2020</td>
												<td>
													<span class="badge badge-success">Paid</span>
												</td>
												<td class="">
													<a href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex">
														<div class="table_img brround bg-light me-3">
															<span class="feather feather-server text-orange ms-1"></span>
														</div>
														<div class="me-3 mt-0 mt-sm-3 d-block">
															<h6 class="mb-0 fs-14 font-weight-semibold">Hosting Services</h6>
															<div class="clearfix"></div>
															<small class="text-muted">Beauty Parlour</small>
														</div>
													</div>
												</td>
												<td class="fs-13 text-muted">9-2-2021</td>
												<td class="fs-13 text-muted">15-2-2021</td>
												<td>
													<span class="badge badge-danger">Pending</span>
												</td>
												<td class="">
													<a href="javascript:void(0);" class="btn btn-outline-primary">Renewal</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane " id="tab7">
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Projects</label>
										<select name="projects" class="form-control custom-select select2">
											<option value="0">Choose Project</option>
											<option value="1">Project 01</option>
											<option value="2">Project 02</option>
											<option value="3">Project 03</option>
											<option value="4">Project 04</option>
											<option value="5">Project 05</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Priority</label>
										<select name="projects" class="form-control custom-select select2">
											<option value="0">Choose One</option>
											<option value="1">High</option>
											<option value="2">Medium</option>
											<option value="3">Low</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Note:</label>
										<textarea class="form-control" rows="3">Some text here...</textarea>
									</div>
									<a href="javascript:void(0);" class="btn btn-primary mt-4">Submit</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12">
				<div class="card overflow-hidden">
					<div class="card-header border-0">
						<h4 class="card-title">Recent Invoices</h4>
						<div class="card-options pr-3">
							<div class="dropdown">
								<a href="" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i></a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a href="javascript:void(0);"><i class="feather feather-download-cloud me-2"></i>Download</a></li>
									<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body p-0 pt-4">
						<div class="table-responsive">
							<table class="table table-vcenter text-nowrap mb-0 invoice-table">
								<thead>
									<tr>
										<th class="wd-10p border-bottom-0">Invoice ID</th>
										<th class="wd-15p border-bottom-0">Projects</th>
										<th class="wd-15p border-bottom-0">Amount</th>
										<th class="wd-20p border-bottom-0">Status</th>
										<th class="wd-15p border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr class="border-bottom">
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md bradius fs-20 bg-success-transparent text-success">
													<span class="feather feather-check"></span>
												</span>
												<div class="ms-3 d-block mt-0 mt-sm-1">
													<h6 class="mb-0 fs-14 font-weight-semibold">#864135</h6>
													<div class="clearfix"></div>
													<small class="text-muted fs-11">05 Jan 2020</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">Angular Department</h6>
										</td>
										<td class="text-start fs-13">
											<h6 class="mb-0 fs-14 font-weight-semibold">$15,426</h6>
										</td>
										<td>
											<span class="badge badge-success-light">Paid</span>
										</td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr class="border-bottom">
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md bradius fs-20 bg-orange-transparent text-orange">
													<span class="feather feather-chevron-up"></span>
												</span>
												<div class="ms-3 d-block mt-0 mt-sm-1">
													<h6 class="mb-0 fs-14 font-weight-semibold">#456820</h6>
													<div class="clearfix"></div>
													<small class="text-muted fs-11">03 Jan 2020</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">Admin Template</h6>
										</td>
										<td class="text-start fs-13">
											<h6 class="mb-0 fs-14 font-weight-semibold">$1421</h6>
										</td>
										<td>
											<span class="badge badge-orange-light">Overdue</span>
										</td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md bradius fs-20 bg-warning-transparent text-warning">
													<span class="feather feather-chevron-left"></span>
												</span>
												<div class="ms-3 d-block mt-0 mt-sm-1">
													<h6 class="mb-0 fs-14 font-weight-semibold">#956298</h6>
													<div class="clearfix"></div>
													<small class="text-muted fs-11">29 Dec 2019</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">HTML Update</h6>
										</td>
										<td class="text-start fs-13">
											<h6 class="mb-0 fs-14 font-weight-semibold">$8427</h6>
										</td>
										<td>
											<span class="badge badge-warning-light">Unpaid</span>
										</td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr class="border-bottom">
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md bradius fs-20 bg-success-transparent text-success">
													<span class="feather feather-check"></span>
												</span>
												<div class="ms-3 d-block mt-0 mt-sm-1">
													<h6 class="mb-0 fs-14 font-weight-semibold">#190675</h6>
													<div class="clearfix"></div>
													<small class="text-muted fs-11">29 Dec 2019</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">HTML Update</h6>
										</td>
										<td class="text-start fs-13">
											<h6 class="mb-0 fs-14 font-weight-semibold">$8427</h6>
										</td>
										<td>
											<span class="badge badge-success-light">Paid</span>
										</td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr class="">
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md bradius fs-20 bg-secondary-transparent text-secondary">
													<span class="feather feather-chevron-down"></span>
												</span>
												<div class="ms-3 d-block mt-0 mt-sm-1">
													<h6 class="mb-0 fs-14 font-weight-semibold">#067298</h6>
													<div class="clearfix"></div>
													<small class="text-muted fs-11">28 Dec 2019</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">Hosting Template</h6>
										</td>
										<td class="text-start fs-13">
											<h6 class="mb-0 fs-14 font-weight-semibold">$12,452</h6>
										</td>
										<td>
											<span class="badge badge-secondary-light">Draft</span>
										</td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Invoice"><i class="feather feather-file-text primary text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
												</ul>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

		<!--Row-->
		<div class="row">
			<div class="col-xxl-6 col-xl-6  col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header border-0">
						<h4 class="card-title">Project</h4>
					</div>
					<div class="card-body pt-3 p-0">
						<div class="table-responsive">
							<table class="table table-vcenter text-nowrap  mb-0 projecttable">
								<thead>
									<tr>
										<th class="border-bottom-0">Project Title </th>
										<th class="border-bottom-0">Project Status</th>
										<th class="border-bottom-0"></th>
										<th class="border-bottom-0">Priority</th>
										<th class="border-bottom-0">Work Status</th>
										<th class="border-bottom-0">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex">
												<div class="table_img brround bg-light me-3">
													<img src="../assets/images/png/task1.png" alt="img" class="">
												</div>
												<div class="me-3 mt-0 mt-sm-3 d-block">
													<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Ui Design <span class="badge badge-primary-light">Medium</span></h5>
												</div>
											</div>
										</td>
										<td>
											<div class="progress progress-sm d-block">
												<div class="progress-bar bg-orange w-25"></div>
											</div>
										</td>
										<td><span class="text-orange fs-15">27%</span></td>
										<td><span class="text-muted">Low</span></td>
										<td><span class="text-warning fs-15">On Hold <i class="fe fe-alert-circle ms-1"></i></span></td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<div class="table_img brround bg-light me-3">
													<img src="../assets/images/photos/jquery.png" alt="img" class="">
												</div>
												<div class="me-3 mt-0 mt-sm-3 d-block">
													<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Jquery Issues Fixed</h5>
												</div>
											</div>
										</td>
										<td>
											<div class="progress progress-sm d-block">
												<div class="progress-bar bg-success w-100"></div>
											</div>
										</td>
										<td><span class="text-success fs-15">97%</span></td>
										<td><span class="text-muted">High</span></td>
										<td><span class="text-success fs-15">Completed </span></td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<div class="table_img brround bg-light me-3">
													<span class="feather feather-globe text-primary ms-1"></span>
												</div>
												<div class="me-3 mt-0 mt-sm-3 d-block">
													<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Website Redesign</h5>
												</div>
											</div>
										</td>
										<td>
											<div class="progress progress-sm d-block">
												<div class="progress-bar bg-warning w-75"></div>
											</div>
										</td>
										<td><span class="text-warning fs-15">75%</span></td>
										<td><span class="text-muted">Low</span></td>
										<td><span class="text-primary fs-15">On Progress </span></td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<div class="table_img brround bg-light me-3">
													<img src="../assets/images/png/task3.png" alt="img" class="">
												</div>
												<div class="me-3 mt-0 mt-sm-3 d-block">
													<h5 class="mb-0 fs-16 mt-1 font-weight-semibold">Angular Development <span class="badge badge-orange-light ms-1">Urgent</span></h5>
												</div>
											</div>
										</td>
										<td>
											<div class="progress progress-sm d-block">
												<div class="progress-bar bg-success w-95"></div>
											</div>
										</td>
										<td><span class="text-success fs-15">95%</span></td>
										<td><span class="text-muted">Medium</span></td>
										<td><span class="text-success fs-15">Completed</span></td>
										<td class="text-start">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-6 col-xl-6 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header  border-0">
						<h4 class="card-title">Calendar</h4>
					</div>
					<div class="card-body pt-0">
						<div class="custom-calendar"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div>
</div><!-- end app-content-->