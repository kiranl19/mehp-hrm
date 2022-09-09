<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Employee Profile</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="hr-addemployee.html" class="btn btn-primary me-3">Add New Employee</a>
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
			<div class="col-xl-3 col-md-12 col-lg-12">
				<div class="card box-widget widget-user">
					<div class="card-body text-center">
						<div class="widget-user-image mx-auto text-center">
							<img class="avatar avatar-xxl brround rounded-circle" alt="img" src="<?php echo base_url() ?>assets/images/users/1.jpg">
						</div>
						<div class="pro-user mt-3">
							<h5 class="pro-user-username text-dark mb-1 fs-16">Faith Harris</h5>
							<h6 class="pro-user-desc text-muted fs-12">Web Designer</h6>
						</div>
						<div class="rating-stars stars-example-fontawesome block" id="rating-1" data-stars="2"></div>
					</div>
					<div class="card-footer p-0">
						<div class="row">
							<div class="col-4 text-center py-5 border-end">
								<h5 class="fs-12 font-weight-semibold mb-3">January</h5>
								<h5 class="mb-2">
									<span class="fs-18 text-success">22</span>
									<span class="my-auto fs-9 font-weight-normal  ms-1 me-1">/</span>
									<span class="fs-18 font-weight-semibold text-dark">31</span>
								</h5>
								<h5 class="fs-12 mb-0">Attendance</h5>
							</div>
							<div class="col-4  py-5 text-center border-end">
								<h5 class="fs-12 font-weight-semibold mb-3">Year-2021</h5>
								<h5 class="mb-2">
									<span class="fs-18 text-orange">0</span>
									<span class="my-auto fs-9 font-weight-normal  ms-1 me-1">/</span>
									<span class="fs-18 font-weight-semibold text-dark">41</span>
								</h5>
								<h5 class="fs-12 mb-0">Leaves</h5>
							</div>
							<div class="col-4 text-center py-5">
								<h5 class="fs-12 font-weight-semibold mb-3">Year-2021</h5>
								<h5 class="mb-2">
									<span class="fs-18 text-primary">0</span>
								</h5>
								<h5 class="fs-12 mb-0">Awards</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header  border-0">
						<div class="card-title">Statistics-2021</div>
					</div>
					<div class="card-body">
						<div class="row mb-7">
							<div class="col-4 text-center">
								<div class="chart-circle chart-circle-sm" data-value="0.89" data-thickness="5" data-color="#3366ff">
									<div class="chart-circle-value text-primary">89</div>
								</div>
								<h6 class="fs-14 font-weight-semibold mt-3">Attendance</h6>
							</div>
							<div class="col-4 text-center">
								<div class="chart-circle chart-circle-sm" data-value="0.23" data-thickness="5" data-color="#fe7f00">
									<div class="chart-circle-value text-secondary">23</div>
								</div>
								<h6 class="fs-14 font-weight-semibold mt-3">Projects</h6>
							</div>
							<div class="col-4 text-center">
								<div class="chart-circle chart-circle-sm" data-value="0.67" data-thickness="5" data-color="#0dcd94">
									<div class="chart-circle-value text-success">67%</div>
								</div>
								<h6 class="fs-14 font-weight-semibold mt-3">Performance</h6>
							</div>
						</div>
						<div class="d-flex align-items-end justify-content-between mg-b-5">
							<h6 class="">This Week</h6>
							<h6 class="font-weight-bold mb-1">01</h6>
						</div>
						<div class="progress progress-sm mb-5">
							<div class="progress-bar bg-danger w-10"></div>
						</div>
						<div class="d-flex align-items-end justify-content-between mg-b-5">
							<h6 class="">This Month</h6>
							<h6 class="font-weight-bold mb-1">05</h6>
						</div>
						<div class="progress progress-sm mb-5">
							<div class="progress-bar bg-info w-30"></div>
						</div>
						<div class="d-flex align-items-end justify-content-between mg-b-5">
							<h6 class="">This Year</h6>
							<h6 class="font-weight-bold mb-1">22</h6>
						</div>
						<div class="progress progress-sm mb-5">
							<div class="progress-bar bg-warning w-50"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-md-12 col-lg-12">
				<div class="tab-menu-heading hremp-tabs p-0 ">
					<div class="tabs-menu1">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">Personal Details</a></li>
							<li><a href="#tab6" data-bs-toggle="tab">Company Details</a></li>
							<li><a href="#tab7" data-bs-toggle="tab">Bank Details</a></li>
							<li><a href="#tab8" data-bs-toggle="tab">Upload Documents</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
					<div class="tab-content">
						<div class="tab-pane active" id="tab5">
							<div class="card-body">
								<h4 class="mb-4 font-weight-bold">Basic</h4>
								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">User Name</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-6">
													<input type="text" class="form-control mb-md-0 mb-5" placeholder="First Name" value="Faith">
													<span class="text-muted"></span>
												</div>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Last Name" value="Harris">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Father Name</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Name" value="kyari">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Contact Number</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Phone Number" value="9685321475">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Emergency Contact Number 01</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Contact Number01" value="8695324712">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Emergency Contact Number 02</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Contact Number02" value="9966583155">
										</div>
									</div>
								</div>
								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Date Of Birth</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYY" value="10-01-1994">
										</div>
									</div>
								</div>
								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label">Gender</label>
										</div>
										<div class="col-md-9">
											<div class="custom-controls-stacked d-md-flex">
												<label class="custom-control custom-radio me-4">
													<input type="radio" class="custom-control-input" name="example-radios4" value="option1">
													<span class="custom-control-label">Male</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios4" value="option2" checked>
													<span class="custom-control-label">Female</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Marital Status</label>
										</div>
										<div class="col-md-9">
											<select name="projects" class="form-control custom-select select2">
												<option value="0">Select</option>
												<option value="1" selected>Single</option>
												<option value="2">Married</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Blood Group</label>
										</div>
										<div class="col-md-9">
											<select name="projects" class="form-control custom-select select2">
												<option value="0">A+</option>
												<option value="1" selected>B+</option>
												<option value="2">O+</option>
												<option value="3">AB+</option>
												<option value="4">A-</option>
												<option value="5">B-</option>
												<option value="6">O-</option>
												<option value="7">AB-</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Email</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="email" value="faith@gmail.com">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Present Address</label>
										</div>
										<div class="col-md-9">
											<textarea rows="3" class="form-control" placeholder="Address1">4102 Masonic Hill Road Little Rock Arkansas-727212</textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Permanent Address</label>
										</div>
										<div class="col-md-9">
											<textarea rows="3" class="form-control" placeholder="Address2">4102 Masonic Hill Road Little Rock Arkansas-727212</textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">Upload Photo</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label"></label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
								<h4 class="mb-5 mt-7 font-weight-bold">Account Login</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Employee Email</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="employee email" value="faith@gmail.com">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Password</label>
										</div>
										<div class="col-md-9">
											<input type="password" class="form-control" placeholder="password" value="12345">
										</div>
									</div>
								</div>
								<div class="form-group mt-7">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label">Email Notification:</label>
										</div>
										<div class="col-md-9">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">On/Off</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab6">
							<div class="card-body">
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Employee ID</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="#ID" value="#2987">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Department</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Department" value="Designing Department">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Designation</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Designation" value="Web Designer">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Date Of Joining</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYYY" value="05-05-2017">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Resignation Date</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYYY">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Termination Date</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYYY">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Credit Leaves
												<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Unused leaves for the Employee">?</span>
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="0">
										</div>
									</div>
								</div>
								<h4 class="mb-5 mt-7 font-weight-bold">Salary</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Type</label>
										</div>
										<div class="col-md-9">
											<select class="form-control custom-select select2">
												<option value="0" selected>Full-Time</option>
												<option value="1">Part-Time</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Salary</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="$Salary" value="$28000">
										</div>
									</div>
								</div>
								<div class="form-group mt-7">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label">Status:</label>
										</div>
										<div class="col-md-9">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Active/Inactive</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab7">
							<div class="card-body">
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Account Holder</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Name" value="Faith Harris">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Account Number</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Number" value="36985214704">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Bank Name</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Name" value="ABCD Bank">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Branch Location</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Location" value="Little Rock Arkansas">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Bank Code (IFSC)
												<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Identify Number in your Country">?</span>
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Code" value="ABC0002189">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Tax Payer ID (PAN)
												<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Taxpayer Identification Number Used in your Country">?</span>
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="ID No">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab8">
							<div class="card-body">
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">Resume</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label"></label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">ID Proof</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label"></label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">Offer Letter</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label">Attachment:</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">Joining Letter</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label"></label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">Agreement Letter</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label">Attachment:</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<div class="form-label mb-0 mt-2">Experience Letter</div>
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<label for="form-label" class="form-label">Attachment:</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
							<a href="javascript:void(0);" class="btn btn-primary">Updated</a>
							<a href="javascript:void(0);" class="btn btn-danger">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>