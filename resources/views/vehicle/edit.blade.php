@extends('layouts.main')

@section('title' , 'editvehicle')
@section('heading' , 'Edit Vehicle Data')
@section('breadcrumb' , 'Edit Vehicle Data')

@section('content')

<form method="post" action="/updatevehicle/{{$vehicle->id}}" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

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
            <option value="{{$vehicle->status}}" selected>Select Availability</option>
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
          </select>
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection