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
    <title>Site Settings</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <!--<link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">-->
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
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .form-group{
            margin-bottom: 0rem !important;
        }
        .mb-2, .my-2{
            margin-bottom: 0.5rem !important;
        }
        .col-md-2{
            padding-left: 0px !important;
            padding-top: 1rem !important;
        }
        .btn-danger{
            padding-top: 0.4rem !important;
            padding-bottom: 0.4rem !important;
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Site Settings</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Site Settings
                                </li>
                                <!--<li class="breadcrumb-item active">Add new employee
                                </li>-->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Input Validation start -->
            @if ($message = Session::get('success'))
                <div class="alert alert-info mb-2">
                    {{ $message }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-warning mb-2">{{$errors->first()}}</div>
            @endif
            <form class="form-horizontal" novalidate method="post" action="{{ route('sitesettings.store') }}">
                @csrf
                <input type="hidden" id="deletedsettings" name="deletedsettings" value="">
                <section id="form-control-repeater">
                    <div class="row">
                        <!-- file repeater  -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Type of Notification</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 form-group type-of-notification">
                                                <div data-repeater-list="Notifications">
                                                    @foreach($sitesettings as $thissetting)
                                                        @if($thissetting->field=='Notification')
                                                            <div data-repeater-item>
                                                                <div class="row mb-2 justify-content-between">
                                                                    <div class="form-group col-sm">
                                                                        <label>Notification Title</label>
                                                                        <fieldset class="position-relative">
                                                                            <input type="text" id="strNotificationType" name="strNotificationType" value="{{ $thissetting->value }}">
                                                                            <input type="hidden" id="nID" name="nID" value="{{ $thissetting->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesettings({{ $thissetting->id }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row mb-2">
                                                            <div class="form-group col-sm">
                                                                <label>Notification Title</label>
                                                                <fieldset class="position-relative">
                                                                    <input type="text" id="strNotificationType" name="strNotificationType">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col form-group p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /file repeater -->
                        <!-- phone repeater -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Production Sites</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 form-group production-site">
                                                <div data-repeater-list="ProductionSites">
                                                    @foreach($sitesettings as $thissetting)
                                                        @if($thissetting->field=='ProductionSite')
                                                            <div data-repeater-item>
                                                                <div class="row mb-2">
                                                                    <div class="form-group col-sm">
                                                                        <label>Site Name</label>
                                                                        <fieldset class="position-relative">
                                                                            <input type="text" id="strProductionSite" name="strProductionSite" value="{{ $thissetting->value }}">
                                                                            <input type="hidden" id="nID" name="nID" value="{{ $thissetting->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesettings({{ $thissetting->id }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row mb-2">
                                                            <div class="form-group col-sm">
                                                                <label>Site Name</label>
                                                                <fieldset class="position-relative">
                                                                    <input type="text" id="strProductionSite" name="strProductionSite">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col form-group p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /phone repeater -->
                    </div>
                </section>

                <section id="form-control-repeater1">
                    <div class="row">
                        <!-- file repeater  -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Supplier</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 form-group list-of-suppliers">
                                                <div data-repeater-list="Suppliers">
                                                    @foreach($sitesettings as $thissetting)
                                                        @if($thissetting->field=='SupplierName')
                                                            <div data-repeater-item>
                                                                <div class="row mb-2">
                                                                    <div class="form-group col-sm">
                                                                        <label>Suppliers</label>
                                                                        <fieldset class="position-relative">
                                                                            <input type="text" id="strSupplierName" name="strSupplierName" value="{{ $thissetting->value }}">
                                                                            <input type="hidden" id="nID" name="nID" value="{{ $thissetting->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesettings({{ $thissetting->id }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row mb-2">
                                                            <div class="form-group col-sm">
                                                                <label>Suppliers</label>
                                                                <fieldset class="position-relative">
                                                                    <input type="text" id="strSupplierName" name="strSupplierName">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col form-group p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /file repeater -->
                        <!-- phone repeater -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Selling Locations</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 form-group selling-locations">
                                                <div data-repeater-list="SellingLocations">
                                                    @foreach($sitesettings as $thissetting)
                                                        @if($thissetting->field=='SellingSite')
                                                            <div data-repeater-item>
                                                                <div class="row mb-2">
                                                                    <div class="form-group col-sm">
                                                                        <label>Location Name</label>
                                                                        <fieldset class="position-relative">
                                                                            <input type="text" id="strSellingSite" name="strSellingSite" value="{{ $thissetting->value }}">
                                                                            <input type="hidden" id="nID" name="nID" value="{{ $thissetting->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesettings({{ $thissetting->id }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row mb-2">
                                                            <div class="form-group col-sm">
                                                                <label>Location Name</label>
                                                                <fieldset class="position-relative">
                                                                    <input type="text" id="strSellingSite" name="strSellingSite">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col form-group p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /phone repeater -->
                    </div>
                </section>
                <section id="form-control-repeater2">
                    <div class="row">
                        <!-- file repeater  -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Type of Fish</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 form-group list-of-fishtypes">
                                                <div data-repeater-list="Fishtypes">
                                                    @foreach($sitesettings as $thissetting)
                                                        @if($thissetting->field=='FishType')
                                                            <div data-repeater-item>
                                                                <div class="row mb-2">
                                                                    <div class="form-group col-sm">
                                                                        <label>Fish Type</label>
                                                                        <fieldset class="position-relative">
                                                                            <input type="text" id="strFishType" name="strFishType" value="{{ $thissetting->value }}">
                                                                            <input type="hidden" id="nID" name="nID" value="{{ $thissetting->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesettings({{ $thissetting->id }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row mb-2">
                                                            <div class="form-group col-sm">
                                                                <label>Fish Type</label>
                                                                <fieldset class="position-relative">
                                                                    <input type="text" id="strFishType" name="strFishType">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col form-group p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Warehouse</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 form-group list-of-warehouse">
                                                <div data-repeater-list="Warehouse">
                                                    @foreach($sitesettings as $thissetting)
                                                        @if($thissetting->field=='WareHouse')
                                                            <div data-repeater-item>
                                                                <div class="row mb-2">
                                                                    <div class="form-group col-sm">
                                                                        <label>Warehouse Name</label>
                                                                        <fieldset class="position-relative">
                                                                            <input type="text" id="strWareHouse" name="strWareHouse" value="{{ $thissetting->value }}">
                                                                            <input type="hidden" id="nID" name="nID" value="{{ $thissetting->id }}">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button" onclick="deletesettings({{ $thissetting->id }})"> <i class="bx bx-x"></i>
                                                                            Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div data-repeater-item>
                                                        <div class="row mb-2">
                                                            <div class="form-group col-sm">
                                                                <label>Warehouse Name</label>
                                                                <fieldset class="position-relative">
                                                                    <input type="text" id="strWareHouse" name="strWareHouse">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col form-group p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button">
                                                        <i class="bx bx-plus"></i>Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /file repeater -->
                        <!-- phone repeater -->

                        <!-- /phone repeater -->
                    </div>
                </section>
                <section  class="input-validation">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Salary Cost</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @php
                                        $nSalaryCost = 0;
                                    @endphp
                                    @foreach($sitesettings as $thissetting)
                                        @if($thissetting->field=='SalaryCost')
                                            @php
                                                $nSalaryCost = $thissetting->value;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <div class="form-group">
                                        <label>Salary Cost Per Hour (ISK)</label>
                                        <div class="controls">
                                            <input type="test" name="nSalaryCost" class="form-control" placeholder="Salary Cost Per Hour (ISK)" value="{{$nSalaryCost}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
                            <img src="../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
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
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<script src="../app-assets/js/scripts/components.js"></script>
<script src="../app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../app-assets/js/scripts/forms/validation/form-validation.js"></script>
<script src="../app-assets/js/scripts/forms/form-repeater.js?time=<?php echo time();?>"></script>
<!-- END: Page JS-->
<script>
    function deletesettings(nID)
    {
        if($('#deletedsettings').val()=="")
        {
            $('#deletedsettings').val(nID);
        }
        else {
            var currDelSettings = $('#deletedsettings').val() + "," + nID;
            $('#deletedsettings').val(currDelSettings);
        }
    }
</script>
</body>
<!-- END: Body-->

</html>
