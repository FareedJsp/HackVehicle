@extends('layouts.main')

@section('title' , 'wreckage')
@section('heading' , 'Wreckage Report')
@section('breadcrumb' , 'wreckage')

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
          <th>Vehicle</th>
          <th>Driver</th>
          <th>Location</th>
          <th>Image</th>
          <th>Title</th>
          <th>Detail</th>
          <th>Description</th>
          <th>Action Needed</th>
          <th>Action(s)</th>
        </tr>
        </thead>
        <tbody>

          @php
            $no = 1
          @endphp

            @foreach ($wreckage as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->Vehicle->model ." ". $row->Vehicle->no_plate}} </td>
              <td> {{ $row->Driver->name ?? null}} </td>
              <td> {{ $row->location ?? null}} </td>
              <td> <img src="/wreckage_images/{{ $row->wreckage_image ?? null}} " alt="" width="120"> </td>
              <td> {{ $row->wreckage_title}} </td>
              <td> {{ $row->desciption}} </td>
              <td> {{ $row->action_needed}} </td>
              <td>
                <a href="/editwreckage/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/deletewreckage/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>

            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection