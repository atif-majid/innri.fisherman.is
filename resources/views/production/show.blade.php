@php
    $nSalaryCostPerHour = $SalaryCost[0]->value;
@endphp
@if(!empty($production->salary_cost_hour))
    @php
        $nSalaryCostPerHour = $production->salary_cost_hour;
    @endphp
@endif
@php
    $nSalaryCostPerMinute = round($nSalaryCostPerHour/60, 2);
    $nProductionCost = 0;
@endphp
@if($production->production_time>0)
    @php
        $nProductionCost =  ($production->production_time * $nSalaryCostPerMinute);
    @endphp
@endif
@if($production->actual_cost>0)
    @php
        $nProductionCost = $nProductionCost + $production->actual_cost;
    @endphp
@endif
<style>
    /*.table th, .table td{
        padding: 1rem 1rem !important;
    }*/
    /*.table tr{
        line-height: 2px !important;
    }*/
</style>
<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tr>
            <td class="users-view-latest-activity"><strong>Recipe:</strong></td>
            <td class="users-view-latest-activity">{{ $Recipe->title }}</td>
            <td class="users-view-latest-activity"><strong>Production Time:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->production_time>0) ? $production->production_time:0 }} minutes</td>
            <td class="users-view-latest-activity"><strong>Date:</strong></td>
            <td class="users-view-latest-activity">{{ date("d-m-Y", strtotime($production->production_date)) }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Product Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->product_number }}</td>
            <td class="users-view-latest-activity"><strong>Production Time:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->production_time>0) ? $production->production_time:0 }} minutes</td>
            <td class="users-view-latest-activity"><strong>Added By:</strong></td>
            <td class="users-view-latest-activity">{{ $Employee->name }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Lot Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->lot_number }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"><strong>Predicted cost of goods:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->predicted_cost>0) ? $production->predicted_cost:0 }} ISK</td>
            <td class="users-view-latest-activity"><strong>Warehouse:</strong></td>
            <td class="users-view-latest-activity">{{ $production->warehouse }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"><strong>Actual cost of goods:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->actual_cost>0) ? $production->actual_cost:0 }} ISK</td>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Quantity Estimate:</strong></td>
            <td class="users-view-latest-activity">{{ $production->quantity_estimate }} &nbsp;{{ $production->quantity_estimate_unit }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>QUANTITY SCALED:</strong></td>
            <td class="users-view-latest-activity">{{ $production->quantity_scaled }} &nbsp;{{ $production->quantity_scaled_unit }}</td>
            <td class="users-view-latest-activity"><strong>Salary Cost:</strong></td>
            <td class="users-view-latest-activity">{{ $nSalaryCostPerHour }} ISK per hour</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"><strong>Salary Cost Per Unit ({{ $production->quantity_scaled_unit }}):</strong></td>
            <td class="users-view-latest-activity">
                @if($production->quantity_scaled>0)
                    {{ round($nSalaryCostPerHour/str_replace(",", ".", $production->quantity_scaled),2) }} ISK
                @else
                    0 ISK
                @endif
            </td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Disposal:</strong></td>
            <td class="users-view-latest-activity">{{ $production->order_number }}</td>
            <td class="users-view-latest-activity"><strong>Production cost per unit ({{ $production->quantity_scaled_unit }}):</strong></td>
            <td class="users-view-latest-activity">
                @if($production->quantity_scaled>0)
                    {{ round($nProductionCost/str_replace(",", ".", $production->quantity_scaled), 2) }} ISK
                @else
                    0 ISK
                @endif
            </td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"></td>
            <td class="users-view-latest-activity"><strong>Production Cost:</strong></td>
            <td class="users-view-latest-activity">
                {{ $nProductionCost }} ISK
            </td>
        </tr>
    </table>
</div>
<?php
/*


<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity"><strong>Recipe:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $Recipe->title }}</td>
            <td class="users-view-latest-activity"><strong>Date:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ date("d-m-Y", strtotime($production->production_date)) }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Product Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->product_number }}</td>
            <td class="users-view-latest-activity"><strong>Lot Number:</strong></td>
            <td class="users-view-latest-activity">{{ $production->lot_number }}</td>
            <td class="users-view-latest-activity"><strong>Disposal:</strong></td>
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
            <td class="users-view-latest-activity"><strong>Warehouse:</strong></td>
            <td class="users-view-latest-activity">{{ $production->warehouse }}</td>
            <td class="users-view-latest-activity"><strong>Production Time:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->production_time>0) ? $production->production_time:0 }} minutes</td>
            @php
                <td class="users-view-latest-activity"><strong>Added By:</strong></td>
                <td class="users-view-latest-activity">{{ $Employee->name }}</td>
            @endphp
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Predicted cost of goods:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->predicted_cost>0) ? $production->predicted_cost:0 }} ISK</td>
            <td class="users-view-latest-activity"><strong>Actual cost of goods:</strong></td>
            <td class="users-view-latest-activity">{{ ($production->actual_cost>0) ? $production->actual_cost:0 }} ISK</td>
            <td class="users-view-latest-activity"><strong>Production Cost:</strong></td>
            <td class="users-view-latest-activity">


                {{ $nProductionCost }} ISK
            </td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Production cost per unit ({{ $production->quantity_scaled_unit }}):</strong></td>
            <td class="users-view-latest-activity">
                {{ round($nProductionCost/$production->quantity_scaled, 2) }} ISK
            </td>
            <td class="users-view-latest-activity"><strong>Salary Cost:</strong></td>
            <td class="users-view-latest-activity">{{ $nSalaryCostPerHour }} ISK per hour</td>
            <td class="users-view-latest-activity"><strong>Salary Cost Per Unit ({{ $production->quantity_scaled_unit }}):</strong></td>
            <td class="users-view-latest-activity">
                {{ round($nSalaryCostPerHour/$production->quantity_scaled,2) }} ISK
            </td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Production time per unit ({{ $production->quantity_scaled_unit }}):</strong></td>
            <td class="users-view-latest-activity">
                {{ round($production->production_time/$production->quantity_scaled, 2) }} minutes
            </td>
            <?php
            <td class="users-view-latest-activity"><strong>Salary Cost:</strong></td>
            <td class="users-view-latest-activity">{{ $nSalaryCostPerHour }} ISK per hour</td>
            <td class="users-view-latest-activity"><strong>Salary Cost Per Unit ({{ $production->quantity_scaled_unit }}):</strong></td>
            <td class="users-view-latest-activity">
                {{ round($nSalaryCostPerHour/$production->quantity_scaled,2) }} ISK
            </td>
            ?>
        </tr>
        </tbody>
    </table>
</div>
*/
?>
