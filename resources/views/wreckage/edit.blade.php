@extends('layouts.main')

@section('content')

<form method="post" action="/updatewreckage/{{$wreckage->id}}" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Wreckage Report</h4>

      <div class="mb-3">
        <label class="form-label">Vehicle</label>
        <select class="form-control" name="vehicle_id">
        <option value="{{$wreckage->vehicle_id}}">{{$wreckage->Vehicle->no_plate}}</option>
          @foreach (App\Models\Vehicle::get() as $item)
               <option value="{{$item->id}}">{{$item->no_plate}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Driver</label>
        <select class="form-control" name="driver_id">
        <option value="{{$wreckage->driver_id}}">{{$wreckage->Driver->name}}</option>
          @foreach (App\Models\Driver::get() as $item)
               <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Location</label>
          <textarea class="form-control" rows="3" name="location" value="{{$wreckage->location}}"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control-file" name="wreckage_image" value="{{$wreckage->wreckage_image}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="wreckage_title" value="{{$wreckage->title}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3" name="description" value="{{$wreckage->description}}"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Action Needed</label>
          <textarea class="form-control" rows="3" name="action_needed" value="{{$wreckage->action_needed}}"></textarea>
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection