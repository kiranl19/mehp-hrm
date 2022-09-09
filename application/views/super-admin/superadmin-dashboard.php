<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Super Admin<span class="font-weight-normal text-muted ms-2">Dashboard</span></div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
						<button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
						<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
					</div>
				</div>
			</div>
		</div>
		<!--End Page header-->

		<!--Row-->
		<div class="row">
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-8">
								<div class="mt-0 text-start"> <span class="font-weight-semibold">Total Companies</span>
									<h3 class="mb-0 mt-1 text-success mb-2">6,578</h3>
								</div>
							</div>
							<div class="col-4">
								<div class="icon1 bg-success my-auto  float-end"> <i class="las la-city"></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-8">
								<div class="mt-0 text-start"> <span class="font-weight-semibold">Total Income</span>
									<h3 class="mb-0 mt-1 text-secondary mb-2">$82,7853</h3>
								</div>
							</div>
							<div class="col-4">
								<div class="icon1 bg-secondary my-auto  float-end"> <i class="las la-hand-holding-usd"></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-8">
								<div class="mt-0 text-start"> <span class="font-weight-semibold">Monthly Active Companies</span>
									<h3 class="mb-0 mt-1 text-primary mb-2">124</h3>
								</div>
							</div>
							<div class="col-4">
								<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-building"></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-8">
								<div class="mt-0 text-start"> <span class="font-weight-semibold">Total Packages</span>
									<h3 class="mb-0 mt-1 text-danger mb-2">7</h3>
								</div>
							</div>
							<div class="col-4">
								<div class="icon1 bg-danger my-auto  float-end"> <i class="las la-cubes"></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

		<!--Row-->
		<div class="row">
			<div class="col-xxl-9 col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header border-0 responsive-header">
						<h4 class="card-title">Earnings Overview</h4>
						<div class="card-options">
							<div class="btn-list">
								<a href="javascript:void(0);" class="btn  btn-outline-light text-dark float-start d-flex  my-1"><span class="dot-label bg-light4 me-2 my-auto"></span>Income</a>
								<a href="javascript:void(0);" class="btn  btn-outline-light text-dark float-start d-flex  my-1"><span class="dot-label bg-primary me-2 my-auto"></span>Expense</a>
								<a href="javascript:void(0);" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">Yearly<i class="feather feather-chevron-down"></i> </a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a href="javascript:void(0);">Yearly</a></li>
									<li><a href="javascript:void(0);">Monthly</a></li>
									<li><a href="javascript:void(0);">Weekly</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body">
						<canvas id="chartline1"></canvas>
					</div>
				</div>
			</div>
			<div class="col-xxl-3 col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header border-bottom-0">
						<h4 class="card-title">Recent Subscription</h4>
					</div>
					<div class="card-body">
						<div class="mb-5">
							<div class="d-flex">
								<span class="avatar avatar-lg bradius bg-light me-4" style="background-image: url(../assets/images/files/company/img1.png)"></span>
								<div class="mt-1">
									<a href="javascript:void(0);" class="mb-1 fs-16 h6">Abcd Pvt Ltd</a>
									<span class="clearfix"></span>
									<span class="fs-13 text-muted">2 Packages</span>
								</div>
								<div class="ms-auto mt-2">
									<a href="javascript:void(0);" class="btn btn-outline-light">View More</a>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="d-flex">
								<span class="avatar avatar-lg bradius bg-light me-4" style="background-image: url(../assets/images/files/company/img2.png)"></span>
								<div class="mt-2">
									<a href="javascript:void(0);" class="mb-1 fs-16 h6">Croport Pvt Ltd</a>
									<span class="clearfix"></span>
									<span class="fs-13 text-muted">1 Package</span>
								</div>
								<div class="ms-auto mt-2">
									<a href="javascript:void(0);" class="btn btn-outline-light">View More</a>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="d-flex">
								<span class="avatar avatar-lg bradius bg-light me-4" style="background-image: url(../assets/images/files/company/img3.png)"></span>
								<div class="mt-2">
									<a href="javascript:void(0);" class="mb-1 fs-16 h6">frecho Pvt Ltd</a>
									<span class="clearfix"></span>
									<span class="fs-13 text-muted">2 Packages</span>
								</div>
								<div class="ms-auto mt-2">
									<a href="javascript:void(0);" class="btn btn-outline-light">View More</a>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="d-flex">
								<span class="avatar avatar-lg bradius bg-light me-4" style="background-image: url(../assets/images/files/company/img4.png)"></span>
								<div class="mt-2">
									<a href="javascript:void(0);" class="mb-1 fs-16 h6">kolit Pvt Ltd</a>
									<span class="clearfix"></span>
									<span class="fs-13 text-muted">1 Package</span>
								</div>
								<div class="ms-auto mt-2">
									<a href="javascript:void(0);" class="btn btn-outline-light">View More</a>
								</div>
							</div>
						</div>
						<div class="mb-0">
							<div class="d-flex">
								<span class="avatar avatar-lg bradius bg-light me-4" style="background-image: url(../assets/images/files/company/img5.png)"></span>
								<div class="mt-2">
									<a href="javascript:void(0);" class="mb-1 fs-16 h6">Movck Pvt Ltd</a>
									<span class="clearfix"></span>
									<span class="fs-13 text-muted">2 Package</span>
								</div>
								<div class="ms-auto mt-2">
									<a href="javascript:void(0);" class="btn btn-outline-light">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

		<!-- Row-->
		<div class="row">
			<div class="col-xl-4 col-md-12">
				<div class="card">
					<div class="card-header border-bottom-0">
						<h4 class="card-title">Recent Activity</h4>
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
					<div class="card-body">
						<div class="mb-5">
							<div class="list-group-item d-flex p-0  align-items-center border-0">
								<div class="d-flex">
									<span class="avatar avatar-lg bradius me-3" style="background-image: url(../assets/images/users/4.jpg)"></span>
									<div class="mt-1">
										<h6 class="mb-1 font-weight-semibold fs-16">Faith Harrits
											<span class="font-weight-normal text-muted">Completed Project</span> Ui Development
										</h6>
										<span class="clearfix"></span>
										<span class="fs-14 text-muted">Just Now</span>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="list-group-item d-flex p-0  align-items-center border-0">
								<div class="d-flex">
									<span class="avatar avatar-lg bradius me-3" style="background-image: url(../assets/images/users/12.jpg)"></span>
									<div class="mt-1">
										<h6 class="mb-1 font-weight-semibold fs-16">James Paige
											<span class="font-weight-normal text-muted">Update</span> new Version <span class="font-weight-normal text-muted">angular 10.4....</span>
										</h6>
										<span class="clearfix"></span>
										<span class="fs-14 text-muted">10 Mins ago</span>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="list-group-item d-flex p-0  align-items-center border-0">
								<div class="d-flex">
									<span class="avatar avatar-lg bradius me-3 bg-primary-transparent">L</span>
									<div class="mt-1">
										<h6 class="mb-1 font-weight-semibold fs-16">Liam Miller
											<span class="font-weight-normal text-muted">Attach design file New Update....</span>
										</h6>
										<span class="clearfix"></span>
										<span class="fs-14 text-muted"> 1 Hour Ago</span>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5">
							<div class="list-group-item d-flex p-0  align-items-center border-0">
								<div class="d-flex">
									<span class="avatar avatar-lg bradius me-3" style="background-image: url(../assets/images/users/13.jpg)"></span>
									<div class="mt-1">
										<h6 class="mb-1 font-weight-semibold fs-16">James Paige
											<span class="font-weight-normal text-muted">Update</span> new Version <span class="font-weight-normal text-muted">angular 10.4....</span>
										</h6>
										<span class="clearfix"></span>
										<span class="fs-14 text-muted">10 Mins ago</span>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-0">
							<div class="list-group-item d-flex p-0  align-items-center border-0">
								<div class="d-flex">
									<span class="avatar avatar-lg bradius me-3" style="background-image: url(../assets/images/users/16.jpg)"></span>
									<div class="mt-1">
										<h6 class="mb-1 font-weight-semibold fs-16">Kimberly Berry
											<span class="font-weight-normal text-muted">Submitted new Design approval.....</span>
										</h6>
										<span class="clearfix"></span>
										<span class="fs-14 text-muted">3 Hours Ago</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-md-12">
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
										<th class="wd-15p border-bottom-0">Clients</th>
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
													<small class="text-muted fs-11">05 Jan 2021</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">Abcd Pvt Ltd</h6>
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
													<small class="text-muted fs-11">03 Jan 2021</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">Croport Pvt Ltd</h6>
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
									<tr class="border-bottom">
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md bradius fs-20 bg-warning-transparent text-warning">
													<span class="feather feather-chevron-left"></span>
												</span>
												<div class="ms-3 d-block mt-0 mt-sm-1">
													<h6 class="mb-0 fs-14 font-weight-semibold">#956298</h6>
													<div class="clearfix"></div>
													<small class="text-muted fs-11">26 Jan 2021</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">frecho Pvt Ltd</h6>
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
													<small class="text-muted fs-11">29 Jan 2021</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">kolit Pvt Ltd</h6>
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
													<small class="text-muted fs-11">28 Feb 2021</small>
												</div>
											</div>
										</td>
										<td class="text-start">
											<h6 class="mb-0 fs-14 font-weight-semibold">Movck Pvt Ltd</h6>
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

		<!-- Row -->
		<div class="row">
			<div class="col-xl-7 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header  border-0">
						<h4 class="card-title">Recent Registered Companies Summary</h4>
						<div class="card-options me-1">
							<a href="javascript:void(0);" class="btn ripple btn-outline-light"> See All</a>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="table-responsive mb-0 table-regcompany">
							<table class="table table-vcenter text-nowrap mb-0" id="admin-regtable">
								<thead>
									<tr>
										<th class="border-bottom-0">#No</th>
										<th class="border-bottom-0">Name</th>
										<th class="border-bottom-0">Email</th>
										<th class="border-bottom-0">Status</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#001</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img1.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Abcd Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">12-01-2021</p>
												</div>
											</a>
										</td>
										<td>julia@gmail.com</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
													<i class="feather feather-edit-2  text-success"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#002</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img2.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Croport Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">5-02-2021</p>
												</div>
											</a>
										</td>
										<td>daine@gmail.com</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
													<i class="feather feather-edit-2  text-success"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#S003</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img4.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">kolit Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">21-01-2021</p>
												</div>
											</a>
										</td>
										<td>gabrielle@gmail.com</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
													<i class="feather feather-edit-2  text-success"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#004</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img5.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Movck Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">16-11-2020</p>
												</div>
											</a>
										</td>
										<td>ryan@gmail.com</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
													<i class="feather feather-edit-2  text-success"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#005</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img6.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Loki Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">25-06-2021</p>
												</div>
											</a>
										</td>
										<td>lisa@gmail.com</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
													<i class="feather feather-edit-2  text-success"></i>
												</a>
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
			<div class="col-xl-5 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header  border-0">
						<h4 class="card-title">Recent Inactive Companies</h4>
						<div class="card-options me-1">
							<a href="javascript:void(0);" class="btn ripple btn-outline-light"> View All</a>
						</div>
					</div>
					<div class="card-body p-0 pt-2">
						<div class="table-responsive mb-0 table-regcompany">
							<table class="table table-vcenter text-nowrap  border-top mb-0" id="admin-inregtable">
								<thead>
									<tr>
										<th class="border-bottom-0">Name</th>
										<th class="border-bottom-0">Email</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img6.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Kloki Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">21-08-2021</p>
												</div>
											</a>
										</td>
										<td>
											<a href="javascript:void(0);" class="fs-13">james@gmail.com</a>
											<p class="mb-0"><span class="badge badge-md badge-danger-light fs-10">Inactive</span></p>
										</td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img7.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">frecho Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">16-02-2021</p>
												</div>
											</a>
										</td>
										<td>
											<a href="javascript:void(0);" class="fs-13">pippa@gmail.com</a>
											<p class="mb-0"><span class="badge badge-md badge-danger-light fs-10">Inactive</span></p>
										</td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img8.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Mooke Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">21-05-2021</p>
												</div>
											</a>
										</td>
										<td>
											<a href="javascript:void(0);" class="fs-13">samgray@gmail.com</a>
											<p class="mb-0"><span class="badge badge-md badge-danger-light fs-10">Inactive</span></p>
										</td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img2.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Foklali Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">21-08-2020</p>
												</div>
											</a>
										</td>
										<td>
											<a href="javascript:void(0);" class="fs-13">samgray@gmail.com</a>
											<p class="mb-0"><span class="badge badge-md badge-danger-light fs-10">Inactive</span></p>
										</td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(../assets/images/files/company/img5.png)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Gomalik Pvt Ltd</h6>
													<p class="text-muted mb-0 fs-12">21-05-2020</p>
												</div>
											</a>
										</td>
										<td>
											<a href="javascript:void(0);" class="fs-13">samgray@gmail.com</a>
											<p class="mb-0"><span class="badge badge-md badge-danger-light fs-10">Inactive</span></p>
										</td>
										<td>
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
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
		</div>
		<!-- End Row-->

	</div>
</div><!-- end app-content-->