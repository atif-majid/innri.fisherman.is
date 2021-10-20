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
    <title>Improvements - Edit</title>
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Edit Improvement</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('improvements.index') }}">Improvements</a>
                                </li>
                                <li class="breadcrumb-item active">Edit improvement
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
            <section class="input-validation">
                <form id="frmNewImprovement" class="form-horizontal"  enctype='multipart/form-data' novalidate method="post" action="{{ route('improvements.update', $improvement->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Improvement Data</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Who notified?</label>
                                                        <div class="controls">
                                                            <input type="text" name="strWhoNotified" id="strWhoNotified" value="{{ $improvement->complainer }}" class="form-control" data-validation-required-message="Name is requried" placeholder="Who notified?">
                                                            <input type="hidden" id="nImprovementID" name="nImprovementID" value="{{$improvement->id}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>Phone Number</label>
                                                        <div class="controls">
                                                            <input type="text" name="strPhoneNumber" class="form-control" <?php /*data-validation-required-message="Phone number required"*/?> placeholder="Phone Number" value="{{ $improvement->phonenumber }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>Email</label>
                                                        <div class="controls">
                                                            <input type="text" name="strEmail" class="form-control" <?php /*data-validation-required-message="Email is required"*/?> placeholder="Email" value="{{ $improvement->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>What Product?</label>
                                                        <div class="controls">
                                                            <input type="text" name="strProduct" id="strProduct" value="{{ $improvement->product }}" class="form-control" <?php /*data-validation-required-message="Product is required"*/?> placeholder="What product?">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        @php
                                                        /*<label>Type of Notification</label>
                                                        <div class="controls">
                                                            <select class="form-control">
                                                                <option selected=""></option>
                                                                <option>Bone in the fish</option>
                                                                <option>Worm in the fish</option>
                                                                <option>Bad smell</option>
                                                                <option>Late delivery</option>
                                                                <option>Incorrect delivery</option>
                                                                <option>Foreign object in product</option>
                                                                <option>Fish skin</option>
                                                                <option>Communication</option>
                                                            </select>
                                                        </div>*/
                                                        @endphp
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Type of Notification</label>
                                                    </div>
                                                </div>
                                                <?php $i = 0; ?>
                                                @foreach($sitesettings as $thissetting)
                                                    <?php
                                                        if($i%4==0)
                                                        {
                                                            ?>
                                                            <div class="row">
                                                            <?php
                                                        }
                                                    ?>
                                                        @if($thissetting->field=="Notification")
                                                            <?php
                                                                    $i++;
                                                            ?>
                                                            <div class="form-group col-sm">
                                                                <fieldset>
                                                                    <div class="checkbox">
                                                                        @if(array_key_exists($thissetting->value, $arrSelectedNotification))
                                                                            <input type="checkbox" class="checkbox-input" id="checkbox<?php echo $i;?>" name="chkNotification[]" value="{{$thissetting->value}}" checked>
                                                                        @else
                                                                            <input type="checkbox" class="checkbox-input" id="checkbox<?php echo $i;?>" name="chkNotification[]" value="{{$thissetting->value}}" >
                                                                        @endif

                                                                        <label for="checkbox<?php echo $i;?>">{{$thissetting->value}}</label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        @endif
                                                        <?php
                                                            if($i%4==0)
                                                            {
                                                                ?>
                                                                </div>
                                                                <?php
                                                            }
                                                        ?>
                                                @endforeach
                                                <?php
                                                    if(($i%4)!=0)
                                                    {
                                                        do
                                                        {
                                                            ?>
                                                            <div class="form-group col-sm">
                                                                <fieldset>
                                                                    <div class="checkbox">
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <?php
                                                            $i++;
                                                        }while(($i%4)!=0)
                                                        ?>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Where was it produced?</label>
                                                        <div class="controls">
                                                            <select class="form-control" name="strProductionLocation">
                                                                <option selected=""></option>
                                                                @foreach($sitesettings as $thissetting)
                                                                    @if($thissetting->field=='ProductionSite')
                                                                        <option value="{{ $thissetting->value }}" @if($thissetting->value==$improvement->production_location) selected @endif>{{ $thissetting->value }}</option>
                                                                    @endif
                                                                @endforeach
                                                                @php
                                                                /*<option value="Framleiðslueldhús">Framleiðslueldhús</option>
                                                                <option value="Reykhús">Reykhús</option>*/
                                                                @endphp
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>Who is the supplier?</label>
                                                            <div class="controls">
                                                                <select class="form-control" name="strSupplier">
                                                                    <option selected></option>
                                                                    @foreach($sitesettings as $thissetting)
                                                                        @if($thissetting->field=='SupplierName')
                                                                            <option value="{{ $thissetting->value }}" @if($thissetting->value==$improvement->supplier) selected @endif>{{ $thissetting->value }}</option>
                                                                        @endif
                                                                    @endforeach
                                                                    @php
                                                                    /*<option value="Fisherman">Fisherman</option>
                                                                    <option value="Íslandssaga">Íslandssaga</option>
                                                                    <option value="Nýfiskur">Nýfiskur</option>
                                                                    <option value="Skinney Þorlákshöfn">Skinney Þorlákshöfn</option>
                                                                    <option value="Tungusilungur">Tungusilungur</option>
                                                                    <option value="Hábrún">Hábrún</option>
                                                                    <option value="Kambur Hafnarfirði">Kambur Hafnarfirði</option>*/
                                                                    @endphp
                                                                </select>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Where was it sold?</label>
                                                        <div class="controls">
                                                            <input type="text" name="strWhereSold" id="strWhereSold" value="{{ $improvement->selling_location }}" class="form-control" @php /*data-validation-required-message="Selling location is requried"*/ @endphp placeholder="Where was it sold?">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>When was it bought?</label>
                                                        <fieldset class="position-relative has-icon-left">
                                                            <input type="text" class="form-control pickadate-limits" placeholder="Select Date" id="purchase_date" name="strDateOfPurchase" value="{{ date("d-m-Y", strtotime($improvement->purchase_date)) }}">
                                                            <div class="form-control-position">
                                                                <i class='bx bx-calendar'></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>Lot nr.</label>
                                                        <div class="controls">
                                                            <input type="text" name="strLotNr" class="form-control" <?php /*data-validation-required-message="Lot Nr. is Required"*/?> placeholder="Lot nr." value="{{ $improvement->lot_nr }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <textarea name="strDescription" class="form-control" <?php /*data-validation-required-message="Name is requried"*/?> placeholder="Description" rows="4">{{ $improvement->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Who will resolve this?</label>
                                                        <div class="controls">
                                                            <!--<input type="text" name="strAssignedTo" id="strAssignedTo" value="" class="form-control" data-validation-required-message="Employee Name is requried" placeholder="Who will resolve this?">-->
                                                            <select class="form-control" id="nAssignedTo" name="nAssignedTo">
                                                                <option value=""></option>
                                                                @foreach ($employees as $employee)
                                                                    <option value="{{ $employee->id }}" @if($employee->id==$improvement->assigned_to) selected @endif>{{ $employee->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>Due Date</label>
                                                        <fieldset class="position-relative has-icon-left">
                                                            <input type="text" class="form-control pickadate-all" placeholder="Select Date" id="purchase_date" name="strDueDate" value="{{ date("d-m-Y", strtotime($improvement->due_date))}}">
                                                            <div class="form-control-position">
                                                                <i class='bx bx-calendar'></i>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        @php
                                                        /*<label>Email</label>
                                                        <div class="controls">
                                                            <input type="text" name="email" class="form-control" data-validation-required-message="Email is required" placeholder="Email">
                                                        </div>*/
                                                        @endphp
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Response and Improvements</label>
                                                        <div class="controls">
                                                            <textarea name="strResponse" class="form-control" <?php /*data-validation-required-message="Name is requried"*/?> placeholder="Response and Improvements" rows="4">{{ $improvement->response_improvements }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Photos</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body repeater-default">
                                        <div data-repeater-list="Photos">
                                            <div data-repeater-item>
                                                <div class="row justify-content-between">
                                                    <div class="input-group">
                                                        <div class="col-sm-4 form-group">
                                                            <label>Photo</label>
                                                            <fieldset class="position-relative">
                                                                <input type="file" class="form-control" placeholder="Upload File" id="file_photo" name="file_photo">
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
<?php /*<script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?time=<?php echo time();?>"></script>*/?>
<script>
    $(document).ready(function(){
        $('.pickadate-limits').pickadate({
            //format: 'mmmm, d, yyyy'
            //format: 'yyyy-mm-dd',
            format: 'dd-mm-yyyy',
            max: '0'
        });
        $('.pickadate-all').pickadate({
            //format: 'mmmm, d, yyyy'
            //format: 'yyyy-mm-dd',
            format: 'dd-mm-yyyy',
        });
    });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- END: Page JS-->
<script>
    $(document).ready(function(){
        var availableEmployees = [
            @foreach ($employees as $i => $employee)
                "{{ $employee->name }}"
            @if($i<count($employees)-1)
            ,
            @endif
            @endforeach
        ];
        $( "#strWhoNotified" ).autocomplete({
            source: availableEmployees
        });
        var availableRecipes = [
            @foreach ($recipes as $i => $recipe)
                "{{ $recipe->title }}"
            @if($i<count($recipes)-1)
            ,
            @endif
            @endforeach
        ];
        $( "#strProduct" ).autocomplete({
            source: availableRecipes
        });

        var arrWhereSold = [
            @foreach($sitesettings as $thissetting)
                @if($thissetting->field=="SellingSite")
                    "{{$thissetting->value}}",
                @endif
            @endforeach
            /*"Fisherman Webstore",
            "Bónus",
            "Nettó",
            "Iceland",
            "Krambúðin",
            "Hagkaup",
            "Fisherman wholesale",
            "Other"*/
        ];
        $("#strWhereSold").autocomplete({
            source: arrWhereSold
        });
    });

    $(document).ready(function () {

        $("#frmNewImprovement").submit(function (e) {

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
