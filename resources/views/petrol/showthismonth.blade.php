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
          <th>Receipt Received This Month</th>
          <th>Total Gas Overall</th>
          <th>Detail Gas By Month</th>
        </tr>
        </thead>
        <tbody>

          @php
            $no = 1
          @endphp

            @foreach ($totalp as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->Vehicle->model ." ". $row->Vehicle->no_plate}} </td>
                <td>
                  {{$row->sumcost}}
                </td>
                <td><a href="/showpetrol/{{$row->id}}" class="btn btn-outline-primary">Show</i></a></td>
              <td>
                @php

                $x = $row->date;

                $date = Carbon::parse($x);

                    $a = DB::table('total_petrols')->where('vehicle_id',$row->vehicle_id)
                                ->sum('sumcost');
                @endphp

                {{$a}}
                
              </td>
              <td><a href="/showbymonth/{{$row->id}}" class="btn btn-outline-primary">Show</i></a></td>
            </tr>

            @endforeach

            

        </tbody>
      </table>

    </div>
    <!-- /.card-body -->
  </div>

@endsection