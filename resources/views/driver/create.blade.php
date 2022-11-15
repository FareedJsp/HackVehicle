@extends('layouts.main')

@section('title' , 'adddriver')
@section('heading' , 'Add Driver')
@section('breadcrumb' , 'Add Driver')

@section('content')

<form method="post" action="/insertdriver" enctype="multipart/form-data">

  @csrf

<div class="container-fluid">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Driver Data</h4>

        @php
            $company = DB::table('users')->first();
        @endphp

        <div class="mb-3">
          <label class="form-label">Company</label>
          <input type="text" class="form-control" name="company" value="{{$company->company}}"readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

          <div class="mb-3">
            <label class="form-label">Gender</label>
            <select class="form-control" name="gender">
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="birth_date">
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-control" name="status">
              <option selected>Open this select menu</option>
              <option value="Available">Available</option>
              <option value="Not Available">Not Available</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password">
          </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection