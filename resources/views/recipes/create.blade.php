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
    <title>Innri - Add New Recipe</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">
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
                        <h5 class="content-header-title float-left pr-1 mb-0">New Recipe</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('recipes.index') }}">Recipes</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">New Recipe</a>
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
            <form id="frmNewRecipe" class="form-horizontal" enctype='multipart/form-data' novalidate method="post" action="{{ route('recipes.store') }}">
            @csrf
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
                                                    <label>Product number</label>
                                                    <div class="controls">
                                                        <input type="text" name="strProductNumber" class="form-control" value="{{ old('strProductNumber') }}" @php /*data-validation-required-message="Product Number is required"*/ @endphp placeholder="Product Number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Recipe Title</label>
                                                    <div class="controls">
                                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control" data-validation-required-message="Recipe title is required" placeholder="Recipe Title">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Recipe Created</label>
                                                    <div class="controls">
                                                        <fieldset class="position-relative has-icon-left">
                                                            <input type="text" class="form-control format-picker" placeholder="Select Date" id="created_date" name="created_date">
                                                            <div class="form-control-position">
                                                                <i class='bx bx-calendar'></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <div class="controls">
                                                        <input type="text" name="nRecipeQuantity" class="form-control" value="{{ old('nRecipeQuantity') }}" @php /*data-validation-required-message="Product Number is required"*/ @endphp placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="RecipeUnit">Unit</label>
                                                    <div class="controls">
                                                        <select name="RecipeUnit" id="RecipeUnit" class="form-control">
                                                            <option value="" selected></option>
                                                            <option value="kg" @if(old('RecipeUnit') == 'kg') ? selected : null @endif>kg</option>
                                                            <option value="grams" @if(old('RecipeUnit') == 'grams') ? selected : null @endif>grams</option>
                                                            <option value="">------------</option>
                                                            <option value="liter" @if(old('RecipeUnit') == 'liter') ? selected : null @endif>liter</option>
                                                            <option value="deciliter" @if(old('RecipeUnit') == 'deciliter') ? selected : null @endif>deciliter</option>
                                                            <option value="centiliter" @if(old('RecipeUnit') == 'centiliter') ? selected : null @endif>centiliter</option>
                                                            <option value="milliliter" @if(old('RecipeUnit')== 'milliliter') ? selected : null @endif>milliliter</option>
                                                            <option value="">------------</option>
                                                            <option value="pieces" @if(old('RecipeUnit') == 'pieces') ? selected : null @endif>pieces</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="RecipeUnit">Production Site</label>
                                                    <div class="controls">
                                                        <select class="form-control" name="strProductionLocation">
                                                            <option selected="" selected></option>
                                                            @foreach($productionSites as $thissetting)
                                                                <option value="{{ $thissetting->value }}">{{ $thissetting->value }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
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
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="Ingredients">
                                            @if (old('Ingredients'))
                                                @for( $i =0; $i < count(old('Ingredients')); $i++)
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="input-group">
                                                                <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                    <label for="text">Name </label>
                                                                    <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Enter Item Title" style="width: 330px;" value="{{ old('Ingredients')[$i]['ingredient'] }}">
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                    <label for="text">Product Number </label>
                                                                    <input type="text" class="form-control" id="ing_product_number" name="ing_product_number" placeholder="Product Number" style="width: 330px;" value="{{ old('Ingredients')[$i]['ing_product_number'] }}">
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 10px; margin-right: 50px;">
                                                                    <label for="unit">Supplier</label>
                                                                    <select name="supplier" id="supplier" class="form-control" style="width: 170px;">
                                                                        <option value="" selected></option>
                                                                        @foreach($Suppliers as $Supplier)
                                                                            <option value="{{$Supplier->value}}" @if(old('Ingredients')[$i]['supplier'] == $Supplier->value) ? selected : null @endif>{{$Supplier->value}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px;">
                                                                    <label for="quanity">Quantity</label>
                                                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" style="width: 125px;" value="{{ old('Ingredients')[$i]['quantity'] }}">
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 30px; margin-right: 30px;">
                                                                    <label for="unit">Unit</label>
                                                                    <select name="unit" id="unit" class="form-control" style="width: 125px;">
                                                                        <option value="" selected></option>
                                                                        <option value="kg" @if(old('Ingredients')[$i]['unit'] == 'kg') ? selected : null @endif>kg</option>
                                                                        <option value="grams" @if(old('Ingredients')[$i]['unit'] == 'grams') ? selected : null @endif>grams</option>
                                                                        <option value="">------------</option>
                                                                        <option value="liter" @if(old('Ingredients')[$i]['unit'] == 'liter') ? selected : null @endif>liter</option>
                                                                        <option value="deciliter" @if(old('Ingredients')[$i]['unit'] == 'deciliter') ? selected : null @endif>deciliter</option>
                                                                        <option value="centiliter" @if(old('Ingredients')[$i]['unit'] == 'centiliter') ? selected : null @endif>centiliter</option>
                                                                        <option value="milliliter" @if(old('Ingredients')[$i]['unit'] == 'milliliter') ? selected : null @endif>milliliter</option>
                                                                        <option value="">------------</option>
                                                                        <option value="pieces" @if(old('Ingredients')[$i]['unit'] == 'pieces') ? selected : null @endif>pieces</option>
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
                                                @endfor
                                            @else
                                                <div data-repeater-item>
                                                    <div class="row justify-content-between">
                                                        <div class="input-group">
                                                            <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                <label for="text">Name </label>
                                                                <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Enter Item Title" style="width: 330px;">
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group" style="max-width: 600px;">
                                                                <label for="text">Product Number </label>
                                                                <input type="text" class="form-control" id="ing_product_number" name="ing_product_number" placeholder="Product Number" style="width: 330px;">
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 10px; margin-right: 50px;">
                                                                <label for="unit">Supplier</label>
                                                                <select name="supplier" id="supplier" class="form-control" style="width: 150px;">
                                                                    <option value="" selected></option>
                                                                    @foreach($Suppliers as $Supplier)
                                                                        <option value="{{$Supplier->value}}">{{$Supplier->value}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px;">
                                                                <label for="quanity">Quantity</label>
                                                                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" style="width: 125px;">
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group"  style="max-width: 125px; margin-left: 30px; margin-right: 30px;">
                                                                <label for="unit">Unit</label>
                                                                <select name="unit" id="unit" class="form-control" style="width: 125px;">
                                                                    <option value="" selected></option>
                                                                    <option value="kg">kg</option>
                                                                    <option value="grams">grams</option>
                                                                    <option value="">------------</option>
                                                                    <option value="liter">liter</option>
                                                                    <option value="deciliter">deciliter</option>
                                                                    <option value="centiliter">centiliter</option>
                                                                    <option value="milliliter">milliliter</option>
                                                                    <option value="">------------</option>
                                                                    <option value="pieces">pieces</option>
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
                                                            </div>
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                @endfor
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
                </section>
            </form>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Photos</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('recipes.uploadpicture') }}" class="dropzone dropzone-area" id="dpz-remove-thumb" style="margin-left: 20px;margin-right:20px !important;">
                                        <div class="dz-message" style="height: 200px !important;">Drop Files Here To Upload</div>
                                        <input type="hidden" id="nRecipeID" name="nRecipeID">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--/ form default repeater -->
            <button id="btnAllSubmit" type="submit" class="btn btn-primary">Submit</button>
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
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<script src="../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/extensions/dropzone.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<script src="../app-assets/js/scripts/components.js"></script>
<script src="../app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="../app-assets/js/scripts/forms/form-repeater.js"></script>
<script src="../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?time=<?php echo time();?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
<script>
    var myDropzone;
    Dropzone.options.dpzRemoveThumb = {
        paramName: "file", // The name that will be used to transfer the file
        acceptedFiles: "image/*,application/pdf,.doc,.docx,.xls,.xlsx,.csv,.tsv,.ppt,.pptx,.pages,.odt,.rtf",
        accept: function(file, done) {
            //var thumbnail = $('.dropzone .dz-preview.dz-file-preview .dz-image:last');
            var thumbnail = $(file.previewElement).find('.dz-details img');
            switch (file.type) {
                case 'application/pdf':
                    thumbnail.attr('src', '/uploads/fileicons/pdf.png');
                    thumbnail.css('display', 'inline');
                    break;
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                    thumbnail.attr('src', '/uploads/fileicons/doc.png');
                    thumbnail.css('display', 'inline');
                    break;
                case 'application/msword':
                    thumbnail.attr('src', '/uploads/fileicons/doc.png');
                    thumbnail.css('display', 'inline');
                    break;
                case 'text/csv':
                    thumbnail.attr('src', '/uploads/fileicons/csv.png');
                    thumbnail.css('display', 'inline');
                    break;
            }

            done();
        },
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        dictRemoveFile: " Trash",
        autoProcessQueue: false,
        parallelUploads:20,
        init: function (e) {
            var myDropzone = this;
            $('#btnAllSubmit').on("click", function() {
                $('#btnAllSubmit').attr('disabled', 'true');
                $('.modal-body').html('');
                var nFiles = myDropzone.files.length;
                var arrFormData = $('#frmNewRecipe').serialize();
                $.ajax({
                    type: "post",
                    url: "{{ route('recipes.store') }}",
                    data: arrFormData,
                    dataType: 'json',              // let's set the expected response format
                    success: function(data){
                        $('#nRecipeID').val(data);
                        var nFiles = myDropzone.files.length;
                        if(nFiles==0)
                        {
                            window.location.href = "{{route('recipes.index')}}";
                        }
                        else
                        {
                            myDropzone.processQueue();
                        }
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
                            $('#btnAllSubmit').attr('disabled', false);
                        }
                        else{
                            errDisplay = '<div class="alert alert-danger mb-2">An error occured. The developer has been notified. Please try again later!</div>';
                            $('.modal-body').html(errDisplay);
                            $('#modalError').modal('show');
                            $('#btnAllSubmit').attr('disabled', false);
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
                    window.location.href = "{{route('recipes.index')}}";
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
