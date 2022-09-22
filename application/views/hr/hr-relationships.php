<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Relationships</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addrelationshipmodal">Add Relationships</a>
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
						<h4 class="card-title">Relationships Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">Relationships Name</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr = 1;
									foreach ($relationships as $relationship) { ?>
										<tr id="id_<?php echo $relationship['rs_id'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="relationship_<?php echo $relationship['rs_id'] ?>"><?php echo $relationship['name'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_relationship" data-id="<?php echo $relationship['rs_id'] ?>" data-bs-toggle="modal" data-bs-target="#editrelationshipmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_relationship" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $relationship['rs_id'] ?>"><i class="feather feather-trash-2"></i></a>
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

<div class="modal fade" id="addrelationshipmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Relationships</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form id="relationship_form">
				<div class="modal-body">

					<div class="form-group">
						<label class="form-label">Add Relationships</label>
						<input type="text" class="form-control" placeholder="Relationships" name="name" id="name" value="">
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
					<input type="submit" class="btn btn-primary add_relationship" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Add Relationships Modal  -->

<!--Edit Relationships Modal -->
<div class="modal fade" id="editrelationshipmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Relationships</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<form id="up_relationship_form">
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Edit Relationships</label>
						<input type="hidden" class="form-control" name="rs_id" id="up_rs_id" value="">
						<input type="text" class="form-control" name="name" id="up_relationship_name" placeholder="Relationships" value="">
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
<!-- End Edit Relationships Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
	$(function() {
		$('#relationship_form').submit(function(e) {
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
				url: 'add-relationship',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {

					if (msg.success == 'success') {
						Swal.fire({
							title: '<h6 class="text-success"><b>Relationships Added Successfully</b></h6>',
							icon: 'success'
						})
						var row = $('.table-vcenter').DataTable().row.add([
							serial, msg.name, '<a class="btn btn-primary btn-icon btn-sm edit_relationship" data-bs-toggle="modal" data-id="' + msg.rs_id + '" data-bs-target="#editrelationshipmodal">' +
							'<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>', '<a class=\"btn btn-danger btn-icon btn-sm delete_relationship\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.rs_id + '"><i class="feather feather-trash-2"></i></a>'
						]).draw();
						row.nodes().to$().attr('id', 'id_' + msg.rs_id);
						row.nodes().to$().attr('class', 'serial');

						$('#id_' + msg.rs_id).find("td:eq(1)").attr('id', 'relationship_' + msg.rs_id);

						$('#name').val('');
						$('#addrelationshipmodal').modal('hide');
					}
				}

			});

		})

		$('table').on('click', '.edit_relationship', function() {
			var rs_id = $(this).attr('data-id');
			$.ajax({
				url: 'get-relationship-by-id',
				type: 'POST',
				dataType: 'json',
				data: {
					rs_id: rs_id
				},
				success: function(msg) {
					/* console.log(msg.relationship.rs_id) */
					$('#up_rs_id').val(msg.relationship.rs_id);
					$('#up_relationship_name').val(msg.relationship.name);
				}
			})
		})

		$('#up_relationship_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			var rs_id = $('#up_rs_id').val();
			var relationship = $('#up_relationship_name').val();


			$.ajax({
				url: 'update-relationship',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {
					console.log(msg);
					if (msg.success == 'success') {
						$('#editrelationshipmodal').modal('hide');
						Swal.fire({
							title: '<h6 class="text-success"><b>Relationships Updated Successfully</b></h6>',
							icon: 'success'
						})
						$('#relationship_' + rs_id).html(msg.name);
					}
				}
			})
		})


		$('table').on('click', '.delete_relationship', function() {
			var rs_id = $(this).attr('data-id');

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
						url: 'delete-relationship',
						type: 'POST',
						dataType: 'JSON',
						data: {
							rs_id: rs_id
						},
						success: function(msg) {
							if (msg.success == 'success') {
								Swal.fire(
									'Deleted!',
									'Relationships has been deleted.',
									'success'
								)
								myTable.row('#id_' + rs_id).remove().draw();

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
<script src="<?php echo base_url() ?>assets/js/hr/hr-department.js"></script>
