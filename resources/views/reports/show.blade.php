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
            <td class="users-view-latest-activity" colspan="2">{{ $templatesubmit->submit_date }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="4"><strong>Template:</strong></td>
                <table class="table table-borderless" colspan="12">
                    <thead>
                        <td class="users-view-latest-activity"><strong>Title</strong></td>
                        <td class="users-view-latest-activity"><strong>Comment</strong></td>
                        <td class="users-view-latest-activity"><strong>Supervisor Comment</strong></td>
                    </thead>
                    @foreach($templatesubmitfields as $submitfields)
                        <tr>
                            <td class="users-view-latest-activity"><strong>{{ $submitfields->field_title }}</strong></td>
                            <td class="users-view-latest-activity">{{ $submitfields->emp_comment }}</td>
                            <td class="users-view-latest-activity">{{ $submitfields->supervisor_comment }}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>





        </tbody>
    </table>
</div>
