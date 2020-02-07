@extends('staff.layouts.app_master')

@section('content')

<!-- Datatables -->
 @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Staffs</h6>
                </div>

                <div class="card">
                       <form method='post' class="form-inline" action="{{url('staff/uploadFile')}}" enctype='multipart/form-data' >
                       {{ csrf_field() }}
                       <input type='file' name='file' >
                       <input type='submit' name='submit' value='Import'>
                     </form>
                </div>
               
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Serial NO</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Facult</th>
                        <th>Department</th>
                        <th>Simester</th>
                        <th>Location</th>
                        <th>Role</th>
                        <th>created on</th>
                    
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($staffs as $staff)
                      <tr>
                        <td>{{$staff->first_name}}</td>
                        <td>{{$staff->last_name}}</td>
                        <td>{{$staff->serial_no}}</td>
                        <td>{{$staff->dob}}</td>
                        <td>{{$staff->gender}}</td>
                        <td>{{$staff->facult_id}}</td>
                        <td>{{$staff->department_id}}</td>
                        <td>{{$staff->location}}</td>
                        <td>{{$staff->role}}</td>
                        <td>{{$staff->created_at}}</td>
                      
        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
