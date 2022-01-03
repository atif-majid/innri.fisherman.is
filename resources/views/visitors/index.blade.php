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
    <title>Visitor's Form</title>
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
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css?time=@php echo time();@endphp">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        @media (min-width: 768px) {
            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 58.66667%;
            }
        }

        @media (min-width: 992px) {
            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 37.66667%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 30.66667%;
            }
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- login page start -->
            <section id="auth-login" class="row flexbox-container">
                <div class="col-xl-8 col-11">
                    <div class="card bg-authentication mb-0">
                        <div class="row m-0">
                            <!-- left section-login -->
                            <div class="col-12 px-0">
                                <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                    @php
                                        /*<div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Welcome Back</h4>
                                            </div>
                                        </div>*/
                                    @endphp
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="d-flex flex-md-row flex-column justify-content-around">
                                                <img src="app-assets/images/logo/fisherman-2.png" style="max-width: 211px; max-height: 47px; display: block; margin-left: auto; margin-right: auto;" />
                                                <!--<a href="#" class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                                    <i class="bx bxl-google font-medium-3"></i><span class="pl-50 d-block text-center">Google</span></a>
                                                <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                                    <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-50 d-block text-center">Facebook</span></a>-->
                                            </div>
                                            <br /><br />
                                            @php
                                                /*<div class="divider">
                                                    <div class="divider-text text-uppercase text-muted"><small>Login here</small>
                                                    </div>
                                                </div>*/
                                            @endphp
                                            <form id="frmVisitor" method="POST" action="{{ route('visitors.store') }}" style="width:90% !important; margin: auto;">
                                                @csrf
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="strFullName">Full Name</label>
                                                    <input type="text" class="form-control"  placeholder="Full Name" id="strFullName" name="strFullName">
                                                </div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="strStatus">Company</label>
                                                    <select class="form-control" id="strStatus" name="strStatus">
                                                        <option value=""></option>
                                                        <option value="Invited">Invited</option>
                                                        <option value="Guest">Guest</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-50">
                                                    <input type="text" class="form-control"  placeholder="Company Name" id="strCompany" name="strCompany">
                                                </div>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="strPurpose">Reason for Visit</label>
                                                    <select class="form-control" id="strPurpose" name="strPurpose">
                                                        <option value=""></option>
                                                        <option value="Maintenance">Maintenance</option>
                                                        <option value="Presentation">Presentation</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-50" id="divReason" style="display: none; visibility: hidden">
                                                    <input type="text" class="form-control"  placeholder="Please provide Reason Here" id="strReason" name="strReason">
                                                </div>
                                                <div class="form-group mb-50">
                                                    <br>
                                                </div>
                                                <button type="submit" class="btn btn-primary glow w-100 position-relative">Submit@php /*<i id="icon-arrow" class="bx bx-right-arrow-alt"></i>*/@endphp</button>
                                            </form>
                                        @php /*<hr>*/ @endphp
                                        <!--<div class="text-center"><small class="mr-25">Don't have an account?</small><a href="auth-register.html"><small>Sign up</small></a></div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            @php
                                /*<div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <div class="card-content">
                                        <img class="img-fluid" src="app-assets/images/pages/login.png" alt="branding logo">
                                    </div>
                                </div>*/
                            @endphp
                        </div>
                    </div>
                </div>
            </section>
            <!-- login page ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="app-assets/vendors/js/vendors.min.js"></script>
<script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<script src="app-assets/js/scripts/footer.js"></script>
<script>
    $(document).ready(function(){
        $('#strPurpose').change(function(){
            strVal = $(this).val();
            if(strVal=='Other')
            {
                $('#divReason').css({
                    display: "block",
                    visibility: "visible"
                });
            }
            else {
                $('#divReason').css({
                    display: "none",
                    visibility: "hidden"
                });
            }
        });

        $('#frmVisitor').submit(function(event){
           event.preventDefault();
           var datastring = $("#frmVisitor").serialize();
            $.ajax({
                method: "POST",
                url: "{{ route('visitors.store') }}",
                data: datastring,
                /*dataType: "json",
                success: function(data){
                    //console.log(textStatus + ": " + jqXHR.status);
                    // do something with data
                    console.log(data);
                }
                error: function(jqXHR, textStatus, errorThrown){
                    var errors = jqXHR.responseJSON;
                    //var errorsHtml = '';
                    $.each(errors['errors'], function (index, value) {
                        //errorsHtml += '<ul class="list-group"><li class="list-group-item alert alert-danger">' + value + '</li></ul>';
                        console.log(value[0]);
                    });
                }*/
            })
            .done(function( msg ) {
                let position = msg.search("successfully");
                if(position>0)
                {
                    $("#frmVisitor").trigger("reset");
                }
                $('.modal-body').html(msg);
                $('#modalError').modal('show');
                //console.log(msg);
            })

        });

        function printErrorMsg (msg) {
            //$(".print-error-msg").find("ul").html('');
            //$(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                //$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                alert(value);
            });
        }
    });

</script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
<div class="modal fade text-left" id="modalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Visitor's Form </h4>
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
