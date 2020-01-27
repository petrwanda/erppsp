<!-- create.blade.php -->
@extends('staff.layouts.app_master')

@section('content')

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
<!--         <div class="wrapper wrapper--w680">
 -->            <div class="card card-1">

                <div class="card-body">
                    <h2 class="title">Register Room</h2>


  <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
  <form class="justify-content-center" method="post"  action="{{route('rooms.store')}}"  id="contact_form">
    {{ csrf_field() }}

    
       @if($staffs !=null)
    <div class="form-group">
      <label >Staff one</label>
      <select name="staff_id_1" class="form-control" >
            <option value="">--- Select staff ---</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id}}">{{ $staff->email}}</option>
            @endforeach
      </select>
    </div>
    @endif  

         @if($staffs !=null)
    <div class="form-group">
      <label >Staff Two</label>
      <select name="staff_id_2" class="form-control" >
            <option value="">--- Select staff ---</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id}}">{{ $staff->email}}</option>
            @endforeach
      </select>
    </div>
    @endif 

         @if($staffs !=null)
    <div class="form-group">
      <label >Staff Three</label>
      <select name="staff_id_3" class="form-control" >
            <option value="">--- Select staff ---</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id}}">{{ $staff->email}}</option>
            @endforeach
      </select>
    </div>
    @endif

     <div class="form-group">
      <label >Room Number</label>
        <input type="number" class="form-control"  name="room_no">
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
