$(function() {
    $('#fname').on('keyup', function() {
        var val = $(this).val();
        var pass = capitalizeFirstLetter(val);

        $('#add_fname').val(val);

        pass = pass.replace(/ /g, '')
        $("#password").val(pass + "@123");
    })

    $('#lname').on('keyup', function() {
        var val = $(this).val();
        $('#add_lname').val(val);

    })
})

$(function() {
    $('#emp_id').on('change', function() {
        var emp_id = $(this).val();
        $('#emp_id2').val(emp_id);
        $('#emp_id3').val(emp_id);
        $('#emp_id4').val(emp_id);
        $('#emp_id5').val(emp_id);
        $('#emp_id6').val(emp_id);
    })
})

$(function() {
    $('#dob1').on('change', function() {
        var dob = $(this).val();
        // alert(dob);
        $('#dob').val(dob);
        /* $('#emp_id2').val(emp_id);
        $('#emp_id3').val(emp_id);
        $('#emp_id4').val(emp_id);
        $('#emp_id5').val(emp_id);
        $('#emp_id6').val(emp_id); */
    })
})
$(function() {
    $('#emp_id').on('change', function() {
        var emp_id = $(this).val();
        $('#emp_id2').val(emp_id);
        $('#emp_id3').val(emp_id);
        $('#emp_id4').val(emp_id);
        $('#emp_id5').val(emp_id);
        $('#emp_id6').val(emp_id);
        $('#emp_id11').val(emp_id);
    })
})

function cap(str) {
    return str.replace(/([a-z,A-Z])/, function(match, value) {
        return value.toUpperCase();
    })
}

//capitalize only the first letter of the string. 
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
/* //capitalize all words of a string. 
function capitalizeWords(string) {
	return string.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
}; */


function activaTab(tab) {
    $('a[href="#' + tab + '"]').tab('show');
};


$(function() {
    $('#employee_details').on('submit', function(e) {
        e.preventDefault();

        var form_data = $(this).serialize();

        $.ajax({
            url: 'ajax-add-employee',
            type: 'POST',
            dataType: 'json',
            data: form_data,
            enctype: 'multipart/form-data',
            success: function(msg) {

                if (msg.status == 'Added') {

                    Swal.fire({
                        title: '<h6 class="text-success"><b>Employee Details Saved Successfully</b></h6>',
                        icon: 'success'
                    })

                } else if (msg.status == 'Updated') {
                    Swal.fire({
                        title: '<h6 class="text-success"><b>Employee Details Saved Successfully</b></h6>',
                        icon: 'success'
                    })
                }

                activaTab('tab10');
                $('#back-to-top').click();
            },
            error: function(error) {
                Swal.fire({
                    title: '<h6 class="text-success"><b>Please Fill all fields..!</b></h6>',
                    icon: 'success'
                })
            }
        })

    });



    $('#profile_details').on('submit', function(e) {
        e.preventDefault();

        var form_data = $(this).serialize();
        console.log(form_data);

        $.ajax({
            url: 'ajax-add-employee-profile',
            type: 'POST',
            dataType: 'json',
            data: form_data,
            enctype: 'multipart/form-data',
            success: function(msg) {
                console.log(msg);
                if (msg.status == 'Added') {

                    Swal.fire({
                        title: '<h6 class="text-success"><b>Employee Details Saved Successfully</b></h6>',
                        icon: 'success'
                    })

                } else if (msg.status == 'Updated') {
                    Swal.fire({
                        title: '<h6 class="text-success"><b>Details Saved Successfully..!</b></h6>',
                        icon: 'success'
                    })
                }

                activaTab('tab9');
                $('#back-to-top').click();
            },
            error: function(error) {
                Swal.fire({
                    title: '<h6 class="text-success"><b>Please Fill all fields..!</b></h6>',
                    icon: 'success'
                })
            }
        })

    });



    $('#address_details').on('submit', function(e) {
        e.preventDefault();

        var form_data = $(this).serialize();

        $.ajax({
            url: 'ajax-add-employee-address',
            type: 'POST',
            dataType: 'json',
            data: form_data,
            enctype: 'multipart/form-data',
            success: function(msg) {
                console.log(msg);
                if (msg.status == 'Added') {

                    Swal.fire({
                        title: '<h6 class="text-success"><b>Employee Details Saved Successfully</b></h6>',
                        icon: 'success'
                    })

                } else if (msg.status == 'Updated') {
                    Swal.fire({
                        title: '<h6 class="text-success"><b>Details Saved Successfully..!</b></h6>',
                        icon: 'success'
                    })
                }

                activaTab('tab6');
                $('#back-to-top').click();
            },
            error: function(error) {
                Swal.fire({
                    title: '<h6 class="text-success"><b>Please Fill all fields..!</b></h6>',
                    icon: 'success'
                })
            }
        })

    });

    $('#comp_details').on('submit', function(e) {
        e.preventDefault();
        activaTab('tab7');
        $('#back-to-top').click();

    });

    $('#bank_details').on('submit', function(e) {
        e.preventDefault();
        /* activaTab('tab8');
        $('#back-to-top').click(); */
        var pan = $('#acc_pan').val();
        var ifsc = $('#acc_ifsc').val();
        var form_data = $(this).serialize();

        var pan_regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
        var ifsc_regex = "^[A-Z]{4}[0][A-Z0-9]{6}$";


        if (!ifsc.match(ifsc_regex)) {
            $('#acc_ifsc').focus();
            $('.ifsc_error').html('IFSC Code is Invalid')
            $('#acc_ifsc').css('border-color', 'red')
            return;
        } else {
            $('.ifsc_error').html('')
            $('#acc_ifsc').css('border-color', '')
        }

        if (!pan.match(pan_regex)) {
            $('#acc_pan').focus();
            $('.pan_error').html('Pan Number is Invalid')
            $('#acc_pan').css('border-color', 'red')
            return;
        } else {
            $('.pan_error').html('')
            $('#acc_pan').css('border-color', '')
        }

        $.ajax({
            url: 'ajax-add-employee-bank-details',
            type: 'POST',
            dataType: 'json',
            data: form_data,
            enctype: 'multipart/form-data',
            success: function(msg) {
                console.log(msg.success);
                if (msg.success == 'Added') {

                    Swal.fire({
                        title: '<h6 class="text-success"><b>Employee Bank Details Saved Successfully</b></h6>',
                        icon: 'success'
                    })


                } else if (msg.success == 'Updated') {
                    Swal.fire({
                        title: '<h6 class="text-success"><b>Employee Bank Details Updated Successfully</b></h6>',
                        icon: 'success'
                    })
                }

                activaTab('tab8');
                $('#back-to-top').click();
            },
            error: function(error) {
                Swal.fire({
                    title: '<h6 class="text-success"><b>Please Fill all fields..!</b></h6>',
                    icon: 'success'
                })
            }
        })

    });

    $('#acc_pan, #acc_ifsc').on('keyup', function() {
        var upp = this.value.toUpperCase();
        $(this).val(upp);
    })
})


$(function() {
    // $('input[type="file"][name="experiece_letter"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_photo"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_resume"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_id_proof"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_offer_ltr"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_jng_ltr"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_aggr_ltr"]').on('change', prepareUpload);
    $('input[type="file"][name="doc_expr_ltr"]').on('change', prepareUpload);

    files = new Array;



    function prepareUpload(event) {
        files.push(event.target.files[0]);
    }

    // console.log("files : " + files)


    $('#doc_details').on('submit', function(e) {
        e.preventDefault();

        var empid = $("#emp_id4").val();

        if (empid == '' || empid == null) {
            alert("Please Enter Emplyee ID");
            return;
        }

        var data = new FormData();
        // console.log(files);
        $.each(files, function(key, value) {
            data.append('text1[]', value);
        });

        // console.log("Data : " + data)

        $.ajax({
            url: 'upload-docs?emp_id=' + empid,
            type: 'POST',
            data: data,
            cache: false,
            mimeType: "multipart/form-data",
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(resp) {

                Swal.fire({
                    title: '<h6 class="text-success"><b>Employee Documents Uploaded Successfully</b></h6>',
                    icon: 'success'
                }).then(function() {
                    location.reload();
                })
            }
        })

    });
})

var sr = 0;
$('#relation_details').on('submit', function(e) {
    e.preventDefault();

    var form_data = $(this).serialize();

    $.ajax({
        url: 'ajax-add-relations',
        type: 'POST',
        dataType: 'json',
        data: form_data,
        enctype: 'multipart/form-data',
        success: function(msg) {

            if (msg.status == 'added') {

                Swal.fire({
                    title: '<h6 class="text-success"><b>Relations Saved Successfully</b></h6>',
                    icon: 'success'
                })



                $.each(msg.er_id, function(key, val) {
                    sr++;

                    $('#cloned_' + sr).attr('id', 'clone_' + val['er_id']);
                    $('.clone').find('.remove').removeClass('remove').addClass('removePermanent');
                    $('.clone').find('.removePermanent').attr('data-er_id', val['er_id'])
                    $('.clone').attr('id', 'clone_' + val['er_id'])
                    $('#clone_' + val['er_id']).find('.removePermanent').attr('data-er_id', val['er_id']);
                    $('#clone_' + val['er_id']).find('.card1').append('<input type="hidden" class="form-control" value="' + val['er_id'] + '" name="er_id[]" id="er_id">')
                        /*  console.log(key);
                         console.log(val);
                         console.log(val['er_id']); */

                })

            } else if (msg.status == 'updated') {
                Swal.fire({
                    title: '<h6 class="text-success"><b>Relations Updated Successfully</b></h6>',
                    icon: 'success'
                })
            }
        },
        error: function(error) {
            Swal.fire({
                title: '<h6 class="text-success"><b>Please Fill all fields..!</b></h6>',
                icon: 'success'
            })
        }
    })

});
