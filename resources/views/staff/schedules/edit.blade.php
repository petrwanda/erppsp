@extends('staff.layouts.app_master')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Schedule</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('schedules.update')}}">
  {{csrf_field()}}
       @if($books !=null)
    <div class="form-group">
      <label >Book</label>

      <select name="book_id" class="form-control" >
            <option value="{{$schedule->book_id}}">{{$schedule->book_id}}</option>
            @foreach ($books as $book)
                  <option value="{{ $book->id }}">{{ $book->title}}</option>
            @endforeach
      </select>

  </div>
    @endif

        @if($rooms !=null)
    <div class="form-group">
      <label >Room</label>

      <select name="room_id" class="form-control" >
            <option value="{{$schedule->room_id}}">{{$schedule->room_id}}</option>
            @foreach ($rooms as $room)
                  <option value="{{ $room->id }}">{{ $room->room_no}}</option>
            @endforeach
      </select>

  </div>
    @endif

       
      <div class="form-group">
      
      <label>Schedule Date</label>

        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" name="schedule_date" value="{{$schedule->schedule_date}}">

    </div>

      <div class="form-group">
      
      <label>Schedule Time</label>

        <input type="time" class="form-control form-control-lg" id="lgFormGroupInput" name="schedule_time" value="{{$schedule->schedule_time}}">

    </div>



    <div class="form-group row">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$schedule->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
