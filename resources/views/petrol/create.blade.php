@extends('layouts.main')
@section('title' , 'Add Manually')
@section('content')

<form method="post" action="/insertpetrol" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Petrol Data</h4>

      <div class="mb-3">
        <label class="form-label">Vehicle</label>
        <select class="form-control" name="vehicle_id">
        <option value="">Select Vehicle</option>
          @foreach (App\Models\Vehicle::get() as $item)
               <option value="{{$item->id}}">{{$item->model."-".$item->no_plate}}</option>
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
          <label class="form-label">Date</label>
          <input type="datetime-local" class="form-control" name="fill_date_time">
        </div>

        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control-file" name="receipt_image">
        </div>

        <div class="mb-3">
          <label class="form-label">Cost (RM)</label>
          <input type="number" step="any" class="form-control" name="cost">
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection