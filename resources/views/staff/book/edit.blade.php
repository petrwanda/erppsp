@extends('staff.layouts.app_master')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Make Decision</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{action('Staff\BookController@update', $id)}}">
  {{csrf_field()}}
      <div class="form-group">
     <label >Status</label>
        <select name="status" class="form-control">
          <option value="{{$book->status}}">{{$book->status}}</option>
          <option value="Deny">Deny</option>
          <option value="Approved">Approved</option>
        </select>
    </div>
    <div class="form-group row">
      <div class="col-md-0"></div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
