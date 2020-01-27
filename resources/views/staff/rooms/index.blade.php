@extends('staff.layouts.app_master')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Rooms</h6>
                </div>
                 <div class="form-group row">
                  <a href="{{action('Staff\RoomController@create')}}" class="btn btn-primary">Add new</a>
                </div>
                            <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>staff</th>
                        <th>staff</th>
                        <th>staff</th>
                        <th>Room Number</th>
                        <th>date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($rooms as $room)
                      <tr>
                        <td>{{$room->staff_id_1}}</td>
                        <td>{{$room->staff_id_2}}</td>
                        <td>{{$room->staff_id_3}}</td>
                        <td>{{$room->room_no}}</td>
                        <td>{{$room->created_at}}</td>
                        <td><a href="{{route('rooms.edit',['id'=>$room->id])}}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{route('rooms.destroy',['id'=>$room->id])}}" class = "btn btn-danger">Delete</a></td>

        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
