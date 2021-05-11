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
    <title>Templates - Fill form</title>
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
        .table td{
            padding-top: 1.0rem !important;
            padding-bottom: 0.50rem !important;
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Fill Form</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('templates.index') }}">Templates</a>
                                </li>
                                <li class="breadcrumb-item active">{{ $thistemplate->title }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <td class="content-body">
            <!-- Input Validation start -->
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mb-2">{{ $error }}</div>
                @endforeach
            @endif
            <section class="input-validation">
                <form id="frmNewTemplate" class="form-horizontal"  novalidate method="post" action="{{ route('templates.fillsubmit') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ $thistemplate->title }} - Version {{ $thistemplate->version }} <small>(Created on  @if(empty($thistemplate->updated_on)) {{ $thistemplate->created_on }} @else {{ $thistemplate->updated_on }} @endif)</small></h4>
                                    <input type="hidden" id="strTempTitle" name="strTempTitle" value="{{ $thistemplate->title }}"/>
                                    <input type="hidden" id="nTemplate" name="nTemplate" value="{{ $thistemplate->id }}">
                                    <input type="hidden" id="nVersion" name="nVersion" value="{{ $thistemplate->version }}">
                                    <input type="hidden" id="strWithCheckbox" name="strWithCheckbox" value="{{ $thistemplate->with_checkboxes }}">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Date</label>
                                                        <div class="controls">
                                                            {{ date("Y-m-d") }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>User</label>
                                                        <div class="controls">
                                                            {{ Auth::user()->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm">
                                                        <label>Supervisor</label>
                                                        <div class="controls">
                                                            {{ $strSupervisorName }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm">
                                                        <label>Production Site</label>
                                                        <div class="controls">
                                                            <select class="form-control" name="strProductionLocation">
                                                                <option selected=""></option>
                                                                @foreach($sitesettings as $thissetting)
                                                                    @if($thissetting->field=='ProductionSite')
                                                                        <option value="{{ $thissetting->value }}" @if(old('strProductionLocation')==$thissetting->value) selected @endif>{{ $thissetting->value }}</option>
                                                                    @endif
                                                                @endforeach
                                                                @php
                                                                    /*<option value="Framleiðslueldhús">Framleiðslueldhús</option>
                                                                    <option value="Reykhús">Reykhús</option>*/
                                                                @endphp
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
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Instructions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                {{ $thistemplate->instruction }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Areas, machines and Equipments</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <table class="table table-borderless" colspan="12">
                                            <thead>
                                                <tr>
                                                    @if($thistemplate->with_checkboxes=='yes')
                                                        <th></th>
                                                        <th></th>
                                                        <th><strong>Comment</strong></th>
                                                        <th><strong>Confirmed</strong></th>
                                                        <th><strong>Supervisor Comment</strong></th>
                                                    @else
                                                        <th></th>
                                                        <th><strong>Value</strong></th>
                                                        <th><strong>Comment</strong></th>
                                                        <th><strong>Confirmed</strong></th>
                                                        <th><strong>Supervisor Comment</strong></th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($templatefields as $fields)
                                                <tr>
                                                    @if($thistemplate->with_checkboxes=='yes')
                                                        <td>
                                                            <label class="custom-control custom-checkbox checkbox-input">
                                                                <input type="checkbox" name="chk_entry_{{$fields->id}}" class="checkbox-input custom-control-input" value="yes">
                                                                <span class="custom-control-label" for="chk_make" style="padding-top: 3px !important;"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            {{ $fields->field_title }}
                                                            <input type="hidden" name="field[]" value="{{$fields->id}}">
                                                            <input type="hidden" name="field_title_{{$fields->id}}" id="field_title_{{$fields->id}}" value="{{ $fields->field_title }}">
                                                        </td>
                                                        <td>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Comment" id="comment" name="comment_{{$fields->id}}">
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox checkbox-input">
                                                                <input type="checkbox" name="chk_verify_{{$fields->id}}" class="checkbox-input custom-control-input" value="yes" disabled>
                                                                <span class="custom-control-label" for="chk_make" style="padding-top: 3px !important;"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Supervisor Comment" id="supervisor_comment" name="supervisor_comment_{{$fields->id}}" disabled>
                                                            </fieldset>
                                                        </td>
                                                    @else
                                                        <td width="20%">
                                                            {{ $fields->field_title }}
                                                            <input type="hidden" name="field[]" value="{{$fields->id}}">
                                                            <input type="hidden" name="field_title_{{$fields->id}}" id="field_title_{{$fields->id}}" value="{{ $fields->field_title }}">
                                                        </td>
                                                        <td>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Value" id="value" name="value_{{$fields->id}}">
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Comment" id="comment" name="comment_{{$fields->id}}">
                                                            </fieldset>
                                                        </td>
                                                        <td>
                                                            <label class="custom-control custom-checkbox checkbox-input">
                                                                <input type="checkbox" name="chk_verify_{{$fields->id}}" class="checkbox-input custom-control-input" value="yes" disabled>
                                                                <span class="custom-control-label" for="chk_make" style="padding-top: 3px !important;"></span>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <fieldset class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Supervisor Comment" id="supervisor_comment" name="supervisor_comment_{{$fields->id}}" disabled>
                                                            </fieldset>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Comments</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="strComments" class="form-control" <?php /*data-validation-required-message="Name is requried"*/?> placeholder="Comments" rows="4">{{old('strComments')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="btnAllSubmit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
            <!-- Input Validation end -->
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->

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
            format: 'yyyy-mm-dd',
            max: '0'
        });
        $('.pickadate-all').pickadate({
            //format: 'mmmm, d, yyyy'
            format: 'yyyy-mm-dd',
        });
    });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
