<!-- create.blade.php -->
@extends('staff.layouts.app_master')

@section('content')

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
<!--         <div class="wrapper wrapper--w680">
 -->            <div class="card card-1">

                <div class="card-body">
                    <h2 class="title">Register Schedule</h2>


  <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
  <form class="justify-content-center" method="post"  action="{{route('schedules.store')}}"  id="contact_form">
    {{ csrf_field() }}

    
       @if($books !=null)
    <div class="form-group">
      <label >Book</label>
      <select name="book_id" class="form-control" >
            <option value="">--- Select book ---</option>
            @foreach ($books as $book)
                  <option value="{{ $book->id}}">{{ $book->title}}</option>
            @endforeach
      </select>
    </div>
    @endif  

         @if($rooms !=null)
    <div class="form-group">
      <label >Room</label>
      <select name="room_id" class="form-control" >
            <option value="">--- Select Room ---</option>
            @foreach ($rooms as $room)
                  <option value="{{ $room->id}}">{{ $room->room_no}}</option>
            @endforeach
      </select>
    </div>
    @endif 


     <div class="form-group">
      <label >Schedule Date</label>
        <input type="date" class="form-control"  name="schedule_date">
    </div> 

     <div class="form-group">
      <label >Schedule Time</label>
        <input type="time" class="form-control"  name="schedule_time">
    </div>

    <div class="form-group">
      <div class="col-md-0"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>

<!-- </div> -->

@endsection
