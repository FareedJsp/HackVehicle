@extends('layouts.main')
@section('title' , 'Add Wreckage Report')
@section('content')

<form method="post" action="/insertautotest" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add Test Report</h4>

      {{-- <div class="mb-3">
        <label class="form-label">Driver</label>
        <input type="text" class="form-control" name="driver_id" readonly>
      </div>

        <div class="mb-3">
          <label class="form-label">Test Name</label>
          <input type="text" class="form-control" name="name" readonly>
        </div> --}}

        <div class="mb-3">
          <label class="form-label">Test Word</label>
          <input type="text" class="form-control" name="testword">
        </div>

        <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection