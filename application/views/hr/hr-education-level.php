<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Education Level</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#adddepartmentmodal">Add Education Level</a>
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
						<h4 class="card-title">Education Level Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">Education Level</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr = 1;
									foreach ($edu as $edu) { ?>
										<tr id="id_<?php echo $edu['edl_id'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="edl_<?php echo $edu['edl_id'] ?>"><?php echo $edu['edu_level_nm'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_edl" data-id="<?php echo $edu['edl_id'] ?>" data-bs-toggle="modal" data-bs-target="#editdepartmentmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_dept" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $edu['edl_id'] ?>"><i class="feather feather-trash-2"></i></a>
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
				<h5 class="modal-title">Add Education Level</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form id="dept_form">
				<div class="modal-body">

					<div class="form-group">
						<label class="form-label">Add Education Level</label>
						<input type="text" class="form-control" placeholder="Education Level" name="edu_level_nm" id="edu_level_nm" value="">
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
<!-- End Add Education Level Modal  -->

<!--Edit Education Level Modal -->
<div class="modal fade" id="editdepartmentmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Education Level</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<form id="up_edl_form">
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Edit Education Level</label>
						<input type="hidden" class="form-control" name="edl_id" id="up_edl_id" value="">
						<input type="text" class="form-control" name="edu_level_nm" id="up_edu_level_nm" placeholder="Education Level" value="">
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
<!-- End Edit Education Level Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
	$(function() {
		// $('table-vcenter tbody tr td').addClass('text-center')
		$('#dept_form').submit(function(e) {
			// alert();
			e.preventDefault();
			var form_data = $(this).serialize();
			var tbody = $('#hr-table').children('tbody');
			var table = tbody.length ? tbody : $('#hr-table');
			var table = $('#hr-table').DataTable();
			var serial1 = table.page.info();
			var serial = serial1.recordsTotal;
			serial = serial + 1;
			console.log(serial);
			$.ajax({
				url: 'add-edl',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {

					if (msg.success == 'success') {
						Swal.fire({
							title: '<h6 class="text-success"><b>Education Level Added Successfully</b></h6>',
							icon: 'success'
						})
						var row = $('.table-vcenter').DataTable().row.add([
							serial, msg.edu_level_nm, '<a class="btn btn-primary btn-icon btn-sm edit_edl" data-bs-toggle="modal" data-id="' + msg.edl_id + '" data-bs-target="#editdepartmentmodal">' +
							'<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>', '<a class=\"btn btn-danger btn-icon btn-sm delete_dept\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.edl_id + '"><i class="feather feather-trash-2"></i></a>'
						]).draw();
						row.nodes().to$().attr('id', 'id_' + msg.edl_id);
						row.nodes().to$().attr('class', 'serial');

						$('#id_' + msg.edl_id).find("td:eq(1)").attr('id', 'edl_' + msg.edl_id);

						$('#edu_level_nm').val('');
						$('#adddepartmentmodal').modal('hide');
					}
				}

			});

		})

		$('table').on('click', '.edit_edl', function() {
			var edl_id = $(this).attr('data-id');
			$.ajax({
				url: 'get-edl-by-id',
				type: 'POST',
				dataType: 'json',
				data: {
					edl_id: edl_id
				},
				success: function(msg) {
					// console.log(msg.edl.edu_level_nm)
					$('#up_edl_id').val(msg.edl.edl_id);
					$('#up_edu_level_nm').val(msg.edl.edu_level_nm);
				}
			})
		})

		$('#up_edl_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			var edl_id = $('#up_edl_id').val();
			var edl = $('#up_edu_level_nm').val();


			$.ajax({
				url: 'update-edl',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {
					if (msg.success == 'success') {
						$('#editdepartmentmodal').modal('hide');
						Swal.fire({
							title: '<h6 class="text-success"><b>Education Level Added Successfully</b></h6>',
							icon: 'success'
						})
						$('#edl_' + edl_id).html(msg.edu_level_nm);
					}
				}
			})
		})


		$('table').on('click', '.delete_dept', function() {
			var edl_id = $(this).attr('data-id');

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
						url: 'delete-edl',
						type: 'POST',
						dataType: 'JSON',
						data: {
							edl_id: edl_id
						},
						success: function(msg) {
							if (msg.success == 'success') {
								Swal.fire(
									'Deleted!',
									'Education Level has been deleted.',
									'success'
								)
								myTable.row('#id_' + edl_id).remove().draw();

								$('.table-vcenter tbody tr').each(function(i) {

									if (!myTable.data().any()) {
										$('.dataTables_empty').addClass('text-center')
									} else {
										$(this).find("td:first").html(i + 1);

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
<script src="<?php echo base_url() ?>assets/js/hr/hr-department.js"></script>
