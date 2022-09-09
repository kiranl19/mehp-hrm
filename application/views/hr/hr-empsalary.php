<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Employee Salary</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list mt-3 mt-lg-0">
						<a href="hr-addpayroll.html" class="btn btn-primary me-3">Add New Payroll</a>
						<button class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#excelmodal">
							<i class="las la-file-excel"></i> Download Monthly Excel Report
						</button>
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
						<div class="row">
							<div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Employee Name:</label>
									<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Employee">
										<option label="Select Employee"></option>
										<option value="1">Faith Harris</option>
										<option value="2">Austin Bell</option>
										<option value="3">Maria Bower</option>
										<option value="4">Peter Hill</option>
										<option value="5">Victoria Lyman</option>
										<option value="6">Adam Quinn</option>
										<option value="7">Melanie Coleman</option>
										<option value="8">Max Wilson</option>
										<option value="9">Amelia Russell</option>
										<option value="10">Justin Metcalfe</option>
										<option value="11">Ryan Young</option>
										<option value="12">Jennifer Hardacre</option>
										<option value="13">Justin Parr</option>
										<option value="14">Julia Hodges</option>
										<option value="15">Michael Sutherland</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-payroll">
								<thead>
									<tr>
										<th class="border-bottom-0 w-5">#Emp ID</th>
										<th class="border-bottom-0">Emp Name</th>
										<th class="border-bottom-0">Month-Year</th>
										<th class="border-bottom-0">Designation</th>
										<th class="border-bottom-0">($) Salary</th>
										<th class="border-bottom-0">Generated Date</th>
										<th class="border-bottom-0">Status</th>
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
													<p class="text-muted mb-0 fs-12">faith@gmail.com</p>
												</div>
											</div>
										</td>
										<td>January-2021</td>
										<td>Web Designer</td>
										<td class="font-weight-semibold">$32,000</td>
										<td>01-02-2021</td>
										<td><span class="badge badge-success">Paid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
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
										<td>December-2020</td>
										<td>Angular Developer</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>01-01-2021</td>
										<td><span class="badge badge-success">Paid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
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
										<td>November-2020</td>
										<td>Marketing analyst</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>01-12-2020</td>
										<td><span class="badge badge-danger">UnPaid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
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
										<td>October-2020</td>
										<td>Testor</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>01-11-2020</td>
										<td><span class="badge badge-success">Paid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
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
										<td>September-2020</td>
										<td>General Manager</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>01-10-2020</td>
										<td><span class="badge badge-success">Paid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
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
										<td>August-2020</td>
										<td>Accountant</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>01-09-2020</td>
										<td><span class="badge badge-success">Paid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>#1025</td>
										<td>
											<div class="d-flex">
												<span class="avatar avatar-md brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 fs-14">Melanie Coleman</h6>
													<p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
												</div>
											</div>
										</td>
										<td>July-2020</td>
										<td>App Designer</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>02-08-2020</td>
										<td><span class="badge badge-success">Paid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
											</a>
										</td>
									</tr>
									<tr>
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
										<td>June-2020</td>
										<td>PHP Developer</td>
										<td class="font-weight-semibold">$28,000</td>
										<td>02-08-2020</td>
										<td><span class="badge badge-danger">UnPaid</span></td>
										<td class="text-start">
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
												<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
											</a>
											<a href="hr-editpayroll.html" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="feather feather-edit text-info"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
												<i class="feather feather-download  text-secondary"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
												<i class="feather feather-printer text-success"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
												<i class="feather feather-share-2 text-warning"></i>
											</a>
											<a href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="feather feather-x text-danger"></i>
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