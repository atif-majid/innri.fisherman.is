<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        @if($employee->picture!="")
        <tr>
            <td colspan="2">
                <img src="https://innri.fisherman.is/uploads/{{$employee->picture}}" style="width: 200px;" alt="No picture uploaded yet!">
            </td>
        </tr>
        @endif
        <tr>
            <td>Name:</td>
            <td class="users-view-latest-activity">{{$employee->name}}</td>
            <td>Department:</td>
            <td>{{$employee->department}}</td>
            <td>Mobile Phone:</td>
            <td>{{$employee->gsm}}</td>
        </tr>
        <tr>
            <td>Job Title:</td>
            <td>{{$employee->designation}}</td>
            <td>Direct Phone:</td>
            <td>{{$employee->direct_phone}}</td>
            <td>Email Address:</td>
            <td>{{$employee->email}}</td>
        </tr>
        </tbody>
    </table>
</div>
