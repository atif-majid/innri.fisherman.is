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
    <title>Recipes</title>
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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-users.css">
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
                <div class="users-list-filter px-1">
                    <div class="row  rounded py-2 mb-2">
                        <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center" onclick="window.location.href='{{ route('recipes.create') }}'">
                            <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Add New Recipe</button>
                        </div>
                    </div>

                </div>
                <div class="users-list-filter px-1">
                    <form onsubmit="return false">
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">Recipe</label>
                                <fieldset class="form-group">
                                    <input  type="text" class="form-control" id="users-list-role">
                                </fieldset>
                            </div>
                            <!--<div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Date</label>
                                <fieldset class="form-group position-relative has-icon-left" >
                                    <input type="text" class="form-control format-picker" id="users-list-verified">
                                    <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Lot nr.</label>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="users-list-status">
                                </fieldset>
                            </div>-->
                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-info mb-2">
                        {{ $message }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-warning mb-2">{{$errors->first()}}</div>
                @endif
                <div class="users-list-table">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <!-- datatable start -->
                                <div class="table-responsive">
                                    <table id="users-list-datatable" class="table">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th style="text-align: left; padding-left: 1rem; width: 65%">Recipe</th>
                                                <th style="text-align: left; padding-left: 1rem; width: 25%">Date Created</th>
                                                <th style="text-align: left; padding-left: 1rem; width: 10%">Options</th>
                                                <td style="text-align: left; padding-left: 1rem; width: 10%">Title</td>
                                                <td style="text-align: left; padding-left: 1rem; width: 10%">Product Number</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($recipes as $recipe)
                                            @php
                                                /*$strDisp = <<<EOT
<div class="border-secondary col-12 border">
<table class="table table-borderless" colspan="12">
<tbody>
<tr>
<td>Name:</td>
<td class="users-view-latest-activity" colspan="5">$recipe->title</td>
<td>Department:</td>
<td>&nbsp;</td>
<td>Mobile Phone:</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Job Title:</td>
<td>&nbsp;</td>
<td>Direct Phone:</td>
<td>&nbsp;</td>
<td>Email Address:</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</div>
EOT;*/


                                            @endphp
                                            <tr>
                                                <td style="padding: 0.5rem 1.15rem;">{{ $recipe->id }}</td>
                                                <td style="padding: 0.5rem 1.15rem; width: 50%">@if($recipe->product_number!=""){{ $recipe->product_number }} - @endif {{ $recipe->title }}</td>
                                                <td style="padding: 0.5rem 1.15rem; width: 30%;">{{ $recipe->created_date }}</td>
                                                <td style="padding: 0.5rem 1.15rem; white-space: nowrap; width: 20%">
                                                    <div class="divData" style="display: none; visibility: hidden;">{{ $recipe->id }}</div>
                                                    <form id="form-del-{{$recipe->id}}" action="{{ route('recipes.destroy',$recipe->id) }}" method="POST">
                                                        <a href="{{ route('recipes.show', $recipe->id) }}" class="invoice-action-view">
                                                            <i class="bx bx-show-alt"></i>
                                                        </a>&nbsp;
                                                        <a href="{{ route('recipes.edit', $recipe->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp

                                                            <!--<a href="{{ route('recipes.edit', $recipe->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;-->
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('recipes.destroy', $recipe->id) }}" onclick="event.preventDefault();
                                                         if(confirm('Are you sure to delete?')){document.getElementById('form-del-{{$recipe->id}}').submit();}"><i class="bx bxs-trash-alt"></i></a>
                                                        &nbsp;<a href="{{ route('recipes.getpdf', $recipe->id) }}"><i class="bx bxs-file-pdf"></i></a>
                                                    </form>

                                                </td>
                                                <td>
                                                    {{ $recipe->title }}
                                                </td><td>
                                                    {{ $recipe->product_number }}
                                                </td>

                                            </tr>
                                        @endforeach
                                        <?php
                                        /*<tr>
                                            <!--<td>300</td>-->
                                            <td style="padding: 0.5rem 1.15rem">Smoked Trout 300g (10.5oz) bite</td>
                                            <!--<td>Marketing</td>
                                            <td>Suðureyri</td>
                                            <td>661 9900</td>
                                            <td>661 9900</td>
                                            <td>elias@fisherman.is</td>-->
                                            <td style="padding: 0.5rem 1.15rem"><a href="#"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td style="padding: 0.5rem 1.15rem">Smoked salmon "húskarlabiti" 200g (7 oz)</td>
                                            <!--<td>Sales</td>
                                            <td>Grandatröó</td>
                                            <td>661 9900</td>
                                            <td>661 9900</td>
                                            <td>elias@fisherman.is</td>-->
                                            <td style="padding: 0.5rem 1.15rem"><a href="#"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td style="padding: 0.5rem 1.15rem">Smoked salmon 150g (5,3oz) slices</td>
                                            <!--<td>Development</td>
                                            <td>Grandatröó</td>
                                            <td>661 9900</td>
                                            <td>661 9900</td>
                                            <td>elias@fisherman.is</td>-->
                                            <td style="padding: 0.5rem 1.15rem"><a href="#"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td style="padding: 0.5rem 1.15rem">Rope Hung Smoked Salmon 300g (10,5oz) slices</td>
                                            <!--<td>Sales</td>
                                            <td>Fiskislóð</td>
                                            <td>661 9900</td>
                                            <td>661 9900</td>
                                            <td>elias@fisherman.is</td>-->
                                            <td style="padding: 0.5rem 1.15rem"><a href="#"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td style="padding: 0.5rem 1.15rem">Cured Salmon "Gravlax " 300g (10,5 oz) slices</td>
                                            <!--<td>Design</td>
                                            <td>624 Sales</td>
                                            <td>661 9900</td>
                                            <td>661 9900</td>
                                            <td>elias@fisherman.is</td>-->
                                            <td style="padding: 0.5rem 1.15rem"><a href="#"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>*/
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
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
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<script src="app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/pages/page-recipes.js?time=<?php echo time();?>"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
