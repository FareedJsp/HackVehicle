@extends('layouts.main')

@section('title' , 'driver')
@section('heading' , 'Driver List')
@section('breadcrumb' , 'Driver List')

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
          <th>Name</th>
          <th>Gender</th>
          <th>Age</th>
          <th>Status</th>
          <th>Username</th>
          <th>Password</th>
          <th>Action(s)</th>
        </tr>
        </thead>
        <tbody>

          @php
            $no = 1
          @endphp

            @foreach ($driver as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->name}} </td>
              <td> {{ $row->gender}} </td>
              <td> {{$row->age()}} </td>

                @if ($row->status == 'Available')
                <th style="color : green">Available</th>
                @elseif($row->status == 'Not Available')
                <th style="color : red">Not Available</th>
                @endif

              <td> {{ $row->username}} </td>
              <td> {{ $row->password}} </td>
                <td>
                    <a href="/editdriver/{{$row->id}}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
            </tr>

            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection