<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Department Type</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#adddepartmentmodal">Add Department Type</a>
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
						<h4 class="card-title">Department Type Summary <?php $GLOBALS = $this->errors; //echo $GLOBALS[E_WARNING] 
																		?></h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">Department Type Name</th>
										<th class="border-bottom-0">Tier</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr = 1;
									foreach ($deptTypes as $deptType) { ?>
										<tr id="id_<?php echo $deptType['dt_id'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="dept_<?php echo $deptType['dt_id'] ?>"><?php echo $deptType['dept_type'] ?></td>
											<td id="tier_<?php echo $deptType['dt_id'] ?>"><?php echo $deptType['tier'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_dept" data-id="<?php echo $deptType['dt_id'] ?>" data-bs-toggle="modal" data-bs-target="#editdepartmentmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_dept" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $deptType['dt_id'] ?>"><i class="feather feather-trash-2"></i></a>
											</td>
										</tr>
									<?php } ?>
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

<div class="modal fade" id="adddepartmentmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Department Type</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form id="dept_form">
				<div class="modal-body">

					<div class="form-group">
						<label class="form-label">Add Department Type</label>
						<input type="text" class="form-control" placeholder="Department Type" name="dept_type" id="dept_type" value="">
					</div>
					<div class="form-group">
						<label class="form-label">Tier</label>
						<input type="text" class="form-control" placeholder="Tier" name="tier" id="tier" value="">
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
					<input type="submit" class="btn btn-primary add_dept" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Add Department Type Modal  -->

<!--Edit Department Type Modal -->
<div class="modal fade" id="editdepartmentmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Department Type</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<form id="up_dept_form">
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Edit Department Type</label>
						<input type="hidden" class="form-control" name="dt_id" id="up_dt_id" value="">
						<input type="text" class="form-control" name="dept_type" id="up_dept_name" placeholder="Department Type" value="">
					</div>
					<div class="form-group">
						<label class="form-label">Tier</label>
						<input type="text" class="form-control" name="tier" id="up_tier" placeholder="Tier" value="">
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
					<input type="submit" class="btn btn-primary" value="Update">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Edit Department Type Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
	$(function() {
		$('#dept_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			// alert(form_data);
			var tbody = $('#hr-table').children('tbody');
			var table = tbody.length ? tbody : $('#hr-table');
			// console.log(serial.recordsTotal);
			var table = $('#hr-table').DataTable();
			var serial1 = table.page.info();
			var serial = serial1.recordsTotal;
			serial = serial + 1;
			console.log(serial);
			$.ajax({
				url: 'add-dept-type',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {

					if (msg.success == 'success') {
						Swal.fire({
							title: '<h6 class="text-success"><b>Department Type Added Successfully</b></h6>',
							icon: 'success'
						})
						var row = $('.table-vcenter').DataTable().row.add([
							serial, msg.dept_type, msg.tier, '<a class="btn btn-primary btn-icon btn-sm edit_dept" data-bs-toggle="modal" data-id="' + msg.dt_id + '" data-bs-target="#editdepartmentmodal">' +
							'<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>', '<a class=\"btn btn-danger btn-icon btn-sm delete_dept\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.dt_id + '"><i class="feather feather-trash-2"></i></a>'
						]).draw();
						row.nodes().to$().attr('id', 'id_' + msg.dt_id);
						row.nodes().to$().attr('class', 'serial');

						$('#id_' + msg.dt_id).find("td:eq(1)").attr('id', 'dept_' + msg.dt_id);

						$('#dept_type').val('');
						$('#adddepartmentmodal').modal('hide');
					}
				}

			});

		})

		$('table').on('click', '.edit_dept', function() {
			var dt_id = $(this).attr('data-id');
			$.ajax({
				url: 'get-dept-type-by-id',
				type: 'POST',
				dataType: 'json',
				data: {
					dt_id: dt_id
				},
				success: function(msg) {
					/* console.log(msg.dept.dt_id) */
					$('#up_dt_id').val(msg.dept.dt_id);
					$('#up_dept_name').val(msg.dept.dept_type);
					$('#up_tier').val(msg.dept.tier);
				}
			})
		})

		$('#up_dept_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			var dt_id = $('#up_dt_id').val();
			var dept = $('#up_dept_name').val();


			$.ajax({
				url: 'update-dept-type',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {
					console.log(msg);
					if (msg.success == 'success') {
						$('#editdepartmentmodal').modal('hide');
						Swal.fire({
							title: '<h6 class="text-success"><b>Department Type Updated Successfully</b></h6>',
							icon: 'success'
						})
						$('#dept_' + dt_id).html(msg.dept_type);
						$('#tier_' + dt_id).html(msg.tier);
					}
				}
			})
		})


		$('table').on('click', '.delete_dept', function() {
			var dt_id = $(this).attr('data-id');

			var myTable = $('.table-vcenter').DataTable();

			var i = 0;

			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {

					$.ajax({
						url: 'delete-dept-type',
						type: 'POST',
						dataType: 'JSON',
						data: {
							dt_id: dt_id
						},
						success: function(msg) {
							if (msg.success == 'success') {
								Swal.fire(
									'Deleted!',
									'Department Type has been deleted.',
									'success'
								)
								myTable.row('#id_' + dt_id).remove().draw();

								var i = 0;
								$('.table-vcenter tbody tr').find('td:first').each(function() {
									if ($(this).html() != 'No data available in table') {
										i++;
										$(this).html(i);
									}
								});
							}
						}
					})
				}
			})
		})
	})
</script>
<?php /* ?>
<script src="<?php echo base_url() ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<?php  */ ?>



<!-- <script src="<?php echo base_url() ?>assets/plugins/p-scrollbar/p-scrollbar.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/plugins/p-scrollbar/p-scroll1.js"></script> -->
<script src="<?php echo base_url() ?>assets/js/hr/hr-Department.js"></script>
