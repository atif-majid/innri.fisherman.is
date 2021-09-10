<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity"><strong>Template:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $templatesubmit->template_title }}</td>
            <td class="users-view-latest-activity"><strong>Supervisor:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $templatesubmit->supervisor }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Submitted By:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ $templatesubmit->employeename }}</td>
            <td class="users-view-latest-activity"><strong>Submitted On:</strong></td>
            <td class="users-view-latest-activity" colspan="2">{{ date("d-m-Y H:i:s", strtotime($templatesubmit->submit_date)) }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Instructions:</strong></td>
            <td class="users-view-latest-activity" colspan="5">{{ $templatesubmit->instruction }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity"><strong>Comments:</strong></td>
            <td class="users-view-latest-activity" colspan="5">{{ $templatesubmit->comments }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6">
                <table class="table table-borderless" colspan="12">
                    <thead>
                        <td class="users-view-latest-activity"><strong>Title</strong></td>
                        <td class="users-view-latest-activity"><strong>
                            @if($templatesubmit->with_checkboxes=='yes')
                                Checklist
                            @else
                                Value
                            @endif
                        </strong></td>
                        <td class="users-view-latest-activity"><strong>Comment</strong></td>
                        <td class="users-view-latest-activity"><strong>Supervisor Confirmed</strong></td>
                        <td class="users-view-latest-activity"><strong>Supervisor Comment</strong></td>
                    </thead>
                    @foreach($templatesubmitfields as $submitfields)
                        <tr>
                            <td class="users-view-latest-activity"><strong>{{ $submitfields->field_title }}</strong></td>
                            <td class="users-view-latest-activity">
                                @if($templatesubmit->with_checkboxes=='yes')
                                    @if($submitfields->chk_emp_confirm=='yes')
                                        <input type="checkbox" readonly checked disabled="true">
                                    @else
                                        <input type="checkbox" readonly disabled="true">
                                    @endif
                                @else
                                    {{ $submitfields->emp_value }}
                                @endif
                            </td>
                            <td class="users-view-latest-activity">{{ $submitfields->emp_comment }}</td>
                            <td class="users-view-latest-activity">
                                @if($submitfields->chk_supervisor_confirmed=='yes')
                                    <input type="checkbox" readonly checked disabled="true">
                                @else
                                    <input type="checkbox" readonly disabled="true">
                                @endif
                            </td>
                            <td class="users-view-latest-activity">{{ $submitfields->supervisor_comment }}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>





        </tbody>
    </table>
</div>
