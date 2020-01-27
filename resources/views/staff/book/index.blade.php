@extends('staff.layouts.app_master')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Books</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Title</th>
                        <th>File</th>
                        <th>stage</th>
                        <th>date</th>
                        <th>Description</th>
                        <th>Staff</th>
                        <th>Student</th>
                        <th>Status</th>
                        <th>Decide</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($books as $book)
                      <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->file}}</td>
                        <td>{{$book->stage}}</td>
                        <td>{{$book->date}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->staff_id}}</td>
                        <td>{{$book->student_id}}</td>
                        <td>{{$book->status}}</td>
                        <td><a href="{{action('Staff\BookController@edit', $book['id'])}}" class="btn btn-warning">Decider</a></td>
        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
