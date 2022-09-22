<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">kycs</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addkycmodal">Add kycs</a>
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
						<h4 class="card-title">kycs Summary</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">KYC</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr = 1;
									foreach ($kycs as $kyc) { ?>
										<tr id="id_<?php echo $kyc['kyc_id'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="kyc_<?php echo $kyc['kyc_id'] ?>"><?php echo $kyc['kyc_name'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_kyc" data-id="<?php echo $kyc['kyc_id'] ?>" data-bs-toggle="modal" data-bs-target="#editkycmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_kyc" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $kyc['kyc_id'] ?>"><i class="feather feather-trash-2"></i></a>
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

<div class="modal fade" id="addkycmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add kycs</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form id="kyc_form">
				<div class="modal-body">

					<div class="form-group">
						<label class="form-label">Add kycs</label>
						<input type="text" class="form-control" placeholder="kycs" name="kyc_name" id="kyc_name" value="">
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
					<input type="submit" class="btn btn-primary add_kyc" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Add kycs Modal  -->

<!--Edit kycs Modal -->
<div class="modal fade" id="editkycmodal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit kycs</h5>
				<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>
			<form id="up_kyc_form">
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Edit kycs</label>
						<input type="hidden" class="form-control" name="kyc_id" id="up_kyc_id" value="">
						<input type="text" class="form-control" name="kyc_name" id="up_kyc_name" placeholder="kycs" value="">
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
<!-- End Edit kycs Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
	$(function() {
		$('#kyc_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();

			var tbody = $('#hr-table').children('tbody');
			var table = tbody.length ? tbody : $('#hr-table');

			var table = $('#hr-table').DataTable();
			var serial1 = table.page.info();
			var serial = serial1.recordsTotal;

			serial = serial + 1;
			$.ajax({
				url: 'add-kyc',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {

					if (msg.success == 'success') {
						console.log(msg);
						Swal.fire({
							title: '<h6 class="text-success"><b>KYC Added Successfully</b></h6>',
							icon: 'success'
						})
						var row = $('.table-vcenter').DataTable().row.add([
							serial, msg.kyc_name, '<a class="btn btn-primary btn-icon btn-sm edit_kyc" data-id="' + msg.kyc_id + '" data-bs-toggle="modal" data-bs-target="#editkycmodal">' +
							'<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>', '<a class=\"btn btn-danger btn-icon btn-sm delete_kyc\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.kyc_id + '"><i class="feather feather-trash-2"></i></a>'
						]).draw();
						row.nodes().to$().attr('id', 'id_' + msg.kyc_id);
						row.nodes().to$().attr('class', 'serial');

						$('#id_' + msg.kyc_id).find("td:eq(1)").attr('id', 'kyc_' + msg.kyc_id);

						$('#kyc_name').val('');
						$('#addkycmodal').modal('hide');
					}
				}

			});

		})

		$('table').on('click', '.edit_kyc', function() {
			var kyc_id = $(this).attr('data-id');
			$.ajax({
				url: 'get-kyc-by-id',
				type: 'POST',
				dataType: 'json',
				data: {
					kyc_id: kyc_id
				},
				success: function(msg) {
					/* console.log(msg.kyc.kyc_id) */
					$('#up_kyc_id').val(msg.kyc.kyc_id);
					$('#up_kyc_name').val(msg.kyc.kyc_name);
				}
			})
		})

		$('#up_kyc_form').submit(function(e) {
			e.preventDefault();
			var form_data = $(this).serialize();
			var kyc_id = $('#up_kyc_id').val();
			var kyc = $('#up_kyc_name').val();


			$.ajax({
				url: 'update-kyc',
				type: 'POST',
				dataType: 'json',
				data: form_data,
				success: function(msg) {
					console.log(msg);
					if (msg.success == 'success') {
						$('#editkycmodal').modal('hide');
						Swal.fire({
							title: '<h6 class="text-success"><b>KYC Updated Successfully</b></h6>',
							icon: 'success'
						})
						$('#kyc_' + kyc_id).html(msg.kyc_name);
					}
				}
			})
		})


		$('table').on('click', '.delete_kyc', function() {
			var kyc_id = $(this).attr('data-id');

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
						url: 'delete-kyc',
						type: 'POST',
						dataType: 'JSON',
						data: {
							kyc_id: kyc_id
						},
						success: function(msg) {
							if (msg.success == 'success') {
								Swal.fire(
									'Deleted!',
									'kycs has been deleted.',
									'success'
								)
								myTable.row('#id_' + kyc_id).remove().draw();

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
