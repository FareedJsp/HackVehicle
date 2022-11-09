@extends('layouts.main')

@section('content')

<form method="post" action="/inserttotal" enctype="multipart/form-data">

  @csrf

<div class="container">
  <div class="row">
    <div class="col-6">

      <h4 class="mb-3 mt-3">Add pop Report</h4>

        <div class="mb-3">
          <label class="form-label">date</label>
          <input type="date" class="form-control" name="date">

          <button type="submit" class="btn btn-primary btns">Submit</button>

        
    </div>
  </div>
</div>
</form>

@endsection