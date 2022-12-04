@extends('layouts.main')
@section('title' , 'Edit Driver')
@section('content')

<form method="post" action="/updatedriver/{{$driver->id}}" enctype="multipart/form-data">

  @csrf

<div class="container-fluid">

  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Edit Driver Data</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Vehicle</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Data</a></li>
        </ol>
    </div>
  </div>
  
  <div class="row">
    <div class="col-6">

      <div class="mb-3">
        <label class="form-label">Company</label>
        <input type="text" class="form-control" name="company" value="{{$driver->company}}" readonly>
      </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$driver->name}}" readonly>
        </div>

        <input type="hidden" value="Driver" name="role">

        <div class="mb-3">
          <label class="form-label">Image (optional)</label>
          <input type="file" class="form-control-file" name="image" value="{{$driver->image}}">
        </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-control" name="driver_gender">
              <option value="{{$driver->driver_gender}}" readonly>{{$driver->driver_gender}}</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="driver_birth_date" value="{{$driver->driver_birth_date}}" readonly>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-control" name="driver_status">
              <option value="{{$driver->driver_status}}" selected>{{$driver->driver_status}}</option>
              @if ($driver->driver_status == 'Available')
                <option value="Not Available">Not Available</option>   
              @else
              <option value="Available">Available</option>
              @endif
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{$driver->email}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="{{$driver->password}}">
          </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection