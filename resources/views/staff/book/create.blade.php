<!-- create.blade.php -->

@extends('layouts.master-client')
@section('content')

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
<!--         <div class="wrapper wrapper--w680">
 -->            <div class="card card-1">

                <div class="card-body">
                    <h2 class="title">Customer Registration Info</h2>


  <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
  <form class="justify-content-center" method="post" action="{{url('receptionist/customer')}}"  id="contact_form">
    {{ csrf_field() }}

     <div class="form-group">
      <label >First Name</label>
        <input type="text" class="form-control"  name="firstName">
    </div>
    <div class="form-group">
      <label >Last Name</label>

        <input type="text" class="form-control"  name="lastName">

    </div>
      <div class="form-group">
       <label >Gender</label>

        <select name="gender" class="form-control">
          <option value="">---- select Gender  -----</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

    </div>
    <div class="form-group">
      <label >Telephone</label>

        <input type="text" class="form-control "  name="phone">

    </div>
    <div class="form-group">
      <label >Email</label> 

        <input type="email" class="form-control" name="email">

    </div>
       @if($entities !=null)
    <div class="form-group">
      <label >Entity Name</label>
      <select name="entitie_id" class="form-control" >
            <option value="">--- Select Entity ---</option>
            @foreach ($entities as $entity)
                  <option value="{{ $entity->id }}">{{ $entity->name}}</option>
            @endforeach
      </select>
    </div>
    @endif

    
    <div class="form-group">
      <label >Date of Birth</label>

        <input type="date" class="form-control " name="dob">

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
