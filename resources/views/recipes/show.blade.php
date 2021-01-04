<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>{{ $recipe->title }}</strong></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6"><b>Ingredients</b></td>
        </tr>
        @foreach($Ingredients as $key=>$thisIngredient)
            @if($key%3==0)
                <tr>
            @endif
                <td>{{ $thisIngredient->name }}</td>
                <td>{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
            @if(($key+1)%3==0)
                </tr>
            @endif
        @endforeach
        <tr>
            <td class="users-view-latest-activity" colspan="6"><b>Steps</b></td>
        </tr>
        @foreach($Steps as $thisStep)
            <tr>
                <td colspan="6">{{ $thisStep->details }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
