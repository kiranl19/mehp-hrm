<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Super Admins</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newadminmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Admin</a>
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
						<div class="table-responsive superadmins-table">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="superadmin-list">
								<thead>
									<tr>
										<th class="border-bottom-0 w-5">#NO</th>
										<th class="border-bottom-0">Name</th>
										<th class="border-bottom-0">Email</th>
										<th class="border-bottom-0">Register Date</th>
										<th class="border-bottom-0">Status</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#01</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Super Admin</h6>
												</div>
											</a>
										</td>
										<td>superadmin@gmail.com</td>
										<td>12-01-2019</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#02</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Admin</h6>
												</div>
											</a>
										</td>
										<td>admin@gmail.com</td>
										<td>15-06-2020</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#03</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Admin2</h6>
												</div>
											</a>
										</td>
										<td>admin123@gmail.com</td>
										<td>25-08-2020</td>
										<td><span class="badge badge-danger-light">InActive</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#04</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Admin3</h6>
												</div>
											</a>
										</td>
										<td>admin456@gmail.com</td>
										<td>16-10-2020</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#05</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Admin4</h6>
												</div>
											</a>
										</td>
										<td>admin156@gmail.com</td>
										<td>21-12-2020</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#06</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Admin5</h6>
												</div>
											</a>
										</td>
										<td>admin957@gmail.com</td>
										<td>11-01-2021</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#07</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Admin6</h6>
												</div>
											</a>
										</td>
										<td>admin209@gmail.com</td>
										<td>18-02-2021</td>
										<td><span class="badge badge-success-light">Active</span></td>
										<td class="text-center">
											<div class="d-flex">
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
													<i class="feather feather-eye text-primary"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
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