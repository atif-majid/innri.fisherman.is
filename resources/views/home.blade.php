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
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <!--<link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">-->
    <link rel="shortcut icon" type="image/x-icon" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_180x180.png?v=1595428268">
    <link rel="apple-touch-icon" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_180x180.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="57x57" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_57x57.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="60x60" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_60x60.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="72x72" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_72x72.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="76x76" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_76x76.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="114x114" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_114x114.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="180x180" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_180x180.png?v=1595428268"/>
    <link rel="apple-touch-icon" sizes="228x228" href="//cdn.shopify.com/s/files/1/0442/9496/3365/files/favicon-32x32_228x228.png?v=1595428268"/>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/confirm/jquery-confirm.css">
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
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <!-- Greetings Content Starts -->
                    <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
                        @if($nMenuCount>0)
                            <div class="row">
                                <div class="col-xl-12 col-12">
                                    @endif
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="greeting-text">Welcome to Fisherman!</h3>
                                            <p class="mb-0">Home of sustainable gourmet seafood and local experience</p>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="dashboard-content-left">
                                                        <!--<h1 class="text-primary font-large-2 text-bold-500" style="color: #525253 !important;">Seafood Trail</h1>
                                                        <p>Home of sustainable gourmet seafood and local experience.</p>
                                                        <button type="button" class="btn btn-primary glow">Seafood Trail</button>-->
                                                    </div>
                                                    <div class="dashboard-content-right">
                                                        <img src="app-assets/images/sailor.jpg" height="220" width="220" style="height: 200px !important; width: 400px !important;" class="img-fluid" alt="Dashboard Ecommerce" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if($nMenuCount>0)
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="greeting-text">Your lunch order for next week - Week {{ date("W")+1 }}</h3>
                                            <p class="mb-0">Please chose your lunch for next week</p>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form id="frmWeeklyOrder" class="form-horizontal"  novalidate method="post" action="">
                                                    @csrf
                                                    @foreach($arrMenuItems as $key=>$val)
                                                        @if(!empty($val['fish_course']) && !empty($val['meat_course']))
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-5 col-sm-6">
                                                                    <strong>
                                                                        {{date("l", strtotime($key))}}
                                                                    </strong>
                                                                </div>
                                                                <div class="col-lg-7 col-md-7 col-sm-6">
                                                                    <strong>
                                                                        {{ date("d-m-Y", strtotime($key)) }}
                                                                        <input type="hidden" name="arrDate[]" value="{{$key}}">
                                                                    </strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">&nbsp;</div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-5 col-md-5 col-sm-6">
                                                                    <div class="d-inline-flex align-items-center mb-1">
                                                                        <div class="input-group input-group-sm">
                                                                            <input type="number" class="touchspin" value="{{$arrOrders["$key"]['fish_course']}}" id="nOrder_Fish_{{$key}}" name="nOrder_Fish_{{$key}}" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-7 col-sm-6">
                                                                    <label for="nOrder_Fish_{{$key}}">{{$val['fish_course']}}</label>
                                                                </div>

                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-5 col-md-5 col-sm-6">
                                                                    <div class="d-inline-flex align-items-center mb-1">
                                                                        <div class="input-group input-group-sm">
                                                                            <input type="number" class="touchspin" value="{{$arrOrders["$key"]['meat_course']}}" id="nOrder_Meat_{{$key}}" name="nOrder_Meat_{{$key}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-7 col-sm-6">
                                                                    <label for="nOrder_Meat_{{$key}}">{{$val['meat_course']}}</label>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <fieldset class="form-group">
                                                                        <textarea class="form-control" id="strComment_{{$key}}" name="strComment_{{$key}}" rows="3" placeholder="Your comment to the chef about allergies or other food related issues.">{{$arrOrders["$key"]['comment']}}</textarea>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <hr>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <button id="btnOrderSubmit" type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-xl-8 col-12 dashboard-marketing-campaign">
                        <div class="card marketing-campaigns">
                            <div class="card-header d-flex justify-content-between align-items-center pb-1">
                                <h4 class="card-title">My Tasks</h4>
                                <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="table-responsive">
                                <!-- table start -->
                                @if(count($tasks)>0 || count($Improvements)>0 || count($Salesopportunities)>0)
                                    <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
                                        <thead>
                                        <tr>
                                            <th>For</th>
                                            <th>Task</th>
                                            <th>Due Date</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($Improvements)>0)
                                            @foreach($Improvements as $improvement)
                                                <tr>
                                                    <td class="py-1">
                                                        {{$improvement->complainer}}
                                                    </td>
                                                    <td class="py-1">
                                                        <a href="{{ route('improvements.process', $improvement->id) }}" style="display: flex; align-items: center; justify-content: center; height: 100%; "><i class="bx bx-show-alt"></i></a>&nbsp;
                                                        @if(strlen($improvement->description)>50)
                                                            {{substr($improvement->description, 0, 50)}}...
                                                        @else
                                                            {{$improvement->description}}
                                                        @endif
                                                    </td>
                                                    <td class="py-1">
                                                        {{date("d-m-Y", strtotime($improvement->due_date))}}
                                                    </td>
                                                    <td class="py-1">
                                                        Improvement
                                                    </td>
                                                    <td class="py-1">
                                                        <select id="selImprovement" name="selImprovement" class="form-control">
                                                            <option value="no" @if('no'== $improvement->completed) selected @endif>In Progress</option>
                                                            <option value="yes" @if('yes'== $improvement->completed) selected @endif>Completed</option>
                                                        </select>
                                                        <input type="hidden" id="nID" name="nID" value="{{$improvement->id}}" class="improvementid" />
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        @if(count($Salesopportunities)>0)
                                            @foreach($Salesopportunities as $Salesopportunity)
                                                <tr>
                                                    <td class="py-1">
                                                        {{$Salesopportunity->who_notified}}
                                                    </td>
                                                    <td class="py-1">
                                                        <a href="{{ route('salesopportunity.process', $Salesopportunity->id) }}" style="display: flex; align-items: center; justify-content: center; height: 100%; "><i class="bx bx-show-alt"></i></a>&nbsp;
                                                        @if(strlen($Salesopportunity->description)>50)
                                                            {{substr($Salesopportunity->description, 0, 50)}}...
                                                        @else
                                                            {{$Salesopportunity->description}}
                                                        @endif
                                                    </td>
                                                    <td class="py-1">
                                                        @php /*{{$Salesopportunity->due_date}}*/ @endphp
                                                    </td>
                                                    <td class="py-1">
                                                        Sales lead
                                                    </td>
                                                    <td class="py-1">
                                                        <select id="selSalesop" name="selSalesop" class="form-control">
                                                            <option value="In Progress" @if('no'== $Salesopportunity->status) selected @endif>In Progress</option>
                                                            <option value="Completed" @if('yes'== $Salesopportunity->status) selected @endif>Completed</option>
                                                        </select>
                                                        <input type="hidden" id="nID" name="nID" value="{{$Salesopportunity->id}}" class="salesopid" />
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        @if(count($tasks)>0)
                                            @foreach($tasks as $task)
                                                <tr>
                                                    <td class="py-1">
                                                        {{$task->name}}
                                                    </td>
                                                    <td class="py-1">
                                                        {{$task->task}}
                                                    </td>
                                                    <td class="py-1">
                                                        {{date("d-m-Y", strtotime($task->due_date))}}
                                                    </td>
                                                    <td class="py-1">
                                                        @if(strpos($task->field, 'quit')>0)
                                                            Off-boarding
                                                        @else
                                                            On-boarding
                                                        @endif
                                                    </td>
                                                    <td class="py-1">
                                                        <select id="selStatus" name="selStatus" class="form-control">
                                                            <option value="Not Started" @if('Not Started'== $task->status) selected @endif>Not Started</option>
                                                            <option value="In Progress" @if('In Progress'== $task->status) selected @endif>In Progress</option>
                                                            <option value="Completed" @if('Completed'== $task->status) selected @endif>Completed</option>
                                                        </select>
                                                        <input type="hidden" id="nID" name="nID" value="{{$task->id}}" class="taskid" />
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                @else
                                    <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
                                        <tr>
                                            <td class="py-1">
                                                No pending tasks!
                                            </td>
                                        </tr>
                                    </table>
                                @endif

                                <!-- table ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Multi Radial Chart Starts -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->
<?php
/*<div class="widget-chat-demo">
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

</div>*/
?>
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
<script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<script src="app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/forms/number-input.js"></script>
<script src="app-assets/js/scripts/confirm/jquery-confirm.js"></script>
<!-- END: Page JS-->
<script>
    $(document).ready(function(){
        $('select.form-control').on('change', function() {
            var strFieldID = $(this).attr('id');
            if(strFieldID=="selStatus")
            {
                var strNewStatus = $(this).val();
                var nID = $(this).next('.taskid').val();
                $(this).attr('disaled', true);
                $.ajax({
                    method: "POST",
                    url: "{{ route('employees.updateonboardstatus') }}",
                    data: { "_token": "{{ csrf_token() }}", strNewStatus: strNewStatus, nID: nID }
                })
                .done(function( msg ) {
                    $(this).attr('disabled', false);
                    //alert('The status for this task has been changed!');
                });
            }
            else if(strFieldID=="selImprovement")
            {
                var strNewStatus = $(this).val();
                var nID = $(this).next('.improvementid').val();
                $(this).attr('disaled', true);
                $.ajax({
                    method: "POST",
                    url: "{{ route('improvements.updateimpstatus') }}",
                    data: { "_token": "{{ csrf_token() }}", strNewStatus: strNewStatus, nID: nID }
                })
                    .done(function( msg ) {
                        $(this).attr('disabled', false);
                        //alert('The status for this task has been changed!');
                    });
            }
            else if(strFieldID=="selSalesop")
            {
                var strNewStatus = $(this).val();
                var nID = $(this).next('.salesopid').val();
                $(this).attr('disaled', true);
                $.ajax({
                    method: "POST",
                    url: "{{ route('salesopportunity.updatesopstatus') }}",
                    data: { "_token": "{{ csrf_token() }}", strNewStatus: strNewStatus, nID: nID }
                })
                    .done(function( msg ) {
                        $(this).attr('disabled', false);
                        //alert('The status for this task has been changed!');
                    });
            }
        });

        $('#btnOrderSubmit').on('click', function(event){
            event.preventDefault();
            $('#btnOrderSubmit').attr('disabled', true);
            var arrFormData = $('#frmWeeklyOrder').serialize();
            $.ajax({
                type: "post",
                url: "{{ route('menu.order') }}",
                data: arrFormData,
                dataType: 'json',              // let's set the expected response format
                success: function(data){
                    $('#btnOrderSubmit').attr('disabled', false);
                    errDisplay = '<div class="alert alert-success mb-2">Your food order has been saved</div>';
                    $('.modal-body').html(errDisplay);
                    $('#modalError').modal('show');
                },
                error: function (err) {
                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        //console.log(err.responseJSON);
                        // you can loop through the errors object and show it to the user
                        /*console.warn(err.responseJSON.errors);*/
                        // display errors on each form field
                        var errDisplay = ''
                        $.each(err.responseJSON.errors, function (i, error) {
                            errDisplay = errDisplay + '<div class="alert alert-danger mb-2">'+error[0]+'</div>';
                            $('.modal-body').html(errDisplay);
                            $('#modalError').modal('show');
                        });
                        $('#btnOrderSubmit').attr('disabled', false);
                    }
                    else{
                        if(err.status==200)
                        {
                            errDisplay = '<div class="alert alert-success mb-2">Your food order has been saved</div>';
                            $('.modal-body').html(errDisplay);
                            $('#modalError').modal('show');
                        }
                        $('#btnOrderSubmit').attr('disabled', false);
                    }
                }
            });
        });


    });
</script>
@if($errors->any())
    <div class="modal fade text-left" id="modalerror" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Notice </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{$errors->first()}}</p>
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
    <script>
        $(document).ready(function(){
           $('#modalerror').modal('show');
        });
    </script>
@endif
<div class="modal fade text-left" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Notice </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">

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
