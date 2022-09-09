<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Expenses</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addnoticemodal">Add New Expense Item</a>
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
					<div class="card-header border-bottom-0">
						<h4 class="card-title">Expense Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-expense">
								<thead>
									<tr>
										<th class="border-bottom-0">#ID</th>
										<th class="border-bottom-0">Employee</th>
										<th class="border-bottom-0">Title</th>
										<th class="border-bottom-0">Purchase From</th>
										<th class="border-bottom-0">Date</th>
										<th class="border-bottom-0">Amount ($)</th>
										<th class="border-bottom-0">Paid By</th>
										<th class="border-bottom-0">Aprroval Status</th>
										<th class="border-bottom-0">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#01</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Faith Harris</h6>
												</div>
											</div>
										</td>
										<td>Bike Services</td>
										<td>ABC Service Center</td>
										<td>01-10-2021</td>
										<td class="font-weight-semibold">$678</td>
										<td>Card</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
												<i class="feather feather-x text-danger"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#02</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Austin Bell</h6>
												</div>
											</div>
										</td>
										<td>Bike Services</td>
										<td>ABC Service Center</td>
										<td>01-10-2021</td>
										<td class="font-weight-semibold">$678</td>
										<td>Card</td>
										<td><span class="badge badge-danger">Rejected </span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#03</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Maria Bower</h6>
												</div>
											</div>
										</td>
										<td>Pens</td>
										<td>Books stationery</td>
										<td>11-12-2020</td>
										<td class="font-weight-semibold">$12</td>
										<td>Cash</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
												<i class="feather feather-x text-danger"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#04</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Maria Bower</h6>
												</div>
											</div>
										</td>
										<td>Mouse Pad</td>
										<td>Aamzon</td>
										<td>21-11-2020</td>
										<td class="font-weight-semibold">$45</td>
										<td>Online Payment</td>
										<td><span class="badge badge-warning">Pending</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
												<i class="feather feather-x text-danger"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#05</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Victoria Lyman</h6>
												</div>
											</div>
										</td>
										<td>Data Connection</td>
										<td>PhonePe</td>
										<td>16-10-2020</td>
										<td class="font-weight-semibold">$599</td>
										<td>Online Payment</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
												<i class="feather feather-x text-danger"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#06</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Adam Quinn</h6>
												</div>
											</div>
										</td>
										<td>Mobile Recharge</td>
										<td>PhonePe</td>
										<td>15-10-2020</td>
										<td class="font-weight-semibold">$100</td>
										<td>Online Payment</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
												<i class="feather feather-x text-danger"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#07</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Melanie Coleman</h6>
												</div>
											</div>
										</td>
										<td>Bike Fuel</td>
										<td>Petrol Bunk</td>
										<td>12-09-2020</td>
										<td class="font-weight-semibold">$220</td>
										<td>Card</td>
										<td><span class="badge badge-warning">Pending</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
												<i class="feather feather-x text-danger"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#08</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Max Wilson</h6>
												</div>
											</div>
										</td>
										<td>Bike Fuel</td>
										<td>Petrol Bunk</td>
										<td>12-09-2020</td>
										<td class="font-weight-semibold">$220</td>
										<td>Card</td>
										<td><span class="badge badge-danger">Rejected</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
												<i class="feather feather-check text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
												<i class="feather feather-eye  text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row -->

	</div><!-- end app-content-->
</div>