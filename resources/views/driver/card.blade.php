@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4>Driver List</h4>
                        <span>Card View</span>
                    </div>
                    <a href="/adddriver" class="btn btn-info light">+ Add Driver</a>
                </div>
            </div>
        </div>
        @foreach ($driver as $item)
        <div class="col-xl-3 col-xxl-4 col-sm-6">
            <div class="card user-card">
                <div class="card-body pb-0">
                    <div class="d-flex mb-4 align-items-center">
                        <div class="dz-media mr-3">
                            <img src="/driver_images/{{$item->image}}" alt="">
                        </div>
                        <div>
                            <h5 class="title text-capitalize">{{$item->name}}</h5>
                            <span class="text-primary text-capitalize">{{$item->gender}}</span>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="mb-0 title">Age</span> :
                            <span class="text-black ml-2">{{$item->age()}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="mb-0 title">Birth Date</span> :
                            <span class="text-black ml-2">{{$item->birth_date}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="mb-0 title">Username</span> :
                            <span class="text-black ml-2">{{$item->username}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="mb-0 title">Password</span> :
                            <span class="text-black desc-text ml-2">{{$item->password}}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    @if ($item->status == 'Available')
                        <span class="badge badge-success d-lg-inline-block d-none">{{$item->status}}</span>
                    @else
                        <span class="badge badge-danger d-lg-inline-block d-none">{{$item->status}}</span>
                    @endif
                    <div class="d-flex action-button float-right">
                        <a href="/editdriver/{{$item->id}}" class="btn btn-info btn-xs light px-2">
                            <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <nav>
        <ul class="pagination pagination-gutter pagination-primary no-bg">
            <li class="page-item page-indicator">
                <a class="page-link" href="javascript:void(0)">
                    <i class="la la-angle-left"></i></a>
            </li>
            <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item page-indicator">
                <a class="page-link" href="javascript:void(0)">
                    <i class="la la-angle-right"></i></a>
            </li>
        </ul>
    </nav> --}}
</div>

@endsection