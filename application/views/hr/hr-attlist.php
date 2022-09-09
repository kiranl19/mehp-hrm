<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Attendance</div>
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
		<div class="hrattview-buttons">
			<a href="javascript:void(0);" class="active ms-5">Attendance Overview</a>
			<a href="hr-attuser.html" class="">Attendance By User</a>
		</div>
		<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row mt-5">
							<div class="col-md-6 col-lg-3">
								<div class="form-group">
									<label class="form-label">Employee Name:</label>
									<select class="form-control custom-select select2" data-placeholder="Select Employee">
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
							<div class="col-md-6 col-lg-3">
								<div class="form-group">
									<label class="form-label">Month:</label>
									<select class="form-control custom-select select2" data-placeholder="Select Month">
										<option label="Select Month"></option>
										<option value="1">January</option>
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
							<div class="col-md-6 col-lg-3">
								<div class="form-group">
									<label class="form-label">Year:</label>
									<select class="form-control custom-select select2" data-placeholder="Select Year">
										<option label="Select Year"></option>
										<option value="1">2024</option>
										<option value="2">2023</option>
										<option value="3">2022</option>
										<option value="4">2021</option>
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
							<div class="col-md-6 col-lg-3">
								<div class="form-group mt-5">
									<a href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="d-flex mb-6 mt-5">
							<div class="me-3">
								<label class="form-label">Note:</label>
							</div>
							<div>
								<span class="badge badge-success-light me-2"><i class="feather feather-check-circle text-success"></i> ---> Present</span>
								<span class="badge badge-danger-light me-2"><i class="feather feather-x-circle text-danger"></i> ---> Absent</span>
								<span class="badge badge-warning-light me-2"><i class="fa fa-star text-warning"></i> ---> Holiday</span>
								<span class="badge badge-orange-light me-2"><i class="fa fa-adjust text-orange"></i> ---> Half Day</span>
							</div>
						</div>
						<div class="table-responsive hr-attlist">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-attendance">
								<thead>
									<tr>
										<th class="border-bottom-0">Employee Name</th>
										<th class="border-bottom-0 w-5">1</th>
										<th class="border-bottom-0 w-5">2</th>
										<th class="border-bottom-0 w-5">3</th>
										<th class="border-bottom-0 w-5">4</th>
										<th class="border-bottom-0 w-5">5</th>
										<th class="border-bottom-0 w-5">6</th>
										<th class="border-bottom-0 w-5">7</th>
										<th class="border-bottom-0 w-5">8</th>
										<th class="border-bottom-0 w-5">9</th>
										<th class="border-bottom-0 w-5">10</th>
										<th class="border-bottom-0 w-5">11</th>
										<th class="border-bottom-0 w-5">12</th>
										<th class="border-bottom-0 w-5">13</th>
										<th class="border-bottom-0 w-5">14</th>
										<th class="border-bottom-0 w-5">15</th>
										<th class="border-bottom-0 w-5">16</th>
										<th class="border-bottom-0 w-5">17</th>
										<th class="border-bottom-0 w-5">18</th>
										<th class="border-bottom-0 w-5">19</th>
										<th class="border-bottom-0 w-5">20</th>
										<th class="border-bottom-0 w-5">21</th>
										<th class="border-bottom-0 w-5">22</th>
										<th class="border-bottom-0 w-5">23</th>
										<th class="border-bottom-0 w-5">24</th>
										<th class="border-bottom-0 w-5">25</th>
										<th class="border-bottom-0 w-5">26</th>
										<th class="border-bottom-0 w-5">27</th>
										<th class="border-bottom-0 w-5">28</th>
										<th class="border-bottom-0 w-5">29</th>
										<th class="border-bottom-0 w-5">30</th>
										<th class="border-bottom-0 w-5">31</th>
										<th class="border-bottom-0">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Faith Harris</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger "></span></td>
										<td><span class="feather feather-x-circle text-danger "></span></td>
										<td><span class="feather feather-x-circle text-danger "></span></td>
										<td><span class="feather feather-x-circle text-danger "></span></td>
										<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">21</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Austin Bell</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange"></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange"></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange"></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">24</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Maria Bower</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange"></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">17</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Peter Hill</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange"></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">25</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Victoria Lyman</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">26</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Adam Quinn</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">16</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Melanie Coleman</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange"></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">23</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Max Wilson</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="fa fa-adjust text-orange "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">21</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex">
												<span class="avatar avatar brround me-3" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<div class="me-3 mt-0 mt-sm-2 d-block">
													<h6 class="mb-1 fs-14">Amelia Russell</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="feather feather-x-circle text-danger"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td><span class="fa fa-star text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Republic Day"></span></td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<div class="hr-listd">
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
												<span class="feather feather-check-circle text-success "></span>
											</div>
										</td>
										<td>
											<h6 class="mb-0">
												<span class="text-primary">24</span>
												<span class="my-auto fs-8 font-weight-normal text-muted">/</span>
												<span class="">31</span>
											</h6>
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