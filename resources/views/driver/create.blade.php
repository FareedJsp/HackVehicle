@extends('layouts.main')
@section('title' , 'Add Driver')
@section('content')

<form method="post" action="/insertdriver" enctype="multipart/form-data">

  @csrf

<div class="container-fluid">

  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Add Driver Data</h4>
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
          <label class="form-label">Image (optional)</label>
          <input type="file" class="form-control-file" name="image" value="default">
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