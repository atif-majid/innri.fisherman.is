<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Employees</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css?time<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
@include('headericons');
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('leftnav');
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="users-list-wrapper">
                <div class="users-list-filter px-1">
                    <div class="row  rounded py-2 mb-2">
                        <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center" onclick="window.location.href='{{ route('employees.create') }}'">
                            <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Add New Employee</button>
                        </div>
                    </div>

                </div>
                <div class="users-list-filter px-1">
                    <form onsubmit="return false;">
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">Name</label>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="users-list-role">
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Department</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-verified">
                                        <option value="">Any</option>
                                        <option value="Distribution">Distribution</option>
                                        <option value="Production Suðureyri">Production Suðureyri</option>
                                        <option value="Production Hafnarfjörður">Production Hafnarfjörður</option>
                                        <option value="Service center">Service center</option>
                                        <option value="Service center - Suðureyri">Service center - Suðureyri</option>
                                        <option value="Suðureyri- vinnsla">Suðureyri- vinnsla</option>
                                        <option value="Travel service">Travel service</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Job Title</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-status">
                                        <option value="">Any</option>
                                        <option value="Bookkeeper">Bookkeeper</option>
                                        <option value="CEO">CEO</option>
                                        <option value="Customer service">Customer service</option>
                                        <option value="Distribution manager">Distribution manager</option>
                                        <option value="Driver">Driver</option>
                                        <option value="Factory cleaning">Factory cleaning</option>
                                        <option value="Factory worker">Factory worker</option>
                                        <option value="Hotel caretaker">Hotel caretaker</option>
                                        <option value="Maintenance manager">Maintenance manager</option>
                                        <option value="Office manager">Office manager</option>
                                        <option value="Production manager">Production manager</option>
                                        <option value="Project manager">Project manager</option>
                                        <option value="Purchasing & Quality manager">Purchasing & Quality manager</option>
                                        <option value="Sales manager">Sales manager</option>
                                        <option value="Store manager & Staff food chef">Store manager & Staff food chef</option>
                                        <option value="Truck driver">Truck driver</option>

                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-info mb-2">
                        {{ $message }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-warning mb-2">{{$errors->first()}}</div>
                @endif
                <div class="users-list-table">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <!-- datatable start -->
                                <div class="table-responsive">
                                    <table id="users-list-datatable" class="table">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th style="text-align: left; padding-left: 1rem;">Employee Name</th>
                                                <th style="text-align: left; padding-left: 1rem;">JOb Title</th>
                                                <th style="text-align: left; padding-left: 1rem;">Department</th>
                                                <th style="text-align: left; padding-left: 1rem;">Direct Phone</th>
                                                <th style="text-align: left; padding-left: 1rem;">Mobile phone</th>
                                                <th style="text-align: left; padding-left: 1rem;">EMail address</th>
                                                <td style="text-align: left; padding-left: 1rem;">Status</td>
                                                <th style="text-align: left; padding-left: 1rem;">edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id }}</td>
                                                    <td style="padding: 0.5rem 1.15rem">{{ $employee->name }}</td>
                                                    <td style="padding: 0.5rem 1.15rem">{{ $employee->designation }}</td>
                                                    <td style="padding: 0.5rem 1.15rem">{{ $employee->department }}</td>
                                                    <td style="padding: 0.5rem 1.15rem">{{ $employee->direct_phone }}</td>
                                                    <td style="padding: 0.5rem 1.15rem">{{ $employee->gsm }}</td>
                                                    <td style="padding: 0.5rem 1.15rem">{{ $employee->email }}</td>
                                                    <td style="padding: 0.5rem 1.15rem; vertical-align: center;">
                                                        <div class="custom-control custom-switch custom-switch-dark mb-1">
                                                            <input type="checkbox" class="custom-control-input chkStatus" id="customSwitchcolor{{ $employee->id }}" value="{{ $employee->id }}" @if($employee->status=='active') checked @endif>
                                                            <label class="custom-control-label" for="customSwitchcolor{{ $employee->id }}"></label>
                                                        </div>
                                                    </td>
                                                    <td style="white-space: nowrap;padding: 0.5rem 1.15rem;">
                                                        <form id="form-del" action="{{ route('employees.destroy',$employee->id) }}" method="POST" onsubmit="return false;">
                                                            <a href="#" onclick="$('#nEmpIDFIle').val({{ $employee->id }}); Dropzone.forElement('#dp-accept-files').removeAllFiles(true); return false;" data-toggle="modal" data-target="#inlineForm">
                                                                <i class="bx bx-camera"></i>
                                                            </a>
                                                            <a href="{{ route('employees.show', $employee->id) }}" class="invoice-action-view">
                                                                <i class="bx bx-show-alt"></i>
                                                            </a>
                                                            <a href="{{ route('employees.edit', $employee->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                            @csrf
                                                            @method('DELETE')
                                                            @php /*<a href="{{ route('employees.destroy', $employee->id) }}" onclick="event.preventDefault();
                                                         if(confirm('Are you sure to delete?')){document.getElementById('form-del').submit();}"><i class="bx bxs-trash-alt"></i></a>*/ @endphp
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- users list ends -->
        </div>
    </div>
</div>
<!-- END: Content-->
@php
/*
<!-- demo chat-->
<div class="widget-chat-demo">
    <!-- widget chat demo footer button start -->
    <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
    <!-- widget chat demo footer button ends -->
    <!-- widget chat demo start -->
    <div class="widget-chat widget-chat-demo d-none">
        <div class="card mb-0">
            <div class="card-header border-bottom p-0">
                <div class="media m-75">
                    <a href="JavaScript:void(0);">
                        <div class="avatar mr-75">
                            <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                            <span class="avatar-status-online"></span>
                        </div>
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                        <span class="text-muted font-small-3">Active</span>
                    </div>
                    <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                </div>
            </div>
            <div class="card-body widget-chat-container widget-chat-demo-scroll">
                <div class="chat-content">
                    <div class="badge badge-pill badge-light-secondary my-1">today</div>
                    <div class="chat">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>How can we help? 😄</p>
                                <span class="chat-time">7:45 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat chat-left">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Hey John, I am looking for the best admin template.</p>
                                <p>Could you please help me to find it out? 🤔</p>
                                <span class="chat-time">7:50 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                <span class="chat-time">8:01 AM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer border-top p-1">
                <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                    <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                    <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- widget chat demo ends -->

</div>
*/
@endphp
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; FISHERMAN</span><!--<span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>-->
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="app-assets/vendors/js/vendors.min.js"></script>
<script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="app-assets/vendors/js/ui/prism.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<script src="app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/pages/page-users.js?time=<?php echo time();?>"></script>

<!-- END: Page JS-->
<script>
    $(document).ready(function(){
        $('.chkStatus').change(function(){
            var doAjax = false;
            //var url = "{{ route('empajax.request.status')}}";
            var empID = $(this).val();
            var changeto = '';
            var _token = $("input[name='_token']").val();
            if($(this).is(':checked'))
            {
                if(confirm('Are you sure to mark this employee active?'))
                {
                    //
                    doAjax = true;
                    changeto = 'active';
                }
                else
                {
                    $(this).prop("checked", false);
                }
            }
            else
            {
                if(confirm('Are you sure to change the status to inactive?'))
                {
                    doAjax = true;
                    changeto = 'inactive';
                }
                else
                {
                    $(this).prop("checked", true);
                }
            }
            if(doAjax)
            {
                $.ajax({
                    url: "{{ route('empajax.request.status')}}",
                    type:'POST',
                    data: {_token:_token, id:empID, newstatus:changeto},
                    success: function(data) {
                        //Do nogthing
                        //alert(data);
                    }
                });
            }
        })

        Dropzone.options.dpAcceptFiles = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            acceptedFiles: 'image/*',
            maxFiles: 1,
            autoProcessQueue: false,
            url: "{{ route('empajax.request.picture')}}",
            init: function(){
                var myDropzone = this;
                // Update selector to match your button
                $('.uploadimg').click(function (e) {
                    e.preventDefault();
                    if ( $('dp-accept-files').valid() ) {
                        myDropzone.processQueue();
                    }
                    return false;
                });

                this.on('sending', function (file, xhr, formData) {
                    // Append all form inputs to the formData Dropzone will POST
                    var data = $('dp-accept-files').serializeArray();
                    $.each(data, function (key, el) {
                        formData.append(el.name, el.value);
                        this.removeAllFiles(true);
                    });
                });
            },
            error: function (file, response){
                if ($.type(response) === "string")
                    var message = response; //dropzone sends it's own error messages in string
                else
                    var message = response.message;
                file.previewElement.classList.add("dz-error");
                _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i];
                    _results.push(node.textContent = message);
                }
                this.removeAllFiles(true);
                return _results;
            },
            successmultiple: function (file, response) {
                console.log(file, response);
                this.removeAllFiles(true);
            },
            completemultiple: function (file, response) {
                console.log(file, response, "completemultiple");
                //$modal.modal("show");
                this.removeAllFiles(true);
            },
            reset: function () {
                console.log("resetFiles");
                this.removeAllFiles(true);
            }
        }




        //var myDropzone = new Dropzone("#dp-accept-files");
        $('.btnclear').click(function(){
            Dropzone.forElement('#dp-accept-files').removeAllFiles(true)
        });
    });
</script>
<?php
/*<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Upload Picture </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#" class="dropzone dropzone-area" id="dp-accept-files" enctype="multipart/form-data">
                <div class="dz-message">Drop Files Here To Upload</div>
            </form>
        </div>
    </div>
</div>*/
?>
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Upload Picture </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('empajax.request.picture')}}" class="dropzone dropzone-area" id="dp-accept-files" enctype="multipart/form-data">
                    <div class="dz-message">Drop Files Here To Upload</div>
                    <input type="hidden" id="nEmpIDFIle" name="nEmpIDFIle">
                    @csrf
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary btnclear">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Clear</span>
                </button>
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <!--<button type="button" class="btn btn-primary ml-1 uploadimg">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Upload</span>
                </button>-->
            </div>

        </div>
    </div>
</div>
</body>
<!-- END: Body-->

</html>
