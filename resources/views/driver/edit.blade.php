@extends('layouts.main')

@section('title' , 'editdriver')
@section('heading' , 'Edit Driver Data')
@section('breadcrumb' , 'Edit Driver Data')

@section('content')

<form method="post" action="/updatedriver/{{$driver->id}}" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Update Driver Data</h4>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$driver->name}}">
        </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-control" name="gender">
              <option value="{{$driver->gender}}">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="birth_date" value="{{$driver->birth_date}}">
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-control" name="status">
              <option value="{{$driver->status}}"selected>Open this select menu</option>
              <option value="Available">Available</option>
              <option value="Not Available">Not Available</option>
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