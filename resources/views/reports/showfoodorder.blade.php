<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
            <tr>
                <td class="users-view-latest-activity" colspan="5" style="text-align: center"><strong>Orders for {{ $strDateDisplay }}</strong></td>
            </tr>
            <tr>
                <td class="users-view-latest-activity"><strong>Total Orders:</strong></td>
                <td class="users-view-latest-activity">{{ $foodorders->count() }}</td>
                <td class="users-view-latest-activity"></td>
                <td class="users-view-latest-activity"></td>
                <td class="users-view-latest-activity"></td>
            </tr>
            @if($foodorders->count()>0)
                <tr>
                    <td class="users-view-latest-activity" colspan="3"><strong>Fish Course ({{ $strFishCourse }}):</strong></td>
                    <td class="users-view-latest-activity">{{ $nFishOrders }}</td>
                </tr>
                <tr>
                    <td class="users-view-latest-activity" colspan="3"><strong>Meat Course ({{ $strMeatCourse }}):</strong></td>
                    <td class="users-view-latest-activity">{{ $nMeatOrders }}</td>
                </tr>
                <tr><td colspan="5"></td></tr>
                <tr><td colspan="5"></td></tr>
                <tr>
                    <td class="users-view-latest-activity"><strong>Employee</strong></td>
                    <td class="users-view-latest-activity" colspan="2">{{ $strFishCourse }}</td>
                    <td class="users-view-latest-activity" colspan="2">{{ $strMeatCourse }}</td>
                </tr>
                @foreach($foodorders as $thisorder)
                    <tr>
                        <td class="users-view-latest-activity"><strong>{{ $thisorder->name }}</strong></td>
                        <td class="users-view-latest-activity" colspan="2">{{ $thisorder->fish_course }}</td>
                        <td class="users-view-latest-activity" colspan="2">{{ $thisorder->meat_course }}</td>
                    </tr>
                    <tr>
                        <td class="users-view-latest-activity border-bottom" colspan="5">{{ $thisorder->comments }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
