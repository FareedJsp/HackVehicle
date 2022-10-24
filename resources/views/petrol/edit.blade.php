@extends('layouts.main')

@section('content')

<form method="post" action="/updatepetrol/{{$petrol->id}}" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Petrol Data</h4>

      <div class="mb-3">
        <label class="form-label">Vehicle</label>
        <select class="form-control" name="vehicle_id">
        <option value="{{$petrol->vehicle_id}}">{{$petrol->Vehicle->no_plate}}</option>
          @foreach (App\Models\Vehicle::get() as $item)
               <option value="{{$item->id}}">{{$item->no_plate}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Driver</label>
        <select class="form-control" name="driver_id">
        <option value="{{$petrol->driver_id}}">{{$petrol->Driver->name}}</option>
          @foreach (App\Models\Driver::get() as $item)
               <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="mb-3">
          <label class="form-label">Date</label>
          <input type="datetime-local" class="form-control" name="fill_date_time" value="{{$petrol->fill_date_time}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control-file" name="receipt_image" value="{{$petrol->receipt_image}}">
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection