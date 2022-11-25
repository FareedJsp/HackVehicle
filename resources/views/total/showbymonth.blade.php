@extends('layouts.main')
@section('title' , 'Gas Monthly')
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
        <h4 class="card-title mb-2">{{$total->first()->Vehicle->model}}</h4>
        <span>{{$total->first()->Vehicle->no_plate}}</span>
      </div>
      <a href="/addpetrol" class="btn btn-info">+ Add Data Receipt</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table style-1" id="ListDatatableView">
          <thead>
          <tr>
            <th>#</th>
            <th>Month</th>
            <th>Total Purchase</th>
          </tr>
          </thead>
          <tbody>
            @php
              $no = 1
            @endphp
            @foreach ($total as $row)
            <tr>
              <td> {{ $no++ }} </td>
              <td>
                @php
                    $date = Carbon::createFromFormat('Y-m-d', $row->date);
                @endphp
                {{$date->format('F')}}
              </td>
              <td>
                {{$row->sumcost}}
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