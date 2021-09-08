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

        </tbody>
    </table>
</div>
