@extends('layouts.main')

@section('title' , 'dashboard')
@section('heading' , 'Dashboard')
@section('breadcrumb' , 'dashboard')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Vehicle</h5>

              <p class="card-text">
                {{App\Models\Vehicle::count()}} Vehicle
              </p>

              <a href="/vehicle" class="card-link">List of Vehicle</a>
            </div>
          </div>

          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Driver</h5>

              <p class="card-text">
                {{App\Models\Driver::count()}} Driver
              </p>
              <a href="/driver" class="card-link">List of Driver</a>
            </div>
          </div><!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Unavailable Vehicle</h5>
            </div>
            <div class="card-body">
              <p class="card-text">
                @foreach (App\Models\Vehicle::get() as $item)
                  @if ($item->status == 'Not Available')
                    <div>
                      {{$item->model."-".$item->no_plate}}
                    </div>
                  @endif    
                @endforeach
              </p>
              <a href="#" class="btn btn-primary">See Available Vehicle List</a>
            </div>
          </div>

          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Notification</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title">Reminder for Vehicle due date (Roadtax)</h6>

              <p class="card-text">
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

              <div>
                @if ($dateDiff < 30)
                {{$item->model."-".$item->no_plate." = in ".$dateDiff." days ----> URGENT"}}
                @else
                  {{$item->model."-".$item->no_plate." = in ".$dateDiff." days"}}
                @endif
              </div>
    
              @endforeach

              </p>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

@endsection