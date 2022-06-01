<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Recipes</title>


    <!-- BEGIN: Vendor CSS-->
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    @php
    /*<link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css?time=<?php echo time();?>">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css?time=<?php echo time();?>">
    <link rel="stylesheet" href="@include('recipes.pdfstyle')">*/
    @endphp
    @include('recipes.pdfstyle');

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

        <div class="col-12">
            <table class="table table-borderless" colspan="12">
                <tbody>
                    <tr>
                        <td class="users-view-latest-activity" colspan="2"><strong>@if($recipe->product_number!=""){{ $recipe->product_number }} - @endif {{ $recipe->title }}</strong></td>
                    </tr>
                    <tr>
                        <td class="users-view-latest-activity" colspan="2"><b>Total Production: </b>{{ $recipe->amount }}&nbsp;{{ $recipe->unit }}</td>
                    </tr>
                    @if(trim($recipe->production_site)!="")
                        <tr>
                            <td class="users-view-latest-activity" colspan="2"><b>Production Location: </b>{{ $recipe->production_site }}</td>
                        </tr>
                    @endif
                    <tr>
                        <td class="users-view-latest-activity" colspan="2"><b>Ingredients</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                    @foreach($Ingredients as $key=>$thisIngredient)
                                        <tr>
                                            <td class="text-nowrap" scope="row" style="padding-right: 1rem !important; padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 2% !important;white-space: nowrap;text-align: right">{{$key+1}}</td>
                                            <td class="text-nowrap" scope="row" style="padding-left: 1rem !important; padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 32% !important; white-space: nowrap;">{{ $thisIngredient->name }}</td>
                                            <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; white-space: nowrap; width: 66% !important;">{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" col-12">
            <table class="table table-borderless" colspan="12">
                <tbody>
                    <tr>
                        <td class="users-view-latest-activity" colspan="2"><b>Steps</b></td>
                    </tr>
                    @foreach($Steps as $k=>$thisStep)
                        <tr>
                            <td style="width: 3% !important; padding-right: 0.5rem !important; vertical-align: top">{{ $k+1 }}</td>
                            <td style="width: 97% !important; padding-left: 0.5rem !important;">{!! nl2br( $thisStep->details) !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(count($RecipePhoto)>0)
            <div class="col-12" @php /*style="page-break-before: always;"*/ @endphp>
                <table class="table table-borderless" colspan="12">
                    <tbody>
                        @foreach($RecipePhoto as $k=>$thisPhoto)
                            <tr>
                                <td colspan="2">
                                    <img style="max-height: 400px !important; max-width: 500px;" src="https://innri.fisherman.is/uploads/recipes/{{$recipe->id}}/{{$thisPhoto->file_name}}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </body>
</html>
