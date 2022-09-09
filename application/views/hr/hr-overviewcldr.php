<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Overview Calendar</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="hr-attmark.html" class="btn btn-primary me-3">Mark Attendance</a>
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
						<h4 class="card-title">Days Overview This Month</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-lg-5">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Employee Name:</label>
											<select class="form-control custom-select select2" data-placeholder="Select Employee">
												<option label="Select Employee"></option>
												<option value="1" selected>Faith Harris</option>
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
									<div class="col-md-6">
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
							<div class="col-md-12 col-lg-5">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Month:</label>
											<select class="form-control custom-select select2" data-placeholder="Select Month">
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
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Year:</label>
											<select class="form-control custom-select select2" data-placeholder="Select Year">
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
								</div>
							</div>
							<div class="col-md-12 col-lg-2">
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
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="hr-calender">
							<div id="calendar1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>