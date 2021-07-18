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
    <title>Sales Opportunities</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css?time<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/page-users.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/file-uploaders/dropzone.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .carousel-control-next,
        .carousel-control-prev /*, .carousel-indicators */ {
            background-color: rgba(0, 0, 0, 0.8);
            width: 30px;
        }
    </style>

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
                <div class="users-list-table">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="border-secondary col-12 border">
                                    <table class="table table-borderless" colspan="12">
                                        <tbody>
                                            <tr>
                                                <td class="users-view-latest-activity" colspan="5"><strong>Review Sales Opportunity:</strong></td>
                                                <td class="users-view-latest-activity" style="text-align: right">
                                                    <form id="form-del" action="{{ route('salesopportunity.destroy',$SaleOp->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-primary" data-repeater-create type="submit">@php /*<i class="bx bx-minus" style="color: #FFFFFF;"></i>*/ @endphp
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="users-view-latest-activity"><strong>Customer:</strong></td>
                                                <td class="users-view-latest-activity">{{ $SaleOp->who_notified }}</td>
                                                <td class="users-view-latest-activity"><strong>Phone:</strong></td>
                                                <td class="users-view-latest-activity">{{ $SaleOp->phone_number }}</td>
                                                <td class="users-view-latest-activity"><strong>Email:</strong></td>
                                                <td class="users-view-latest-activity">{{ $SaleOp->email }}</td>
                                            </tr>
                                            <tr>
                                                <td class="users-view-latest-activity"><strong>Registered By:</strong></td>
                                                <td class="users-view-latest-activity">{{ $SaleOp->name }}</td>
                                                @if($SaleOp->business_potential>0)
                                                    <td class="users-view-latest-activity"><strong>Business Potential:</strong></td>
                                                    <td class="users-view-latest-activity">
                                                        @if($SaleOp->business_potential==1)
                                                            Less than 250.000 kr
                                                        @elseif($SaleOp->business_potential==2)
                                                            250.000 kr - 500.000 kr
                                                        @elseif($SaleOp->business_potential==3)
                                                            500.000 kr - 1.000.000 kr
                                                        @elseif($SaleOp->business_potential==4)
                                                            1.000.000 kr or more
                                                        @endif
                                                    </td>
                                                @endif
                                                <td class="users-view-latest-activity"><strong>Priority:</strong></td>
                                                <td class="users-view-latest-activity">
                                                    {{$SaleOp->sop_priority}}

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="users-view-latest-activity" colspan="6"><strong>Description</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="users-view-latest-activity" colspan="6">{!! nl2br($SaleOp->description) !!}</td>
                                            </tr>
                                            <tr>
                                                <td class="users-view-latest-activity" colspan="6"><strong>RESPONSE AND IMPROVEMENTS</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="users-view-latest-activity" colspan="6">
                                                    <div class="list-group">
                                                        @if($SaleOp->response!="")
                                                            <a href="#" class="list-group-item list-group-item-action" onclick="return false;">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Posted by {{ $SaleOp->name }}</h5>
                                                                    <small>{{ $SaleOp->creation_time }}</small>
                                                                </div>
                                                                <p class="mb-1">
                                                                    {{ $SaleOp->response }}
                                                                </p>
                                                            </a>
                                                        @endif
                                                        @foreach($SaleOpComments as $thisComment)
                                                            @php
                                                                $strClass = "sysgen";
                                                                if(strpos($thisComment->comment, 'Assigned to ')===false && strpos($thisComment->comment, 'Marked as completed by ')===false && strpos($thisComment->comment, 'Edited by ')===false)
                                                                {
                                                                    $strClass = "comment";
                                                                }
                                                            @endphp
                                                            <a href="#" class="list-group-item list-group-item-action" onclick="return false;" id="{{$thisComment->id}}">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">Posted by {{ $thisComment->name }}</h5>
                                                                    <small>{{ $thisComment->comment_add_date }} </small>
                                                                </div>
                                                                <p class="mb-1">
                                                                    {!! trim(nl2br($thisComment->comment)) !!}
                                                                </p>
                                                                <small class="{{$strClass}}">Edit</small>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                               </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="carousel">
                <div class="row match-height">
                    <!-- Basic Carousel start -->
                    <div class="col-lg-6">
                        <div class="card" id="basic-carousel">
                            <div class="card-header">
                                <h4 class="card-title">Photos</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <ol class="carousel-indicators">
                                            @foreach($SalesOpPhotos as $k=>$thisPhoto)
                                                <li data-target="#carousel-example-generic" data-slide-to="{{$k}}" @if($k==0) class="active" @endif></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            @foreach($SalesOpPhotos as $k=>$thisPhoto)
                                                <div class="carousel-item @if($k==0) active @endif" style="text-align:center; width:100%;">
                                                    <img style="height: 400px !important; width: 500px !important; max-width: 500px !important; max-height: 400px !important;" src="/uploads/salesopportunity/{{$SaleOp->id}}/{{$thisPhoto->file_name}}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        @php
                                            /*<ol class="carousel-indicators">
                                            @foreach($ImprovementPhotos as $k=>$thisPhoto)
                                            <li data-target="#carousel-thumb" data-slide-to="{{$k}}" @if($k==0) class="active" @endif> <img class="d-block w-100" src="https://innri.fisherman.is/uploads/improvements/{{$improvement->id}}/{{$thisPhoto->file_name}}"
                                                                                                                     class="img-fluid"></li>
                                            @endforeach
                                        </ol>*/
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Carousel And Optional Carousel End -->

                    <!-- Basic Carousel with Caption start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">RESPONSE AND IMPROVEMENTS</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal"  id="frmOnlyComment" novalidate method="post" action="{{ route('salesopportunity.updateprocess') }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                            <div class="form col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>RESPONSE AND IMPROVEMENTS</label>
                                                        <div class="controls">
                                                            <textarea id="strResponse" name="strResponse" class="form-control" <?php /*data-validation-required-message="Name is requried"*/?> placeholder="Your Response" rows="6"></textarea>
                                                            <input type="hidden" id="id" name="id" value="{{ $SaleOp->id }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Who will resolve this? <small class="text-muted">(Leave empty if not assigning to anyone)</small> </label>
                                                        <div class="controls">
                                                            <!--<input type="text" name="strAssignedTo" id="strAssignedTo" value="" class="form-control" data-validation-required-message="Employee Name is requried" placeholder="Who will resolve this?">-->
                                                            <select class="form-control" id="nAssignedTo" name="nAssignedTo">
                                                                <option value=""></option>
                                                                @foreach ($employees as $employee)
                                                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="chkCompleted" name="chkCompleted" value="Completed" @if($SaleOp->status=='Completed') checked @endif>
                                                                <label for="chkCompleted">Completed!</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Carousel with Caption End -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Photos</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('salesopportunity.uploadpicture') }}" class="dropzone dropzone-area" id="dpz-remove-thumb" style="margin-left: 20px;width:100% !important;">
                                        <div class="dz-message" style="height: 60% !important;">Drop Files Here To Upload</div>
                                        <input type="hidden" id="nSoId" name="nSoId" value="{{ $SaleOp->id }}">
                                        <input type="hidden" id="pgProcess" name="pgProcess" value="{{ $SaleOp->id }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="btnAllSubmit">Submit</button>
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
                                <img src="../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
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
<script src="../../app-assets/vendors/js/vendors.min.js?time=<?php time();?>"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="../../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="../../app-assets/js/scripts/forms/form-repeater.js"></script>
<script src="../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="../../app-assets/js/core/app-menu.js"></script>
<script src="../../app-assets/js/core/app.js?time=<?php echo time();?>"></script>
<script src="../../app-assets/js/scripts/components.js"></script>
<script src="../../app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../app-assets/js/scripts/pages/page-improvements.js?time=<?php echo time();?>"></script>
<!-- END: Page JS-->
<script>
    $(document).ready(function(){
        $('.pickadate-limits').pickadate({
            //format: 'mmmm, d, yyyy'
            format: 'yyyy-mm-dd',
        });

        $('.comment').click(function(event){
            event.preventDefault();
            var strComment = $(this).prev('p.mb-1').html();
            strComment = strComment.replaceAll('<br>','');
            var nCommentID = $(this).parent().attr('id');
            $('#txtComment').val($.trim(strComment));
            $('#nCommentID').val(nCommentID);
            $('#inlineForm').modal('show');
        });

        $('.sysgen').click(function(){
            $('#modalsysgen').modal('show');
        });

        $('#btnModalSubmit').click(function(){
            $(this).attr('disabled', true);
            var strNewComment = $('#txtComment').val();
            var nCommentID = $('#nCommentID').val();
            $.ajax({
                method: "POST",
                url: "{{ route('salesopportunity.updatecomment') }}",
                data: { "_token": "{{ csrf_token() }}", strNewComment: strNewComment, nCommentID: nCommentID }
            })
                .done(function( msg ) {
                    if(msg=='success')
                    {
                        $('#'+nCommentID).find('p.mb-1').html(strNewComment.replace(/\n/g,'<br/>'));
                    }
                    $('#btnModalSubmit').attr('disabled', false);
                    $('#inlineForm').modal('hide');

                });
        });
    });
</script>
<div class="modal fade text-left" id="modalsysgen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Notice </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>This is a system generated comment and cannot be edited!</p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-light-secondary btnclear">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Clear</span>
                </button>-->
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <!--<button type="button" class="btn btn-primary ml-1 submit">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Submit</span>
                </button>-->
            </div>

        </div>
    </div>
</div>
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Comment </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="nCommentID" name="nCommentID">
                <textarea id="txtComment" name="txtComment" class="form-control" rows="6"></textarea>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-light-secondary btnclear">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Clear</span>
                </button>-->
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" id="btnModalSubmit">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Submit</span>
                </button>
            </div>

        </div>
    </div>
</div>
<script>
    var myDropzone;
    Dropzone.options.dpzRemoveThumb = {
        paramName: "file", // The name that will be used to transfer the file
        acceptedFiles: "image/*",
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        dictRemoveFile: " Trash",
        autoProcessQueue: false,
        parallelUploads:20,
        init: function (e) {
            var myDropzone = this;
            $('#btnAllSubmit').on("click", function() {
                $('.modalerror').html('');
                var nFiles = myDropzone.files.length;
                var arrFormData = $('#frmOnlyComment').serialize();
                $.ajax({
                    type: "post",
                    url: "{{ route('salesopportunity.updateprocess') }}",
                    data: arrFormData,
                    dataType: 'json',              // let's set the expected response format
                    success: function(data){
                        var nFiles = myDropzone.files.length;
                        if(nFiles==0)
                        {
                            window.location.href = "{{route('salesopportunity.process', $SaleOp->id)}}";
                        }
                        else
                        {
                            myDropzone.processQueue();
                        }
                    },
                    error: function (err) {
                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            console.log(err.responseJSON);
                            // you can loop through the errors object and show it to the user
                            /*console.warn(err.responseJSON.errors);*/
                            // display errors on each form field
                            var errDisplay = ''
                            $.each(err.responseJSON.errors, function (i, error) {
                                errDisplay = errDisplay + '<div class="alert alert-danger mb-2">'+error[0]+'</div>';
                                $('.modal-body').html(errDisplay);
                                $('#modalError').modal('show');
                            });
                        }
                    }
                });
            });
            myDropzone.on("sending", function(file, xhr, data) {
                // First param is the variable name used server side
                // Second param is the value, you can add what you what
                // Here I added an input value
                data.append("_token", "{{ csrf_token() }}");
            });
            myDropzone.on("complete", function (file) {
                if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {
                    //location.reload();
                    window.location.href = "{{route('salesopportunity.process', $SaleOp->id)}}";
                }
            });
        }
    }
</script>
<div class="modal fade text-left" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Notice </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body modalerror">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
            </div>
        </div>
    </div>
</div>
</body>
<!-- END: Body-->

</html>
