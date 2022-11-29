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
    <title>Template - Reports</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css?time<?php echo time();?>">
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
                        <form onsubmit="return false;">
                            <div class="row border rounded py-2 mb-2">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">Date From</label>
                                    <fieldset class="form-group position-relative has-icon-left" >
                                        <input type="text" class="form-control format-picker" id="min" value="@php echo date("d-m-Y"); @endphp">
                                        <div class="form-control-position">
                                            <i class='bx bx-calendar'></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">Date To</label>
                                    <fieldset class="form-group position-relative has-icon-left" >
                                        <input type="text" class="form-control format-picker" id="max" value="@php echo date("d-m-Y"); @endphp">
                                        <div class="form-control-position">
                                            <i class='bx bx-calendar'></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">Supervisors</label>
                                    <fieldset class="form-group">
                                        <select class="form-control"  id="supervisors">
                                            <option value="">Any</option>
                                            @foreach($supervisors as $sup)
                                                <option value="{{$sup->name}}">{{$sup->name}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-status">Template</label>
                                    <fieldset class="form-group">
                                        <select class="form-control"  id="templates">
                                            @if($strEmpDesignation!='Chef')
                                                <option value="">Any</option>
                                                @foreach($templates as $temp)
                                                    <option value="{{$temp->title}}">{{$temp->title}}</option>
                                                @endforeach
                                                <option value="Visitors">Visitors</option>
                                            @endif
                                                <option value="Food Orders">Food Orders</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">Employee</label>
                                    <fieldset class="form-group">
                                        <select class="form-control"  id="employees">
                                            <option value="">Any</option>
                                            @foreach($employees as $emp)
                                                <option value="{{$emp->name}}">{{$emp->name}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
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
                @if ($message = Session::get('errors'))
                    <div class="alert alert-danger mb-2">{{$message}}</div>
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
                                                <th style="text-align: left;">View</th>
                                                <th style="text-align: left; padding-left: 1rem;">Template</th>
                                                <th style="text-align: left; padding-left: 1rem;">Version</th>
                                                <th style="text-align: left; padding-left: 1rem;">Submitted By</th>
                                                <th style="text-align: left; padding-left: 1rem;">Submitted on</th>
                                                <th style="text-align: left; padding-left: 1rem;">Supervisor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($templatesubmit as $template)
                                                <tr>
                                                    <td>{{ $template->id }}</td>
                                                    <td style="white-space: nowrap;padding: 0.5rem 0.5rem;">
                                                        @php
                                                        /*<form id="form-del" action="{{ route('templates.destroy',$template->id) }}" method="POST" onsubmit="return false;">
                                                            <a href="{{ route('templates.edit', $template->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('templates.destroy', $template->id) }}" onclick="event.preventDefault();
                                                         if(confirm('Are you sure to delete?')){document.getElementById('form-del').submit();}"><i class="bx bxs-trash-alt"></i></a>
                                                        </form>
                                                        <a href="{{ route('templates.edit', $template->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                        <a href="#"><i class="bx bxs-trash-alt"></i></a>
                                                        <a href="{{ route('templates.fill', $template->id) }}"><i class="bx bxs-file-plus"></i></a>
                                                        */
                                                        @endphp
                                                        <a href="{{ route('reports.show', $template->id) }}" class="invoice-action-view">
                                                            <i class="bx bx-show-alt"></i>
                                                        </a>
                                                        @if(array_key_exists($template->id, $arrParents))
                                                            <a href="{{ route('reports.show', $arrParents["$template->id"]) }}" class="invoice-action-view">
                                                                <i class="bx bx-history"></i>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td style="padding: 0.5rem">{{ $template->template_title }}</td>
                                                    <td style="padding: 0.5rem">{{ $template->template_version }}</td>
                                                    <td style="padding: 0.5rem">{{ $template->employeename }}</td>
                                                    <td style="padding: 0.5rem" data-sort="{{strtotime($template->submit_date)}}">
                                                        {{ date("d-m-Y H:i:s", strtotime($template->submit_date)) }}
                                                    </td>
                                                    <td style="padding: 0.5rem">{{ $template->supervisor }}</td>
                                                </tr>
                                            @endforeach
                                            @foreach($visitors as $visitor)
                                                <tr>
                                                    <td>{{ $visitor->id }}</td>
                                                    <td style="white-space: nowrap;padding: 0.5rem 0.5rem;">
                                                        @php
                                                            /*<form id="form-del" action="{{ route('templates.destroy',$template->id) }}" method="POST" onsubmit="return false;">
                                                                <a href="{{ route('templates.edit', $template->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('templates.destroy', $template->id) }}" onclick="event.preventDefault();
                                                             if(confirm('Are you sure to delete?')){document.getElementById('form-del').submit();}"><i class="bx bxs-trash-alt"></i></a>
                                                            </form>
                                                            <a href="{{ route('templates.edit', $template->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                            <a href="#"><i class="bx bxs-trash-alt"></i></a>
                                                            <a href="{{ route('templates.fill', $template->id) }}"><i class="bx bxs-file-plus"></i></a>
                                                            */
                                                        @endphp
                                                        <a href="{{ route('reports.showvisitor', $visitor->id) }}" class="invoice-action-view">
                                                            <i class="bx bx-show-alt"></i>
                                                        </a>
                                                    </td>
                                                    <td style="padding: 0.5rem">Visitors</td>
                                                    <td style="padding: 0.5rem">&nbsp;</td>
                                                    <td style="padding: 0.5rem">{{ $visitor->fullname }}</td>
                                                    <td style="padding: 0.5rem" data-sort="{{strtotime($visitor->visit_date_time)}}">
                                                        {{ date("d-m-Y H:i:s", strtotime($visitor->visit_date_time)) }}
                                                    </td>
                                                    <td style="padding: 0.5rem">&nbsp;</td>
                                                </tr>
                                            @endforeach
                                            @foreach($allFoodOrders as $foodorder)
                                                <tr>
                                                    <td></td>
                                                    <td style="white-space: nowrap;padding: 0.5rem 0.5rem;">
                                                        @php
                                                            /*<form id="form-del" action="{{ route('templates.destroy',$template->id) }}" method="POST" onsubmit="return false;">
                                                                <a href="{{ route('templates.edit', $template->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('templates.destroy', $template->id) }}" onclick="event.preventDefault();
                                                             if(confirm('Are you sure to delete?')){document.getElementById('form-del').submit();}"><i class="bx bxs-trash-alt"></i></a>
                                                            </form>
                                                            <a href="{{ route('templates.edit', $template->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                            <a href="#"><i class="bx bxs-trash-alt"></i></a>
                                                            <a href="{{ route('templates.fill', $template->id) }}"><i class="bx bxs-file-plus"></i></a>
                                                            */
                                                        @endphp
                                                        <a href="{{ route('reports.showfoodorder', $foodorder->date) }}" class="invoice-action-view">
                                                            <i class="bx bx-show-alt"></i>
                                                        </a>
                                                    </td>
                                                    <td style="padding: 0.5rem">Food Orders</td>
                                                    <td style="padding: 0.5rem">&nbsp;</td>
                                                    <td style="padding: 0.5rem">{{ $foodorder->name }}</td>
                                                    <td style="padding: 0.5rem" data-sort="{{strtotime($foodorder->date)}}">
                                                        {{date("d-m-Y H:i:s", strtotime($foodorder->date))}}
                                                    </td>
                                                    <td style="padding: 0.5rem">&nbsp;</td>
                                                </tr>
                                            @endforeach
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
@php
/*
<!-- demo chat-->
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

</div>
*/
@endphp
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
<script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="app-assets/vendors/js/ui/prism.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<script src="app-assets/js/scripts/components.js"></script>
<script src="app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<?php
/*<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>*/
?>

<script src="app-assets/js/scripts/pages/page-templatesubmitted.js?time=<?php echo time();?>"></script>
<script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?time=<?php echo time();?>"></script>

<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
