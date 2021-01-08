<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity"><strong>Who Notified:</strong></td>
            <td class="users-view-latest-activity">{{ $improvement->complainer }}</td>
            <td class="users-view-latest-activity"><strong>Phone:</strong></td>
            <td class="users-view-latest-activity">{{ $improvement->phonenumber }}</td>
            <td class="users-view-latest-activity"><strong>Email:</strong></td>
            <td class="users-view-latest-activity">{{ $improvement->email }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Notifications</strong></td>
        </tr>
        @foreach($Notifications as $thisNotification)
            <tr>
                <td class="users-view-latest-activity" colspan="2">{{ $thisNotification->notification_name }}</td>
            </tr>
        @endforeach
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Description</strong></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6">{{ $improvement->description }}</td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6"><strong>Response and improvements</strong></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="6">{{ $improvement->response_improvements }}</td>
        </tr>
        </tbody>
    </table>
</div>
