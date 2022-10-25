@extends('layouts.main')

@section('title' , 'gas')
@section('heading' , 'Gas Data')
@section('breadcrumb' , 'gas data')

@section('content')

@php
   use Carbon\Carbon; 
@endphp

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
          <th>Vehicle</th>
          <th>Total Gas This Month</th>
          <th>Total Gas Overall</th>
        </tr>
        </thead>
        <tbody>

          @php
            $no = 1
          @endphp

            @foreach (App\Models\Vehicle::get() as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->model ." ". $row->no_plate}} </td>
                <td>
                  @php

                    $x = $row->id;

                    $data = DB::table('petrols')->where('vehicle_id', $x)->whereMonth('fill_date_time', Carbon::now()->month)
                    ->get();
      
                    $users = $data->where('vehicle_id', $x)->sum('cost');
      
                  @endphp
      
                  {{$users}}
                </td>
              <td> {{ "TBA" }} </td>
            </tr>

            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection