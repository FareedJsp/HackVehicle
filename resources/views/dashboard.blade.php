@extends('layouts.main')

@section('title' , 'dashboard')
@section('heading' , 'Dashboard')
@section('breadcrumb' , 'dashboard')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-primary card-outline text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title text-bold">Vehicles</h5>

              <p class="card-text">
                {{App\Models\Vehicle::count()}} Vehicle
              </p>

              <a href="#" class="btn btn-light text-primary">List of Vehicle</a>
            </div>
          </div>

          <div class="card card-primary card-outline text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title text-bold">Drivers</h5>

              <p class="card-text">
                {{App\Models\Driver::count()}} Driver
              </p>
              <a href="#" class="btn btn-light text-primary">List of Driver</a>
            </div>
          </div><!-- /.card -->

          <div class="card border-primary mb-3">
            <div class="card-header bg-secondary">Gas Cost</div>
            <div class="card-body">
              <h5 class="card-title">Total For All Vehicle This Month</h5>
              <h1><p class="card-text align-text-bottom">
                {{$petrol}}
              </p></h1>
            </div>
          </div>
        </div>

        <!-- /.col-md-6 -->
        <div class="col-lg-8">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0 bond">Unavailable Vehicles</h5>
            </div>
            <div class="card-body">
              <p class="card-text">
                <ul></ul>
                @foreach (App\Models\Vehicle::get() as $item)
                  @if ($item->status == 'Not Available')
                    <div>
                      <li>{{$item->model."-".$item->no_plate}}</li>
                    </div>
                  @endif    
                @endforeach
              </ul>
              </p>
              <a href="#" class="btn btn-primary">See Available Vehicle List</a>
            </div>
          </div>

          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0 bond">Notification</h5>
            </div>
            <div class="card-body">

              <h6 class="card-title text-primary mb-2">Reminder for Vehicle due date (Roadtax)</h6>

              <div class="card-text" style="width: 22em;">
                <ul class="list-group list-group-flush">
                  @php
                  function dateDifference($start_date, $end_date)
                  {
                  // calulating the difference in timestamps 
                  $diff = strtotime($start_date) - strtotime($end_date);
      
                  // 1 day = 24 hours 
                  // 24 * 60 * 60 = 86400 seconds
                  return ceil(abs($diff / 86400));
                  }
                @endphp

                @foreach (App\Models\Vehicle::get() as $item)

                @php
  
                $x = $item->roadtax_exp;

                $y = date("Y-m-d");

                $dateDiff = dateDifference($y,$x);

                @endphp

                  @if ($dateDiff < 30)
                  <li class="list-group-item bg-danger mb-1">{{$item->model."-".$item->no_plate}} {{"due date in ".$dateDiff. " days"}}</li>
                  @else
                  <li class="list-group-item bg-success mb-1">{{$item->model."-".$item->no_plate}} {{"due date in ".$dateDiff. " days"}}</li>
                  @endif

                  @endforeach

                </ul>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

@endsection