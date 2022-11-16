@extends('layouts.main')

@section('title' , 'maintenance')
@section('heading' , 'Maintenance Record')
@section('breadcrumb' , 'maintenance record')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
      <p>{{ $message }}</p>
</div>
    
@endif
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      {{-- <h3 class="card-title">
        @foreach($maintenance as $item)@endforeach
            {{$item->Vehicle->model." - ".$item->Vehicle->no_plate}}
      </h3> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
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
    <!-- /.card-body -->
  </div>
</div>
@endsection