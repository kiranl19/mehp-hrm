<div class="app-content main-content ">
	<div class="side-app main-container ">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block ">
			<div class="page-leftheader ">
				<div class="page-title ">Employee<span class="font-weight-normal text-muted ms-2 ">Dashboard</span></div>
			</div>
			<div class="page-rightheader ms-md-auto ">
				<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end ">
					<a href="javascript:void(0); " class="btn btn-primary me-3 mt-3 mt-lg-0 mb-3 mb-md-0 " data-bs-toggle="modal " data-bs-target="#applyleaves ">Apply Leaves</a>
					<div class="d-flex ">
						<div class="header-datepicker me-3 ">
							<div class="input-group ">
								<div class="input-group-prepend ">
									<div class="input-group-text ">
										<i class="feather feather-calendar "></i>
									</div>
								</div><input class="form-control fc-datepicker " placeholder="19 Feb 2020 " type="text ">
							</div>
						</div>
						<div class="header-datepicker me-3 ">
							<div class="input-group ">
								<div class="input-group-prepend ">
									<div class="input-group-text ">
										<i class="feather feather-clock "></i>
									</div><!-- input-group-text -->
								</div><!-- input-group-prepend -->
								<input id="tpBasic " type="text " placeholder="09:30am " class="form-control input-small ">
							</div>
						</div><!-- wd-150 -->
					</div>
					<div class="d-lg-flex d-block ">
						<div class="btn-list ">
							<button class="btn btn-primary " data-bs-toggle="modal " data-bs-target="#clockinmodal ">Clock In</button>
							<button class="btn btn-light " data-bs-toggle="tooltip " data-bs-placement="top " title="E-mail "> <i class="feather feather-mail "></i> </button>
							<button class="btn btn-light " data-bs-placement="top " data-bs-toggle="tooltip " title="Contact "> <i class="feather feather-phone-call "></i> </button>
							<button class="btn btn-primary " data-bs-placement="top " data-bs-toggle="tooltip " title="Info "> <i class="feather feather-info "></i> </button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Page header-->

		<!--Row-->
		<div class="row ">
			<div class="col-xl-3 col-lg-6 col-md-12 ">
				<div class="card ">
					<div class="card-body ">
						<div class="row ">
							<div class="col-7 ">
								<div class="mt-0 text-start ">
									<h5 class=" ">Completed Projects</h5>
									<h3 class="mb-0 mt-auto text-success ">51</h3>
								</div>
							</div>
							<div class="col-5 ">
								<div class="icon1 bg-success my-auto float-end "> <i class="feather feather-file-text "></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12 ">
				<div class="card ">
					<div class="card-body ">
						<div class="row ">
							<div class="col-7 ">
								<div class="mt-0 text-start ">
									<h5 class=" ">Total Attendance</h5>
									<h3 class="mb-0 mt-auto text-primary ">162</h3>
								</div>
							</div>
							<div class="col-5 ">
								<div class="icon1 bg-primary my-auto float-end "> <i class="feather feather-box "></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12 ">
				<div class="card ">
					<div class="card-body ">
						<div class="row ">
							<div class="col-7 ">
								<div class="mt-0 text-start ">
									<h5 class=" ">Absent</h5>
									<h3 class="mb-0 mt-auto text-secondary ">12</h3>
								</div>
							</div>
							<div class="col-5 ">
								<div class="icon1 bg-secondary my-auto float-end "> <i class="feather feather-briefcase "></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-12 ">
				<div class="card ">
					<div class="card-body ">
						<div class="row ">
							<div class="col-7 ">
								<div class="mt-0 text-start ">
									<h5 class=" ">Awards</h5>
									<h3 class="mb-0 mt-auto text-danger ">0</h3>
								</div>
							</div>
							<div class="col-5 ">
								<div class="icon1 bg-danger my-auto float-end "> <i class="feather feather-award "></i> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Row-->

		<!--Row-->
		<div class="row ">
			<div class="col-xl-8 col-md-12 col-lg-12 ">
				<div class="card ">
					<div class="card-header border-0 responsive-header ">
						<h4 class="card-title ">Salary And Attendance chart</h4>
						<div class="card-options me-3 ">
							<div class="btn-list ">
								<a href="javascript:void(0); " class="btn btn-outline-light text-dark float-start me-4 d-flex my-1 "><span class="dot-label bg-light4 me-2 my-auto "></span>Attendance</a>
								<a href="javascript:void(0); " class="btn btn-outline-light text-dark float-start me-4 d-flex my-1 "><span class="dot-label bg-primary me-2 my-auto "></span>Salary</a>
								<a href="javascript:void(0); " class="btn btn-outline-light my-1 " data-bs-toggle="dropdown " aria-expanded="false "> Year <i class="feather feather-chevron-down "></i> </a>
								<ul class="dropdown-menu dropdown-menu-end " role="menu ">
									<li><a href="javascript:void(0); ">Monthly</a></li>
									<li><a href="javascript:void(0); ">Yearly</a></li>
									<li><a href="javascript:void(0); ">Weekly</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body ">
						<canvas id="chartbar " class="h-400 "></canvas>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 col-lg-12 ">
				<div class="card ">
					<div class="card-header border-0 ">
						<h4 class="card-title ">Recent Activity</h4>
					</div>
					<div class="pt-4 ">
						<div class="table-responsive ">
							<table class="table transaction-table mb-0 text-nowrap ">
								<tbody>
									<tr class="border-bottom ">
										<td class="d-flex ps-6 ">
											<span class="bg-pink pink-border brround d-block me-5 mt-1 h-5 w-5 "></span>
											<div class="my-auto ">
												<span class="mb-1 font-weight-semibold fs-17 ">You Late to day</span>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Your office intime is 9:42</small>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Late time 14min</small>
											</div>
										</td>
										<td class="text-end pe-6 ">
											<a class="text-muted d-block fs-16 " href="javascript:void(0); ">Just Now</a>
										</td>
									</tr>
									<tr class="border-bottom ">
										<td class="d-flex ps-6 ">
											<span class="bg-warning warning-border brround d-block me-5 mt-1 h-5 w-5 "></span>
											<div class="my-auto ">
												<span class="mb-1 font-weight-semibold fs-17 ">Below for those interested</span>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Undoubtable source</small>
											</div>
										</td>
										<td class="text-end pe-6 ">
											<a class="text-muted d-block fs-16 " href="javascript:void(0); ">1 Hour ago</a>
										</td>
									</tr>
									<tr class="border-bottom ">
										<td class="d-flex ps-6 ">
											<span class="bg-primary primary-border brround d-block me-5 mt-1 h-5 w-5 "></span>
											<div class="my-auto ">
												<span class="mb-1 font-weight-semibold fs-17 ">Success! your Lunch Time</span>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Lunch time 1:30 To 2:30</small>
											</div>
										</td>
										<td class="text-end pe-6 ">
											<a class="text-muted d-block fs-16 " href="javascript:void(0); ">4 hours ago</a>
										</td>
									</tr>
									<tr class="border-bottom ">
										<td class="d-flex ps-6 ">
											<span class="bg-success success-border brround d-block me-5 mt-1 h-5 w-5 "></span>
											<div class="my-auto ">
												<span class="mb-1 font-weight-semibold fs-17 ">Many desktops Publishing The</span>
												<div class="clearfix "></div>
												<span class="mb-1 font-weight-semibold fs-17 "> versions are evolved</span>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Page editors now use...</small>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Late time 14min</small>
											</div>
										</td>
										<td class="text-end pe-6 ">
											<a class="text-muted d-block fs-16 " href="javascript:void(0); ">5 hours ago</a>
										</td>
									</tr>
									<tr>
										<td class="d-flex ps-6 ">
											<span class="bg-orange orange-border brround d-block me-5 mt-1 h-5 w-5 "></span>
											<div class="my-auto ">
												<span class="mb-1 font-weight-semibold fs-17 ">Below for those interested</span>
												<div class="clearfix "></div>
												<small class="text-muted fs-14 ">Birthday on Feb 16</small>
											</div>
										</td>
										<td class="text-end pe-6 ">
											<a class="text-muted d-block fs-16 " href="javascript:void(0); ">11 Jan 2020</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-xl-3 col-lg-12 col-md-12 ">
				<div class="card ">
					<div class="p-0 ">
						<div class="card-header border-0 ">
							<h4 class="card-title ">Calendar</h4>
						</div>
						<div class="calendar p-4 pt-0 "></div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-12 col-md-12 ">
				<div class="card ">
					<div class="card-header border-0 ">
						<h4 class="card-title ">Up Coming Holidays</h4>
					</div>
					<div class="card-body mt-1 ">
						<div class="mb-5 ">
							<div class="d-flex comming_holidays calendar-icon icons ">
								<span class="date_time bg-success-transparent bradius me-3 "><span class="date fs-20 ">3</span>
									<span class="month fs-13 ">FEB</span>
								</span>
								<div class="me-3 mt-0 mt-sm-1 d-block ">
									<h6 class="mb-1 font-weight-semibold ">Office Off</h6>
									<span class="clearfix "></span>
									<small>Sunday</small>
								</div>
								<p class="float-end text-muted mb-0 fs-13 ms-auto bradius my-auto ">3 days to left</p>
							</div>
						</div>
						<div class="mb-5 ">
							<div class="d-flex comming_holidays calendar-icon icons ">
								<span class="date_time bg-purple-transparent bradius me-3 "><span class="date fs-20 ">10</span>
									<span class="month fs-13 ">FEB</span>
								</span>
								<div class="me-3 mt-0 mt-sm-1 d-block ">
									<h6 class="mb-1 font-weight-semibold ">Public Holiday</h6>
									<span class="clearfix "></span>
									<small>Enjoy your day off</small>
								</div>
								<p class="float-end text-muted mb-0 fs-13 ms-auto bradius my-auto ">13 days to left</p>
							</div>
						</div>
						<div class="mb-5 ">
							<div class="d-flex comming_holidays calendar-icon icons ">
								<span class="date_time bg-orange-transparent bradius me-3 "><span class="date fs-20 ">20</span>
									<span class="month fs-13 ">MAR</span>
								</span>
								<div class="me-3 mt-0 mt-sm-1 d-block ">
									<h6 class="mb-1 font-weight-semibold ">Office Off</h6>
									<span class="clearfix "></span>
									<small>Sunday</small>
								</div>
								<p class="float-end text-muted mb-0 fs-13 ms-auto bradius my-auto ">23 days to left</p>
							</div>
						</div>
						<div class="mb-5 ">
							<div class="d-flex comming_holidays calendar-icon icons ">
								<span class="date_time bg-warning-transparent bradius me-3 "><span class="date fs-20 ">17</span>
									<span class="month fs-13 ">FEB</span>
								</span>
								<div class="me-3 mt-0 mt-sm-1 d-block ">
									<h6 class="mb-1 font-weight-semibold ">Optional Holiday</h6>
									<span class="clearfix "></span>
									<small>Sunday</small>
								</div>
								<p class="float-end text-muted mb-0 fs-13 ms-auto bradius my-auto ">20 days to left</p>
							</div>
						</div>
						<div class="mb-0 ">
							<div class="d-flex comming_holidays calendar-icon icons ">
								<span class="date_time bg-pink-transparent bradius me-3 "><span class="date fs-20 ">13</span>
									<span class="month fs-13 ">MAR</span>
								</span>
								<div class="me-3 mt-0 mt-sm-1 d-block ">
									<h6 class="mb-1 font-weight-semibold ">Conference</h6>
									<span class="clearfix "></span>
									<small>Money Update</small>
								</div>
								<p class="float-end text-muted mb-0 fs-13 ms-auto bradius my-auto ">35 days to left</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-12 col-md-12 ">
				<div class="card ">
					<div class="card-header border-0 ">
						<h4 class="card-title ">Leave Balance</h4>
						<div class="card-options me-3 ">
							<a href=" " class="btn btn-block btn-primary pe-3 ps-3 ">Apply For Leave</a>
						</div>
					</div>
					<div class="table-responsive leave_table fs-13 mt-5 ">
						<table class="table mb-0 text-nowrap ">
							<thead class="border-top ">
								<tr>
									<th class="text-start ">Balance</th>
									<th class="text-start ">Used</th>
									<th class="text-center ">Available</th>
									<th class="text-center ">Allowance</th>
								</tr>
							</thead>
							<tbody>
								<tr class="border-bottom fs-15 ">
									<td class="text-center d-flex "><span class="bg-primary brround d-block me-3 mt-1 h-3 w-3 "></span><span class="font-weight-semibold fs-15 ">Vacation</span></td>
									<td class="font-weight-semibold fs-15 ">16.5</td>
									<td class="text-center text-muted fs-15 ">3.5</td>
									<td class="text-center text-muted ">20</td>
								</tr>
								<tr class="border-bottom fs-15 ">
									<td class="text-center d-flex "><span class="bg-orange brround d-block me-3 mt-1 h-3 w-3 "></span><span class="font-weight-semibold fs-15 ">Sick Leave</span></td>
									<td class="font-weight-semibold ">4.5</td>
									<td class="text-center text-muted ">16</td>
									<td class="text-center text-muted ">20</td>
								</tr>
								<tr class="border-bottom fs-15 ">
									<td class="text-center d-flex "><span class="bg-warning brround d-block me-3 mt-1 h-3 w-3 "></span><span class="font-weight-semibold fs-15 ">Unpaid leave</span></td>
									<td class="font-weight-semibold ">5</td>
									<td class="text-center text-muted ">360</td>
									<td class="text-center text-muted ">365</td>
								</tr>
								<tr class="border-bottom fs-15 ">
									<td class="text-center d-flex "><span class="bg-info brround d-block me-3 mt-1 h-3 w-3 "></span><span class="font-weight-semibold fs-15 ">Work from Home</span></td>
									<td class="font-weight-semibold ">8</td>
									<td class="text-center text-muted ">22</td>
									<td class="text-center text-muted ">30</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="row mb-0 pb-0 ">
						<div class="col-4 text-center py-5 border-end ">
							<h5>Vacation</h5>
							<div class="justify-content-center text-center d-flex my-auto "><span class="text-primary fs-20 font-weight-semibold ">8 <span class="my-auto fs-14 font-weight-normal text-light ">/</span> 16</span></div>
						</div>
						<div class="col-4 text-center py-5 border-end ">
							<h5>Sick leave</h5>
							<div class="justify-content-center text-center d-flex my-auto "><span class="text-danger fs-20 font-weight-semibold ">4.5 <span class="my-auto fs-14 font-weight-normal text-light ">/</span> 10</span></div>
						</div>
						<div class="col-4 text-center py-5 ">
							<h5>Unpaid leave</h5>
							<div class="justify-content-center text-center d-flex my-auto "><span class="fs-20 font-weight-semibold ">5 <span class="my-auto fs-14 font-weight-normal text-light ">/</span> 365</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-xxl-8 col-xl-7 col-lg-12 col-md-12 ">
				<div class="card ">
					<div class="card-header border-bottom-0 ">
						<h4 class="card-title ">Recent Job Application</h4>
						<div class="card-options ">
							<a href=" " class="me-0 option-dots text-default " data-bs-toggle="dropdown " role="button " aria-haspopup="true " aria-expanded="false "> <span class="feather feather-more-vertical "></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-end " role="menu ">
								<li><a href="javascript:void(0); "><i class="feather feather-eye me-2 "></i>View</a></li>
								<li><a href="javascript:void(0); "><i class="feather feather-plus-circle me-2 "></i>Add</a></li>
								<li><a href="javascript:void(0); "><i class="feather feather-trash-2 me-2 "></i>Remove</a></li>
								<li><a href="javascript:void(0); "><i class="feather feather-download-cloud me-2 "></i>Download</a></li>
								<li><a href="javascript:void(0); "><i class="feather feather-settings me-2 "></i>More</a></li>
							</ul>
						</div>
					</div>
					<div class="table-responsive recent-jobstable pt-4 ">
						<div class="btn-task ">
							<a href="javascript:void(0); " class="btn btn-primary ">New Task<i class="feather feather-plus "></i></a>
						</div>
						<table class="table table-vcenter text-nowrap mb-0 " id="assigntask ">
							<thead>
								<tr>
									<th class="wd-10p border-bottom-0 ">S.no</th>
									<th class="wd-15p border-bottom-0 ">Project Title</th>
									<th class="wd-20p border-bottom-0 ">Assigned to</th>
									<th class="w-5p border-bottom-0 ">Due Date</th>
									<th class="wd-15p border-bottom-0 ">Request Status</th>
									<th class="wd-10p border-bottom-0 ">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-start fs-13 ">1</td>
									<td class="ps-0 ">
										<div class="d-flex ">
											<div class="table_img brround bg-orange-transparent me-3 ">
												<img src="<?php echo base_url() ?>assets/images/photos/html.png " alt="img " class="brround ">
											</div>
											<div class="my-auto ">
												<h5 class="mb-0 font-weight-medium ">Html Business Template</h5>
											</div>
										</div>
									</td>
									<td class="text-start ">
										<div class="avatar-list avatar-list-stacked ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/12.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/3.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/2.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/5.jpg " alt="img ">
										</div>
									</td>
									<td class="text-start ">19 Feb 2020</td>
									<td class="text-start "><a href=" " class="btn btn-outline-success btn-block ">Completed</a></td>
									<td class="text-start d-flex ">
										<a href="javascript:void(0); " class="action-btns1 "><i class="feather feather-mail primary text-primary "></i></a>
										<label class="custom-control custom-checkbox-md ">
											<input type="checkbox " class="custom-control-input-success " name="example-checkbox1 " value="option1 " checked>
											<span class="custom-control-label-md success "></span>
										</label>
									</td>
								</tr>
								<tr>
									<td class="text-start ">2</td>
									<td class="ps-0 ">
										<div class="d-flex ">
											<div class="table_img brround bg-pink-transparent me-3 ">
												<img src="<?php echo base_url() ?>assets/images/photos/xd.png " alt="img " class="brround ">
											</div>
											<div class="my-auto ">
												<h5 class="mb-0 font-weight-medium ">Adobe xd Education Template</h5>
											</div>
										</div>
									</td>
									<td class="text-start ">
										<div class="avatar-list avatar-list-stacked ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/4.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/2.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/12.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/15.jpg " alt="img ">
										</div>
									</td>
									<td class="text-start ">24 Feb 2020</td>
									<td class="text-start "><a href=" " class="btn btn-block btn-primary ">Accept</a></td>
									<td class="text-start d-flex ">
										<a href="javascript:void(0); " class="action-btns1 "><i class="feather feather-mail primary text-primary "></i></a>
										<label class="custom-control custom-checkbox-md ">
											<input type="checkbox " class="custom-control-input-success " name="example-checkbox2 " value="option2 ">
											<span class="custom-control-label-md success "></span>
										</label>
									</td>
								</tr>
								<tr>
									<td class="text-start ">3</td>
									<td class="ps-0 ">
										<div class="d-flex ">
											<div class="table_img brround bg-warning-transparent me-3 ">
												<img src="<?php echo base_url() ?>assets/images/photos/js.png " alt="img " class="brround ">
											</div>
											<div class="my-auto ">
												<h5 class="mb-0 font-weight-medium ">js recent Plugin Updated</h5>
											</div>
										</div>
									</td>
									<td class="text-start ">
										<div class="avatar-list avatar-list-stacked ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/7.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/8.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/9.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/10.jpg " alt="img ">
										</div>
									</td>
									<td class="text-start ">5 Mar 2020</td>
									<td class="text-start "><a href=" " class="btn btn-block btn-primary ">Accept</a></td>
									<td class="text-start d-flex ">
										<a href="javascript:void(0); " class="action-btns1 "><i class="feather feather-mail primary text-primary "></i></a>
										<label class="custom-control custom-checkbox-md ">
											<input type="checkbox " class="custom-control-input-success " name="example-checkbox3 " value="option3 ">
											<span class="custom-control-label-md success "></span>
										</label>
									</td>
								</tr>
								<tr>
									<td class="text-start ">4</td>
									<td class="ps-0 ">
										<div class="d-flex ">
											<div class="table_img brround bg-pink-transparent me-3 ">
												<img src="<?php echo base_url() ?>assets/images/photos/sass.png " alt="img " class="brround ">
											</div>
											<div class="my-auto ">
												<h5 class="mb-0 font-weight-medium ">Sass Development Program</h5>
											</div>
										</div>
									</td>
									<td class="text-start ">
										<div class="avatar-list avatar-list-stacked ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/5.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/6.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/1.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/12.jpg " alt="img ">
										</div>
									</td>
									<td class="text-start ">14 Mar 2020</td>
									<td class="text-start "><a href=" " class="btn btn-block btn-outline-success ">Completed</a></td>
									<td class="text-start d-flex ">
										<a href="javascript:void(0); " class="action-btns1 "><i class="feather feather-mail primary text-primary "></i></a>
										<label class="custom-control custom-checkbox-md ">
											<input type="checkbox " class="custom-control-input-success " name="example-checkbox4 " value="option4 " checked>
											<span class="custom-control-label-md success "></span>
										</label>
									</td>
								</tr>
								<tr>
									<td class="text-start ">5</td>
									<td class="ps-0 ">
										<div class="d-flex ">
											<div class="table_img brround bg-danger-transparent me-3 ">
												<img src="<?php echo base_url() ?>assets/images/photos/angular.png " alt="img " class="brround ">
											</div>
											<div class="my-auto ">
												<h5 class="mb-0 font-weight-medium ">Angular Development</h5>
											</div>
										</div>
									</td>
									<td class="text-start ">
										<div class="avatar-list avatar-list-stacked ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/6.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/11.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/14.jpg " alt="img ">
											<img class="avatar avatar-md brround " src="<?php echo base_url() ?>assets/images/users/1.jpg " alt="img ">
										</div>
									</td>
									<td class="text-start ">20 Mar 2020</td>
									<td class="text-start "><a href=" " class="btn btn-block btn-primary ">Accept</a></td>
									<td class="text-start d-flex ">
										<a href="javascript:void(0); " class="action-btns1 "><i class="feather feather-mail primary text-primary "></i></a>
										<label class="custom-control custom-checkbox-md ">
											<input type="checkbox " class="custom-control-input-success " name="example-checkbox5 " value="option5 ">
											<span class="custom-control-label-md success "></span>
										</label>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-xl-5 col-lg-12 col-md-12 ">
				<div class="card ">
					<div class="card-header border-bottom-0 ">
						<h4 class="card-title ">Up Coming Birthdays</h4>
						<div class="card-options ">
							<a href="javascript:void(0); " class="btn btn-outline-light ">View All</a>
						</div>
					</div>
					<div class="card-body p-3 ">
						<div class="table-responsive ">
							<table class="table text-nowrap mb-0 text-nowrap ">
								<tbody>
									<tr>
										<td class="d-flex ">
											<img class="w-8 h-8 bradius me-3 " src="<?php echo base_url() ?>assets/images/users/4.jpg " alt="media1 ">
											<div class="my-auto ">
												<a href="javascript:void(0); " class="mb-1 font-weight-semibold fs-16 ">Jennifer Kerr</a>
												<p class="text-muted fs-13 mb-0 ">19 Feb 2020 26 Years Old</p>
											</div>
										</td>
										<td class="text-end ">
											<a class="text-success d-block fs-16 " href="javascript:void(0); ">Today</a>
											<a class="btn btn-outline-orange mt-1 " href="javascript:void(0); "><i class="fa fa-birthday-cake me-2 "></i>Wish Now</a>
										</td>
									</tr>
									<tr>
										<td class="d-flex ">
											<img class="w-8 h-8 bradius me-3 " src="<?php echo base_url() ?>assets/images/users/6.jpg " alt="media1 ">
											<div class="my-auto ">
												<a href="javascript:void(0); " class="mb-1 font-weight-semibold fs-16 ">Rebecca Cameron</a>
												<p class="text-muted fs-13 mb-0 ">19 Feb 2020 26 Years Old</p>
											</div>
										</td>
										<td class="text-end ">
											<a class="text-muted d-block " href="javascript:void(0); ">22 Days To Left</a>
										</td>
									</tr>
									<tr>
										<td class="d-flex ">
											<img class="w-8 h-8 bradius me-3 " src="<?php echo base_url() ?>assets/images/users/2.jpg " alt="media1 ">
											<div class="my-auto ">
												<a href="javascript:void(0); " class="mb-1 font-weight-semibold fs-16 ">Jessica Johnston</a>
												<p class="text-muted fs-13 mb-0 ">19 Feb 2020 26 Years Old</p>
											</div>
										</td>
										<td class="text-end ">
											<a class="text-muted d-block " href="javascript:void(0); ">22 Days To Left</a>
										</td>
									</tr>
									<tr>
										<td class="d-flex ">
											<img class="w-8 h-8 bradius me-3 " src="<?php echo base_url() ?>assets/images/users/7.jpg " alt="media1 ">
											<div class="my-auto ">
												<a href="javascript:void(0); " class="mb-1 font-weight-semibold fs-16 ">Lily Ball</a>
												<p class="text-muted fs-13 mb-0 ">19 Feb 2020 26 Years Old</p>
											</div>
										</td>
										<td class="text-end ">
											<a class="text-muted d-block " href="javascript:void(0); ">22 Days To Left</a>
										</td>
									</tr>
									<tr>
										<td class="d-flex ">
											<img class="w-8 h-8 bradius me-3 " src="<?php echo base_url() ?>assets/images/users/12.jpg " alt="media1 ">
											<div class="my-auto ">
												<a href="javascript:void(0); " class="mb-1 font-weight-semibold fs-16 ">Yadira Acklin</a>
												<p class="text-muted fs-13 mb-0 ">19 Feb 2020 26 Years Old</p>
											</div>
										</td>
										<td class="text-end ">
											<a class="text-muted d-block " href="javascript:void(0); ">22 Days To Left</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end app-content-->