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
    <title>Employees - Onboarding Tasks</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <!--<link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">-->
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
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/ui/prism.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .picker {
            width: 500px;
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
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Add New Task</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Employees</a>
                                </li>
                                <li class="breadcrumb-item active">Onboarding Tasks
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Validation start -->
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mb-2">{{ $error }}</div>
                @endforeach
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-info mb-2">
                    {{ $message }}
                </div>
            @endif
            <section class="input-validation">
                <form id="frmNewTask" class="form-horizontal"   novalidate method="post" action="{{ route('employees.storeonboarding') }}">
                    @csrf
                    <input type="hidden" id="nForEmpID" name="nForEmpID" value="{{ $forEmployee->id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Onboarding tasks for {{ $forEmployee->name }}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-body repeater-default">
                                            <div data-repeater-list="OnBoardingTasks">
                                                @foreach($onboardingsection as $thisSection)
                                                    <h4>{{$thisSection->value}}</h4>
                                                    @php
                                                        $strKey =  str_replace(' ', '_', $thisSection->value);
                                                        $TasksThisKey = $arrTasks["$strKey"];
                                                    @endphp
                                                    @foreach($TasksThisKey as $thissetting)
                                                        @php
                                                            $taskKey = str_replace(" ", "_", $thissetting->value);
                                                        @endphp
                                                        @if(array_key_exists($taskKey, $arrPreset))
                                                            <div data-repeater-item>
                                                                <div class="row">
                                                                    <div class="input-group">
                                                                        <div class="col-sm-2 form-group">
                                                                            <label>Status</label>
                                                                            <fieldset class="position-relative">
                                                                                <select class="form-control" name="strStatus">
                                                                                    <option value="" selected></option>
                                                                                    @foreach($arrStatus as $status)
                                                                                        <option value="{{ $status }}" @if($arrPreset["$taskKey"]->status==$status) selected @endif>{{ $status }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-sm-5 form-group">
                                                                            <label>Task</label>
                                                                            <fieldset class="position-relative">
                                                                                <input type="hidden" id="strTask" name="strTask" value="{{$thissetting->value}}">
                                                                                <input type="hidden" id="nTaskID" name="nTaskID" value="{{$arrPreset["$taskKey"]->id}}">
                                                                                {{$thissetting->value}}
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-sm-3 form-group">
                                                                            <label>Responsible Person</label>
                                                                            <fieldset class="position-relative">
                                                                                <select class="form-control" id="nAssignedTo" name="nAssignedTo">
                                                                                    <option value="" selected></option>
                                                                                    @foreach ($employees as $employee)
                                                                                        <option value="{{ $employee->id }}" @if($employee->id == $arrPreset["$taskKey"]->responsible_person) selected @endif>{{ $employee->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-sm-2 form-group">
                                                                            <label>Due Date</label>
                                                                            <fieldset class="position-relative has-icon-left">
                                                                                <input type="text" class="form-control format-picker" placeholder="Select Date" id="purchase_date" name="strDueDate" value="{{ date("d-m-Y", strtotime($arrPreset["$taskKey"]->due_date)) }}">
                                                                                <div class="form-control-position">
                                                                                    <i class='bx bx-calendar'></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        @php
                                                                            /*<div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                            <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                                Delete
                                                                            </button>
                                                                        </div>*/
                                                                        @endphp
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        @else
                                                            <div data-repeater-item>
                                                                <div class="row justify-content-between">
                                                                    <div class="input-group">
                                                                        <div class="col-sm-2 form-group">
                                                                            <label>Status</label>
                                                                            <fieldset class="position-relative">
                                                                                <select class="form-control" name="strStatus">
                                                                                    <option value="" selected></option>
                                                                                    @foreach($arrStatus as $status)
                                                                                        <option value="{{ $status }}" @if($status=='Not Started') selected @endif>{{ $status }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-sm-5 form-group">
                                                                            <label>Task</label>
                                                                            <fieldset class="position-relative">
                                                                                <input type="hidden" id="strTask" name="strTask" value="{{$thissetting->value}}">
                                                                                {{$thissetting->value}}
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-sm-3 form-group">
                                                                            <label>Responsible Person</label>
                                                                            <fieldset class="position-relative">
                                                                                <select class="form-control" id="nAssignedTo" name="nAssignedTo">
                                                                                    <option value="" selected></option>
                                                                                    @foreach ($employees as $employee)
                                                                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-sm-2 form-group">
                                                                            <label>Due Date</label>
                                                                            <fieldset class="position-relative has-icon-left">
                                                                                <input type="text" class="form-control format-picker" placeholder="Select Date" id="purchase_date" name="strDueDate">
                                                                                <div class="form-control-position">
                                                                                    <i class='bx bx-calendar'></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        @php
                                                                            /*<div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                            <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                                Delete
                                                                            </button>
                                                                        </div>*/
                                                                        @endphp
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach

                                                @php
                                                /*
                                                @if(count($onboarding)>0)
                                                    @foreach($onboarding as $task)
                                                        <div data-repeater-item>
                                                            <div class="row justify-content-between">
                                                                <div class="input-group">
                                                                    <div class="col-sm-2 form-group">
                                                                        <label>Status</label>
                                                                        <fieldset class="position-relative">
                                                                            <select class="form-control" name="strStatus">
                                                                                <option value="" selected></option>
                                                                                @foreach($arrStatus as $status)
                                                                                    <option value="{{ $status }}" @if($status == $task->status) selected @endif>{{ $status }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <input type="hidden" name="nTaskID" value="{{ $task->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-3 form-group">
                                                                        <label>Task</label>
                                                                        <fieldset class="position-relative">
                                                                            <select class="form-control" name="strTask">
                                                                                <option value="" selected></option>
                                                                                @foreach($arrTasks as $key=>$val)
                                                                                    <optgroup label="{{$key}}">
                                                                                        @for($i=0; $i<count($val);$i++)
                                                                                            <option value="{{$val[$i]}}" @if($val[$i]==$task->task) selected @endif>{{$val[$i]}}</option>
                                                                                        @endfor
                                                                                    </optgroup>
                                                                                @endforeach
                                                                            </select>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-2 form-group">
                                                                        <label>Responsible Person</label>
                                                                        <fieldset class="position-relative">
                                                                            <select class="form-control" id="nAssignedTo" name="nAssignedTo">
                                                                                <option value="" selected></option>
                                                                                @foreach ($employees as $employee)
                                                                                    <option value="{{ $employee->id }}" @if($task->responsible_person==$employee->id ) { selected } @endif>{{ $employee->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-3 form-group">
                                                                        <label>Due Date</label>
                                                                        <fieldset class="position-relative has-icon-left">
                                                                            <input type="text" class="form-control format-picker" placeholder="Select Date" id="purchase_date" name="strDueDate" value="{{ $task->due_date }}">
                                                                            <div class="form-control-position">
                                                                                <i class='bx bx-calendar'></i>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    @foreach()
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="input-group">
                                                                <div class="col-sm-2 form-group">
                                                                    <label>Status</label>
                                                                    <fieldset class="position-relative">
                                                                        <select class="form-control" name="strStatus">
                                                                            <option value="" selected></option>
                                                                            @foreach($arrStatus as $status)
                                                                                <option value="{{ $status }}">{{ $status }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-sm-3 form-group">
                                                                    <label>Task</label>
                                                                    <fieldset class="position-relative">
                                                                        <select class="form-control" name="strTask">
                                                                            <option value="" selected></option>
                                                                            @foreach($arrTasks as $key=>$val)
                                                                                <optgroup label="{{$key}}">
                                                                                    @for($i=0; $i<count($val);$i++)
                                                                                        <option value="{{$val[$i]}}">{{$val[$i]}}</option>
                                                                                    @endfor
                                                                                </optgroup>
                                                                            @endforeach
                                                                        </select>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-sm-2 form-group">
                                                                    <label>Responsible Person</label>
                                                                    <fieldset class="position-relative">
                                                                        <select class="form-control" id="nAssignedTo" name="nAssignedTo">
                                                                            <option value="" selected></option>
                                                                            @foreach ($employees as $employee)
                                                                                <option value="{{ $employee->id }}" @if(old('nAssignedTo')==$employee->id ) { selected } @endif>{{ $employee->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-sm-3 form-group">
                                                                    <label>Due Date</label>
                                                                    <fieldset class="position-relative has-icon-left">
                                                                        <input type="text" class="form-control format-picker" placeholder="Select Date" id="purchase_date" name="strDueDate">
                                                                        <div class="form-control-position">
                                                                            <i class='bx bx-calendar'></i>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endif*/
                                                @endphp
                                            </div>
                                            @php
                                            /*<div class="form-group">
                                                <div class="col p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus" style="color: #FFFFFF;"></i>
                                                        Add
                                                    </button>
                                                </div>
                                            </div>*/
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="btnFormSubmit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
            <!-- Input Validation end -->
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

</div>*/?>
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
<script src="../../app-assets/vendors/js/vendors.min.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="../../app-assets/js/core/app-menu.js"></script>
<script src="../../app-assets/js/core/app.js"></script>
<script src="../../app-assets/js/scripts/components.js"></script>
<script src="../../app-assets/js/scripts/footer.js"></script>
<script src="../../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="../../app-assets/js/scripts/forms/form-repeater.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../app-assets/js/scripts/forms/validation/form-validation.js"></script>
<script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?time=<?php echo time();?>"></script>
<?php /*<script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?time=<?php echo time();?>"></script>*/?>
<script>
    /*$(document).ready(function(){
        $('.pickadate-limits').pickadate({
            //format: 'mmmm, d, yyyy'
            format: 'yyyy-mm-dd'
        });
    });*/
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- END: Page JS-->
<script>
    $(document).ready(function () {

        $("#frmNewTask").submit(function (e) {

            //stop submitting the form to see the disabled button effect
            //e.preventDefault();

            //disable the submit button
            $("#btnFormSubmit").attr("disabled", true);

            return true;

        });
    });
</script>
</body>
<!-- END: Body-->

</html>
