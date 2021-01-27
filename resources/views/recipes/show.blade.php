<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity" colspan="2"><strong>{{ $recipe->title }}</strong></td>
        </tr>
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
                                    <th class="text-nowrap" scope="row" style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 15% !important;white-space: nowrap;">{{ $thisIngredient->name }}</th>
                                    <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 85% !important;white-space: nowrap;">{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        @foreach($Ingredients as $key=>$thisIngredient)
            @php
            /*<tr>
                <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 15% !important;white-space: nowrap;">{{ $thisIngredient->name }}</td>
                <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 85% !important;white-space: nowrap;">{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
            </tr>*/
            @endphp
        @endforeach
        <tr>
            <td class="users-view-latest-activity"<b>Steps</b></td>
        </tr>
        @foreach($Steps as $thisStep)
            <tr>
                <td colspan="2">{!! nl2br( $thisStep->details) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
