@extends('staff.layouts.app_master')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Room</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('rooms.update')}}">
  {{csrf_field()}}
       @if($staffs !=null)
    <div class="form-group">
      <label >Staff One</label>

      <select name="staff_id_1" class="form-control" >
            <option value="{{$room->staff_id_1}}">{{$room->staff_id_1}}</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id }}">{{ $staff->email}}</option>
            @endforeach
      </select>

  </div>
    @endif

        @if($staffs !=null)
    <div class="form-group">
      <label >Staff Two</label>

      <select name="staff_id_2" class="form-control" >
            <option value="{{$room->staff_id_2}}">{{$room->staff_id_2}}</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id }}">{{ $staff->email}}</option>
            @endforeach
      </select>

  </div>
    @endif

        @if($staffs !=null)
    <div class="form-group">
      <label >Staff Three</label>

      <select name="staff_id_3" class="form-control" >
          <option value="{{$room->staff_id_3}}">{{$room->staff_id_3}}</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id}}">{{ $staff->email}}</option>
            @endforeach
      </select>

  </div>
    @endif

      <div class="form-group">
      
      <label>Room number</label>

        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" name="room_no" value="{{$room->room_no}}">

    </div>



    <div class="form-group row">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$room->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
