<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <title>Today's Production</title>
    @include('production.pdfstyle')
</head>
    <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
        <div class="col-12">
            <table class="table table-borderless" colspan="12">
                <tbody>
                <tr>
                    <td class="users-view-latest-activity"><strong>Recipe:</strong></td>
                    <td class="users-view-latest-activity">{{ $recipe->title }}</td>
                </tr>
                <tr>
                    <td class="users-view-latest-activity"><strong>Date:</strong></td>
                    <td class="users-view-latest-activity">{{ $production->create_date_time }}</td>
                </tr>
                <tr>
                    <td class="users-view-latest-activity"><strong>Product Number:</strong></td>
                    <td class="users-view-latest-activity">{{ $production->product_number }}</td>
                </tr>
                <tr>
                    <td class="users-view-latest-activity"><strong>Order Number:</strong></td>
                    <td class="users-view-latest-activity">{{ $production->order_number }}</td>
                </tr>
                @php
                /*<tr>
                    <td class="users-view-latest-activity"><strong>Quantity Estimate:</strong></td>
                    <td class="users-view-latest-activity">{{ $production->quantity_estimate }} &nbsp;{{ $production->quantity_estimate_unit }}</td>
                </tr>*/
                @endphp
                <tr>
                    <td class="users-view-latest-activity" colspan="2"><strong>Instructions</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="users-view-latest-activity"><strong>Date</strong></td>
                                <td class="users-view-latest-activity"><strong>Make</strong></td>
                                <td class="users-view-latest-activity"><strong>Freeze</strong></td>
                                <td class="users-view-latest-activity"><strong>Pack</strong></td>
                                <td class="users-view-latest-activity"><strong>Send</strong></td>
                            </tr>
                            @foreach($Instructions as $thisInstruction)
                                <tr>
                                    <td class="users-view-latest-activity">{{ $thisInstruction->instruction_date }}</td>
                                    <td class="users-view-latest-activity">
                                        @if($thisInstruction->chk_make=='yes')
                                            <input type="checkbox" checked disabled>
                                        @else
                                            <input type="checkbox" disabled>
                                        @endif
                                    </td>
                                    <td class="users-view-latest-activity">
                                        @if($thisInstruction->chk_freeze=='yes')
                                            <input type="checkbox" checked  disabled>
                                        @else
                                            <input type="checkbox" disabled>
                                        @endif
                                    </td>
                                    <td class="users-view-latest-activity">
                                        @if($thisInstruction->chk_pack=='yes')
                                            <input type="checkbox" checked  disabled>
                                        @else
                                            <input type="checkbox" disabled>
                                        @endif
                                    </td>
                                    <td class="users-view-latest-activity">
                                        @if($thisInstruction->chk_send=='yes')
                                            <input type="checkbox" checked disabled>
                                        @else
                                            <input type="checkbox" disabled>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>

                <tr>
                    <td class="users-view-latest-activity" colspan="2"><strong>Raw Materials</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table>
                            @foreach($RawMetirals as $thisRawMetirals)
                                <tr>
                                    <td class="users-view-latest-activity"><strong>Material Name:</strong></td>
                                    <td class="users-view-latest-activity">{{ $thisRawMetirals->material_name }}</td>
                                    <td class="users-view-latest-activity"><strong>Quantity:</strong></td>
                                    <td class="users-view-latest-activity">{{ $thisRawMetirals->material_quantity }}</td>
                                    <td class="users-view-latest-activity"><strong>Lot Nr.:</strong></td>
                                    <td class="users-view-latest-activity">{{ $thisRawMetirals->material_lot_nr }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="users-view-latest-activity" colspan="2"><strong>Packaging</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="users-view-latest-activity"><strong>Type</strong></td>
                                <td class="users-view-latest-activity"><strong>Size</strong></td>
                                <td class="users-view-latest-activity"><strong>Unit</strong></td>
                                <td class="users-view-latest-activity"><strong>Quantity</strong></td>
                                <td class="users-view-latest-activity"><strong>Total</strong></td>
                            </tr>
                            @foreach($Packagings as $thisPackaging)
                                <tr>
                                    <td class="users-view-latest-activity" colspan="2">{{ $thisPackaging->packing_type }}</td>
                                    <td class="users-view-latest-activity">{{ $thisPackaging->package_size }}</td>
                                    <td class="users-view-latest-activity">{{ $thisPackaging->packing_unit }}</td>
                                    <td class="users-view-latest-activity">{{ $thisPackaging->package_quantity }}</td>
                                    <td class="users-view-latest-activity">{{ $thisPackaging->package_total }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>

                </tr>

                <tr>
                    <td class="users-view-latest-activity" colspan="2"><strong>Shipment And Storage Options</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="users-view-latest-activity"><strong>Quantity</strong></td>
                                <td class="users-view-latest-activity"><strong>Unit</strong></td>
                                <td class="users-view-latest-activity" colspan="3"><strong>DELIVERY / STORAGE</strong></td>
                                <td class="users-view-latest-activity"><strong>PALET NR./SHELF NR.</strong></td>
                            </tr>
                            @foreach($Shipments as $thisShipment)
                                <tr>
                                    <td class="users-view-latest-activity">{{ $thisShipment->shipment_quantity }}</td>
                                    <td class="users-view-latest-activity">{{ $thisShipment->shipment_unit }}</td>
                                    <td class="users-view-latest-activity" colspan="3">{{ $thisShipment->delivery_storage }}</td>
                                    <td class="users-view-latest-activity">{{ $thisShipment->storage_pallet }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
        <div class="page-break"></div>
        <div class="col-12">
            <table class="table table-borderless" colspan="12">
                <tbody>
                    <tr>
                        <td class="users-view-latest-activity" colspan="2"><strong>Recipe: @if($recipe->product_number!=""){{ $recipe->product_number }} - @endif {{ $recipe->title }}</strong></td>
                    </tr>
                    @php
                    /*<tr>
                        <td class="users-view-latest-activity" colspan="2"><b>Total Production: </b>{{ $recipe->amount }}&nbsp;{{ $recipe->unit }}</td>
                    </tr>*/
                    @endphp
                    <tr>
                        <td class="users-view-latest-activity"><strong>Quantity Estimate:</strong></td>
                        <td class="users-view-latest-activity">{{ $production->quantity_estimate }} &nbsp;{{ $production->quantity_estimate_unit }}</td>
                    </tr>
                    <tr>
                        <td class="users-view-latest-activity"><strong>Lot Number:</strong></td>
                        <td class="users-view-latest-activity">{{ $production->lot_number }}</td>
                    </tr>
                    <tr>
                        <td class="users-view-latest-activity" colspan="2" style="text-align: right">{{ $production->create_date_time }}</td>
                    </tr>
                    <tr>
                        <td class="users-view-latest-activity" colspan="2"><b>Ingredients</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                    @if(is_array($arrCalculatedIngredietns) && count($arrCalculatedIngredietns)>0)
                                        @foreach($arrCalculatedIngredietns as $thisIngredient)
                                            <tr>
                                                <td class="text-nowrap" scope="row" style="padding-right: 1rem !important; padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 2% !important;white-space: nowrap;text-align: right"><input type="checkbox" /></td>
                                                <td class="text-nowrap" scope="row" style="padding-left: 1rem !important; padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 32% !important; white-space: nowrap;">{{ $thisIngredient['name'] }}</td>
                                                <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; white-space: nowrap; width: 66% !important;">{{ $thisIngredient['amount'] }}&nbsp;{{ $thisIngredient['unit'] }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach($Ingredients as $key=>$thisIngredient)
                                            <tr>
                                                <td class="text-nowrap" scope="row" style="padding-right: 1rem !important; padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 2% !important;white-space: nowrap;text-align: right"><input type="checkbox" /></td>
                                                <td class="text-nowrap" scope="row" style="padding-left: 1rem !important; padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 32% !important; white-space: nowrap;">{{ $thisIngredient->name }}</td>
                                                <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; white-space: nowrap; width: 66% !important;">{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
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
                        <tr>
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td><b>Started</b></td>
                                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                        <td><b>Completed</b></td>
                                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:0px !important; margin-top: 0px !important;">
                                <table>
                                    <tr>
                                        <td style="white-space: nowrap"><b>Confirmed by</b></td>
                                        <td colspan="3"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="3"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="3"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="3"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(count($RecipePhoto)>0)
            <div class="col-12" style="text-align: center">
                <table class="table table-borderless" colspan="12">
                    <tbody>
                        @foreach($RecipePhoto as $k=>$thisPhoto)
                            <tr>
                                <td>
                                    <img style="max-height: 400px !important; max-width: 500px;" src="https://innri.fisherman.is/uploads/recipes/{{$recipe->id}}/{{$thisPhoto->file_name}}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <div class="col-12">
            <table class="table table-borderless" colspan="12">
                <tbody>
                    <tr>
                        <td class="users-view-latest-activity"><strong>QUANTITY SCALED:</strong></td>
                        <td class="users-view-latest-activity"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $production->quantity_estimate_unit }}</u></td>
                    </tr>
                    <tr>
                        <td><b>Confirmed by</b></td>
                        <td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
