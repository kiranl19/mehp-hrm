<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Job Title</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#adddepartmentmodal">Add Job Title</a>
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
						<h4 class="card-title">Job Title Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">Job Title</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr = 1;
									foreach ($jts as $jt) { ?>
										<tr id="id_<?php echo $jt['jtid'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="jt_<?php echo $jt['jtid'] ?>"><?php echo $jt['job_title'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_dept" data-id="<?php echo $jt['jtid'] ?>" data-bs-toggle="modal" data-bs-target="#editdepartmentmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_dept" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $jt['jtid'] ?>"><i class="feather feather-trash-2"></i></a>
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
				<h5 class="modal-title">Add Job Title</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form id="dept_form">
				<div class="modal-body">

					<div class="form-group">
						<label class="form-label">Add Job Title</label>
						<input type="text" class="form-control" placeholder="Job Title" name="jt_name" id="jt_name" value="">
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
<!-- End Add Job Title Modal  -->

<!--Edit Job Title Modal -->
<div class="modal fade" id="editdepartmentmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Job Title</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<form id="up_jt_form">
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Edit Job Title</label>
						<input type="hidden" class="form-control" name="jtid" id="up_jt_id" value="">
						<input type="text" class="form-control" name="jt_name" id="up_jt_name" placeholder="Job Title" value="">
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
<!-- End Edit Job Title Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
	$(function() {
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
				url: 'add-jt',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {

					if (msg.success == 'success') {
						Swal.fire({
							title: '<h6 class="text-success"><b>Job Title Added Successfully</b></h6>',
							icon: 'success'
						})
						var row = $('.table-vcenter').DataTable().row.add([
							serial, msg.jt_name, '<a class="btn btn-primary btn-icon btn-sm edit_dept" data-bs-toggle="modal" data-id="' + msg.jtid + '" data-bs-target="#editdepartmentmodal">' +
							'<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>', '<a class=\"btn btn-danger btn-icon btn-sm delete_dept\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.jtid + '"><i class="feather feather-trash-2"></i></a>'
						]).draw();
						row.nodes().to$().attr('id', 'id_' + msg.jtid);
						row.nodes().to$().attr('class', 'serial');

						$('#id_' + msg.jtid).find("td:eq(1)").attr('id', 'jt_' + msg.jtid);

						$('#jt_name').val('');
						$('#adddepartmentmodal').modal('hide');
					}
				}

			});

		})

		$('table').on('click', '.edit_dept', function() {
			var jtid = $(this).attr('data-id');
			$.ajax({
				url: 'get-jt-by-id',
				type: 'POST',
				dataType: 'json',
				data: {
					jtid: jtid
				},
				success: function(msg) {
					// console.log(msg.jt.job_title)
					$('#up_jt_id').val(msg.jt.jtid);
					$('#up_jt_name').val(msg.jt.job_title);
				}
			})
		})

		$('#up_jt_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			var jtid = $('#up_jt_id').val();
			var jt = $('#up_jt_name').val();


			$.ajax({
				url: 'update-jt',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {
					if (msg.success == 'success') {
						$('#editdepartmentmodal').modal('hide');
						Swal.fire({
							title: '<h6 class="text-success"><b>Job Title Added Successfully</b></h6>',
							icon: 'success'
						})
						$('#jt_' + jtid).html(msg.jt_name);
					}
				}
			})
		})


		$('table').on('click', '.delete_dept', function() {
			var jtid = $(this).attr('data-id');

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
						url: 'delete-jt',
						type: 'POST',
						dataType: 'JSON',
						data: {
							jtid: jtid
						},
						success: function(msg) {
							if (msg.success == 'success') {
								Swal.fire(
									'Deleted!',
									'Job Title has been deleted.',
									'success'
								)
								myTable.row('#id_' + jtid).remove().draw();

								$('.table-vcenter tbody tr').each(function(i) {
									if (i != 0) {
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
