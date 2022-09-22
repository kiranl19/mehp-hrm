<style>
	.card1 {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
		transition: 0.3s;
	}

	.card1:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.6);
	}
</style>
<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Employee Profile</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<!-- <a href="hr-addemployee.html" class="btn btn-primary me-3">Add New Employee</a> -->
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
			<!-- <div class="col-xl-3 col-md-12 col-lg-12">
				<div class="card box-widget widget-user">
					<div class="card-body text-center">
						<div class="widget-user-image mx-auto text-center">
							<img class="avatar avatar-xxl brround rounded-circle" alt="img" src="<?php echo base_url() ?>assets/images/profile/<?php echo $_SESSION['profile'] ?>">
						</div>
						<div class="pro-user mt-3">
							<h5 class="pro-user-username text-dark mb-1 fs-16"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?></h5>
							<h6 class="pro-user-desc text-muted fs-12"><?php echo $_SESSION['designation'] ?></h6>
						</div>
						<div class="rating-stars stars-example-fontawesome block" id="rating-1" data-stars="2"></div>
					</div>
					<div class="card-footer p-0">
						<div class="row">
							<div class="col-4 text-center py-5 border-end">
								<h5 class="fs-12 font-weight-semibold mb-3">January</h5>
								<h5 class="mb-2">
									<span class="fs-18 text-success">22</span>
									<span class="my-auto fs-9 font-weight-normal  ms-1 me-1">/</span>
									<span class="fs-18 font-weight-semibold text-dark">31</span>
								</h5>
								<h5 class="fs-12 mb-0">Attendance</h5>
							</div>
							<div class="col-4  py-5 text-center border-end">
								<h5 class="fs-12 font-weight-semibold mb-3">Year-2021</h5>
								<h5 class="mb-2">
									<span class="fs-18 text-orange">0</span>
									<span class="my-auto fs-9 font-weight-normal  ms-1 me-1">/</span>
									<span class="fs-18 font-weight-semibold text-dark">41</span>
								</h5>
								<h5 class="fs-12 mb-0">Leaves</h5>
							</div>
							<div class="col-4 text-center py-5">
								<h5 class="fs-12 font-weight-semibold mb-3">Year-2021</h5>
								<h5 class="mb-2">
									<span class="fs-18 text-primary">0</span>
								</h5>
								<h5 class="fs-12 mb-0">Awards</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header  border-0">
						<div class="card-title">Statistics-2021</div>
					</div>
					<div class="card-body">
						<div class="row mb-7">
							<div class="col-4 text-center">
								<div class="chart-circle chart-circle-sm" data-value="0.89" data-thickness="5" data-color="#3366ff">
									<div class="chart-circle-value text-primary">89</div>
								</div>
								<h6 class="fs-14 font-weight-semibold mt-3">Attendance</h6>
							</div>
							<div class="col-4 text-center">
								<div class="chart-circle chart-circle-sm" data-value="0.23" data-thickness="5" data-color="#fe7f00">
									<div class="chart-circle-value text-secondary">23</div>
								</div>
								<h6 class="fs-14 font-weight-semibold mt-3">Projects</h6>
							</div>
							<div class="col-4 text-center">
								<div class="chart-circle chart-circle-sm" data-value="0.67" data-thickness="5" data-color="#0dcd94">
									<div class="chart-circle-value text-success">67%</div>
								</div>
								<h6 class="fs-14 font-weight-semibold mt-3">Performance</h6>
							</div>
						</div>
						<div class="d-flex align-items-end justify-content-between mg-b-5">
							<h6 class="">This Week</h6>
							<h6 class="font-weight-bold mb-1">01</h6>
						</div>
						<div class="progress progress-sm mb-5">
							<div class="progress-bar bg-danger w-10"></div>
						</div>
						<div class="d-flex align-items-end justify-content-between mg-b-5">
							<h6 class="">This Month</h6>
							<h6 class="font-weight-bold mb-1">05</h6>
						</div>
						<div class="progress progress-sm mb-5">
							<div class="progress-bar bg-info w-30"></div>
						</div>
						<div class="d-flex align-items-end justify-content-between mg-b-5">
							<h6 class="">This Year</h6>
							<h6 class="font-weight-bold mb-1">22</h6>
						</div>
						<div class="progress progress-sm mb-5">
							<div class="progress-bar bg-warning w-50"></div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="tab-menu-heading hremp-tabs p-0 ">
					<div class="tabs-menu1">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class="ms-4"><a href="#tab5" class="active" data-bs-toggle="tab">Personal Details</a></li>
							<li><a href="#tab10" data-bs-toggle="tab">Profile</a></li>
							<li><a href="#tab11" data-bs-toggle="tab">Relations</a></li>
							<li><a href="#tab9" data-bs-toggle="tab">Address</a></li>
							<li><a href="#tab6" data-bs-toggle="tab">Company Details</a></li>
							<li><a href="#tab7" data-bs-toggle="tab">Bank Details</a></li>
							<li><a href="#tab8" data-bs-toggle="tab">Upload Documents</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body tabs-menu-body hremp-tabs1 p-0">

					<div class="tab-content">
						<div class="tab-pane active" id="tab5">
							<div class="card-body">
								<h4 class="mb-4 font-weight-bold">Basic</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Employee Id</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="Employee Id" value="<?php echo $emp['emplid'] ?>" readonly>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Employee Name</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="fname" id="fname" class="form-control mb-md-0 mb-5" placeholder="First Name" value="<?php echo $emp['fname'] ?>" readonly>
													<span class="text-muted"></span>
												</div>
												<div class="col-md-6">
													<input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="<?php echo $emp['lname'] ?>" readonly>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Date Of Birth</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-sm-6">
													<input type="date" name="dob" id="dob1" class="form-control" placeholder="DD-MM-YYY" value="<?php echo $emp['birthdt'] ?>" readonly>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Date Of Joining</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-sm-6">
													<input type="date" name="doj" id="doj" class="form-control" placeholder="DD-MM-YYYY" value="<?php echo $emp['doj'] ?>" readonly>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label for="" class="form-lable mb-0 mt-2">Email</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-sm-6">
													<label class="form-label">ME</label>
													<input type="email" class="form-control" name="company_email_me" id="company_email_me" placeholder="Market-Expertise Email" value="<?php echo $emp['company_email_me'] ?>" readonly>
												</div>
												<div class="col-sm-6">
													<label class="form-label">HP</label>
													<input type="email" class="form-control" name="company_email_hp" id="company_email_hp" placeholder="Hello-Prospect Email" value="<?php echo $emp['company_email_hp'] ?>" readonly>
												</div>
												<div class="col-sm-6">
													<label class="form-label">TMB</label>
													<input type="email" class="form-control" name="company_email_tmb" id="company_email_tmb" placeholder="The-Media-Bulletin Email" value="<?php echo $emp['company_email_tmb'] ?>" readonly>
												</div>
												<div class="col-sm-6">
													<label class="form-label">Other</label>
													<input type="email" class="form-control" name="company_email_int" id="company_email_int" placeholder="Personal Email" value="<?php echo $emp['company_email_int'] ?>" readonly>
												</div>

											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Primary Contact</label>
										</div>
										<div class="col-md-9">
											<input type="text" name="phone" id="phone1" class="form-control" placeholder="Phone Number" value="<?php echo $emp['primary_contact'] ?>" readonly>
										</div>
									</div>
								</div>

								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label">Gender</label>
										</div>
										<div class="col-md-9">
											<div class="row">
												<?php foreach ($gender as $gender) : ?>
													<div class="col-sm-2">
														<div class="custom-controls-stacked d-md-flex">
															<label class="custom-control custom-radio me-4">
																<input type="radio" class="custom-control-input" name="gender" value="<?php echo $gender['g_id'] ?>" <?php if ($gender['g_id'] == $emp['fk_gender']) echo "checked" ?> disabled>
																<span class="custom-control-label"><?php echo $gender['gend_nm'] ?></span>
															</label>
														</div>
													</div>
												<?php endforeach; ?>
											</div>

										</div>
									</div>
								</div>

								<div class="form-group ">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Email</label>
										</div>
										<div class="col-md-9">
											<input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $emp['company_email_int'] ?>" readonly>
										</div>
									</div>
								</div>


								<h4 class="mb-5 mt-7 font-weight-bold">Account Login</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Employee Id</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Employee ID" value="<?php echo $emp['emplid'] ?>" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Password</label>
										</div>
										<div class="col-md-9">
											<input type="password" class="form-control" placeholder="password" value="12345" readonly>
										</div>
									</div>
								</div>
								<div class="form-group mt-7">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label">Email Notification:</label>
										</div>
										<div class="col-md-9">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">On/Off</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="tab-pane" id="tab10">
							<div class="card-body">
								<form id="profile_details">
									<div class="form-group">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Employee Id</label>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Employee Id" name="emp_id6" id="emp_id6" value="<?php echo $emp['emplid'] ?>" readonly>
											</div>
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Blood Group</label>
											</div>
											<div class="col-md-4">
												<select name="b_group" id="b_group" class="form-control custom-select select2" data-placeholder="Select Group">
													<option label="Select Group"></option>
													<option value="1" <?php if ($profile['blood_group'] == 1) echo "selected" ?>>A+</option>
													<option value="2" <?php if ($profile['blood_group'] == 2) echo "selected" ?>>B+</option>
													<option value="3" <?php if ($profile['blood_group'] == 3) echo "selected" ?>>O+</option>
													<option value="4" <?php if ($profile['blood_group'] == 4) echo "selected" ?>>AB+</option>
													<option value="5" <?php if ($profile['blood_group'] == 5) echo "selected" ?>>A-</option>
													<option value="6" <?php if ($profile['blood_group'] == 6) echo "selected" ?>>B-</option>
													<option value="7" <?php if ($profile['blood_group'] == 7) echo "selected" ?>>O-</option>
													<option value="8" <?php if ($profile['blood_group'] == 8) echo "selected" ?>>AB-</option>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group ">
										<div class="row g-0">
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Date Of Birth</label>
											</div>
											<div class="col-md-4">
												<input type="date" name="dob" id="dob" class="form-control" placeholder="DD-MM-YYY" value="<?php echo $emp['birthdt'] ?>">
											</div>
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Place Of Birth</label>
											</div>
											<div class="col-md-4">
												<input type="text" name="pob" id="pob" class="form-control" placeholder="Place of Birth" value="<?php echo $profile['place_of_birth'] ?>">
											</div>
										</div>
									</div>

									<div class="form-group ">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Is Indian?</label>
											</div>
											<div class="col-md-4">
												<select name="is_indian" id="is_indian" class="form-control custom-select select2" data-placeholder="Select Group">
													<option label="Select"></option>
													<option value="1" <?php if ($profile['is_indian'] == 1) echo "selected" ?>>Yes</option>
													<option value="0" <?php if ($profile['is_indian'] == 0) echo "selected" ?>>No</option>
												</select>
											</div>
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Nationality</label>
											</div>
											<div class="col-md-4">
												<input type="text" name="nationality" id="nationality" class="form-control" placeholder="Nationality" value="<?php echo $profile['nationality'] ?>">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Marital Status</label>
											</div>
											<div class="col-md-4">
												<select name="m_status" id="m_status" class="form-control custom-select select2" data-placeholder="Select">
													<option label="Select"></option>
													<option value="1" <?php if ($profile['marital_status'] == 1) echo "selected" ?>>Single</option>
													<option value="2" <?php if ($profile['marital_status'] == 2) echo "selected" ?>>Married</option>
													<option value="3" <?php if ($profile['marital_status'] == 3) echo "selected" ?>>Divorced</option>
												</select>
											</div>
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Siblings</label>
											</div>
											<div class="col-md-4">
												<input type="text" name="siblings" id="siblings" class="form-control" placeholder="Siblings" value="<?php echo $profile['siblings'] ?>">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Physically Challenged</label>
											</div>
											<div class="col-md-4">
												<select name="phy_challenged" id="phy_challenged" class="form-control custom-select select2" data-placeholder="Select">
													<option label="Select"></option>
													<option value="1" <?php if ($profile['physicallly_challenged'] == 1) echo "selected" ?>>Yes</option>
													<option value="0" <?php if ($profile['physicallly_challenged'] == 0) echo "selected" ?>>No</option>
												</select>
											</div>

											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Religion</label>
											</div>
											<div class="col-md-4">
												<input type="text" name="religion" id="religion" class="form-control" placeholder="Religion" value="<?php echo $profile['religion'] ?>">
											</div>

										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">Total Work Experience</label>
											</div>
											<div class="col-md-4">
												<input type="text" name="experience" id="experience" class="form-control" placeholder="Total Work Experience" value="<?php echo $profile['total_wrk_exp'] ?>">
											</div>
											<div class="col-md-2">
												<label class="form-label mb-0 mt-2">No. of Company Worked</label>
											</div>
											<div class="col-md-4">
												<input type="text" name="no_of_comp" id="no_of_comp" class="form-control" placeholder="No. of Company Worked" value="<?php echo $profile['no_of_compny_wrkd'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group text-end">
										<input type="button" class="btn btn-danger w-15" value="Clear">
										<input type="submit" class="btn btn-primary w-15" value="Submit">
									</div>
								</form>
							</div>
						</div>

						<div class="tab-pane" id="tab9">
							<div class="card-body">
								<form id="address_details">
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Employee Id</label>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-6">
														<input type="text" class="form-control" placeholder="Employee Id" name="emp_id5" id="emp_id5" value="<?php echo $emp['emplid'] ?>" readonly>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">User Name</label>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-6">
														<input type="text" class="form-control" placeholder="First Name" name="add_fname" id="add_fname" value="<?php echo $emp['fname'] ?>">
													</div>
													<div class="col-sm-6">
														<input type="text" class="form-control" placeholder="Last Name" name="add_lname" id="add_lname" value="<?php echo $emp['lname'] ?>">
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Email</label>
											</div>
											<div class="col-md-9">
												<input type="text" class="form-control" placeholder="Email" name="email" id="email1" value="<?php echo $emp['company_email_int'] ?>">
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Address Type</label>
											</div>
											<div class="col-md-9">
												<select name="add_type" id="add_type" class="form-control custom-select select2" data-placeholder="Select Type">
													<option label="Select Type"></option>
													<?php foreach ($addTypes as $addType) : ?>
														<option value="<?php echo $addType['adty_id'] ?>" <?php if ($address['fk_address_type'] == $addType['adty_id']) echo "selected" ?>><?php echo $addType['add_type'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>

										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Address 1</label>
											</div>
											<div class="col-md-9">
												<textarea name="curr_add" id="curr_add" rows="3" class="form-control" placeholder="Address1"><?php echo $address['address1'] ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Address 2</label>
											</div>
											<div class="col-md-9">
												<textarea name="pr_add" id="pr_add" rows="3" class="form-control" placeholder="Address2"><?php echo $address['address2'] ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">City</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="city" id="city" placeholder="City" class="form-control" value="<?php echo $address['city'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">State</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="state" id="state" placeholder="State" class="form-control" value="<?php echo $address['state'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Phone</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" value="<?php echo $address['mobile'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Emergency Contact Number 01</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="emrg_phone1" id="emrg_phone1" class="form-control" placeholder="Contact Number01" value="<?php echo $address['phone1'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Emergency Contact Number 02</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="emrg_phone2" id="emrg_phone2" class="form-control" placeholder="Contact Number02" value="<?php echo $address['phone2'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group text-end">
										<input type="button" class="btn btn-danger w-15" value="Clear">
										<input type="submit" class="btn btn-primary w-15" value="Submit">
									</div>
								</form>
							</div>

						</div>


						<div class="tab-pane" id="tab6">
							<div class="card-body">
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Employee ID</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="#ID" value="#2987">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Department</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Department" value="Designing Department">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Designation</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="Designation" value="Web Designer">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Date Of Joining</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYYY" value="05-05-2017">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Resignation Date</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYYY">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Termination Date</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control fc-datepicker" placeholder="DD-MM-YYYY">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Credit Leaves
												<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Unused leaves for the Employee">?</span>
											</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="0">
										</div>
									</div>
								</div>
								<h4 class="mb-5 mt-7 font-weight-bold">Salary</h4>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Type</label>
										</div>
										<div class="col-md-9">
											<select class="form-control custom-select select2">
												<option value="0" selected>Full-Time</option>
												<option value="1">Part-Time</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label mb-0 mt-2">Salary</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="$Salary" value="$28000">
										</div>
									</div>
								</div>
								<div class="form-group mt-7">
									<div class="row">
										<div class="col-md-3">
											<label class="form-label">Status:</label>
										</div>
										<div class="col-md-9">
											<label class="custom-switch">
												<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
												<span class="custom-switch-indicator"></span>
												<span class="custom-switch-description">Active/Inactive</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab7">
							<div class="card-body">
								<form id="bank_details">
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Employee ID</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="emp_id3" id="emp_id3" class="form-control" placeholder="Employee ID" value="<?php echo $emp['emplid'] ?>" readonly>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Account Holder</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="ac_full_name" id="ac_full_name" class="form-control" placeholder="Account Holder Name" value="<?php echo $bank['account_holder_name'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Account Type</label>
											</div>
											<div class="col-md-9">
												<select name="acc_type" id="acc_type" class="form-control custom-select select2" data-placeholder="Select">
													<option label="Select"></option>
													<option value="1" <?php if ($bank['account_type'] == 1) echo "selected" ?>>Current</option>
													<option value="2" <?php if ($bank['account_type'] == 2) echo "selected" ?>>Savings</option>
													<option value="3" <?php if ($bank['account_type'] == 3) echo "selected" ?>>Salary</option>
													<option value="4" <?php if ($bank['account_type'] == 4) echo "selected" ?>>NRI Account</option>
													<option value="5" <?php if ($bank['account_type'] == 5) echo "selected" ?>>Recurring Deposit</option>
													<option value="6" <?php if ($bank['account_type'] == 6) echo "selected" ?>>Fixed Deposit</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Account Number</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_no" id="acc_no" class="form-control" placeholder="Account Number" value="<?php echo $bank['account_number'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Bank Name</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_bank_name" id="acc_bank_name" class="form-control" placeholder="Bank Name" value="<?php echo $bank['bank_name'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Branch Location</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_branch" id="acc_branch" class="form-control" placeholder="Branch Location" value="<?php echo $bank['branch_name'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Bank Code (IFSC)
													<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Bank Identify Number in your Country">?</span>
												</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_ifsc" id="acc_ifsc" class="form-control" placeholder="IFSC Code" value="<?php echo $bank['account_ifsc'] ?>">
												<span class="text-danger ifsc_error"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Tax Payer ID (PAN)
													<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Taxpayer Identification Number Used in your Country">?</span>
												</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_pan" id="acc_pan" class="form-control" placeholder="PAN Number" value="<?php echo $bank['account_pan'] ?>">
												<span class="text-danger pan_error"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Provident Fund Number
													<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Provident Fund Number">?</span>
												</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_pf" id="acc_pf" class="form-control" placeholder="Provident Fund Number" value="<?php echo $bank['pf_number'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">UAN Number
													<span class="form-help" data-bs-toggle="tooltip" data-bs-placement="top" title="UAN Number">?</span>
												</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="acc_uan" id="acc_uan" class="form-control" placeholder="UAN Number" value="<?php echo $bank['uan'] ?>">
											</div>
										</div>
									</div>
									<div class="form-group text-end">
										<input type="button" class="btn btn-danger w-15" value="Clear">
										<input type="submit" class="btn btn-primary w-15" value="Submit">
									</div>
							</div>
							</form>
						</div>
						<div class="tab-pane" id="tab8">
							<div class="card-body">
								<form id="doc_details">
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<label class="form-label mb-0 mt-2">Employee ID</label>
											</div>
											<div class="col-md-9">
												<input type="text" name="emp_id4" id="emp_id4" class="form-control" placeholder="Employee ID" value="<?php echo $emp['emplid'] ?>" readonly>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">Upload Photo</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_photo" id="doc_photo">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">Resume</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_resume" id="doc_resume">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">ID Proof</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_id_proof" id="doc_id_proof">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">Offer Letter</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_offer_ltr" id="doc_offer_ltr">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">Joining Letter</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_jng_ltr" id="doc_jng_ltr">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">Agreement Letter</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_aggr_ltr" id="doc_aggr_ltr">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-md-3">
												<div class="form-label mb-0 mt-2">Experience Letter</div>
											</div>
											<div class="col-md-9">
												<div class="form-group">
													<label for="form-label" class="form-label"></label>
													<input class="form-control" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" name="doc_expr_ltr" id="doc_expr_ltr">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9" style="display: none;">
												<textarea class="form-control" name="text1" id="text1"></textarea>
											</div>
										</div>
									</div>
									<div class="form-group text-end">
										<input type="button" class="btn btn-danger w-15" value="Clear">
										<input type="submit" class="btn btn-primary w-15" value="Submit">
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane" id="tab11">
							<div class="card-body">
								<form id="relation_details">

									<?php if (!empty($relations)) { ?>
										<?php foreach ($relations as $rel) : ?>
											<div id="clone_<?php echo $rel['er_id'] ?>" data-id="<?php echo $rel['er_id'] ?>">
												<div class="clone">

													<div class="card card1 p-4 rounded m-2">

														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<div class="form-label mb-0 mt-2">Employee ID</div>
																	<input type="hidden" class="form-control" value="<?php echo $rel['er_id'] ?>" name="er_id[]" id="er_id">
																</div>
																<div class="col-md-3">
																	<input type="text" name="emp_id11[]" id="emp_id11" class="form-control" placeholder="Employee Id" value="<?php echo $emp['emplid'] ?>" readonly>
																</div>
																<div class="col-md-3">
																	<div class="form-label mb-0 mt-2">Relation</div>
																</div>
																<div class="col-md-3">
																	<select name="relation[]" id="relation" class="form-control custom-select select2" data-placeholder="Select">
																		<option label="Relation"></option>
																		<?php foreach ($relationships as $relation) : ?>
																			<option value="<?php echo $relation['rs_id'] ?>" <?php if ($rel['relation'] == $relation['rs_id']) echo 'selected' ?>><?php echo $relation['name'] ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>

															</div>

														</div>
														<div class="form-group">
															<div class="row">
																<div class="col-md-3">
																	<div class="form-label mb-0 mt-2">Name</div>
																</div>
																<div class="col-md-3">
																	<input type="text" name="rel_name[]" id="rel_name" class="form-control" placeholder="Name" value="<?php echo $rel['rel_name'] ?>">
																</div>
																<div class="col-md-3">
																	<div class="form-label mb-0 mt-2">Date of Birth</div>
																</div>
																<div class="col-md-3">
																	<input type="date" name="rel_dob[]" id="rel_dob" class="form-control" placeholder="DD-MM-YYY" value="<?php echo $rel['rel_dob'] ?>">
																</div>
															</div>
														</div>
														<div class="form-group">

															<div class="row">
																<div class="col-md-3">
																	<div class="form-label mb-0 mt-2">Occupation</div>
																</div>
																<div class="col-md-3">
																	<select name="rel_occ[]" id="rel_occ" class="form-control custom-select select2" data-placeholder="Select">
																		<option label="Occupation"></option>
																		<?php foreach ($occupations as $occupation) : ?>
																			<option value="<?php echo $occupation['or_id'] ?>" <?php if ($rel['occupation'] == $occupation['or_id']) echo 'selected' ?>><?php echo $occupation['name'] ?></option>
																		<?php endforeach; ?>
																	</select>
																</div>
																<div class="col-md-3">
																	<div class="form-label mb-0 mt-2">Occupation Name</div>
																</div>
																<div class="col-md-3">
																	<input type="text" name="rel_occ_name[]" id="rel_occ_name" class="form-control" placeholder="Occupation Name" value="<?php echo $rel['occupation_name'] ?>">
																</div>
															</div>
														</div>
														<div>
															<a href="javascript:void(0)" class="p-1 rounded add" style="float: right;"><i class="fa fa-plus"></i></a>
															<a href="javascript:void(0)" class="p-1 rounded removePermanent" style="float: right;" data-er_id="<?php echo $rel['er_id'] ?>"><i class="fa fa-minus"></i></a>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									<?php } else {  ?>

										<div id="clone">
											<div class="clone">

												<div class="card card1 p-4 rounded m-2">

													<div class="form-group">
														<div class="row">
															<div class="col-md-3">
																<div class="form-label mb-0 mt-2">Employee ID</div>
															</div>
															<div class="col-md-3">
																<input type="text" name="emp_id11[]" id="emp_id11" class="form-control" placeholder="Employee Id" value="<?php echo $emp['emplid'] ?>" readonly>
															</div>
															<div class="col-md-3">
																<div class="form-label mb-0 mt-2">Relation</div>
															</div>
															<div class="col-md-3">
																<select name="relation[]" id="relation" class="form-control custom-select select2" data-placeholder="Select">
																	<option label="Relation"></option>
																	<?php foreach ($relationships as $relation) : ?>
																		<option value="<?php echo $relation['rs_id'] ?>"><?php echo $relation['name'] ?></option>
																	<?php endforeach; ?>
																</select>
															</div>

														</div>

													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-md-3">
																<div class="form-label mb-0 mt-2">Name</div>
															</div>
															<div class="col-md-3">
																<input type="text" name="rel_name[]" id="rel_name" class="form-control" placeholder="Name" value="">
															</div>
															<div class="col-md-3">
																<div class="form-label mb-0 mt-2">Date of Birth</div>
															</div>
															<div class="col-md-3">
																<input type="date" name="rel_dob[]" id="rel_dob" class="form-control" placeholder="DD-MM-YYY" value="">
															</div>
														</div>
													</div>
													<div class="form-group">

														<div class="row">
															<div class="col-md-3">
																<div class="form-label mb-0 mt-2">Occupation</div>
															</div>
															<div class="col-md-3">
																<select name="rel_occ[]" id="rel_occ" class="form-control custom-select select2" data-placeholder="Select">
																	<option label="Occupation"></option>
																	<?php foreach ($occupations as $occupation) : ?>
																		<option value="<?php echo $occupation['or_id'] ?>"><?php echo $occupation['name'] ?></option>
																	<?php endforeach; ?>
																</select>
															</div>
															<div class="col-md-3">
																<div class="form-label mb-0 mt-2">Occupation Name</div>
															</div>
															<div class="col-md-3">
																<input type="text" name="rel_occ_name[]" id="rel_occ_name" class="form-control" placeholder="Occupation Name" value="">
															</div>
														</div>
													</div>
													<div>
														<a href="javascript:void(0)" class="p-1 rounded add" style="float: right;"><i class="fa fa-plus"></i></a>
														<a href="javascript:void(0)" class="p-1 rounded remove" style="float: right;"><i class="fa fa-minus"></i></a>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
									<div id="cloned" class="cloned">
									</div>

									<div class="form-group text-end">
										<input type="button" class="btn btn-danger w-15" value="Clear">
										<input type="submit" class="btn btn-primary w-15" value="Submit">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Row-->

	</div><!-- end app-content-->
</div>

<script src="<?php echo base_url() ?>assets/plugins/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/operations/operations.js"></script>

<script>
	$(document).ready(function() {
		$('#add_type').on("select2:select", function(e) {
			var add_type = $(this).val();
			var emp_id = $("#emp_id5").val();

			$.ajax({
				url: 'get-emp-address-by-add-type',
				dataType: 'json',
				method: 'POST',
				data: {
					add_type: add_type,
					emp_id: emp_id
				},
				success: function(resp) {
					console.log(resp.msg);
					if (resp.msg == 'success') {
						$('#curr_add').val(resp.data['address1']);
						$('#pr_add').val(resp.data['address2']);
						$('#city').val(resp.data['city']);
						$('#state').val(resp.data['state']);
					} else {
						$('#curr_add').val('');
						$('#pr_add').val('');
						$('#city').val('');
						$('#state').val('');

					}
				}
			})
		});
	});


	$(function() {
		var sr = 0;

		function clone() {
			sr++;
			var div = $('div[id^="clone"]:last');
			<?php if (!empty($relations)) { ?>
				var clone = $('#clone_<?php echo $rel['er_id'] ?>').clone()
			<?php } else { ?>
				var clone = $('#clone').clone()
			<?php } ?>
			clone.find("#rel_name").removeAttr('value');
			clone.find("#rel_occ_name").removeAttr('value');
			clone.find("#rel_name").attr('value', '');
			clone.find("#rel_occ_name").attr('value', '');


			clone.find('select option').removeAttr('selected');
			clone.find('span.select2').remove();
			clone.find('#er_id').remove();

			clone.find('.clone').attr('id', 'cloned_' + sr);


			$('#cloned').append(clone.html())

			$('select').select2();

			$('.form-group').find('select').select2({
				width: '100%'
			});
		}
		$('form').on('click', '.add', function() {
			clone();
		})

		$('form').on('click', '.remove', function() {
			$("#cloned .clone:last").remove();
		})

		$('form').on('click', '.removePermanent', function() {
			var numItems = $('#relation_details').children('div').length;

			var er_id = $(this).attr('data-er_id');

			Swal.fire({
				title: 'Delete this Relation?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {

					$.ajax({
						url: 'ajax-delete-relations',
						type: 'POST',
						dataType: 'JSON',
						data: {
							er_id: er_id
						},
						success: function(msg) {
							if (msg.status == 'success') {

								if (numItems == 3) {
									clone();
								}

								$("#clone_" + er_id).css('display', 'none');
							} else {
								Swal.fire({
									title: '<h6 class="text-danger"><b>Something Went Wrong...!</b></h6>',
									icon: 'success'
								})
							}
						}
					})
				}
			})
		})
	})
</script>
