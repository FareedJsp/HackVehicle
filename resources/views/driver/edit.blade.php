@extends('layouts.main')

@section('title' , 'editdriver')
@section('heading' , 'Edit Driver Data')
@section('breadcrumb' , 'Edit Driver Data')

@section('content')

<form method="post" action="/updatedriver/{{$driver->id}}" enctype="multipart/form-data">

  @csrf

<div class="container-fluid">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Update Driver Data</h4>

      <div class="mb-3">
        <label class="form-label">Company</label>
        <input type="text" class="form-control" name="company" value="{{$driver->company}}">
      </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$driver->name}}" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Image (optional)</label>
          <input type="file" class="form-control-file" name="image" value="{{$driver->image}}">
        </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-control" name="gender">
              <option value="{{$driver->gender}}" readonly="">{{$driver->gender}}</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="birth_date" value="{{$driver->birth_date}}" readonly>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-control" name="status">
              <option value="{{$driver->status}}"selected>{{$driver->status}}</option>
              @if ($driver->status == 'Available')
                <option value="Not Available">Not Available</option>   
              @else
              <option value="Available">Available</option>
              @endif
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="{{$driver->username}}">
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