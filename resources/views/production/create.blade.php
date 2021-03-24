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
    <title>Production - Add New Record</title>
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
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/pickadate/pickadate.css">
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Add New Record</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('production.index') }}">Today's Production</a>
                                </li>
                                <li class="breadcrumb-item active">Add new record
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
            <form class="form-horizontal" novalidate method="post" action="{{ route('production.store') }}">
                @csrf
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Production Data</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form col-md-12">
                                            <div class="row">
                                                <div class="form-group col-sm">
                                                    <label>Recipe</label>
                                                    <select class="form-control" id="recipe_id" name="recipe_id">
                                                        <option value="" selected></option>
                                                        @foreach ($recipes as $recipe)
                                                            <option value="{{ $recipe->id }}">@if($recipe->product_number!=""){{ $recipe->product_number }} - @endif {{$recipe->title}}</option>
                                                        @endforeach
                                                        <!--<option value="">Select an Option</option>
                                                        <option value="F">Cured Salmon "Gravlax "</option>
                                                        <option value="M">Rope Hung Smoked Salmon</option>
                                                        <option value="P">Smoked Salmon</option>
                                                        <option value="S">Smoked salmon "húskarlabiti"</option>-->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm">
                                                    <label>Product nr.</label>
                                                    <div class="controls">
                                                        <input type="text" name="product_number" id="product_number" class="form-control" @php /*data-validation-required-message="Product nr. is required"*/ @endphp placeholder="Product nr.">
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm">
                                                    <label>LOT nr.</label>
                                                    <div class="controls">
                                                        <input type="text" name="lot_number" class="form-control" @php /*data-validation-required-message="LOT nr. is required"*/ @endphp placeholder="LOT nr.">
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm">
                                                    <label>Order nr.</label>
                                                    <div class="controls">
                                                        <input type="text" name="order_number" class="form-control" @php /*data-validation-required-message="Order nr. is required"*/ @endphp placeholder="Order nr.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm">
                                                    <label>Quantity (Estimate)</label>
                                                    <div class="controls">
                                                        <input type="text" name="quantity_estimate" id="quantity_estimate" class="form-control" @php /*data-validation-required-message="Quantity estimate is required"*/ @endphp placeholder="Quantity Estimate">
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm">
                                                    <label>Unit</label>
                                                    <fieldset class="position-relative">
                                                        <select class="form-control" id="quantity_estimate_unit" name="quantity_estimate_unit">
                                                            <option value="" selected></option>
                                                            <option value="kg" @if(old('quantity_estimate_unit') == 'kg') ? selected : null @endif>kg</option>
                                                            <option value="grams" @if(old('quantity_estimate_unit') == 'grams') ? selected : null @endif>grams</option>
                                                            <option value="">------------</option>
                                                            <option value="liter" @if(old('quantity_estimate_unit') == 'liter') ? selected : null @endif>liter</option>
                                                            <option value="deciliter" @if(old('quantity_estimate_unit') == 'deciliter') ? selected : null @endif>deciliter</option>
                                                            <option value="centiliter" @if(old('quantity_estimate_unit') == 'centiliter') ? selected : null @endif>centiliter</option>
                                                            <option value="milliliter" @if(old('quantity_estimate_unit')== 'milliliter') ? selected : null @endif>milliliter</option>
                                                            <option value="">------------</option>
                                                            <option value="pieces" @if(old('quantity_estimate_unit') == 'pieces') ? selected : null @endif>pieces</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                <div class="form-group col-sm">
                                                    <label>Quantity Scaled</label>
                                                    <div class="controls">
                                                        <input type="text" name="quantity_scaled" class="form-control" @php /*data-validation-required-message="Quantity Scaled is required"*/ @endphp placeholder="Quantity Scaled">
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm">
                                                    <label>Unit</label>
                                                    <fieldset class="position-relative">
                                                        <select class="form-control" id="quantity_scaled_unit" name="quantity_scaled_unit">
                                                            <option value="" selected></option>
                                                            <option value="kg" @if(old('quantity_scaled_unit') == 'kg') ? selected : null @endif>kg</option>
                                                            <option value="grams" @if(old('quantity_scaled_unit') == 'grams') ? selected : null @endif>grams</option>
                                                            <option value="">------------</option>
                                                            <option value="liter" @if(old('quantity_scaled_unit') == 'liter') ? selected : null @endif>liter</option>
                                                            <option value="deciliter" @if(old('quantity_scaled_unit') == 'deciliter') ? selected : null @endif>deciliter</option>
                                                            <option value="centiliter" @if(old('quantity_scaled_unit') == 'centiliter') ? selected : null @endif>centiliter</option>
                                                            <option value="milliliter" @if(old('quantity_scaled_unit')== 'milliliter') ? selected : null @endif>milliliter</option>
                                                            <option value="">------------</option>
                                                            <option value="pieces" @if(old('quantity_scaled_unit') == 'pieces') ? selected : null @endif>pieces</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm">
                                                    <button type="button" class="btn btn-primary" id="btnCalculate">Calculate Ingredients</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Instructions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="Instructions">
                                            <div data-repeater-item>
                                                <div class="row justify-content-between">
                                                    <div class="input-group">
                                                        <div class="col-sm-4 form-group">
                                                            <label>Date</label>
                                                            <fieldset class="position-relative has-icon-left">
                                                                <input type="text" class="form-control format-picker" placeholder="Select Date" id="instruction_date" name="instruction_date">
                                                                <div class="form-control-position">
                                                                    <i class='bx bx-calendar'></i>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-sm form-group" style="padding-top: 40px;">
                                                            <label class="custom-control custom-checkbox checkbox-input">
                                                                <input type="checkbox" name="chk_make" class="checkbox-input custom-control-input" value="yes">
                                                                <span class="custom-control-label" for="chk_make" style="padding-top: 3px !important;"> Make</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm form-group" style="padding-top: 40px;">
                                                            <label class="custom-control custom-checkbox checkbox-input">
                                                                <input type="checkbox" name="chk_freeze" class="checkbox-input custom-control-input" value="yes">
                                                                <span class="custom-control-label" for="chk_freeze" style="padding-top: 3px !important;"> Freeze</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm form-group" style="padding-top: 40px;">
                                                            <label class="custom-control custom-checkbox checkbox-input">
                                                                <input type="checkbox" name="chk_pack" class="checkbox-input custom-control-input" value="yes">
                                                                <span class="custom-control-label" for="chk_pack" style="padding-top: 3px !important;"> Pack</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm form-group" style="padding-top: 40px;">
                                                            <label class="custom-control custom-checkbox checkbox-input" style="vertical-align: bottom">
                                                                <input type="checkbox" name="chk_send" class="checkbox-input custom-control-input" value="yes">
                                                                <span class="custom-control-label" for="chk_send" style="padding-top: 3px !important;"> Send</span>
                                                            </label>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Raw Materials</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="rawmaterials">
                                            <div data-repeater-item>
                                                <div class="row justify-content-between">
                                                    <div class="input-group">
                                                        <div class="form-group col-sm">
                                                            <label>Product Name</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Product Name" id="material_name" name="material_name">
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Quantity</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Quantity" id="material_quantity" name="material_quantity">
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Unit</label>
                                                            <fieldset class="position-relative">
                                                                <select class="form-control" id="material_unit" name="material_unit">
                                                                    <option value="" selected></option>
                                                                    <option value="kg" @if(old('material_unit') == 'kg') ? selected : null @endif>kg</option>
                                                                    <option value="grams" @if(old('material_unit') == 'grams') ? selected : null @endif>grams</option>
                                                                    <option value="">------------</option>
                                                                    <option value="liter" @if(old('material_unit') == 'liter') ? selected : null @endif>liter</option>
                                                                    <option value="deciliter" @if(old('material_unit') == 'deciliter') ? selected : null @endif>deciliter</option>
                                                                    <option value="centiliter" @if(old('material_unit') == 'centiliter') ? selected : null @endif>centiliter</option>
                                                                    <option value="milliliter" @if(old('material_unit')== 'milliliter') ? selected : null @endif>milliliter</option>
                                                                    <option value="">------------</option>
                                                                    <option value="pieces" @if(old('material_unit') == 'pieces') ? selected : null @endif>pieces</option>
                                                                    <option value="">------------</option>
                                                                    <option value="packages" @if(old('material_unit') == 'packages') ? selected : null @endif>packages</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Lot nr.</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Lot Nr" id="material_lot_nr" name="material_lot_nr">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Packaging</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="packaging">
                                            <div data-repeater-item class="repeaterpackage">
                                                <div class="row justify-content-between">
                                                    <div class="input-group">
                                                        <div class="form-group col-sm">
                                                            <label>Packing</label>
                                                            <fieldset class="position-relative">
                                                                <select class="form-control" id="packing_type" name="packing_type">
                                                                    <option value="" selected></option>
                                                                    <option value="Gastro">Gastro</option>
                                                                    <option value="Aluminum tray">Aluminum tray</option>
                                                                    <option value="Paper tray">Paper tray</option>
                                                                    <option value="Blue bag">Blue bag</option>
                                                                    <option value="MV">MV</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Package Size</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Package Size" id="package_size" name="package_size">
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Unit</label>
                                                            <fieldset class="position-relative">
                                                                <select class="form-control" id="packing_unit" name="packing_unit">
                                                                    <option value="" selected></option>
                                                                    <option value="kg" @if(old('packing_unit') == 'kg') ? selected : null @endif>kg</option>
                                                                    <option value="grams" @if(old('packing_unit') == 'grams') ? selected : null @endif>grams</option>
                                                                    <option value="">------------</option>
                                                                    <option value="liter" @if(old('packing_unit') == 'liter') ? selected : null @endif>liter</option>
                                                                    <option value="deciliter" @if(old('packing_unit') == 'deciliter') ? selected : null @endif>deciliter</option>
                                                                    <option value="centiliter" @if(old('packing_unit') == 'centiliter') ? selected : null @endif>centiliter</option>
                                                                    <option value="milliliter" @if(old('packing_unit')== 'milliliter') ? selected : null @endif>milliliter</option>
                                                                    <option value="">------------</option>
                                                                    <option value="pieces" @if(old('packing_unit') == 'pieces') ? selected : null @endif>pieces</option>
                                                                    <option value="">------------</option>
                                                                    <option value="packages" @if(old('packing_unit') == 'packages') ? selected : null @endif>packages</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Quantity Pieces</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Quantity" id="package_quantity" name="package_quantity">
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Total</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Total" id="package_total" name="package_total">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Shipment and Storage Options</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="shipment">
                                            <div data-repeater-item>
                                                <div class="row justify-content-between">
                                                    <div class="input-group">
                                                        <div class="form-group col-sm">
                                                            <label>Quantity</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Quantity" id="shipment_quantity" name="shipment_quantity">
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Unit</label>
                                                            <fieldset class="position-relative">
                                                                <select class="form-control" id="shipment_unit" name="shipment_unit">
                                                                    <option value="" selected></option>
                                                                    <option value="kg" @if(old('shipment_unit') == 'kg') ? selected : null @endif>kg</option>
                                                                    <option value="grams" @if(old('shipment_unit') == 'grams') ? selected : null @endif>grams</option>
                                                                    <option value="">------------</option>
                                                                    <option value="liter" @if(old('shipment_unit') == 'liter') ? selected : null @endif>liter</option>
                                                                    <option value="deciliter" @if(old('shipment_unit') == 'deciliter') ? selected : null @endif>deciliter</option>
                                                                    <option value="centiliter" @if(old('shipment_unit') == 'centiliter') ? selected : null @endif>centiliter</option>
                                                                    <option value="milliliter" @if(old('shipment_unit')== 'milliliter') ? selected : null @endif>milliliter</option>
                                                                    <option value="">------------</option>
                                                                    <option value="pieces" @if(old('shipment_unit') == 'pieces') ? selected : null @endif>pieces</option>
                                                                    <option value="">------------</option>
                                                                    <option value="packages" @if(old('shipment_unit') == 'packages') ? selected : null @endif>packages</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Delivery / Storage</label>
                                                            <fieldset class="form-group">
                                                                <select class="form-control" id="delivery_storage" name="delivery_storage">
                                                                    <option value="-1">Select an Option</option>
                                                                    <option value="FÍ">Freezer Íslandssaga</option>
                                                                    <option value="Flytjandi">Sent today w/Flytjandi</option>
                                                                    <option value="K">Our cooler</option>
                                                                    <option value="F">Our Freezer</option>
                                                                    <option value="FBox">Blue boxes in our freezer</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group col-sm">
                                                            <label>Palet nr./Shelf nr.</label>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Total" id="storage_pallet" name="storage_pallet">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </section>
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

</div>
*/?>
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
<script src="../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>


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
<!-- END: Page JS-->
<script src="../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?time=<?php echo time();?>"></script>
<script src="../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="../app-assets/js/scripts/forms/form-repeater.js"></script>
<script>
    $('body').on('keyup',"#package_size", function(){
        var nRowIndex = $(this).closest("div.repeaterpackage").index();
        var nPackageSize = $(this).val();
        var strQuantityName = 'packaging['+nRowIndex+'][package_quantity]';
        var nQuantity = $("input[name='"+strQuantityName+"']").val();
        if(nPackageSize>0 && nQuantity>0)
        {
            var strTotalName = 'packaging['+nRowIndex+'][package_total]';
            updatetotal(nPackageSize, nQuantity, strTotalName);
        }
    });
    $('body').on('keyup',"#package_quantity", function(){
        var nRowIndex = $(this).closest("div.repeaterpackage").index();
        var nQuantity = $(this).val();
        var strPackageSizeName = 'packaging['+nRowIndex+'][package_size]';
        var nPackageSize = $("input[name='"+strPackageSizeName+"']").val();
        if(nPackageSize>0 && nQuantity>0)
        {
            var strTotalName = 'packaging['+nRowIndex+'][package_total]';
            updatetotal(nPackageSize, nQuantity, strTotalName);
        }

    });
    function updatetotal(nPackageSize, nQuantity, strTotalName)
    {
        var nTotal = nPackageSize * nQuantity;
        $("input[name='"+strTotalName+"']").val(nTotal);
    }
    $('#btnCalculate').click(function (){
        var nRecipe = $('#recipe_id').val();
        var nQuantity = $('#quantity_estimate').val();
        var nUnit = $('#quantity_estimate_unit').val();
        if(nRecipe=="" || nQuantity=="" || nUnit=="")
        {
            $('#divModalMsg').html('Please select recipe, quanity and unit!');
        }
        else {
            $.ajax({
                method: "POST",
                url: "{{ route('production.calculate') }}",
                data: { "_token": "{{ csrf_token() }}", nRecipe: nRecipe, nQuantity: nQuantity, nUnit:nUnit}
            })
                .done(function( msg ) {
                    $('#divModalMsg').html(msg);
                });
        }
        $('#modalCalculation').modal('show');
    });
    var Recipes = new Array();
    var productnumber = new Array();
    var nUnit = new Array();
    var nCount = 0;
    @php
        foreach($recipes as $recipe)
        {
            if($recipe->product_number!="")
            {
                @endphp
                productnumber[nCount] = "@php echo $recipe->product_number; @endphp";
                @php
            }
            else
            {
                @endphp
                    productnumber[nCount] = "";
                @php
            }
            if($recipe->unit!="")
            {
                @endphp
                    nUnit[nCount] = "@php echo $recipe->unit; @endphp";
                @php
            }
            else
            {
                @endphp
                    nUnit[nCount] = "";
                @php
            }
            @endphp
                Recipes[nCount] = "@php echo $recipe->id @endphp";
                nCount++;
            @php
        }
    @endphp
    $('#recipe_id').on('change', function() {
        nID = $(this).val();
        nSelIndex = 0;
        for(i=0; i<Recipes.length; i++)
        {
            if(Recipes[i]==nID)
            {
                nSelIndex = i;
                break;
            }
        }
        $('#product_number').val((productnumber[nSelIndex]));
        $('#quantity_estimate_unit').val(nUnit[nSelIndex]);
        $('#quantity_scaled_unit').val(nUnit[nSelIndex]);
    });
</script>
<div class="modal fade text-left" id="modalCalculation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Notice </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body" id="divModalMsg">

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
</body>
<!-- END: Body-->

</html>
