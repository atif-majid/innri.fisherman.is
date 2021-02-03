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
        <tr>
            <td colspan="4">
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center" onclick="window.location.href='{{ route('employees.onboarding', $employee->id) }}'">
                    <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Onboarding Tasks</button>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
