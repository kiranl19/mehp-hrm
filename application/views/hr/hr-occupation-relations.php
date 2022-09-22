<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Occupations</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addoccupationmodal">Add Occupations</a>
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
						<h4 class="card-title">Occupations Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">Occupations Name</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr = 1;
									foreach ($occupations as $occupation) { ?>
										<tr id="id_<?php echo $occupation['or_id'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="occupation_<?php echo $occupation['or_id'] ?>"><?php echo $occupation['name'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_occupation" data-id="<?php echo $occupation['or_id'] ?>" data-bs-toggle="modal" data-bs-target="#editoccupationmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_occupation" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $occupation['or_id'] ?>"><i class="feather feather-trash-2"></i></a>
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

<div class="modal fade" id="addoccupationmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Occupations</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form id="occupation_form">
				<div class="modal-body">

					<div class="form-group">
						<label class="form-label">Add Occupations</label>
						<input type="text" class="form-control" placeholder="Occupations" name="name" id="name" value="">
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
					<input type="submit" class="btn btn-primary add_occupation" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Add Occupations Modal  -->

<!--Edit Occupations Modal -->
<div class="modal fade" id="editoccupationmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Occupations</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<form id="up_occupation_form">
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Edit Occupations</label>
						<input type="hidden" class="form-control" name="or_id" id="up_or_id" value="">
						<input type="text" class="form-control" name="name" id="up_occupation_name" placeholder="Occupations" value="">
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
<!-- End Edit Occupations Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
	$(function() {
		$('#occupation_form').submit(function(e) {
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
				url: 'add-occupation',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {

					if (msg.success == 'success') {
						Swal.fire({
							title: '<h6 class="text-success"><b>Occupations Added Successfully</b></h6>',
							icon: 'success'
						})
						var row = $('.table-vcenter').DataTable().row.add([
							serial, msg.name, '<a class="btn btn-primary btn-icon btn-sm edit_occupation" data-bs-toggle="modal" data-id="' + msg.or_id + '" data-bs-target="#editoccupationmodal">' +
							'<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>', '<a class=\"btn btn-danger btn-icon btn-sm delete_occupation\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.or_id + '"><i class="feather feather-trash-2"></i></a>'
						]).draw();
						row.nodes().to$().attr('id', 'id_' + msg.or_id);
						row.nodes().to$().attr('class', 'serial');

						$('#id_' + msg.or_id).find("td:eq(1)").attr('id', 'occupation_' + msg.or_id);

						$('#name').val('');
						$('#addoccupationmodal').modal('hide');
					}
				}

			});

		})

		$('table').on('click', '.edit_occupation', function() {
			var or_id = $(this).attr('data-id');
			$.ajax({
				url: 'get-occupation-by-id',
				type: 'POST',
				dataType: 'json',
				data: {
					or_id: or_id
				},
				success: function(msg) {
					/* console.log(msg.occupation.or_id) */
					$('#up_or_id').val(msg.occupation.or_id);
					$('#up_occupation_name').val(msg.occupation.name);
				}
			})
		})

		$('#up_occupation_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			var or_id = $('#up_or_id').val();
			var occupation = $('#up_occupation_name').val();


			$.ajax({
				url: 'update-occupation',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {
					console.log(msg);
					if (msg.success == 'success') {
						$('#editoccupationmodal').modal('hide');
						Swal.fire({
							title: '<h6 class="text-success"><b>Occupations Updated Successfully</b></h6>',
							icon: 'success'
						})
						$('#occupation_' + or_id).html(msg.name);
					}
				}
			})
		})


		$('table').on('click', '.delete_occupation', function() {
			var or_id = $(this).attr('data-id');

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
						url: 'delete-occupation',
						type: 'POST',
						dataType: 'JSON',
						data: {
							or_id: or_id
						},
						success: function(msg) {
							if (msg.success == 'success') {
								Swal.fire(
									'Deleted!',
									'Occupations has been deleted.',
									'success'
								)
								myTable.row('#id_' + or_id).remove().draw();

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
