<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Job Lists</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addjobmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Job</a>
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
							<div class="col-xl-5 col-md-12">
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
							<div class="col-xl-5 col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Select Job Type:</label>
											<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Job Type">
												<option label="Select Job Type"></option>
												<option value="1">Full-Time</option>
												<option value="2">Part-Time</option>
												<option value="3">Freelancer</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Select Status:</label>
											<select name="attendance" class="form-control custom-select select2" data-placeholder="Select Status">
												<option label="Select Status"></option>
												<option value="1">Active</option>
												<option value="2">InActive</option>
											</select>
										</div>
									</div>
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
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="job-list">
								<thead>
									<tr>
										<th class="border-bottom-0">No</th>
										<th class="border-bottom-0">Position</th>
										<th class="border-bottom-0">Type</th>
										<th class="border-bottom-0">Posted Date</th>
										<th class="border-bottom-0">Last Date to Apply</th>
										<th class="border-bottom-0">Close Date</th>
										<th class="border-bottom-0">Status</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>01</td>
										<td>
											<a href="javascript:void(0);">Senior PHP Developer</a>
										</td>
										<td>Full-Time</td>
										<td>12-01-2021</td>
										<td>24-01-2021</td>
										<td>25-01-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>02</td>
										<td>
											<a href="javascript:void(0);">Fresher Web Designer</a>
										</td>
										<td>Full-Time</td>
										<td>15-02-2021</td>
										<td>21-02-2021</td>
										<td>23-02-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>03</td>
										<td>
											<a href="javascript:void(0);">Senior Web Developer</a>
										</td>
										<td>Full-Time</td>
										<td>16-02-2021</td>
										<td>03-03-2021</td>
										<td>05-03-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>04</td>
										<td>
											<a href="javascript:void(0);">Fresher UI Designer</a>
										</td>
										<td>Part-Time</td>
										<td>16-01-2021</td>
										<td>03-02-2021</td>
										<td>05-02-2021</td>
										<td>
											<span class="badge badge-danger">InActive</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>05</td>
										<td>
											<a href="javascript:void(0);">SEO Specialist</a>
										</td>
										<td>Full-Time</td>
										<td>16-03-2021</td>
										<td>23-03-2021</td>
										<td>30-03-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>06</td>
										<td>
											<a href="javascript:void(0);">Senior Worpress Developer</a>
										</td>
										<td>Full-Time</td>
										<td>16-01-2021</td>
										<td>23-01-2021</td>
										<td>30-01-2021</td>
										<td>
											<span class="badge badge-danger">InActive</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>07</td>
										<td>
											<a href="javascript:void(0);">Senior Accountant</a>
										</td>
										<td>Full-Time</td>
										<td>18-02-2021</td>
										<td>25-02-2021</td>
										<td>30-02-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>08</td>
										<td>
											<a href="javascript:void(0);">Senior Software Engineer</a>
										</td>
										<td>Full-Time</td>
										<td>21-03-2021</td>
										<td>15-03-2021</td>
										<td>20-03-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>09</td>
										<td>
											<a href="javascript:void(0);">Fresher Angular Developer</a>
										</td>
										<td>Full-Time</td>
										<td>21-01-2021</td>
										<td>15-02-2021</td>
										<td>20-02-2021</td>
										<td>
											<span class="badge badge-danger">InActive</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>10</td>
										<td>
											<a href="javascript:void(0);">Senior Angular Developer</a>
										</td>
										<td>Freelancer</td>
										<td>25-03-2021</td>
										<td>15-04-2021</td>
										<td>20-04-2021</td>
										<td>
											<span class="badge badge-success">Active</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="job-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editjobtmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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
		<!-- End Row -->

	</div>
</div><!-- end app-content-->