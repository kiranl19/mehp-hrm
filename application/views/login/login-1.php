<body class="login-img">

	<div class="page  responsive-log login-bg">
		<div class="page-single">
			<div class="container">
				<div class="row">
					<div class="col mx-auto">
						<div class="row justify-content-center">
							<div class="col-md-8 col-lg-6 col-xl-4 col-xxl-4">
								<div class="card my-5">
									<div class="p-4 pt-6 text-center">
										<h4 class="mb-2">Login</h4>
										<!-- <h4 class="mb-2">Login</h4>
										<hr class="border-dark"> -->
										<img src="<?php echo base_url() ?>assets/images/me/MELogo.png" alt="" class="m-4" style="width:85%">
									</div>
									<form class="card-body pt-2" id="login" name="login" action="auth" method="POST">
										<div class="form-group">
											<div class="input-group mb-4">
												<div class="input-group">
													<input class="form-control emp_id" placeholder="Employee ID" name="emp_id" id="emp_id" maxlength="8" autocomplete="off">
													<a href="" class="input-group-text">
														<i class="fe fe-mail" aria-hidden="true"></i>
													</a>
												</div>
												<span class="text-danger error"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group mb-4">
												<div class="input-group" id="Password-toggle">
													<input class="form-control" type="password" placeholder="Password" name="password" id="password" autocomplete="off">
													<a href="" class="input-group-text">
														<i class="fe fe-eye-off" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="text-danger mb-2">
											<?php if ($this->session->flashdata('error')){ 
												echo '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp;' . $this->session->flashdata('error');
											} ?>
										</div>
										<div class="form-group">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="autologin" value="1" />
												<span class="custom-control-label">Remember me</span>
											</label>
										</div>

										<div class="submit">
											<button type="submit" class="btn btn-primary btn-block">Login</button>
										</div>
										<div class="text-center mt-3" style="float: right;">
											<p class="mb-2"><a href="javascript:void(0);">Forgot Password...?</a></p>
										</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> -->
	<script>
		$('.emp_id').on('input', function (event) {
			var val = $(this).val();
			this.value = this.value.replace(/[^0-9]/g, '');
			
			
			var re = /[^0-9]/g;    
			if (re.test(val) ){ 
				$('.error').html('Please enter number only..!');
			}else{
				$('.error').html('');
			}
		});
	</script>

	<!-- Jquery js-->

	<!-- Bootstrap js-->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Select2 js -->
	<script src="<?php echo base_url() ?>assets/plugins/select2/select2.full.min.js"></script>

	<!-- P-scroll js-->
	<script src="<?php echo base_url() ?>assets/plugins/p-scrollbar/p-scrollbar.js"></script>

	<!--Sticky js -->
	<script src="<?php echo base_url() ?>assets/js/sticky.js"></script>


	<!-- Color Theme js -->
	<script src="<?php echo base_url() ?>assets/js/themeColors.js"></script>

	<!-- custom js -->
	<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
