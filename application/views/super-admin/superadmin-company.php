<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Companies</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newcompanymodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Company</a>
						<button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
						<button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
						<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
					</div>
				</div>
			</div>
		</div>
		<!--End Page header-->

		<!-- Row-->
		<!--Row-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3">
								<div class="form-group">
									<label class="form-label">Package</label>
									<select class="form-control custom-select select2" data-placeholder="Select Package">
										<option label="Select Package"></option>
										<option value="1">Free</option>
										<option value="2">Basic</option>
										<option value="3">Premium</option>
										<option value="4">Advanced</option>
										<option value="5">Enterprise</option>
									</select>
								</div>
							</div>
							<div class="col-xl-3">
								<div class="form-group">
									<label class="form-label">Package Type:</label>
									<select class="form-control custom-select select2" data-placeholder="Select Package">
										<option label="Select Package"></option>
										<option value="1">Monthly</option>
										<option value="2">Yearly</option>
									</select>
								</div>
							</div>
							<div class="col-xl-2">
								<div class="form-group mt-xl-5">
									<a href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
								</div>
							</div>
							<div class="col-xl-2">
								<div class="form-group mt-xl-5">
									<a href="javascript:void(0);" class="btn btn-danger btn-block">Reset</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive company-table">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="company-list">
								<thead>
									<tr>
										<th class="border-bottom-0 w-5">#NO</th>
										<th class="border-bottom-0">Company Name</th>
										<th class="border-bottom-0">Email</th>
										<th class="border-bottom-0">Package</th>
										<th class="border-bottom-0">Register Date</th>
										<th class="border-bottom-0">Status</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#01</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img1.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">Abcd Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>abcd@gmail.com</td>
										<td>
											<span class="fs-13">Basic (Monthly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>12-01-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#02</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img2.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">Croport Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>corport@gmail.com</td>
										<td>
											<span class="fs-13">Premium (Yearly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>5-02-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#03</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img3.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">kolit Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>kolit@gmail.com</td>
										<td>
											<span class="fs-13">Advanced (Monthly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>21-12-2020</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#04</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img4.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">Movck Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>movck@gmail.com</td>
										<td>
											<span class="fs-13">Enterprise (Yearly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>21-09-2020</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#05</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img5.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">Loki Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>loki@gmail.com</td>
										<td>
											<span class="fs-13">Basic (Monthly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>25-07-2020</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#06</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img6.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">frecho Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>frecho@gmail.com</td>
										<td>
											<span class="fs-13">Premium (Yearly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>22-06-2020</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#07</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img7.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">Mooke Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>mooke@gmail.com</td>
										<td>
											<span class="fs-13">Advanced (Monthly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>22-06-2020</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#08</td>
										<td>
											<a href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
												<span class="avatar avatar-lg bg-transparent brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/files/company/img8.png)"></span>
												<div class="mt-0 mt-sm-4 d-block">
													<h6 class="mb-0 fs-16">Gomalik Pvt Ltd</h6>
												</div>
											</a>
										</td>
										<td>gomalik@gmail.com</td>
										<td>
											<span class="fs-13">Enterprise (Yearly)</span>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepackgemodal">
												<span class="badge badge-primary fs-10 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Change">Change</span>
											</a>
										</td>
										<td>15-04-2020</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1 sidebarmodal-collpase" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
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
		</div>
		<!-- End Row-->

	</div>
</div><!-- end app-content-->