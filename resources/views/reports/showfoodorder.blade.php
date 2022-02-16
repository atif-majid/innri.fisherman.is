<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
            <tr>
                <td class="users-view-latest-activity" colspan="4" style="text-align: center"><strong>Orders for {{ $strDateDisplay }}</strong></td>
            </tr>
            <tr>
                <td class="users-view-latest-activity"><strong>Total Orders:</strong></td>
                <td class="users-view-latest-activity">{{ $foodorders->count() }}</td>
                <td class="users-view-latest-activity"></td>
                <td class="users-view-latest-activity"></td>
            </tr>
            @if($foodorders->count()>0)
                @php
                    $nMainCourseOrder = 0;
                    $nVegetarianOrder = 0;
                @endphp
                @foreach($foodorders as $thisorder)
                    @if($thisorder->item==$strMainCourse)
                        @php
                            $nMainCourseOrder++;
                        @endphp
                    @elseif($thisorder->item==$strVegetarian)
                        @php
                            $nVegetarianOrder++;
                        @endphp
                    @endif
                @endforeach
                <tr>
                    <td class="users-view-latest-activity"><strong>Main Course ({{ $strMainCourse }}):</strong></td>
                    <td class="users-view-latest-activity">{{ $nMainCourseOrder }}</td>
                    <td class="users-view-latest-activity"><strong>Vegetarian ({{ $strVegetarian }}):</strong></td>
                    <td class="users-view-latest-activity">{{ $nVegetarianOrder }}</td>
                </tr>
                @foreach($foodorders as $thisorder)
                    <tr>
                        <td class="users-view-latest-activity"><strong>{{ $thisorder->name }}</strong></td>
                        <td class="users-view-latest-activity">{{ $thisorder->item }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
