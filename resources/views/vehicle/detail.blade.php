@extends('layouts.main')

@section('title' , 'Vehicle')
@section('heading' , 'Vehicle List')
@section('breadcrumb' , 'Vehicle List')

@section('content')

@php
    use Carbon\Carbon;
@endphp

<div class="container-fluid">
            <!-- Add Project -->
            <div class="modal fade" id="addProjectSidebar">
                  <div class="modal-dialog" role="document">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title">Create Project</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                              </div>
                              <div class="modal-body">
                                    <form>
                                          <div class="form-group">
                                                <label class="text-black font-w500">Project Name</label>
                                                <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <label class="text-black font-w500">Deadline</label>
                                                <input type="date" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <label class="text-black font-w500">Client Name</label>
                                                <input type="text" class="form-control">
                                          </div>
                                          <div class="form-group">
                                                <button type="button" class="btn btn-primary">CREATE</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
            </ol>
        </div>
    </div>

        @foreach ($vehicle as $item)

      <div class="row">
            <div class="col-lg-12">

                <div class="card project-card mt-3">
                    <div class="card-header">
                        <span class="float-left">
                        Category :
                        <strong>{{$item->category}}</strong>
                        </span>
                        <span class="float-right">
                            <strong>Status:</strong>
                            @if ($item->status == 'Available')
                                <span class="badge badge-success d-sm-inline-block d-none">{{$item->status}}</span>
                            @else
                                <span class="badge badge-danger d-sm-inline-block d-none">{{$item->status}}</span>
                            @endif                         
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="mb-4">
                                    <p class="mb-2">Model</p>
                                    <h4 class="text-black">{{$item->model}}</h4>
                                </div>
                                <div>
                                    <p class="mb-2">No Plate</p>
                                    <h4 class="text-black">{{$item->no_plate}}</h4>
                                </div>
                            </div>
                            <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <div class="mb-4">
                                    <p class="mb-2">Vehicle Release Year</p>
                                    <h4 class="text-black">{{$item->vehicle_year}}</h4>
                                </div>
                                <div>
                                    <p class="mb-2">Colour</p>
                                    <h4 class="text-black">{{$item->color}}</h4>
                                </div>
                            </div>
                            <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-center justify-content-md-center justify-content-xs-start">
                                <div class="row align-items-center">
                                    <div class="col-sm">
                                        <div class="brand-logo mb-3">
                                            <img src="/vehicle_images/{{$item->image}}" alt="" height="200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <strong>Other Detail :</strong>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-6">                             
                                <div class="mb-5">
                                    <p>Mileage : <span class="aa2">{{$item->mileage}}</span></p>  
                                </div>
                                <div class="d-flex">
                                    <div class="dt-icon mr-3 bgl-danger">
                                        <svg width="19" height="24" viewbox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6601 8.6858C18.5437 8.44064 18.2965 8.28427 18.025 8.28427H10.9728L15.2413 1.06083C15.3697 0.843469 15.3718 0.573844 15.2466 0.354609C15.1214 0.135375 14.8884 -9.37014e-05 14.6359 4.86277e-08L8.61084 0.000656299C8.3608 0.000750049 8.12957 0.1335 8.00362 0.349453L0.0958048 13.905C-0.0310859 14.1224 -0.0319764 14.3911 0.0934142 14.6094C0.218805 14.8277 0.451352 14.9624 0.703117 14.9624H7.71037L5.66943 23.1263C5.58955 23.4457 5.74213 23.7779 6.03651 23.9255C6.13691 23.9757 6.24459 24 6.35123 24C6.55729 24 6.75923 23.9094 6.89638 23.7413L18.5699 9.43186C18.7415 9.22148 18.7766 8.93105 18.6601 8.6858V8.6858Z" fill="#FF4C41"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span>Roadtax Expiration Date</span>
                                        <p class="mb-0 pt-1 font-w500 text-black">{{$item->roadtax_exp}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-4 col-4 d-flex flex-wrap align-items-end">
                                @php
                                    $data = DB::table('petrols')->where('vehicle_id', $item->id)->whereYear('fill_date_time', Carbon::now()->year)
                                                ->whereMonth('fill_date_time',Carbon::now()->month)
                                                ->sum('cost');

                                    $total = DB::table('total_petrols')->where('vehicle_id', $item->id)
                                                ->sum('sumcost');
                                @endphp                       
                                <div class="d-flex align-items-center mb-4">
                                    <div class="text-center border-bx mr-3">
                                        <span>Total Gas Cost This Month</span>
                                        <p class="mb-0 pt-1 font-w500 text-black">{{"RM ".$data}}</p>
                                    </div>
                                    <div class="text-center border-bx">
                                        <span>Total Gas Cost Overall</span>
                                        <p class="mb-0 pt-1 font-w500 text-black">{{"RM ".$total}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex align-items-center justify-content-end">
                                <div class="rounded-button d-flex">
                                    <div class="mr-2">
                                        <button type="button" class="btn btn-rounded btn-outline-primary"><a href="/showmaintenance/{{$item->id}}">Maintenance Record</a></button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-rounded btn-outline-secondary"><a href="/showmaintenance/{{$item->id}}">Wreckage Record</a></button>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @endforeach
</div>

@endsection