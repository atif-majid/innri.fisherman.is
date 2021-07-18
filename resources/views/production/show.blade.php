<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity"><strong>Recipe:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $Recipe->title }}</td>
            <td class="users-view-latest-activity"><strong>Date:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $production->create_date_time }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Product Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->product_number }}</td>
            <td class="users-view-latest-activity"><strong>Lot Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->lot_number }}</td>
            <td class="users-view-latest-activity"><strong>Order Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->order_number }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Quantity Estimate:</strong></td>
            <td class="users-view-latest-activity">{{ $production->quantity_estimate }} &nbsp;{{ $production->quantity_estimate_unit }}</td>
            <td class="users-view-latest-activity"><strong>QUANTITY SCALED:</strong></td>
            <td class="users-view-latest-activity">{{ $production->quantity_scaled }} &nbsp;{{ $production->quantity_scaled_unit }}</td>
            <td class="users-view-latest-activity"><strong>Added By:</strong></td>
            <td class="users-view-latest-activity">{{ $Employee->name }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Instructions</strong></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="2"><strong>Date</strong></td>
            <td class="users-view-latest-activity"><strong>Make</strong></td>
            <td class="users-view-latest-activity"><strong>Freeze</strong></td>
            <td class="users-view-latest-activity"><strong>Pack</strong></td>
            <td class="users-view-latest-activity"><strong>Send</strong></td>
            <td class="users-view-latest-activity"><strong>Clean</strong></td>
            <td class="users-view-latest-activity"><strong>Cut</strong></td>
            <td class="users-view-latest-activity"><strong>Salt</strong></td>
            <td class="users-view-latest-activity"><strong>Smoke</strong></td>
            <td class="users-view-latest-activity"><strong>Bone cleaning</strong></td>
            <td class="users-view-latest-activity"><strong>Sliced</strong></td>
        </tr>
        @foreach($Instructions as $thisInstruction)
            <tr>
                <td class="users-view-latest-activity" colspan="2">{{ $thisInstruction->instruction_date }}</td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_make=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_freeze=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_pack=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_send=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>

                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_clean=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_cut=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_salt=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_smoke=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_bone_cleaning=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
                <td class="users-view-latest-activity">
                    <fieldset>
                        <div class="custom-control custom-checkbox">
                            @if($thisInstruction->chk_sliced=='yes')
                                <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3" disabled>
                                <label class="custom-control-label" for="customCheck3"></label>
                            @else
                                <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            @endif
                        </div>
                    </fieldset>
                </td>
            </tr>
        @endforeach
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Raw Materials</strong></td>
        </tr>
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

        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Packaging</strong></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="2"><strong>Type</strong></td>
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
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Shipment And Storage Options</strong></td>
        </tr>
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
        </tbody>
    </table>
</div>
