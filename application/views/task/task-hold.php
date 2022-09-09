<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">OnHold Task</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newtaskmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Create New Task</a>
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
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card">
					<a href="task-list.html">
						<div class="card-body">
							<div class="row">
								<div class="col-7">
									<div class="mt-0 text-start">
										<span class="fs-16 font-weight-semibold">Total Tasks</span>
										<h3 class="mb-0 mt-1 text-danger fs-25">1254</h3>
									</div>
								</div>
								<div class="col-5">
									<div class="icon1 bg-danger-transparent my-auto  float-end"> <i class="feather feather-briefcase"></i> </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card">
					<a href="task-running.html">
						<div class="card-body">
							<div class="row">
								<div class="col-7">
									<div class="mt-0 text-start">
										<span class="fs-16 font-weight-semibold">Running Tasks</span>
										<h3 class="mb-0 mt-1 text-primary  fs-25">42</h3>
									</div>
								</div>
								<div class="col-5">
									<div class="icon1 bg-primary-transparent my-auto  float-end"> <i class="feather feather-clipboard"></i> </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card">
					<a href="task-hold.html">
						<div class="card-body">
							<div class="row">
								<div class="col-7">
									<div class="mt-0 text-start">
										<span class="fs-16 font-weight-semibold">On hold Tasks</span>
										<h3 class="mb-0 mt-1 text-secondary  fs-25">11</h3>
									</div>
								</div>
								<div class="col-5">
									<div class="icon1 bg-secondary-transparent my-auto  float-end"> <i class="feather feather-info"></i> </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12">
				<div class="card">
					<a href="task-complete.html">
						<div class="card-body">
							<div class="row">
								<div class="col-7">
									<div class="mt-0 text-start">
										<span class="fs-16 font-weight-semibold">Completed Tasks</span>
										<h3 class="mb-0 mt-1 text-success fs-25">38</h3>
									</div>
								</div>
								<div class="col-5">
									<div class="icon1 bg-success-transparent my-auto  float-end"> <i class="feather feather-check"></i> </div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- End Row-->

		<!-- Row -->
		<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header  border-0">
						<h4 class="card-title">Onhold Task Summary</h4>
						<div class="ms-auto">
							<div class="input-group">
								<input class="form-control" placeholder="Search....." type="text">
								<span class="input-group-btn">
									<button class="btn btn-light br-ts-0 br-bs-0">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 col-xl-5">
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
							<div class="col-md-12 col-xl-3">
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
							<div class="col-md-12 col-xl-3">
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
							<div class="col-md-12 col-xl-1">
								<div class="form-group mt-5">
									<a href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="task-list">
								<thead>
									<tr>
										<th class="border-bottom-0 text-center">No</th>
										<th class="border-bottom-0">Task</th>
										<th class="border-bottom-0">Department</th>
										<th class="border-bottom-0">Assign To</th>
										<th class="border-bottom-0">Priority</th>
										<th class="border-bottom-0">Start Date</th>
										<th class="border-bottom-0">Deadline</th>
										<th class="border-bottom-0">Progress</th>
										<th class="border-bottom-0">Work Status</th>
										<th class="border-bottom-0">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">1</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="bg-warning dot-label1 me-2 mt-1"></span>
												<span>Marketing materials Issues</span>
											</a>
										</td>
										<td>Marketing</td>
										<td>
											<a href="task-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Peter Hill</h6>
												</div>
											</a>
										</td>
										<td><span class="badge badge-danger-light">High</span></td>
										<td>11-03-2021</td>
										<td>19-05-2021</td>
										<td>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-80"></div>
											</div>

										</td>
										<td>
											<span class="badge badge-warning">On hold</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="task-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#edittsakmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="bg-danger dot-label1 me-2 mt-1"></span>
												<span>Logo Design</span>
											</a>
										</td>
										<td>Designing</td>
										<td>
											<a href="task-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Victoria Lyman</h6>
												</div>
											</a>
										</td>
										<td><span class="badge badge-danger-light">High</span></td>
										<td>05-02-2021</td>
										<td>21-04-2021</td>
										<td>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-70"></div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<div>
													<span class="badge badge-danger">Dealy</span>
												</div>
												<div class="mt-1 ms-1">
													<span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Dealy by 99 days"></span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<a href="task-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#edittsakmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="bg-warning dot-label1 me-2 mt-1"></span>
												<span>Theme update</span>
											</a>
										</td>
										<td>Designing</td>
										<td>
											<a href="task-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Melanie Coleman</h6>
												</div>
											</a>
										</td>
										<td><span class="badge badge-success-light">Low</span></td>
										<td>23-01-2021</td>
										<td>25-02-2021</td>
										<td>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-40"></div>
											</div>
										</td>
										<td>
											<span class="badge badge-warning">On hold</span>
										</td>
										<td>
											<div class="d-flex">
												<a href="task-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#edittsakmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-center">4</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="bg-warning dot-label1 me-2 mt-1"></span>
												<span>Design Updated</span>
											</a>
										</td>
										<td>Designing</td>
										<td>
											<a href="task-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Faith Harris</h6>
												</div>
											</a>
										</td>
										<td><span class="badge badge-warning-light">Medium</span></td>
										<td>12-02-2021</td>
										<td>16-06-2021</td>
										<td>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-50"></div>
											</div>

										</td>
										<td><span class="badge badge-warning">On hold</span></td>
										<td>
											<div class="d-flex">
												<a href="task-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#edittsakmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit task"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-center">5</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="bg-danger dot-label1 me-2 mt-1"></span>
												<span>HTML Code Updated</span>
											</a>
										</td>
										<td>Designing</td>
										<td>
											<a href="task-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Austin Bell</h6>
												</div>
											</a>
										</td>
										<td><span class="badge badge-success-light">Low</span></td>
										<td>01-01-2021</td>
										<td>22-04-2021</td>
										<td>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-50"></div>
											</div>

										</td>
										<td>
											<div class="d-flex">
												<div>
													<span class="badge badge-danger">Dealy</span>
												</div>
												<div class="mt-1 ms-1">
													<span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Dealy by 99 days"></span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<a href="task-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#edittsakmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit task"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="text-center">6</td>
										<td>
											<a href="javascript:void(0);" class="d-flex">
												<span class="bg-danger dot-label1 me-2 mt-1"></span>
												<span>Angular Issues fixed</span>
											</a>
										</td>
										<td>Angular</td>
										<td>
											<a href="task-profile.html" class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Maria Bower</h6>
												</div>
											</a>
										</td>
										<td><span class="badge badge-warning-light">Medium</span></td>
										<td>11-04-2021</td>
										<td>16-06-2021</td>
										<td>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success w-80"></div>
											</div>

										</td>
										<td>
											<div class="d-flex">
												<div>
													<span class="badge badge-danger">Dealy</span>
												</div>
												<div class="mt-1 ms-1">
													<span class="feather feather-info text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Dealy by 120 days"></span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<a href="task-view.html" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View Task"><i class="feather feather-eye text-primary"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#edittsakmodal">
													<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Edit task"></i>
												</a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Task"><i class="feather feather-send text-info"></i></a>
												<a href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
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

	</div><!-- end app-content-->
</div>