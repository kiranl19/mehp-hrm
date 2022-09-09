<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Task Board</div>
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
		<div class="examples">
			<div class="parent1 row">
				<div class="wrapper col-xxl-3 col-xl-6 col-lg-6">
					<div class="card task-board-card">
						<div class="card-header border-0">
							<h4 class="card-title mb-6">In Progress</h4>
						</div>
						<div class="card-body task-board-body pt-0 task-in">
							<div id="left-defaults">
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-primary"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>12-02-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Jquery Issues Fixed</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead line 16-06-2021</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 5</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 3</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<span class="avatar brround bg-light text-dark">2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-primary"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>31-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">HTML Updated</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead line 11:30 Am</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 3</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 6</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-primary"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>21-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Application Bugs fix</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead line 15-03-2021</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 2</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 3</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/6.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/12.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a href="javascript:void(0);" class="btn btn-white  btn-lg addtaskbtn" data-bs-toggle="modal" data-bs-target="#addtaskmodal">
							<i class="fe fe-plus-circle"></i> Add Task
						</a>
					</div>
				</div>
				<div class="wrapper col-xxl-3 col-xl-6 col-lg-6">
					<div class="card task-board-card">
						<div class="card-header border-0">
							<h4 class="card-title mb-6">On Hold</h4>
						</div>
						<div class="card-body task-board-body pt-0 task-hold">
							<div id="right-defaults">
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>21-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">HTML Code Updated</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-danger"></a></li>
											</ul>
											<span class="badge badge-md badge-danger-light">Dealy by 99 days</span>
										</div>
										<p class="fs-13 text-muted mt-3"><i class="feather feather-clock  me-2"></i>Dead line 15-03-2021</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 2</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 4</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/7.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/8.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/14.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>01-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Angular Issues fixed</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-danger"></a></li>
											</ul>
											<span class="badge badge-md badge-danger-light">Dealy by 40 days</span>
										</div>
										<p class="fs-13 text-muted mt-3"><i class="feather feather-clock  me-2"></i>Dead line 15-03-2021</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 6</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 5</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/7.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/8.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/14.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-danger"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>01-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Angular Issues fixed</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-danger"></a></li>
											</ul>
											<span class="badge badge-md badge-danger-light">Dealy by 40 days</span>
										</div>
										<p class="fs-13 text-muted mt-3"><i class="feather feather-clock  me-2"></i>Dead line 15-03-2021</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 15</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 13</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/7.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/8.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/14.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a href="javascript:void(0);" class="btn btn-white  btn-lg addtaskbtn" data-bs-toggle="modal" data-bs-target="#addtaskmodal">
							<i class="fe fe-plus-circle"></i> Add Task
						</a>
					</div>
				</div>
				<div class="wrapper col-xxl-3 col-xl-6 col-lg-6">
					<div class="card task-board-card">
						<div class="card-header border-0">
							<h4 class="card-title mb-6">On Progress</h4>
						</div>
						<div class="card-body task-board-body pt-0 task-on">
							<div id="left-events">
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-warning"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>05-02-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Logo Design</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-warning"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead Line 2:30 Pm</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 5</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 3</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/7.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/8.jpg)"></span>
												<span class="avatar brround bg-light text-dark">5</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-warning"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>11-03-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Marketing materials Issues</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-warning"></a></li>
												<li><a href="javascript:void(0);" class="bg-light"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead Line 2:30 Pm</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 6</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 2</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/15.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a href="javascript:void(0);" class="btn btn-white  btn-lg addtaskbtn" data-bs-toggle="modal" data-bs-target="#addtaskmodal">
							<i class="fe fe-plus-circle"></i> Add Task
						</a>
					</div>
				</div>
				<div class="wrapper col-xxl-3 col-xl-6 col-lg-6">
					<div class="card task-board-card">
						<div class="card-header border-0">
							<h4 class="card-title mb-6">Completed</h4>
						</div>
						<div class="card-body task-board-body pt-0 task-complete">
							<div id="right-events">
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>23-02-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Marketing materials Issues</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-warning"></a></li>
												<li><a href="javascript:void(0);" class="bg-success"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead Line 2:30 Pm</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 3</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 3</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/1.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/9.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/10.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>11-02-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Angular Issues fixed</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-warning"></a></li>
												<li><a href="javascript:void(0);" class="bg-success"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead Line 2:30 Pm</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 1</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 6</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/2.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/11.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>21-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Application Bugs fix</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-warning"></a></li>
												<li><a href="javascript:void(0);" class="bg-success"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead Line 2:30 Pm</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 8</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i>2</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/3.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/13.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/4.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card overflow-hidden">
									<div class="card-status card-status-left bg-success"></div>
									<div class="card-body">
										<div class="d-flex  mb-1">
											<p class="-13 text-muted mb-0"><i class="fe feather-calendar me-1"></i>12-01-2021</p>
											<div class="dropdown dropleft ms-auto">
												<button aria-expanded="false" aria-haspopup="true" class="btn ripple p-0" data-bs-toggle="dropdown">
													<i class="feather-more-horizontal fs-18"></i>
												</button>
												<ul class="dropdown-menu fs-13">
													<li><a href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
													<li><a href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
												</ul>
											</div>
										</div>
										<h5 class="fs-14 mt-3 mb-1 text-capitalize">Design Updated</h5>
										<p class="fs-13 mt-2 text-muted">
											That a reader will be distracted by the readable content of a page when looking
										</p>
										<div class="">
											<ul class="task-status">
												<li><a href="javascript:void(0);" class="bg-primary"></a></li>
												<li><a href="javascript:void(0);" class="bg-warning"></a></li>
												<li><a href="javascript:void(0);" class="bg-success"></a></li>
											</ul>
										</div>
										<p class="fs-13 text-muted"><i class="feather feather-clock  me-2"></i>Dead Line 2:30 Pm</p>
										<div class="d-flex mt-4  task-bored">
											<div class="mt-1">
												<a href="javascript:void(0);" class="attachment"><i class="fe fe-paperclip"></i> 5</a>
												<a href="javascript:void(0);" class="messages"><i class="fe fe-message-square"></i> 9</a>
											</div>
											<div class="avatar-list avatar-list-stacked ms-auto">
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/5.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/14.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/6.jpg)"></span>
												<span class="avatar brround" style="background-image: url(<?php echo base_url() ?>assets/images/users/7.jpg)"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a href="javascript:void(0);" class="btn btn-white  btn-lg addtaskbtn" data-bs-toggle="modal" data-bs-target="#addtaskmodal">
							<i class="fe fe-plus-circle"></i> Add Task
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>