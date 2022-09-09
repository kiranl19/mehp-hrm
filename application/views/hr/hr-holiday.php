<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Holidays</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#holidaymodal">Add Holiday</a>
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
							<div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Month:</label>
									<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Month">
										<option label="Select Month"></option>
										<option value="1" selected>January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 col-lg-3">
								<div class="form-group">
									<label class="form-label">Year:</label>
									<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Year">
										<option label="Select Year"></option>
										<option value="1">2024</option>
										<option value="2">2023</option>
										<option value="3">2022</option>
										<option value="4" selected>2021</option>
										<option value="5">2020</option>
										<option value="6">2019</option>
										<option value="7">2018</option>
										<option value="8">2017</option>
										<option value="9">2016</option>
										<option value="10">2015</option>
										<option value="11">2014</option>
										<option value="12">2013</option>
										<option value="13">2012</option>
										<option value="14">2011</option>
										<option value="15">2019</option>
										<option value="16">2010</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 col-lg-3">
								<div class="form-group mt-5">
									<a href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

		<!-- Row -->
		<div class="row">
			<div class="col-md-12 col-lg-12 col-xl-8">
				<div class="card">
					<div class="card-header  border-0">
						<h4 class="card-title">Holidays Lists</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-holiday">
								<thead>
									<tr>
										<th class="border-bottom-0 w-5">No</th>
										<th class="border-bottom-0 w-5">Day</th>
										<th class="border-bottom-0">Date</th>
										<th class="border-bottom-0">Holidays</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>Thursday</td>
										<td>14-01-2021</td>
										<td class="font-weight-semibold">Pongal Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>02</td>
										<td>Thuesday</td>
										<td>26-01-2021</td>
										<td class="font-weight-semibold">Republic Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>03</td>
										<td>Thursday</td>
										<td>11-03-2021</td>
										<td class="font-weight-semibold">Mahashivratri Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>04</td>
										<td>Monday</td>
										<td>29-03-2021</td>
										<td class="font-weight-semibold">Holi Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>05</td>
										<td>Tuesday</td>
										<td>13-04-2021</td>
										<td class="font-weight-semibold">Ugadi Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>06</td>
										<td>Wednesday</td>
										<td>14-04-2021</td>
										<td class="font-weight-semibold">Ambedkar Jayanti Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>07</td>
										<td>Sunday</td>
										<td>15-08-2021</td>
										<td class="font-weight-semibold">Independence Day Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>08</td>
										<td>Friday</td>
										<td>10-09-2021</td>
										<td class="font-weight-semibold">Ganesh Chaturthi Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>09</td>
										<td>Friday</td>
										<td>02-10-2021</td>
										<td class="font-weight-semibold">Gandhi Jayanti Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>10</td>
										<td>Friday</td>
										<td>14-10-2021</td>
										<td class="font-weight-semibold">Dussehra Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Friday</td>
										<td>04-11-2021</td>
										<td class="font-weight-semibold">Diwali Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
												<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="View/Edit"></i>
											</a>
											<a class="btn btn-danger btn-icon btn-sm" data-bs-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
										</td>
									</tr>
									<tr>
										<td>12</td>
										<td>Saturday</td>
										<td>25-12-2021</td>
										<td class="font-weight-semibold">Merry Christmas Holiday</td>
										<td>
											<a class="btn btn-primary btn-icon btn-sm" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#holidaymodal">
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
			<div class="col-md-12 col-lg-12 col-xl-4">
				<div class="card">
					<div class="card-body">
						<div class="holiday-calender">
							<div id="calendar1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>