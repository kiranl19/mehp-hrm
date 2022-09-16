<div class="app-content main-content">
	<div class="side-app main-container">

		<!--Page header-->
		<div class="page-header d-xl-flex d-block">
			<div class="page-leftheader">
				<div class="page-title">Department</div>
			</div>
			<div class="page-rightheader ms-md-auto">
				<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
					<div class="btn-list">
						<a href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#adddepartmentmodal">Add Department</a>
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
						<h4 class="card-title">Department Summary <?php $GLOBALS = $this->errors; //echo $GLOBALS[E_WARNING] ?></h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
								<thead>
									<tr>
										<th class="border-bottom-0">ID</th>
										<th class="border-bottom-0">Department Name</th>
										<th class="border-bottom-0">Edit</th>
										<th class="border-bottom-0">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php $sr=1; foreach ($depts as $dept) { ?>
										<tr id="id_<?php echo $dept['dept_id'] ?>" class="serial">
											<td><?php echo $sr++ ?></td>
											<td id="dept_<?php echo $dept['dept_id'] ?>"><?php echo $dept['dept_name'] ?></td>
											<td>
												<a class="btn btn-primary btn-icon btn-sm edit_dept" data-id="<?php echo $dept['dept_id'] ?>" data-bs-toggle="modal" data-bs-target="#editdepartmentmodal">
													<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i>
												</a>
											</td>
											<td>
												<a class="btn btn-danger btn-icon btn-sm delete_dept" data-bs-toggle="tooltip" data-original-title="Delete" data-id="<?php echo $dept['dept_id'] ?>"><i class="feather feather-trash-2"></i></a>
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
                <h5 class="modal-title">Add Department</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="dept_form">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="form-label">Add Department</label>
                        <input type="text" class="form-control" placeholder="Department" name="dept_name" id="dept_name" value="">
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
<!-- End Add Department Modal  -->

<!--Edit Department Modal -->
<div class="modal fade" id="editdepartmentmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Department</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form id="up_dept_form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Edit Department</label>
                        <input type="hidden" class="form-control" name="dept_id" id="up_dept_id" value="">
                        <input type="text" class="form-control" name="dept_name" id="up_dept_name" placeholder="Department" value="">
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
<!-- End Edit Department Modal  -->

<!-- INTERNAL Data tables -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>



<script type="text/javascript">
    $(function(){
		$('#dept_form').submit(function(e){
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
                url: 'add-dept',
                type: 'POST',
				dataType: 'json',
                data: form_data,
                success: function(msg){

                    if (msg.success == 'success'){
                        Swal.fire({
                            title: '<h6 class="text-success"><b>Department Added Successfully</b></h6>',
                            icon: 'success'
                        })
                        var row = $('.table-vcenter').DataTable().row.add([
                        serial, msg.dept_name, '<a class="btn btn-primary btn-icon btn-sm edit_dept" data-bs-toggle="modal" data-id="' + msg.dept_id + '" data-bs-target="#editdepartmentmodal">' +
                                               '<i class="feather feather-edit" data-bs-toggle="tooltip" data-original-title="Edit"></i></a>','<a class=\"btn btn-danger btn-icon btn-sm delete_dept\" data-bs-toggle="tooltip" data-original-title="Delete" data-id="' + msg.dept_id + '"><i class="feather feather-trash-2"></i></a>'
                        ]).draw();
                        row.nodes().to$().attr('id', 'id_' + msg.dept_id);
                        row.nodes().to$().attr('class', 'serial');

                        $('#id_' + msg.dept_id).find("td:eq(1)").attr('id','dept_' + msg.dept_id);

                        $('#dept_name').val('');
                        $('#adddepartmentmodal').modal('hide');
                    }
                }

            });

        })

        $('table').on('click','.edit_dept', function(){
            var dept_id = $(this).attr('data-id');
            $.ajax({
                url: 'get-dept-by-id',
                type: 'POST',
                dataType: 'json',
                data: {dept_id:dept_id},
                success: function(msg){
					/* console.log(msg.dept.dept_id) */
                    $('#up_dept_id').val(msg.dept.dept_id);
                    $('#up_dept_name').val(msg.dept.dept_name);
                }
            })
        })

        $('#up_dept_form').submit(function(e){
            e.preventDefault();
            var form_data = $(this).serialize();
            var dept_id = $('#up_dept_id').val();
            var dept = $('#up_dept_name').val();


            $.ajax({
                url: 'update-depts',
                type: 'POST',
                dataType: 'json',
                data: form_data,
                success: function(msg){
                    if (msg.success == 'success'){
                        $('#editdepartmentmodal').modal('hide');
                        Swal.fire({
                            title: '<h6 class="text-success"><b>Department Added Successfully</b></h6>',
                            icon: 'success'
                        })
                        $('#dept_' + dept_id).html(msg.dept_name);
                    }
                }
            })
        })


        $('table').on('click','.delete_dept', function(){
            var dept_id = $(this).attr('data-id');

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
                        url: 'delete-dept',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {dept_id:dept_id},
                        success: function(msg){
                            if (msg.success == 'success'){
                                Swal.fire(
                                    'Deleted!',
                                    'Department has been deleted.',
                                    'success'
                                )
                                myTable.row('#id_' + dept_id).remove().draw();

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
<script src="<?php echo base_url() ?>assets/js/hr/hr-department.js"></script>


