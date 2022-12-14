@extends('layouts.main')
@section('title' , 'Add Wreckage Report')
@section('content')

<form method="post" action="/insertwreckage" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Wreckage Report</h4>

      <div class="mb-3">
        <label class="form-label">Vehicle</label>
        <select class="form-control" name="vehicle_id">
        <option value="">Select Vehicle</option>
          @foreach (App\Models\Vehicle::get() as $item)
               <option value="{{$item->id}}">{{$item->no_plate}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Driver</label>
        <select class="form-control" name="driver_id">
        <option value="">Select Driver</option>
          @foreach (App\Models\User::where('role', 'Driver')->get() as $item)
               <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Location</label>
          <textarea class="form-control" rows="3" name="location"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" name="date">
        </div>

        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control-file" name="wreckage_image">
        </div>

        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="wreckage_title">
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3" name="description"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Action Needed</label>
          <textarea class="form-control" rows="3" name="action_needed"></textarea>
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection