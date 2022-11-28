@extends('layouts.main')
@section('title' , 'Edit Vehicle')
@section('content')

<form method="post" action="/updatevehicle/{{$vehicle->id}}" enctype="multipart/form-data">

  @csrf

<div class="container-fluid">

  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Hi, welcome back!</h4>
            <p class="mb-0">Edit Vehicle Data</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Vehicle</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data</a></li>
        </ol>
    </div>
  </div>

  <div class="row">
    <div class="col-6">

      <div class="mb-4">
        <label class="form-label">Company</label>
        <input type="text" class="form-control" name="company" value="{{$vehicle->company}}"readonly>
      </div>

      <div class="basic-form custom_file_input mb-3">
        <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
          </div>
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" value="{{$vehicle->image}}">
              <label class="custom-file-label">Image (optional)</label>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-control" name="category">
          <option value="{{$vehicle->category}}" selected>{{$vehicle->category}}</option>
          @if ($vehicle->category == 'Standard')
              <option value="Van">Lorry</option>
              <option value="Lorry">Van</option>
          @elseif($vehicle->category == 'Van')
              <option value="Standard">Standard</option>
              <option value="Lorry">Lorry</option>
          @else
              <option value="Standard">Standard</option>
              <option value="Van">Van</option>
          @endif
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Model</label>
          <input type="text" class="form-control" name="model" value="{{$vehicle->model}}" readonly>
        </div>

        <div class="mb-3">
            <label class="form-label">No Plate</label>
            <input type="text" class="form-control" name="no_plate" value="{{$vehicle->no_plate}}">
          </div>

        <div class="mb-3">
          <label class="form-label">Road Tax Expiration Date</label>
          <input type="date" class="form-control" name="roadtax_exp" value="{{$vehicle->roadtax_exp}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Color</label>
          <input type="text" class="form-control" name="color" value="{{$vehicle->color}}" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Vehicle Year</label>
          <input type="number" class="form-control" name="vehicle_year" value="{{$vehicle->vehicle_year}}" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Mileage (KM)</label>
          <input type="number" class="form-control" name="mileage" value="{{$vehicle->mileage}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-control" name="status">
            <option value="{{$vehicle->status}}" selected>{{$vehicle->status}}</option>
            @if ($vehicle->status == 'Available')
                <option value="Not Available">Not Available</option>   
            @else
              <option value="Available">Available</option>
            @endif
          </select>
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection