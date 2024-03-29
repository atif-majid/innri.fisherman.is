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
    <title>Today's Production</title>
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
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/pickadate/pickadate.css">
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
                        <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center" onclick="window.location.href='{{ route('production.create') }}'">
                            <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Add Record</button>
                        </div>
                    </div>

                </div>
                <div class="users-list-filter px-1">
                    <form onsubmit="return false">
                        <div class="row border rounded py-2 mb-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Production Date From</label>
                                <fieldset class="form-group position-relative has-icon-left" >
                                    <input type="text" class="form-control format-picker" id="min" value="@php echo date("d-m-Y"); @endphp">
                                    <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-verified">Production Date To</label>
                                <fieldset class="form-group position-relative has-icon-left" >
                                    <input type="text" class="form-control format-picker" id="max" value="@php echo date("d-m-Y"); @endphp">
                                    <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">Recipe</label>
                                <fieldset class="form-group">
                                    <input  type="text" class="form-control" id="users-list-role">
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Lot nr.</label>
                                <fieldset class="form-group">
                                    <input type="text" class="form-control" id="users-list-status">
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Status</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="prod-status">
                                        <option value="">All</option>
                                        <option value="In Progress" selected>In Progress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">Production Location</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="strProductionLocation">
                                        <option value="">Any</option>
                                        <option value="Dreifingarmiðstöð">Dreifingarmiðstöð</option>
                                        <option value="Framleiðslueldhús">Framleiðslueldhús</option>
                                        <option value="Reykhús">Reykhús</option>
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
                                                <th style="text-align: left; padding-left: 1rem;">Options</th>
                                                <th style="text-align: left; padding-left: 1rem;">Status</th>
                                                <th style="text-align: left; padding-left: 1rem;">Product NR.</th>
                                                <th style="text-align: left; padding-left: 1rem;">LOT NR.</th>
                                                <th style="text-align: left; padding-left: 1rem;">Product</th>
                                                <th style="text-align: left; padding-left: 1rem;">Quantity</th>
                                                <th style="text-align: left; padding-left: 1rem;">Status</th>
                                                <th style="text-align: left; padding-left: 1rem;">Production Site</th>
                                                <th style="text-align: left; padding-left: 1rem;">Production Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($productions as $production)
                                            <tr>
                                                <td style="padding: 0.5rem 1.15rem">{{ $production->id }}</td>
                                                <td style="padding: 0.5rem 1.15rem; white-space: nowrap;">
                                                    <form id="form-del-{{$production->id}}" action="{{ route('production.destroy',$production->id) }}" method="POST">
                                                        <a href="{{ route('production.show', $production->id) }}" class="invoice-action-view">
                                                            <i class="bx bx-show-alt"></i>
                                                        </a>
                                                        <a href="{{ route('production.edit', $production->id) }}"><i class="bx bx-edit-alt"></i></a>&nbsp;
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('production.destroy', $production->id) }}" onclick="event.preventDefault();
                                                            if(confirm('Are you sure to delete?')){document.getElementById('form-del-{{$production->id}}').submit();}"><i class="bx bxs-trash-alt"></i></a>
                                                        <a href="{{ route('production.getpdf', $production->id) }}"><i class="bx bxs-file-pdf"></i></a>
                                                    </form>
                                                </td>
                                                <td style="padding: 0.5rem 1.15rem">
                                                    <select id="selProduction" name="selProduction" class="form-control selProduction">
                                                        <option value="no" @if('no'== $production->completed) selected @endif>In Progress</option>
                                                        <option value="yes" @if('yes'== $production->completed) selected @endif>Completed</option>
                                                    </select>
                                                    <input type="hidden" id="nID" name="nID" value="{{$production->id}}" class="productionid" />
                                                </td>
                                                <td style="padding: 0.5rem 1.15rem">{{ $production->product_number }}</td>
                                                <td style="padding: 0.5rem 1.15rem">{{ $production->lot_number }}</td>
                                                <td style="padding: 0.5rem 1.15rem">{{ $production->title }}</td>
                                                @php
                                                    /*<td style="padding: 0.5rem 1.15rem">@if(array_key_exists($production->id, $Instructions)){{ $Instructions["$production->id"]["Make"] }}@endif</td>
                                                    <td style="padding: 0.5rem 1.15rem">@if(array_key_exists($production->id, $Instructions)){{ $Instructions["$production->id"]["Pack"] }}@endif</td>
                                                    <td style="padding: 0.5rem 1.15rem">@if(array_key_exists($production->id, $Instructions)){{ $Instructions["$production->id"]["Freeze"] }}@endif</td>
                                                    <td style="padding: 0.5rem 1.15rem">@if(array_key_exists($production->id, $Instructions)){{ $Instructions["$production->id"]["Send"] }}@endif</td><td style="padding: 0.5rem 1.15rem">
                                                    @if(array_key_exists($production->id, $Instructions)){{ $Instructions["$production->id"] }}@endif
                                                </td>*/
                                                @endphp
                                                <td style="padding: 0.5rem 1.15rem">
                                                    @if(trim($production->quantity_scaled)!="")
                                                        {{$production->quantity_scaled}}&nbsp;{{$production->quantity_scaled_unit}}
                                                    @endif
                                                </td>
                                                <?php
                                                /*<td style="padding: 0.5rem 1.15rem">
                                                    @php
                                                      $nSumMaterials = 0;
                                                    @endphp
                                                    @if(array_key_exists($production->id, $Rawmaterials))
                                                        @php
                                                            $strMaterials = '<div class="table-responsive border" style="padding: 1.15rem 2rem">';
                                                            $strMaterials .= '<div class="row">';
                                                            $strMaterials .= '<div class="col">';
                                                            $strMaterials .= 'Material';
                                                            $strMaterials .= '</div>';
                                                            $strMaterials .= '<div class="col">';
                                                            $strMaterials .= 'Quantity';
                                                            $strMaterials .= '</div>';
                                                            $strMaterials .= '<div class="col">';
                                                            $strMaterials .= 'Lot Nr.';
                                                            $strMaterials .= '</div>';
                                                            $strMaterials .= '</div>';
                                                        @endphp
                                                        @foreach($Rawmaterials["$production->id"] as $i=>$thisRawMateria)
                                                            @php
                                                                $strMaterials .= '<div class="row">';
                                                                $strMaterials .= '<div class="col">';
                                                                $strMaterials .= $thisRawMateria['material_name'];
                                                                $strMaterials .= '</div>';
                                                                $strMaterials .= '<div class="col">';
                                                                $strMaterials .= $thisRawMateria['material_quantity']." ".$thisRawMateria['material_unit'];
                                                                $strMaterials .= '</div>';
                                                                $strMaterials .= '<div class="col">';
                                                                $strMaterials .= $thisRawMateria['material_lot_nr'];
                                                                $strMaterials .= '</div>';
                                                                $strMaterials .= '</div>';
                                                                $nSumMaterials = $nSumMaterials + (int)$thisRawMateria['material_quantity'];
                                                            @endphp
                                                        @endforeach
                                                        @foreach($Rawmaterials["$production->id"] as $i=>$thisRawMateria)
                                                            @if($i==0)
                                                                <i class="bx bx-plus" onclick="showmaterials('{{$strMaterials}}');" style="cursor: pointer;"></i>
                                                                {{$thisRawMateria["material_name"]}}
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td style="padding: 0.5rem 1.15rem">
                                                    {{$nSumMaterials}}
                                                </td>*/
                                                ?>
                                                <td style="padding: 0.5rem 1.15rem">
                                                    @if($production->completed=='yes')
                                                        Completed
                                                    @else
                                                        In Progress
                                                    @endif
                                                </td>
                                                <td style="padding: 0.5rem 1.15rem">
                                                    {{$production->production_site}}
                                                </td>
                                                @if(trim($production->production_date)!="")
                                                    @php
                                                        $strProductioDate = $production->production_date;
                                                    @endphp
                                                @else
                                                    @php
                                                        $strProductioDate = "2021-04-09";
                                                    @endphp
                                                @endif
                                                <td style="padding: 0.5rem 1.15rem" data-sort="{{strtotime($strProductioDate)}}">
                                                    {{date("d-m-Y", strtotime($strProductioDate))}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <?php
                                        /*<tr>
                                            <!--<td>300</td>-->
                                            <td>556966</td>
                                            <td>10340</td>
                                            <td>Ýsubitar ferskir 2 kg.</td>
                                            <td>P</td>
                                            <td>Ýsa 10340</td>
                                            <td>MV</td>
                                            <td>370kg</td>
                                            <td>FLYTJANDI</td>
                                            <td>370kg</td>
                                            <td>#190, #191</td>
                                            <!--<td><a href="html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>-->
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td>556966</td>
                                            <td>10340</td>
                                            <td>Ýsubitar ferskir 2 kg.</td>
                                            <td>P</td>
                                            <td>Ýsa 10340</td>
                                            <td>MV</td>
                                            <td>370kg</td>
                                            <td>FLYTJANDI</td>
                                            <td>370kg</td>
                                            <td>#190, #191</td>
                                            <!--<td><a href="html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>-->
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td>556966</td>
                                            <td>10340</td>
                                            <td>Ýsubitar ferskir 2 kg.</td>
                                            <td>P</td>
                                            <td>Ýsa 10340</td>
                                            <td>MV</td>
                                            <td>370kg</td>
                                            <td>FLYTJANDI</td>
                                            <td>370kg</td>
                                            <td>#190, #191</td>
                                            <!--<td><a href="html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>-->
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td>556966</td>
                                            <td>10340</td>
                                            <td>Ýsubitar ferskir 2 kg.</td>
                                            <td>P</td>
                                            <td>Ýsa 10340</td>
                                            <td>MV</td>
                                            <td>370kg</td>
                                            <td>FLYTJANDI</td>
                                            <td>370kg</td>
                                            <td>#190, #191</td>
                                            <!--<td><a href="html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>-->
                                        </tr>
                                        <tr>
                                            <!--<td>300</td>-->
                                            <td>556966</td>
                                            <td>10340</td>
                                            <td>Ýsubitar ferskir 2 kg.</td>
                                            <td>P</td>
                                            <td>Ýsa 10340</td>
                                            <td>MV</td>
                                            <td>370kg</td>
                                            <td>FLYTJANDI</td>
                                            <td>370kg</td>
                                            <td>#190, #191</td>
                                            <!--<td><a href="html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>-->
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
<script src="../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
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
<script src="app-assets/js/scripts/pages/page-production.js?time=<?php echo time();?>"></script>
<script src="../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js?<?php echo time();?>"></script>

<!-- END: Page JS-->
<script>
    function showmaterials(strMaterials)
    {
        $('.modal-body').html(strMaterials);
        $('#modalRawMaterial').modal('show');
    }
    $(document).ready(function(){
        //$('.selProduction').change( function() {
        $(document).on('change','.selProduction',function(){
            var strNewStatus = $(this).val();
            var nID = $(this).next('.productionid').val();
            $(this).attr('disaled', true);
            $.ajax({
                method: "POST",
                url: "{{ route('production.updateprodstatus') }}",
                data: { "_token": "{{ csrf_token() }}", strNewStatus: strNewStatus, nID: nID }
            })
            .done(function( msg ) {
                $(this).attr('disabled', false);
                //alert('The status for this task has been changed!');
            });
        });
    });
</script>
<div class="modal fade text-left" id="modalRawMaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Raw Materials </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</body>
<!-- END: Body-->

</html>
