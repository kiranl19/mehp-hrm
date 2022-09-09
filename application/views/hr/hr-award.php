<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Awards</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addawardmodal">Add New Award</a>
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
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-award">
								<thead>
									<tr>
										<th class="border-bottom-0 w-5">No</th>
										<th class="border-bottom-0 w-5">#Emp ID</th>
										<th class="border-bottom-0">Emp Name</th>
										<th class="border-bottom-0">Designation</th>
										<th class="border-bottom-0 text-center">Attendance</th>
										<th class="border-bottom-0">Award Type</th>
										<th class="border-bottom-0">Gift Type</th>
										<th class="border-bottom-0">Date</th>
										<th class="border-bottom-0">Award Information</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>#2987</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Faith Harris</h6>
													<p class="text-muted mb-0 fs-12">faith@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Web Designer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.85" data-thickness="3" data-color="#0dcd94">
												<div class="chart-circle-value text-success fs-12">85%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Employee of the Month Award</td>
										<td><span class="badge badge-primary-light">Cash</span></td>
										<td>01-02-2021</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>02</td>
										<td>#4987</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Austin Bell</h6>
													<p class="text-muted mb-0 fs-12">austin@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Angular Developer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.58" data-thickness="3" data-color="#f34932">
												<div class="chart-circle-value text-orange fs-12">58%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Best Team Player Award</td>
										<td><span class="badge badge-orange-light">Trophy</span></td>
										<td>15-01-2021</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>03</td>
										<td>#6729</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Maria Bower</h6>
													<p class="text-muted mb-0 fs-12">maria@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Marketing analyst</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.90" data-thickness="3" data-color="#0dcd94">
												<div class="chart-circle-value text-success fs-12">90%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Best Attendance Award</td>
										<td><span class="badge badge-success-light">Momento</span></td>
										<td>13-12-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>04</td>
										<td>#2098</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Peter Hill</h6>
													<p class="text-muted mb-0 fs-12">peter@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Testor</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.78" data-thickness="3" data-color="#f34932 ">
												<div class="chart-circle-value text-orange fs-12">78%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Most Improved Performer</td>
										<td><span class="badge badge-orange-light">Trophy</span></td>
										<td>05-11-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>05</td>
										<td>#1025</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Victoria Lyman</h6>
													<p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
												</div>
											</div>
										</td>
										<td>General Manager</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.48" data-thickness="3" data-color="#45aaf2">
												<div class="chart-circle-value text-info fs-12">48%</div>
											</div>
										</td>
										<td class="font-weight-semibold">The Motivator</td>
										<td><span class="badge badge-success-light">Momento</span></td>
										<td>21-09-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>06</td>
										<td>#3262</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Adam Quinn</h6>
													<p class="text-muted mb-0 fs-12">adam@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Accountant</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.32" data-thickness="3" data-color="#f11541">
												<div class="chart-circle-value text-danger fs-12">32%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Stand out Performer</td>
										<td><span class="badge badge-primary-light">Cash</span></td>
										<td>18-08-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>07</td>
										<td>#3489</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Melanie Coleman</h6>
													<p class="text-muted mb-0 fs-12">melanie@gmail.com</p>
												</div>
											</div>
										</td>
										<td>App Designer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.82" data-thickness="3" data-color="#0dcd94">
												<div class="chart-circle-value text-success fs-12">82%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Work Anniversary Award</td>
										<td><span class="badge badge-orange-light">Trophy</span></td>
										<td>15-07-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>08</td>
										<td>#3698</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Max Wilson</h6>
													<p class="text-muted mb-0 fs-12">max@gmail.com</p>
												</div>
											</div>
										</td>
										<td>PHP Developer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.78" data-thickness="3" data-color="#0dcd94">
												<div class="chart-circle-value text-success fs-12">78%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Most Creative Award</td>
										<td><span class="badge badge-success-light">Momento</span></td>
										<td>12-05-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>09</td>
										<td>#5612</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Amelia Russell</h6>
													<p class="text-muted mb-0 fs-12">amelia@gmail.com</p>
												</div>
											</div>
										</td>
										<td>UX Designer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.49" data-thickness="3" data-color="#45aaf2">
												<div class="chart-circle-value text-info fs-12">49%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Character Award</td>
										<td><span class="badge badge-orange-light">Trophy</span></td>
										<td>22-04-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>10</td>
										<td>#0245</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Justin Metcalfe</h6>
													<p class="text-muted mb-0 fs-12">justin@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Web Designer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.66" data-thickness="3" data-color="#f34932">
												<div class="chart-circle-value text-orange fs-12">66%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Sales Award</td>
										<td><span class="badge badge-primary-light">Cash</span></td>
										<td>05-03-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>11</td>
										<td>#3467</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/6.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Sophie Anderson</h6>
													<p class="text-muted mb-0 fs-12">faith@gmail.com</p>
												</div>
											</div>
										</td>
										<td>Java Developer</td>
										<td>
											<div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#0dcd94">
												<div class="chart-circle-value text-success fs-12">75%</div>
											</div>
										</td>
										<td class="font-weight-semibold">Customer Service Award</td>
										<td><span class="badge badge-orange-light">Trophy</span></td>
										<td>15-01-2020</td>
										<td>Congratulations</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editawardmodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
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