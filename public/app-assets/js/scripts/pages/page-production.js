/*=========================================================================================
    File Name: page-users.js
    Description: Users page
    --------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {

    // variable declaration
    var usersTable;
    var usersDataArray = [];
    // datatable initialization
    if ($("#users-list-datatable").length > 0) {
        usersTable = $("#users-list-datatable").DataTable({
            "pageLength": 100,
            responsive: true,
            'columnDefs': [
                {
                    "orderable": false,
                    "targets": [1, 2]
                },
                {
                    "targets": [ 0, 10, 11],
                    "visible": false
                }]
        });

        $('#users-list-datatable tbody').on('click', '.invoice-action-view', function (event) {
            event.preventDefault();
            var thisURL = this.href;
            var tr = $(this).closest('tr');
            var row = usersTable.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                //tr.removeClass('shown');
            } else {
                // Open this row
                //alert(row.find('.divData').html());
                var strLoading = '<div class="badge badge-pill badge-glow badge-secondary mr-1 mb-1">Loading</div>';
                row.child(strLoading).show();
                //var PrintData = $(this).closest('tr').find('.divData').html();
                $.get( thisURL, function( data ) {
                    //$( ".result" ).html( data );
                    row.child(data).show();
                });
                //tr.addClass('shown');
            }
        });
        $( '#prod-status').on( 'change', function () {
            var selStatus = $(this).val();
            usersTable
                .columns( 10 )
                .search( selStatus )
                .draw();
        });
        $( '#strProductionLocation').on( 'change', function () {
            var selProductionSite = $(this).val();
            usersTable
                .columns( 11 )
                .search( selProductionSite )
                .draw();
        });
        $(document).ready(function(){
            var selStatus = $( '#prod-status').val();
            var selProductionSite = $( '#strProductionLocation').val();
            usersTable
                .columns( 10,11 )
                .search( selStatus )
                .draw();
        });

        $(document).ready(function(){
            $('#min, #max').on('change', function () {
                //alert('changed');
                var min = $('#min').val();
                var max = $('#max').val();
                //var date = new Date( data[11] );

                usersTable
                    .columns( 12 )
                    .search( min, max )
                    .draw();
            });
        });
    };


    // on click selected users data from table(page named page-users-list)
    // to store into local storage to get rendered on second page named page-users-view
    $(document).on("click", "#users-list-datatable tr", function () {
        $(this).find("td").each(function () {
            usersDataArray.push($(this).text().trim())
        })
        localStorage.setItem("usersId", usersDataArray[0]);
        localStorage.setItem("usersUsername", usersDataArray[1]);
        localStorage.setItem("usersName", usersDataArray[2]);
        localStorage.setItem("usersVerified", usersDataArray[4]);
        localStorage.setItem("usersRole", usersDataArray[5]);
        localStorage.setItem("usersStatus", usersDataArray[6]);
    })
    // render stored local storage data on page named page-users-view
    if (localStorage.usersId !== undefined) {
        $(".users-view-id").html(localStorage.getItem("usersId"));
        $(".users-view-username").html(localStorage.getItem("usersUsername"));
        $(".users-view-name").html(localStorage.getItem("usersName"));
        $(".users-view-verified").html(localStorage.getItem("usersVerified"));
        $(".users-view-role").html(localStorage.getItem("usersRole"));
        $(".users-view-status").html(localStorage.getItem("usersStatus"));
        // update badge color on status change
        if ($(".users-view-status").text() === "Banned") {
            $(".users-view-status").toggleClass("badge-light-success badge-light-danger")
        }
        // update badge color on status change
        if ($(".users-view-status").text() === "Close") {
            $(".users-view-status").toggleClass("badge-light-success badge-light-warning")
        }
    }
    // page users list verified filter
    $("#users-list-verified").on("change", function () {
        $("#users-list-role").val('');
        $("#users-list-status").val('');
        var usersVerifiedSelect = $("#users-list-verified").val();
        usersTable.search(usersVerifiedSelect).draw();
    });
    // page users list role filter
    $("#users-list-role").on("change", function () {
        $("#users-list-verified").val('');
        $("#users-list-status").val('');
        var usersRoleSelect = $("#users-list-role").val();
        // console.log(usersRoleSelect);
        usersTable.search(usersRoleSelect).draw();
    });
    // page users list status filter
    $("#users-list-status").on("change", function () {
        $("#users-list-verified").val('');
        $("#users-list-role").val('');
        var usersStatusSelect = $("#users-list-status").val();
        // console.log(usersStatusSelect);
        usersTable.search(usersStatusSelect).draw();
    });
    // users language select
    if ($("#users-language-select2").length > 0) {
        $("#users-language-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // page users list clear filter
    $(".users-list-clear").on("click", function(){
        usersTable.search("").draw();
    })
    // users music select
    if ($("#users-music-select2").length > 0) {
        $("#users-music-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users movies select
    if ($("#users-movies-select2").length > 0) {
        $("#users-movies-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users birthdate date
    if ($(".birthdate-picker").length > 0) {
        $('.birthdate-picker').pickadate({
            format: 'mmmm, d, yyyy'
        });
    }
    // Input, Select, Textarea validations except submit button validation initialization
    if ($(".users-edit").length > 0) {
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }
});
