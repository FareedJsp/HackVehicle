@extends('layouts.main')

@section('content')

<form method="post" action="/insertmaintenance" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Maintenance Data</h4>

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
        <label class="form-label">Workshop Name</label>
        <input type="text" class="form-control" name="workshop_name">
      </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="maintenance_title">
          </div>

        <div class="mb-3">
          <label class="form-label">Date</label>
          <input type="date" class="form-control" name="maintenance_date">
        </div>

        <div class="mb-3">
          <label class="form-label">Detail</label>
          <textarea class="form-control" rows="3" name="maintenance_detail"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Image</label>
          <input type="file" class="form-control-file" name="maintenance_image">
        </div>

        <div class="mb-3">
          <label class="form-label">Cost (RM)</label>
          <input type="number" step="any" class="form-control" name="maintenance_cost">
        </div>

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection