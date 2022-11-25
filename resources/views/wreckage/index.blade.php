@extends('layouts.main')
@section('title' , 'Wreckage Report')
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
              <h4 class="card-title mb-2">Wreckage List</h4>
              <span>Recent Data</span>
            </div>
            <a href="/addwreckage" class="btn btn-info">+ Add Data Manually</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table style-1" id="ListDatatableView">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Vehicle</th>
                  <th>Driver</th>
                  <th>Location</th>
                  <th>Date</th>
                  <th>Image</th>
                  <th>Title</th>
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
                  <td> {{ $row->date ?? null}} </td>
                  <td> <img src="/wreckage_images/{{ $row->wreckage_image ?? null}} " alt="" width="120"> </td>
                  <td> {{ $row->wreckage_title}} </td>
                  <td> {{ $row->description}} </td>
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
        </div>
    </div>
</div>

@endsection