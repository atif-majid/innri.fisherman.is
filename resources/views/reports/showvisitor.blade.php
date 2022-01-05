<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity"><strong>Name:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $visitor->fullname }}</td>
            <td class="users-view-latest-activity"><strong>Invited or Guest:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $visitor->status }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Company:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $visitor->company }}</td>
            <td class="users-view-latest-activity"><strong>Visited On:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ date("d-m-Y H:i:s", strtotime($visitor->visit_date_time)) }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Purpose of Visit:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $visitor->purpose }}</td>
            <td class="users-view-latest-activity">@if($visitor->purpose=='Other') <strong>Detail:</strong> @endif</td>
            <td class="users-view-latest-activity" colspan="2">@if($visitor->purpose=='Other') {{ $visitor->purpose_other }}  @endif</td>
        </tr>
        </tbody>
    </table>
</div>
