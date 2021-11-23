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
    <title>Raw Materials</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css?time<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/page-users.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/file-uploaders/dropzone.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../app-assets/easyzoom/css/pygments.css" />
    <link rel="stylesheet" href="../../app-assets/easyzoom/css/easyzoom.css" />
    <!-- END: Custom CSS-->
    <style>
        .carousel-control-next,
        .carousel-control-prev /*, .carousel-indicators */ {
            background-color: rgba(0, 0, 0, 0.8);
            width: 30px;
        }
        .row{
            padding: 1.15rem 2rem;
        }
        /*.imgzoom:hover{
            border: 5px solid #f4f4f4;
            transform: scale(2.8);
            -webkit-transition-duration: 1s;
            -moz-transition-duration: 1s;
            -o-transition-duration: 1s;
            transition-duration: 1s;
            z-index: 3;
        }*/
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
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="users-list-wrapper">
                <div class="users-list-table">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive border" style="padding: 1.15rem 2rem">
                                    <div class="row">
                                        <div class="col-12 col-md-8"><strong>Raw Material</strong></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Fish Type:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->fish_type }}</div>
                                        <div class="col-12 col-md-2"><strong>Quantity:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->quantity }}</div>
                                        <div class="col-12 col-md-2"><strong>Quantity Unit:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->unit_quantity }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Sort:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->sort }}</div>
                                        <div class="col-12 col-md-2"><strong>Cases:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->cases }}</div>
                                        <div class="col-12 col-md-2"><strong>Pallets:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->pallets }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Lot Nr:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->lot_nr }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Supplier:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->supplier }}</div>
                                        <div class="col-12 col-md-2"><strong>Lot nr. supplier:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->lot_nr_supplier }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Fish Received:</strong></div>
                                        <div class="col-12 col-md-2">{{ date("d-m-Y", strtotime($rawfish->fish_received)) }}</div>
                                        <div class="col-12 col-md-2"><strong>Received By:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->name }}</div>
                                        <div class="col-12 col-md-2"><strong>Production Site:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->production_site }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Assessment:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->assessment }}</div>
                                        <div class="col-12 col-md-2"><strong>ASC/MSC:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->asc_msc }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>TEMPERATURE ON RECEPTION:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->temp_on_reception }}</div>
                                        <div class="col-12 col-md-2"><strong>Swabsure:</strong></div>
                                        <div class="col-12 col-md-2">{{ $rawfish->swabsure }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-2"><strong>Comments:</strong></div>
                                        <div class="col-12 col-md-10">{!! nl2br($rawfish->comments) !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="carousel">
                <div class="row match-height">
                    <!-- Basic Carousel start -->
                    <div class="col-lg-6">
                        <div class="card" id="basic-carousel">
                            <div class="card-header">
                                <h4 class="card-title">Photos</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <ol class="carousel-indicators">
                                            @foreach($rawFishPhotos as $k=>$thisPhoto)
                                                @if(strpos($thisPhoto->file_type, 'image')===0)
                                                    <li data-target="#carousel-example-generic" data-slide-to="{{$k}}" @if($k==0) class="active" @endif></li>
                                                @endif
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            @foreach($rawFishPhotos as $k=>$thisPhoto)
                                                @if(strpos($thisPhoto->file_type, 'image')===0)
                                                    <div class="carousel-item @if($k==0) active @endif" style="text-align:center; width:100%;">
                                                        <img style="max-width: 500px !important; max-height: 400px !important;" src="/uploads/raw-material/{{$rawfish->id}}/{{$thisPhoto->file_name}}" data-toggle="modal" data-target="#modalpicture" class="imgzoom">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        @php
                                            /*<ol class="carousel-indicators">
                                            @foreach($ImprovementPhotos as $k=>$thisPhoto)
                                            <li data-target="#carousel-thumb" data-slide-to="{{$k}}" @if($k==0) class="active" @endif> <img class="d-block w-100" src="https://innri.fisherman.is/uploads/improvements/{{$rawfish->id}}/{{$thisPhoto->file_name}}"
                                                                                                                     class="img-fluid"></li>
                                            @endforeach
                                        </ol>*/
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Carousel And Optional Carousel End -->

                    <!-- Basic Carousel with Caption End -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Other files</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @foreach($rawFishPhotos as $k=>$thisPhoto)
                                        @if(strpos($thisPhoto->file_type, 'image')!==0)
                                            <div class="col">
                                                <a href="/uploads/raw-material/{{$rawfish->id}}/{{$thisPhoto->file_name}}">{{$thisPhoto->file_name}}</a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Today's Production</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-1"><strong>Option</strong></div>
                                        <div class="col-12 col-md-1"><strong>Lot Nr.</strong></div>
                                        <div class="col-12 col-md-3"><strong>Product</strong></div>
                                        <div class="col-12 col-md-1"><strong>Product Nr.</strong></div>
                                        <div class="col-12 col-md-2"><strong>Status</strong></div>
                                        <div class="col-12 col-md-2"><strong>Quantity</strong></div>
                                        <div class="col-12 col-md-2"><strong>Production Date</strong></div>
                                    </div>
                                    @foreach($productions as $production)
                                        <div class="row">
                                            <div class="col-12 col-md-1">
                                                <a href="{{ route('production.show', $production->id) }}" class="invoice-action-view" id="{{$production->id}}">
                                                    <i class="bx bx-show-alt"></i>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-1">{{$production->lot_number}}</div>
                                            <div class="col-12 col-md-3">{{$production->title}}</div>
                                            <div class="col-12 col-md-1">{{$production->product_number}}</div>
                                            <div class="col-12 col-md-2">@if('no'== $production->completed) In Progress @else Completed @endif</div>
                                            <div class="col-12 col-md-2">@if(!empty($production->quantity_scaled)) {{$production->quantity_scaled}}&nbsp;{{$production->quantity_scaled_unit}} @endif</div>
                                            <div class="col-12 col-md-2">{{date("d-m-Y", strtotime($production->production_date))}}</div>
                                        </div>
                                        <div class="row prod-detail" style="display: none; visibility: hidden" id="div-prod-{{$production->id}}"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Improvements</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md"><strong>View</strong></div>
                                        <div class="col-12 col-md"><strong>Time Reported</strong></div>
                                        <div class="col-12 col-md"><strong>Who Reported</strong></div>
                                        <div class="col-12 col-md"><strong>Product</strong></div>
                                        <div class="col-12 col-md"><strong>Production Site</strong></div>
                                    </div>
                                    @foreach($Improvements as $Improvement)
                                        <div class="row">
                                            <div class="col-12 col-md"><a href="{{ route('improvements.process', $Improvement->id) }}" target="_blank"><i class="bx bx-show-alt"></i></a>&nbsp;</div>
                                            <div class="col-12 col-md">{{ date("d-m-Y H:i:s", strtotime($Improvement->complain_creation_date))}}</div>
                                            <div class="col-12 col-md">{{$Improvement->complainer}}</div>
                                            <div class="col-12 col-md">{{$Improvement->product}}</div>
                                            <div class="col-12 col-md">{{$Improvement->production_location}}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- users list ends -->
        </div>
    </div>
</div>
<!-- END: Content-->
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
<script src="../../app-assets/vendors/js/vendors.min.js?time=<?php time();?>"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="../../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="../../app-assets/js/scripts/forms/form-repeater.js"></script>
<script src="../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="../../app-assets/js/core/app-menu.js"></script>
<script src="../../app-assets/js/core/app.js?time=<?php echo time();?>"></script>
<script src="../../app-assets/js/scripts/components.js"></script>
<script src="../../app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->

<!-- END: Page JS-->



<script src="../../app-assets/easyzoom/dist/easyzoom.js"></script>
<script>
    $(document).ready(function(){
        var $easyzoom = $('.easyzoom').easyZoom();
        var easyzoomAPI = $easyzoom.data("easyZoom");
        $('.imgzoom').on('click', function(){
            $('#zoomsrc').attr('href', $(this).attr('src'));
            $('#zoomview').attr('src', $(this).attr('src'));
            easyzoomAPI.swap(standardSrc = $(this).attr('src'), zoomHref = $(this).attr('src'));
            //$('#zoomview').css("transform", "scale(2.8)");
        });
        var nDispID = 0;
        $('.invoice-action-view').on('click', function(event){
            event.preventDefault();
            var href = $(this).attr('href')
            var nID = $(this).attr('id');
            if(nDispID==nID)
            {
                $('#div-prod-'+nID).css({display: "none"});
                $('#div-prod-'+nID).css({visibility: "hidden"});
                nDispID = 0;
                return false;
            }
            nDispID = nID;
            $(".prod-detail").each(function() {
                $(this).css({display: "none"});
                $(this).css({visibility: "hidden"});
            });
            $('#div-prod-'+nID).html('Loading ...<br>Please wait');
            $('#div-prod-'+nID).css({display: "block"});
            $('#div-prod-'+nID).css({visibility: "visible"});
            $.get(href, function(data, status){
                $('#div-prod-'+nID).html(data);
                $('#div-prod-'+nID).css({display: "block"});
                $('#div-prod-'+nID).css({visibility: "visible"});
            });
        });
    });
</script>
<div class="modal fade text-left " id="modalpicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Photos </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="easyzoom easyzoom--overlay">
                    <a href="#" id="zoomsrc">
                        <img src="/media/test/sm_IMG_20130403_084209_183.jpg" width="600" id="zoomview" />
                    </a>
                </div>
            </div>
            <div class="modal-footer">
            </div>

        </div>
    </div>
</div>
</body>
<!-- END: Body-->

</html>
