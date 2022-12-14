@extends('layouts.main')
@section('title' , 'Add Vehicle')
@section('content')

<form method="post" action="/insertvehicle" enctype="multipart/form-data">

  @csrf

<div class="container-fluid">

  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Hi, welcome back!</h4>
            <p class="mb-0">Add Driver Data</p>
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
        <label class="form-label">Category</label>
        <select class="form-control" name="category">
        <option selected>Open this select menu</option>
        <option value="Standard">Standard</option>
        <option value="Van">Van</option>
        <option value="Lorry">Lorry</option>
        </select>
      </div>

        <div class="mb-4">
          <label class="form-label">Model</label>
          <input type="text" class="form-control" name="model">
        </div>

        <div class="basic-form custom_file_input mb-3">
          <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" value="default">
                <label class="custom-file-label">Image file (optional)</label>
            </div>
          </div>
        </div>

        <div class="mb-3">
            <label class="form-label">No Plate</label>
            <input type="text" class="form-control" name="no_plate">
          </div>
        
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label class="form-label">Color</label>
        <input type="text" class="form-control" name="color">
      </div>

      <div class="mb-3">
        <label class="form-label">Vehicle Year</label>
        <input type="number" class="form-control" name="vehicle_year">
      </div>

      <div class="mb-3">
        <label class="form-label">Mileage (KM)</label>
        <input type="number" class="form-control" name="mileage">
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
        <label class="form-label">Road Tax Expiration Date</label>
        <input type="date" class="form-control" name="roadtax_exp">
      </div>

      <button type="submit" class="btn btn-primary btns">Submit</button>
      
  </div>
  </div>
</div>
</form>

@endsection