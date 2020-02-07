@extends('staff.layouts.app_master')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Schedules</h6>
                </div>
                 <div class="form-group row">
                  <a href="{{action('Staff\ScheduleController@create')}}" class="btn btn-primary">Add new</a>
                </div>
                            <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>book</th>
                        <th>room</th>
                        <th>schedule Date</th>
                        <th>schedule Time</th>
                        <th>created on</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($schedules as $schedule)
                      <tr>
                        <td>{{$schedule->book_id}}</td>
                        <td>{{$schedule->room_id}}</td>
                        <td>{{$schedule->schedule_date}}</td>
                        <td>{{$schedule->schedule_time}}</td>
                        <td>{{$schedule->created_at}}</td>
                        <td><a href="{{route('schedules.edit',['id'=>$schedule->id])}}" class = "btn btn-info">Edit</a></td>
                        <td><a href="{{route('schedules.destroy',['id'=>$schedule->id])}}" class = "btn btn-danger">Delete</a></td>

        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
