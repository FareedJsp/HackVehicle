@extends('layouts.main')

@section('title' , 'Vehicle')
@section('heading' , 'Vehicle List')
@section('breadcrumb' , 'Vehicle List')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
      <p>{{ $message }}</p>
</div>
    
@endif

<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Category</th>
          <th>Model</th>
          <th>No Plate</th>
          <th>Color</th>
          <th>Road Tax Expiration Date</th>
          <th>Year Release</th>
          <th>Mileage</th>
          <th>Status</th>
          <th>Maintenance History</th>
          <th>Action(s)</th>
        </tr>
        </thead>
        <tbody>

          @php
            $no = 1
          @endphp

            @foreach ($vehicle as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->category}} </td>
              <td> {{ $row->model}} </td>
              <td> {{ $row->no_plate}} </td>
              <td> {{ $row->color}} </td>
              <td> {{ $row->roadtax_exp}} </td>
              <td> {{ $row->vehicle_year}} </td>
              <td> {{ $row->mileage}}</td>

                @if ($row->status == 'Available')
                <th style="color : green">Available</th>
                @elseif($row->status == 'Not Available')
                <th style="color : red">Not Available</th>
                @endif
                
              <td>
                <a href="/showmaintenance/{{$row->id}}" class="btn btn-outline-primary">Show</i></a>
              </td>
                <td>
                    <a href="/editvehicle/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/deletevehicle/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>

            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection