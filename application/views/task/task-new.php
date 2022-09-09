<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">New Task</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
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
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Task ID</label>
									<input class="form-control" placeholder="Number">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Task Title</label>
									<input class="form-control" placeholder="Text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Department:</label>
									<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Department">
										<option label="Select Department"></option>
										<option value="1">Designing Department</option>
										<option value="2">Development Department</option>
										<option value="3">Marketing Department</option>
										<option value="4">Human Resource Department</option>
										<option value="5">Managers Department</option>
										<option value="6">Application Department</option>
										<option value="7">Support Department</option>
										<option value="8">IT Department</option>
										<option value="9">Technical Department</option>
										<option value="10">Accounts Department</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Assign To:</label>
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
						<div class="form-group">
							<label class="form-label">Task Priority:</label>
							<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Priority">
								<option label="Select Priority"></option>
								<option value="1">High</option>
								<option value="2">Medium</option>
								<option value="3">Low</option>
							</select>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Form:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="feather feather-calendar"></i>
											</div>
										</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
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
										</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-label">Description:</label>
							<div class="summernote"></div>
						</div>
						<div class="form-group">
							<label for="form-label" class="form-label">Attachment:</label>
							<input class="form-control" type="file">
						</div>
						<div class="custom-controls-stacked d-md-flex">
							<label class="form-label mt-1 me-5">Work Status :</label>
							<label class="custom-control custom-radio success me-4">
								<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
								<span class="custom-control-label">Completed</span>
							</label>
							<label class="custom-control custom-radio success me-4">
								<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
								<span class="custom-control-label">Pending</span>
							</label>
							<label class="custom-control custom-radio success">
								<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
								<span class="custom-control-label">On Progress</span>
							</label>
						</div>
					</div>
					<div class="card-footer text-end">
						<a href="javascript:void(0);" class="btn btn-danger btn-lg">Close</a>
						<a href="javascript:void(0);" class="btn btn-success btn-lg" onclick="not1()">Submit</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>