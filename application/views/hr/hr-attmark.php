<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Mark Attendance</div>
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

		<!-- Row -->
		<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Select Date:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="feather feather-calendar"></i>
											</div>
										</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="hr-checkall">
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" id="checkAll">
										<span class="custom-control-label">Check All</span>
									</label>
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0 w-5">#Emp ID</th>
										<th class="border-bottom-0">Emp Name</th>
										<th class="border-bottom-0">Status</th>
										<th class="border-bottom-0">Clock In</th>
										<th class="border-bottom-0">Clock Out</th>
										<th class="border-bottom-0">IP Address</th>
										<th class="border-bottom-0">Working From</th>
										<th class="border-bottom-0">Attendance</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#2987</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Faith Harris</h6>
													<p class="text-muted mb-0 fs-12">Web Designer</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>09:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#4987</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Austin Bell</h6>
													<p class="text-muted mb-0 fs-12">Angular Developer</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-danger-light">Absent</span></td>
										<td>09:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.2</td>
										<td>Office</td>
										<td><span class="badge badge-danger">Not Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1">
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#6729</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Maria Bower</h6>
													<p class="text-muted mb-0 fs-12">Marketing analyst</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>09:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#2098</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Peter Hill</h6>
													<p class="text-muted mb-0 fs-12">Testor</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-warning-light">Half Day</span></td>
										<td>09:30 AM</td>
										<td>01:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-danger">Not Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1">
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#halfpresentmodal">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#1025</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Victoria Lyman</h6>
													<p class="text-muted mb-0 fs-12">General Manager</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>09:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#3262</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Adam Quinn</h6>
													<p class="text-muted mb-0 fs-12">Accountant</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>09:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#3489</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Melanie Coleman</h6>
													<p class="text-muted mb-0 fs-12">App Designer</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>09:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#3698</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Max Wilson</h6>
													<p class="text-muted mb-0 fs-12">PHP Developer</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-orange-light">Late</span></td>
										<td>10:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-danger">Not Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1">
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#5612</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Amelia Russell</h6>
													<p class="text-muted mb-0 fs-12">UX Designer</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>10:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#0245</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Justin Metcalfe</h6>
													<p class="text-muted mb-0 fs-12">Web Designer</p>
												</div>
											</div>
										</td>
										<td><span class="badge badge-success-light">Present</span></td>
										<td>10:30 AM</td>
										<td>06:30 PM</td>
										<td>225.192.45.1</td>
										<td>Office</td>
										<td><span class="badge badge-success">Marked</span></td>
										<td>
											<div class="d-flex">
												<label class="custom-control custom-checkbox-md">
													<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
													<span class="custom-control-label-md success"></span>
												</label>
												<a href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
													<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer">
						<a href="javascript:void(0);" class="btn btn-primary float-end">Save All</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>