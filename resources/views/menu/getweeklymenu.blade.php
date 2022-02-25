<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-md-2"  style="white-space: nowrap">
        <strong>Day</strong>
    </div>
    <div class="col-md-2" style="white-space: nowrap">
        <strong>Date</strong>
    </div>
    <div class="col-md-4">
        <strong>Fish</strong>
    </div>
    <div class="col-md-4">
        <strong>Meat</strong>
    </div>
</div>
<div class="row">&nbsp;</div>
@foreach($arrMenuItems as $key=>$val)
    <div class="row">
        <div class="col-md-2"  style="white-space: nowrap">
            {{date("l", strtotime($key))}}
        </div>
        <div class="col-md-2" style="white-space: nowrap">
            {{ $key }}
        </div>
        <div class="col-md-4">
            <input type="hidden" name="strDate[]" value="{{$key}}" >
            <input type="text" name="strFishCourse[]" class="form-control" value="{{$val['fish_course']}}">
        </div>
        <div class="col-md-4">
            <input type="text" name="strMeatCourse[]" class="form-control" value="{{$val['meat_course']}}">
        </div>
    </div>
    <div class="row">&nbsp;</div>
@endforeach
