<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Project Overview Calendar</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newprojectmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Create New Project</a>
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
						<h4 class="card-title">Task Overview This Month</h4>
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
									<label class="form-label">Select Priority:</label>
									<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Priority">
										<option label="Select Priority"></option>
										<option value="1">High</option>
										<option value="2">Medium</option>
										<option value="3">Low</option>
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
				</div>
			</div>
		</div>
		<!-- End Row-->

		<!-- Row -->
		<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="project-calender">
							<div id="calendar1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->


	</div><!-- end app-content-->
</div>