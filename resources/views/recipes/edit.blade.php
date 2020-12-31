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
    <title>Recipe - Edit</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="../../app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center py-0">
                                        <div class="media-left pr-0"><img class="mr-1" src="../../app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                                        </div>
                                        <div class="media-right pl-0">
                                            <div class="row border-left text-center">
                                                <div class="col-12 px-50 py-75 border-bottom">
                                                    <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                                                </div>
                                                <div class="col-12 px-50 py-75">
                                                    <h6 class="media-heading mb-0">Close</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer">
                                    <div class="media d-flex align-items-center justify-content-between">
                                        <div class="media-left pr-0">
                                            <div class="media-body">
                                                <h6 class="media-heading">New Offers</h6>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="custom-control custom-switch">
                                                <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                <label class="custom-control-label" for="notificationSwtich"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center border-0">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="../../app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <?php /*<div class="user-nav d-sm-flex d-none"><span class="user-name"> {{ Auth::user()->name }}</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>*/?>
                            <div class="user-nav d-sm-flex d-none"><span class="user-name"> {{ Auth::user()->name }}</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="app-assets/images/portrait/small/group 238_2x.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            <a class="dropdown-item" href="{{ route('change-password') }}"><i class="bx bx-user mr-50"></i> Change Password</a>
                            <?php /*<a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a>
                            <a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a>
                            <a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>*/?>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off mr-50"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="home.html">
                    <div class="brand-logo" style="width: 100%; max-width: 211px;"><!--<img class="logo" src="../../app-assets/images/logo/logo.png" />--><img class="logo" src="../../app-assets/images/logo/fisherman-2.png" style="width: 100%; max-width: 211px; height: 47px; max-height: 47px;" /></div>
                    <!--<h2 class="brand-text mb-0">Frest</h2>-->
                </a></li>
            <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>-->
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class="nav-item"><a href="#"><span class="menu-title">Production System</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="{{ route('recipes.index') }}"><!--<i class="menu-livicon" data-icon="envelope-pull"></i>--><span class="menu-title" data-i18n="Email">Recipes</span></a>
                    </li>
                    <li><a href="{{ route('production.index') }}"><!--<i class="menu-livicon" data-icon="check-alt"></i>--><span class="menu-title" data-i18n="Todo">Today's Production</span></a>
                    </li>
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="comments"></i>--><span class="menu-title" data-i18n="Chat">Reception Surveillance</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><span class="menu-title">Quality Control</span></a>
                <ul class="menu-content">
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="retweet"></i>--><span class="menu-title" data-i18n="Content">Consistency Claims</span></a>
                    </li>
                    <li><a href="#"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Grid">Certificate and permits</span></a>
                    </li>
                    <li><a href="#"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Typography">Templates</span></a>
                    </li>
                    <li><a href="#"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Text Utilities">Complaints</span></a>
                    </li>
                    <li><a href="#"><!--<i class="bx bx-right-arrow-alt"></i>--><span class="menu-item" data-i18n="Syntax Highlighter">Maintenance Plan</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><span class="menu-title">Education &amp; News</span></a>
                <ul class="menu-content">
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="settings"></i>--><span class="menu-title" data-i18n="Form Layout">Educational site</span></a>
                    </li>
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="priority-low"></i>--><span class="menu-title" data-i18n="Form Wizard">Create a news item</span></a>
                    </li>
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="check-alt"></i>--><span class="menu-title" data-i18n="Form Validation">News archive</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><span class="menu-title">Sales</span></a>
                <ul class="menu-content">
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="user"></i>--><span class="menu-title" data-i18n="User Profile">Sales Opportunities</span></a>
                    </li>
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="question-alt"></i>--><span class="menu-title" data-i18n="FAQ">CRM System</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="#"><span class="menu-title">Employees</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('employees.index') }}"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Employee Directory</span></a>
                    </li>
                    <li><a href="#"><!--<i class="menu-livicon" data-icon="globe"></i>--><span class="menu-title" data-i18n="Google Maps">Job Description</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h5 class="content-header-title float-left pr-1 mb-0">Update Recipe</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('recipes.index') }}">Recipes</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Update Recipe</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mb-2">{{ $error }}</div>
                @endforeach
            @endif
            <form class="form-horizontal" novalidate method="post" action="{{ route('recipes.update', $recipe->id) }}">
            @csrf
            @method('PUT')
            <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Recipe General Information</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Recipe Title</label>
                                                    <div class="controls">
                                                        <input type="text" name="title" value="@if (old('title')) {{ old('title') }} @else {{ $recipe->title }} @endif" class="form-control" data-validation-required-message="Recipe title is required" placeholder="Recipe Title">
                                                        <input type="hidden" name="nRecipeId" id="nRecipeId" value="@if (old('nRecipeId')) {{ old('nRecipeId') }} @else {{ $recipe->id }} @endif">
                                                        <input type="hidden" id="deletedingredients" name="deletedingredients" value="@if (old('deletedsteps')) {{ old('deletedsteps') }} @endif">
                                                        <input type="hidden" id="deletedsteps" name="deletedsteps" value="@if (old('deletedsteps')) {{ old('deletedsteps') }} @endif">
                                                    </div>
                                                </div>
                                                @php
                                                /*<div class="form-group">
                                                    <label>Cooking Time</label>
                                                    <div class="controls">
                                                        <input type="text" name="cooking_time" class="form-control" data-validation-required-message="Cooking time required" placeholder="Cooking Time">
                                                    </div>
                                                </div>
                                                */
                                                @endphp
                                            </div>
                                            <div class="col-md-6">
                                                @php
                                                /*
                                                <div class="form-group">
                                                    <label>Preparation Time</label>
                                                    <div class="controls">
                                                        <input type="text" name="preparation_time" class="form-control" data-validation-required-message="Preparaion time is required" placeholder="Preparation Time">
                                                    </div>
                                                </div>
                                                */
                                                @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
                <section id="form-repeater-wrapper">
                    <!-- form default repeater -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Ingredients
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default ingredient">
                                        <div data-repeater-list="Ingredients">
                                            @if (old('Ingredients'))
                                                @for( $i =0; $i < count(old('Ingredients')); $i++)
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="input-group">
                                                                <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                    <label for="text">Name </label>
                                                                    <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Enter Item Title" style="width: 360px;" value="{{ old('Ingredients')[$i]['ingredient'] }}">
                                                                    @if(old('Ingredients')[$i]['ingredientid']>0)
                                                                        <input type="hidden" id="ingredientid" name="ingredientid" value="{{ old('Ingredients')[$i]['ingredientid'] }}">
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px;">
                                                                    <label for="quanity">Quantity</label>
                                                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" style="width: 125px;" value="{{ old('Ingredients')[$i]['quantity'] }}">
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 30px; margin-right: 30px;">
                                                                    <label for="unit">Unit</label>
                                                                    <select name="unit" id="unit" class="form-control" style="width: 125px;">
                                                                        <option value="" selected></option>
                                                                        <option value="grams" @if(old('Ingredients')[$i]['unit'] == 'grams') ? selected : null @endif>grams</option>
                                                                        <option value="kg" @if(old('Ingredients')[$i]['unit'] == 'kg') ? selected : null @endif>kg</option>
                                                                        <option value="">------------</option>
                                                                        <option value="liter" @if(old('Ingredients')[$i]['unit'] == 'liter') ? selected : null @endif>liter</option>
                                                                        <option value="deciliter" @if(old('Ingredients')[$i]['unit'] == 'deciliter') ? selected : null @endif>deciliter</option>
                                                                        <option value="centiliter" @if(old('Ingredients')[$i]['unit'] == 'centiliter') ? selected : null @endif>centiliter</option>
                                                                        <option value="milliliter" @if(old('Ingredients')[$i]['unit'] == 'milliliter') ? selected : null @endif>milliliter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                    @if(old('Ingredients')[$i]['ingredientid']>0)
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deleteingredients({{ old('Ingredients')[$i]['ingredientid'] }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    @else
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endfor
                                            @elseif ($Ingredients)
                                                @foreach($Ingredients as $thisIngredient)
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="input-group">
                                                                <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                    <label for="text">Name </label>
                                                                    <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Enter Item Title" style="width: 360px;" value="{{ $thisIngredient->name }}">
                                                                    <input type="hidden" id="ingredientid" name="ingredientid" value="{{ $thisIngredient->id }}">
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px;">
                                                                    <label for="quanity">Quantity</label>
                                                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" style="width: 125px;" value="{{ $thisIngredient->amount }}">
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 30px; margin-right: 30px;">
                                                                    <label for="unit">Unit</label>
                                                                    <select name="unit" id="unit" class="form-control" style="width: 125px;">
                                                                        <option value="" selected></option>
                                                                        <option value="grams" @if($thisIngredient->unit == 'grams') ? selected : null @endif>grams</option>
                                                                        <option value="kg" @if($thisIngredient->unit == 'kg') ? selected : null @endif>kg</option>
                                                                        <option value="">------------</option>
                                                                        <option value="liter" @if($thisIngredient->unit == 'liter') ? selected : null @endif>liter</option>
                                                                        <option value="deciliter" @if($thisIngredient->unit == 'deciliter') ? selected : null @endif>deciliter</option>
                                                                        <option value="centiliter" @if($thisIngredient->unit == 'centiliter') ? selected : null @endif>centiliter</option>
                                                                        <option value="milliliter" @if($thisIngredient->unit == 'milliliter') ? selected : null @endif>milliliter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deleteingredients({{ $thisIngredient->id }})"> <i class="bx bx-x"></i>
                                                                        Delete
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div data-repeater-item>
                                                    <div class="row justify-content-between">
                                                        <div class="input-group">
                                                            <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                <label for="text">Name </label>
                                                                <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Enter Item Title" style="width: 360px;">
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px;">
                                                                <label for="quanity">Quantity</label>
                                                                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" style="width: 125px;">
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 30px; margin-right: 30px;">
                                                                <label for="unit">Unit</label>
                                                                <select name="unit" id="unit" class="form-control" style="width: 125px;">
                                                                    <option value="" selected></option>
                                                                    <option value="grams">grams</option>
                                                                    <option value="kg">kg</option>
                                                                    <option value="">------------</option>
                                                                    <option value="liter">liter</option>
                                                                    <option value="deciliter">deciliter</option>
                                                                    <option value="centiliter">centiliter</option>
                                                                    <option value="milliliter">milliliter</option>
                                                                </select>
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
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="col p-0">
                                                <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus" style="color: #FFFFFF;"></i>
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ form default repeater -->
                </section>
                <section id="form-repeater-wrapper">
                    <!-- form default repeater -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Steps
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="Steps">
                                            @if (old('Steps'))
                                                @for( $i =0; $i < count(old('Steps')); $i++)
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="col-md-2 col-sm-12 form-group" style="width: 800px; max-width: 80%;">
                                                                <label for="text">Step </label>
                                                                <textarea class="form-control" id="step" name="step" placeholder="Enter Step Detail" rows="4" style="width: 800px; max-width: 100%;">{{ old('Steps')[$i]['step'] }}</textarea>
                                                                @if(old('Steps')[$i]['stepid']>0)
                                                                    <input type="hidden" id="stepid" name="stepid" value="{{ old('Steps')[$i]['stepid'] }}">
                                                                @endif
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                @if(old('Steps')[$i]['stepid']>0)
                                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesteps({{ old('Steps')[$i]['stepid'] }})"> <i class="bx bx-x"></i>
                                                                        Delete
                                                                    </button>
                                                                @else
                                                                    <button class="btn btn-danger text-nowrap px-1 steps" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                        Delete
                                                                    </button>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endfor
                                            @elseif($Steps)
                                                @foreach($Steps as $thisStep)
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="col-md-2 col-sm-12 form-group" style="width: 800px; max-width: 80%;">
                                                                <label for="text">Step </label>
                                                                <textarea class="form-control" id="step" name="step" placeholder="Enter Step Detail" rows="4" style="width: 800px; max-width: 100%;">{{ $thisStep->details }}</textarea>
                                                                <input type="hidden" id="stepid" name="stepid" value="{{ $thisStep->id }}">
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesteps({{ $thisStep->id }})"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div data-repeater-item>
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-2 col-sm-12 form-group" style="width: 800px; max-width: 80%;">
                                                            <label for="text">Step </label>
                                                            <textarea class="form-control" id="step" name="step" placeholder="Enter Step Detail" rows="4" style="width: 800px; max-width: 100%;"></textarea>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                            <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="col p-0">
                                                <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus" style="color: #FFFFFF;"></i>
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ form default repeater -->
                </section>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- END: Content-->

<?php
/*<!-- demo chat-->
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

</div>*/ ?>
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
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="../../app-assets/js/core/app-menu.js"></script>
<script src="../../app-assets/js/core/app.js"></script>
<script src="../../app-assets/js/scripts/components.js"></script>
<script src="../../app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="../../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="../../app-assets/js/scripts/forms/form-repeater.js?time=<?php echo time();?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
<script>
    function deleteingredients(nIDIngredient)
    {
        if($('#deletedingredients').val()=="")
        {
            $('#deletedingredients').val(nIDIngredient);
        }
        else {
            var currDelIngredients = $('#deletedingredients').val() + "," + nIDIngredient;
            $('#deletedingredients').val(currDelIngredients);
        }
    }

    function deletesteps(nIDStep)
    {
        if($('#deletedsteps').val()=="")
        {
            $('#deletedsteps').val(nIDStep);
        }
        else
        {
            var currDelSteps = $('#deletedsteps').val() + "," + nIDStep;
            $('#deletedsteps').val(currDelSteps);
        }
    }

</script>

</body>
<!-- END: Body-->

</html>
