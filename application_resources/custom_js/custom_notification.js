var base_url = js_base_url;
var site_url = js_site_url;


//////////////////Notified Users//////////////////////////////////////////////////////////////
$(document).ready(function() {
    //notified users table
    var notified_users_table = $('#notified_users_table').dataTable({
        "sDom": "<'row'<'col-md-6'l <'toolbar notified_users_table_tbar'>><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
        "oTableTools": {
            "aButtons": [
                {
                    "sExtends": "collection",
                    "sButtonText": "<i class='fa fa-cloud-download'></i>",
                    "aButtons": ["csv", "xls", "pdf", "copy"]
                }
            ]
        },
        "aoColumnDefs": [
            {"bSortable": false, "aTargets": [0]}
        ],
        "aaSorting": [[3, "desc"]],
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },
    });

    $(".notified_users_table_tbar").html('<div class="table-tools-actions"><button class="btn btn-primary" style="margin-left:12px" id="add_notified_users_btn" data-toggle="modal" data-target="#add_notified_users_modal">Add New Notified User</button></div>');

    $('#notified_users_table_wrapper .dataTables_filter input').addClass("input-medium ");
    $('#notified_users_table_wrapper .dataTables_length select').addClass("select2-wrapper span12");
    $(".select2-wrapper").select2({minimumResultsForSearch: -1});

    //add Notified Users Form
    $('#add_notified_users_form').validate({
        focusInvalid: false,
        ignore: "",
        rules: {
            notification_id: {
                required: true
            },
            employee_code: {
                required: true
            }
        },
        invalidHandler: function(event, validator) {
            //display error alert on form submit    
        },
        errorPlacement: function(label, element) { // render error placement for each input type   
            $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('success-control').addClass('error-control');
        },
        highlight: function(element) { // hightlight error inputs
            var parent = $(element).parent();
            parent.removeClass('success-control').addClass('error-control');

        },
        unhighlight: function(element) { // revert the change done by hightlight

        },
        success: function(label, element) {
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('error-control').addClass('success-control');
        }, submitHandler: function(form)
        {
            $.post(site_url + '/notification/notified_users_controller/add_new_notified_user', $('#add_notified_users_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $("#add_notified_users_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" >Notified User </a>has been added.</div>');
                    add_notified_users_form.reset();
                    location.reload();
                } else {
                    $("#add_notified_users_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">Notified User </a>has failed.</div>');
                }
            });


        }
    });

});

//edit Notified Users Form
$('#edit_notified_users_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        notification_id: {
            required: true
        },
        employee_code: {
            required: true
        }


    },
    invalidHandler: function(event, validator) {
        //display error alert on form submit    
    },
    errorPlacement: function(label, element) { // render error placement for each input type   
        $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
        var parent = $(element).parent('.input-with-icon');
        parent.removeClass('success-control').addClass('error-control');
    },
    highlight: function(element) { // hightlight error inputs
        var parent = $(element).parent();
        parent.removeClass('success-control').addClass('error-control');

    },
    unhighlight: function(element) { // revert the change done by hightlight

    },
    success: function(label, element) {
        var parent = $(element).parent('.input-with-icon');
        parent.removeClass('error-control').addClass('success-control');
    }, submitHandler: function(form)
    {
        $.post(site_url + '/notification/notified_users_controller/edit_notified_users', $('#edit_notified_users_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#edit_notified_users_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" >Notified Users </a>has been updated.</div>');
                edit_notified_users_form.reset();
                location.reload();
            } else {
                $("#edit_notified_users_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">Notified User </a>has failed.</div>');
            }
        });


    }
});


//delete notified users
function delete_notified_users(notified_users_id) {

    if (confirm('Are you sure want to delete this Notified User ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/notification/notified_users_controller/delete_notified_users',
            data: "id=" + notified_users_id,
            success: function(msg) {

                if (msg == 1) {

                    $('#notified_users_' + notified_users_id).hide();
                }
                else if (msg == 2) {
                    alert('Cannot be deleted as it is already assigned to notified users');
                }
            }
        });
    }
}



////////////////Notification/////////////////////////////////////////////////////////

//delete notification
function delete_notification(notification_id) {

    if (confirm('Are you sure want to delete this Notification ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/notification/notification_controller/delete_notification',
            data: "id=" + notification_id,
            success: function(msg) {
                //alert(msg);
                if (msg == 1) {

                    $('#notification_' + notification_id).hide();
                }
                else if (msg == 2) {
                    alert('Cannot be deleted as it is already assigned to Notifications');
                }
            }
        });
    }
}

$(document).ready(function() {
    //notification table
    var notification_table = $('#notification_table').dataTable({
        "sDom": "<'row'<'col-md-6'l <'toolbar notification_table_tbar'>><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
        "oTableTools": {
            "aButtons": [
                {
                    "sExtends": "collection",
                    "sButtonText": "<i class='fa fa-cloud-download'></i>",
                    "aButtons": ["csv", "xls", "pdf", "copy"]
                }
            ]
        },
        "aoColumnDefs": [
            {"bSortable": false, "aTargets": [0]}
        ],
        "aaSorting": [[3, "desc"]],
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },
    });

    $(".notification_table_tbar").html('<div class="table-tools-actions"><button class="btn btn-primary" style="margin-left:12px" id="add_notification_btn" data-toggle="modal" data-target="#add_notification_modal">Add New Notification</button></div>');
    

    $('#notification_table_wrapper .dataTables_filter input').addClass("input-medium ");
    $('#notification_table_wrapper .dataTables_length select').addClass("select2-wrapper span12");
    $(".select2-wrapper").select2({minimumResultsForSearch: -1});

    

    //add Notification Form
    $('#add_notification_form').validate({
        focusInvalid: false,
        ignore: "",
        rules: {
            notification_msg: {
                required: true
            },
            system_code: {
                required: true
            },
            notification_area_url: {
                required: true
            }

        },
        invalidHandler: function(event, validator) {
            //display error alert on form submit    
        },
        errorPlacement: function(label, element) { // render error placement for each input type   
            $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('success-control').addClass('error-control');
        },
        highlight: function(element) { // hightlight error inputs
            var parent = $(element).parent();
            parent.removeClass('success-control').addClass('error-control');

        },
        unhighlight: function(element) { // revert the change done by hightlight

        },
        success: function(label, element) {
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('error-control').addClass('success-control');
        }, submitHandler: function(form)
        {
            $.post(site_url + '/notification/notification_controller/add_new_notification', $('#add_notification_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $("#add_notification_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" >Notification </a>has been added.</div>');
                    add_notification_form.reset();
                    location.reload();
                } else {
                    $("#add_notification_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">Notification </a>has failed.</div>');
                }
            });
        }
    });

    $('#edit_notification_form').validate({
        focusInvalid: false,
        ignore: "",
        rules: {
            system_id: {
                required: true
            },
            notification_msg: {
                required: true
            },
            notification_area_url: {
                required: true
            }

        },
        invalidHandler: function(event, validator) {
            //display error alert on form submit    
        },
        errorPlacement: function(label, element) { // render error placement for each input type   
            $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('success-control').addClass('error-control');
        },
        highlight: function(element) { // hightlight error inputs
            var parent = $(element).parent();
            parent.removeClass('success-control').addClass('error-control');

        },
        unhighlight: function(element) { // revert the change done by hightlight

        },
        success: function(label, element) {
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('error-control').addClass('success-control');
        }, submitHandler: function(form)
        {
            $.post(site_url + '/notification/notification_controller/edit_notification', $('#edit_notification_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $("#edit_notification_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The<a class="link" > Notification </a>has been updated.</div>');
//                    edit_notification_form.reset();
                    location.reload();
                } else {
                    $("#edit_notification_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#">Notification </a>has failed.</div>');
                }
            });
        }
    });


});




