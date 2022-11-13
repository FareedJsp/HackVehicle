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