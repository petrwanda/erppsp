@extends('student.layouts.app_master')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Book</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('book.update')}}">
  {{csrf_field()}}

  <div class="form-group">
  <label>Title</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="title" value="{{$book->title}}">
    </div>



      <div class="form-group">
  <label>Description</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="description" value="{{$book->description}}">
    </div>


       @if($staffs !=null)
    <div class="form-group">
      <label >staff</label>

      <select name="staff_id" class="form-control" >
            <option value="{{$book->staff_id}}">{{$book->staff_id}}</option>
            @foreach ($staffs as $staff)
                  <option value="{{ $staff->id}}">{{ $staff->email}}</option>
            @endforeach
      </select>

  </div>
    @endif

    <div class="form-group row">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$book->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
