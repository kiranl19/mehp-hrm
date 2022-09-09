<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Expenses</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#expensemodal">Add Expenses</a>
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
					<div class="card-header  border-0">
						<h4 class="card-title">My Expenses Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
								<thead>
									<tr>
										<th class="border-bottom-0">#ID</th>
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
										<td>Bike Services</td>
										<td>ABC Service Center</td>
										<td>01-10-2021</td>
										<td class="font-weight-semibold">$678</td>
										<td>Card</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#02</td>
										<td>Bike Services</td>
										<td>ABC Service Center</td>
										<td>01-10-2021</td>
										<td class="font-weight-semibold">$678</td>
										<td>Card</td>
										<td>
											<div class="d-flex">
												<div>
													<span class="badge badge-danger">Rejected </span>
												</div>
												<div class="mt-1 ms-1">
													<span class="feather feather-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Duplicated Invoice"></span>
												</div>
											</div>
										</td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#03</td>
										<td>Pens</td>
										<td>Books stationery</td>
										<td>11-12-2020</td>
										<td class="font-weight-semibold">$12</td>
										<td>Cash</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#04</td>
										<td>Mouse Pad</td>
										<td>Aamzon</td>
										<td>21-11-2020</td>
										<td class="font-weight-semibold">$45</td>
										<td>Online Payment</td>
										<td><span class="badge badge-warning">Pending</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#05</td>
										<td>Data Connection</td>
										<td>PhonePe</td>
										<td>16-10-2020</td>
										<td class="font-weight-semibold">$599</td>
										<td>Online Payment</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#06</td>
										<td>Mobile Recharge</td>
										<td>PhonePe</td>
										<td>15-10-2020</td>
										<td class="font-weight-semibold">$100</td>
										<td>Online Payment</td>
										<td><span class="badge badge-success">Approved</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#07</td>
										<td>Bike Fuel</td>
										<td>Petrol Bunk</td>
										<td>12-09-2020</td>
										<td class="font-weight-semibold">$220</td>
										<td>Card</td>
										<td><span class="badge badge-warning">Pending</span></td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-trash-2 text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#08</td>
										<td>Bike Fuel</td>
										<td>Petrol Bunk</td>
										<td>12-09-2020</td>
										<td class="font-weight-semibold">$220</td>
										<td>Card</td>
										<td>
											<div class="d-flex">
												<div>
													<span class="badge badge-danger">Rejected </span>
												</div>
												<div class="mt-1 ms-1">
													<span class="feather feather-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Duplicated Invoice"></span>
												</div>
											</div>
										</td>
										<td class="text-start d-flex">
											<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="feather feather-eye  text-primary"></i>
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
		<!-- End Row-->

	</div><!-- end app-content-->
</div>