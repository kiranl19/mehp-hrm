<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Client List</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addclientmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Client</a>
						<a href="javascript:void(0);" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
						<a href="javascript:void(0);" class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
						<a href="javascript:void(0);" class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
					</div>
				</div>
			</div>
		</div>
		<!--End Page header-->

		<!-- Row -->
		<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header  border-0">
						<h4 class="card-title">Client Summary</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-xl-7 col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">From:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-calendar"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">To:</label>
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
							<div class="col-xl-3 col-md-12">
								<div class="form-group">
									<label class="form-label">Select Status:</label>
									<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Status">
										<option label="Select Status"></option>
										<option value="1">Active</option>
										<option value="2">InActive</option>
									</select>
								</div>
							</div>
							<div class="col-xl-2 col-md-12">
								<div class="form-group mt-5">
									<a href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="client-list">
								<thead>
									<tr>
										<th class="border-bottom-0">#ID</th>
										<th class="border-bottom-0">Name</th>
										<th class="border-bottom-0">Email</th>
										<th class="border-bottom-0">Projects</th>
										<th class="border-bottom-0">Status</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#SPT-001</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Julia Walker</h6>
												</div>
											</a>
										</td>
										<td>julia@gmail.com</td>
										<td>2</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-002</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Diane Short</h6>
												</div>
											</a>
										</td>
										<td>daine@gmail.com</td>
										<td>1</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-003</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Pippa Welch</h6>
												</div>
											</a>
										</td>
										<td>pippa@gmail.com</td>
										<td>0</td>
										<td><span class="badge badge-danger-light">InActive</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-004</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Gabrielle Fisher</h6>
												</div>
											</a>
										</td>
										<td>gabrielle@gmail.com</td>
										<td>5</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-005</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Ryan Terry</h6>
												</div>
											</a>
										</td>
										<td>ryan@gmail.com</td>
										<td>3</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-006</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">James Wilson</h6>
												</div>
											</a>
										</td>
										<td>james@gmail.com</td>
										<td>2</td>
										<td><span class="badge badge-danger-light">InActive</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-007</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/6.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Lisa Vance</h6>
												</div>
											</a>
										</td>
										<td>lisa@gmail.com</td>
										<td>6</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#SPT-008</td>
										<td>
											<a href="client-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Sam Gray</h6>
												</div>
											</a>
										</td>
										<td>samgray@gmail.com</td>
										<td>6</td>
										<td><span class="badge badge-danger-light">InActive</span></td>
										<td>
											<div class="d-flex">
												<a href="client-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
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

	</div><!-- end app-content-->
</div>