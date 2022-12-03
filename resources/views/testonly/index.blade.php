@extends('layouts.main')
@section('title' , 'test')
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
              <h4 class="card-title mb-2">Test Data</h4>
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
                  <th>Driver</th>
                  <th>Test Name</th>
                  <th>Test Word</th>
                  <th>Action(s)</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1
                @endphp
                @foreach ($test as $row)
                <tr>
                  <td> {{ $no++ }} </td>
                  <td> {{ $row->Driver->name ?? null}} </td>
                  <td> {{ $row->name ?? null}} </td>
                  <td> {{ $row->testword ?? null}} </td>
                  <td>
                    <a href="/edittest/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="/deletetest/{{$row->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to delete data')"><i class="fa-solid fa-trash"></i></a>
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