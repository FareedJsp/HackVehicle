@extends('layouts.main')
@section('title' , 'Gas Data')
@section('content')

@php
   use Carbon\Carbon; 
@endphp

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
        <span>Monthly Expenses</span>
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
            <th>Total Gas This Month</th>
            <th>Total Gas Overall</th>
            <th>Receipt Received This Month</th>
            <th>Detail Gas By Month</th>
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
                    $data = App\Models\Petrol::where('vehicle_id', $row->id)
                            ->whereMonth('fill_date_time',Carbon::now()->month)
                            ->sum('cost');
                  @endphp
                  @if ($data == null)
                    {{"No Data Yet"}}
                  @else
                    {{$data}}
                  @endif
                </td>
              <td>
                {{App\Models\TotalPetrol::where('vehicle_id', $row->id)->sum('sumcost')}}
              </td>
              <td>  
                <a href="/showpetrol/{{$row->id}}" class="btn btn-outline-primary">Show</i></a>
              </td>
              <td>
                <a href="/showbymonth/{{$row->id}}" class="btn btn-outline-primary">Show</i></a>
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