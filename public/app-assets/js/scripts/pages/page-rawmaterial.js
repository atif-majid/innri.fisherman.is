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
                    "targets": [1]
                },
                {
                    "targets": [ 0, 6 ],
                    "visible": false
                }],
            "order": [[5, "asc"], [ 4, "asc" ]]
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
        $( '#production-location').on( 'change', function () {
            var selLocation = $(this).val();
            usersTable
                .columns( 6 )
                .search( selLocation )
                .draw();
        })
        $( '#fish-type').on( 'change', function () {
            var selType = $(this).val();
            usersTable
                .columns( 2 )
                .search( selType )
                .draw();
        });
        $( '#supplier').on( 'change', function () {
            var selSupplier = $(this).val();
            usersTable
                .columns( 5 )
                .search( selSupplier )
                .draw();
        });
        $( '#lot-nr').on( 'keyup', function () {
            var selLotnr = $(this).val();
            usersTable
                .columns( 3 )
                .search( selLotnr )
                .draw();
        });
        $(document).ready(function(){
            var strMinDate = $('#min').val();
            var strMaxDate = $('#max').val();
            var MinDateParts = strMinDate.split("-");
            var MaxDateParts = strMaxDate.split("-");

            minDate = new Date(MinDateParts[2]+"-"+MinDateParts[1]+"-"+MinDateParts[0]);
            maxDate = new Date(MaxDateParts[2]+"-"+MaxDateParts[1]+"-"+MaxDateParts[0]);
            console.log(minDate, maxDate);
            //maxDate = new Date(maxDate.setDate(maxDate.getDate() + 1));
            var table = $('#users-list-datatable').DataTable();
            table.draw();
            $('#min, #max').on('change', function () {
                //alert('changed');
                //var min = $('#min').val();
                //var max = $('#max').val();
                //var date = new Date( data[12] );

                //usersTable
                //    .columns( 12 )
                //    .search( min, max )
                //    .draw();
                var strMinDate = $('#min').val();
                var strMaxDate = $('#max').val();
                var MinDateParts = strMinDate.split("-");
                var MaxDateParts = strMaxDate.split("-");

                minDate = new Date(MinDateParts[2]+"-"+MinDateParts[1]+"-"+MinDateParts[0]);
                maxDate = new Date(MaxDateParts[2]+"-"+MaxDateParts[1]+"-"+MaxDateParts[0]);
                //console.log(minDate, maxDate);
                var table = $('#users-list-datatable').DataTable();
                table.draw();
            });
        });


        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex , rowData, counter) {
                var min = minDate;
                var max = maxDate;
                //if(typeof(minDate))
                //if(counter==1 || counter==198)
                //    console.log(data);
                if(typeof(minDate)!='undefined' && typeof(maxDate)!='undefined')
                {
                    //var date = new Date( data[12] +" 05:00:00");
                    var datesearch = data[4];
                    var DateParts = datesearch.split("-");

                    var date = new Date( DateParts[2]+"-"+DateParts[1]+"-"+DateParts[0]);
                    //console.log(minDate, maxDate, dataIndex,counter);

                    //console.log(min, max, date);
                    if (
                        ( min === null && max === null ) ||
                        ( min === null && date <= max ) ||
                        ( min <= date   && max === null ) ||
                        ( min <= date   && date <= max )
                    ) {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
                else {
                    return true;
                }

            }
        );
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
        var usersVerifiedSelect = $("#users-list-verified").val();
        usersTable.search(usersVerifiedSelect).draw();
    });
    // page users list role filter
    $("#users-list-role").on("change", function () {
        var usersRoleSelect = $("#users-list-role").val();
        // console.log(usersRoleSelect);
        usersTable.search(usersRoleSelect).draw();
    });
    // page users list status filter
    $("#users-list-status").on("change", function () {
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
