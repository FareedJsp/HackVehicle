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
              <h4 class="card-title mb-2">Maintenance List</h4>
              <span>Recent Data</span>
            </div>
            <a href="/addmaintenance" class="btn btn-info">+ Add Data Manually</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table style-1" id="ListDatatableView">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Vehicle</th>
                  <th>Workshop Name</th>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Detail</th>
                  <th>Image</th>
                  <th>Cost</th>
                  <th>Action(s)</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1
                @endphp
                @foreach ($maintenance as $row)
                <tr>
                  <td> {{ $no++ }} </td>
                  <td> {{ $row->Vehicle->model ." ". $row->Vehicle->no_plate}} </td>
                  <td> {{ $row->workshop_name}} </td>
                  <td> {{ $row->maintenance_title}} </td>
                  <td> {{ $row->maintenance_date}} </td>
                  <td> {{ $row->maintenance_detail}} </td>
                  <td> <img src="/maintenance_images/{{ $row->maintenance_image ?? null}} " alt="" width="120"> </td>
                  <td> {{ $row->maintenance_cost}}</td>
                  <td>
                    <a href="/editmaintenance/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/deletemaintenance/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>

@endsection