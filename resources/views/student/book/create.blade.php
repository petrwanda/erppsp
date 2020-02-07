<!-- create.blade.php -->
@extends('student.layouts.app_master')

@section('content')

<div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Book</h6>
                </div>
                <div class="card-body">
                  <form class="justify-content-center" method="post"  action="{{route('book.store')}}"  id="contact_form">
                     {{ csrf_field() }}
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Title</label>
                      <input name="title" type="text" class="form-control"  placeholder="Book Title">
                    </div>
                  
                    <div class="form-group">
                      <div class="custom-file">
                        <input name="file" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file Book</label>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input name="description" type="text" class="form-control"  placeholder="Description your book">
                    </div>

                 

                  


                   @if($staffs !=null)
                      <div class="form-group">
                        <label >Staff </label>
                        <select name="staff_id" class="form-control" >
                              <option value="">--- Select staff ---</option>
                              @foreach ($staffs as $staff)
                                    <option value="{{ $staff->id}}">{{ $staff->email}}</option>
                              @endforeach
                        </select>
                      </div>
                      @endif  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
  

<!-- </div> -->

@endsection
