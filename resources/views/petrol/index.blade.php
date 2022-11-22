@extends('layouts.main')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
      <p>{{ $message }}</p>
</div>
    
@endif

<div class="container-fluid">
<div class="card">
  <div class="card-header d-sm-flex d-block">
    <div class="mr-auto mb-sm-0 mb-3">
      <h4 class="card-title mb-2">Gas Data</h4>
      <span>All Data Mixed</span>
    </div>
    <a href="/addpetrol" class="btn btn-info">+ Add Data Manually</a>
  </div>
    <div class="card-body">
      <div class="table-responsive">
      <table class="table style-1" id="ListDatatableView">
        <thead>
        <tr>
          <th>No</th>
          <th>Vehicle</th>
          <th>Driver</th>
          <th>Date</th>
          <th>Receipt Image</th>
          <th>Cost</th>
          <th>Action(s)</th>
        </tr>
        </thead>
        <tbody>

          @php
            $no = 1
          @endphp

            @foreach ($petrol as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->Vehicle->model ." ". $row->Vehicle->no_plate}} </td>
              <td> {{ $row->Driver->name ?? null}} </td>
              <td> {{ $row->fill_date_time}} </td>
              <td> <img src="/petrol_images/{{ $row->receipt_image ?? null}} " alt="" width="120"> </td>
              <td> {{ $row->cost}} </td>  
              <td>
                    <a href="/editpetrol/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/deletepetrol/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>

            @endforeach

        </tbody>
      </table>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@endsection