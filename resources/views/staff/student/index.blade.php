@extends('staff.layouts.app_master')

@section('content')

<!-- Datatables -->
 @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Students</h6>
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
                        <th>Student id</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Facult</th>
                        <th>Department</th>
                        <th>Simester</th>
                        <th>Location</th>
                        <th>created on</th>
                    
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($students as $student)
                      <tr>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->facult_id}}</td>
                        <td>{{$student->department_id}}</td>
                        <td>{{$student->simester}}</td>
                        <td>{{$student->location}}</td>
                        <td>{{$student->created_at}}</td>
                      
        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
