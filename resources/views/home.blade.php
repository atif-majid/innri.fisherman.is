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
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                <div class="brand-logo" style="width: 100%; max-width: 211px;"><!--<img class="logo" src="app-assets/images/logo/logo.png" />--><img class="logo" src="app-assets/images/logo/fisherman-2.png" style="width: 100%; max-width: 211px; height: 47px; max-height: 47px;" /></div>
                <!--<h2 class="brand-text mb-0">Frest</h2>-->
            </a></li>
            <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>-->
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        @php
            $nCurrUserID = Auth::user()->getempid();
        @endphp
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <!--<li class=" nav-item"><a href="html/ltr/vertical-menu-template/index.html"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="dashboard-ecommerce.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                    <li><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>-->
            <li class=" navigation-header"><span>Production System</span>
            </li>
            <li class=" nav-item"><a href="{{ route('recipes.index') }}"><!--<i class="menu-livicon" data-icon="envelope-pull"></i>--><span class="menu-title" data-i18n="Email">Recipes</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('production.index') }}"><!--<i class="menu-livicon" data-icon="check-alt"></i>--><span class="menu-title" data-i18n="Todo">Today's Production</span></a>
            </li>
            @if($nCurrUserID==9 || $nCurrUserID==40 || $nCurrUserID==36)
                <li class=" nav-item"><a href="{{ route('receptionsurveillance.create') }}"><!--<i class="menu-livicon" data-icon="comments"></i>--><span class="menu-title" data-i18n="Chat">Reception Surveillance</span></a>
            @else
                <li class=" nav-item"><a href="#"><!--<i class="menu-livicon" data-icon="comments"></i>--><span class="menu-title" data-i18n="Chat">Reception Surveillance</span></a>
            @endif
            </li>
            <!--<li class=" nav-item"><a href="app-calendar.html"><i class="menu-livicon" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class=" nav-item"><a href="app-kanban.html"><i class="menu-livicon" data-icon="grid"></i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                <ul class="menu-content">
                    <li><a href="app-invoice-list.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Invoice List</span></a>
                    </li>
                    <li><a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">Invoice</span></a>
                    </li>
                    <li><a href="app-invoice-edit.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Invoice Edit</span></a>
                    </li>
                    <li><a href="app-invoice-add.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">Invoice Add</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="app-file-manager.html"><i class="menu-livicon" data-icon="save"></i><span class="menu-title" data-i18n="File Manager">File Manager</span></a>
            </li>-->
            <li class=" navigation-header"><span>Quality Control</span>
            </li>
            <li class=" nav-item"><a href="#"><!--<i class="menu-livicon" data-icon="retweet"></i>--><span class="menu-title" data-i18n="Content">Consistency Claims</span></a>
            <li class=" nav-item"><a href="#"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Grid">Certificate and Permits</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('templates.index') }}"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Typography">Templates</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('improvements.index') }}"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Text Utilities">Improvements</span></a>
            </li>
            <li class=" nav-item"><a href="#"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Syntax Highlighter">Maintenance Plan</span></a>
            </li>
                    <!--<li><a href="content-helper-classes.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Helper Classes">Helper Classes</span></a>
                    </li>
                </ul>-->
            </li>
            <li class=" navigation-header"><span>Education &amp; News</span>
            </li>
            <li class=" nav-item"><a href="http://www.kennsla.is" target="_blank"><!--<i class="menu-livicon" data-icon="settings"></i>--><span class="menu-title" data-i18n="Form Layout">Educational site</span></a>
            </li>
            <li class=" nav-item"><a href="#"><!--<i class="menu-livicon" data-icon="priority-low"></i>--><span class="menu-title" data-i18n="Form Wizard">Create a news item</span></a>
            </li>
            <li class=" nav-item"><a href="#"><!--<i class="menu-livicon" data-icon="check-alt"></i>--><span class="menu-title" data-i18n="Form Validation">News archive</span></a>
            </li>

            <li class=" navigation-header"><span>Marketing and Sales</span>
            </li>
            <li class=" nav-item"><a href="{{ route('salesopportunity.index') }}"><!--<i class="menu-livicon" data-icon="user"></i>--><span class="menu-title" data-i18n="User Profile">Sales Opportunities</span></a>
            </li>
            @php /*<li class=" nav-item"><a href="#"><!--<i class="menu-livicon" data-icon="question-alt"></i>--><span class="menu-title" data-i18n="FAQ">CRM System</span></a>
            </li>*/ @endphp
            <li class=" nav-item"><a href="/uploads/brandguide/Fisherman-Brandbook-2021.pdf" download target="_blank"><!--<i class="menu-livicon" data-icon="question-alt"></i>--><span class="menu-title" data-i18n="FAQ">Brand Guide 2021</span></a>
            </li>
            <li class=" navigation-header"><span>Employees</span>
            </li>
            <li class=" nav-item"><a href="{{ route('employees.index') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Empoloyee Directory</span></a>
            </li>
            <li class=" nav-item"><a href="#"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Job Description</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('employees.outstandingitems') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Outstanding items</span></a>
            </li>
            <li class=" navigation-header"><span>Site Settings</span>
            </li>
            <li class=" nav-item"><a href="{{ route('sitesettings.index') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Form Values</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('sitesettings.onboardingsections') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Onboarding Categories</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('sitesettings.onboardingtasks') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Onboarding Tasks</span></a>
            </li>

            @if($nCurrUserID==9 || $nCurrUserID==40)
                <li class=" navigation-header"><span>Access Rights</span>
                </li>
                <li class=" nav-item"><a href="{{ route('deptrights.index') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Department Based</span></a>
                </li>
                <li class=" nav-item"><a href="{{ route('emprights.index') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Employee Rights</span></a>
                </li>
            @endif


        </ul>
    </div>
</div>
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
                                                        {{$improvement->due_date}}
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
                                                        {{$task->due_date}}
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
</body>
<!-- END: Body-->

</html>
