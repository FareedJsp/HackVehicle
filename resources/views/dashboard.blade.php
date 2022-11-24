@extends('layouts.main')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header pb-2 d-block d-sm-flex flex-wrap border-0">
                    <div class="mb-3">
                        <h4 class="fs-20 text-black">Recent Gas Purchase</h4>
                        <p class="mb-0 fs-12">Gas Monthly Overall Data</p>
                    </div>
                    <div class="card-action card-tabs mb-3 style-1">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#monthly">
                                    Monthly	
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Weekly">
                                    Weekly
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Today">
                                    Today
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body tab-content p-0">
                    <div class="tab-pane active show fade" id="monthly">
                        <div class="table-responsive">
                            <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                <tbody>
                                    @if ($petrol->first() == null)
                                        <tr class="align-item-center">
                                            <td class="align-item-center">
                                                <span class="font-w600 text-black text">No Purchase Has Been Made On This Period</span>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach ($petrol as $item)
                                    <tr>
                                        <td>
                                            <span>
                                                <svg width="50" height="50" viewbox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="63" height="63" rx="14" fill="#71B945"></rect>
                                                    <path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"></path>
                                                </svg>
                                            </span>
                                        </td>
                                        <td class="wspace-no">
                                            {{ $item->Vehicle->model ." ". $item->Vehicle->no_plate}}
                                        </td>
                                        <td>
                                            <span class="text-black">{{$item->fill_date_time}}</span>
                                        </td>
                                        <td>
                                            <span class="font-w600 text-black">{{"RM ".$item->cost}}</span>
                                        </td>
                                        <td>
                                            <span class="text-black">{{$item->Driver->name}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Weekly">
                        <div class="table-responsive">
                            <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                <tbody>
                                    @if ($petrol2->first() == null)
                                        <tr class="align-item-center">
                                            <td class="align-item-center">
                                                <span class="font-w600 text-black text">No Purchase Has Been Made During This Period</span>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach ($petrol2 as $item)
                                    <tr>
                                        <td>
                                            <span>
                                                <svg width="50" height="50" viewbox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="63" height="63" rx="14" fill="#71B945"></rect>
                                                    <path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"></path>
                                                </svg>
                                            </span>
                                        </td>
                                        <td class="wspace-no">
                                            {{ $item->Vehicle->model ." ". $item->Vehicle->no_plate}}
                                        </td>
                                        <td>
                                            <span class="text-black">{{$item->fill_date_time}}</span>
                                        </td>
                                        <td>
                                            <span class="font-w600 text-black">{{"RM ".$item->cost}}</span>
                                        </td>
                                        <td>
                                            <span class="text-black">{{$item->Driver->name}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Today">
                        <div class="table-responsive">
                            <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                <tbody>
                                    @if ($petrol3->first() == null)
                                        <tr class="align-item-center">
                                            <td class="align-item-center">
                                                <span class="font-w600 text-black text">No Purchase Has Been Made Yet</span>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach ($petrol3 as $item)
                                    <tr>
                                        <td>
                                            <span>
                                                <svg width="50" height="50" viewbox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="63" height="63" rx="14" fill="#71B945"></rect>
                                                    <path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"></path>
                                                </svg>
                                            </span>
                                        </td>
                                        <td class="wspace-no">
                                            {{ $item->Vehicle->model ." ". $item->Vehicle->no_plate}}
                                        </td>
                                        <td>
                                            <span class="text-black">{{$item->fill_date_time}}</span>
                                        </td>
                                        <td>
                                            <span class="font-w600 text-black">{{"RM ".$item->cost}}</span>
                                        </td>
                                        <td>
                                            <span class="text-black">{{$item->Driver->name}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-0 p-0 caret mt-1">
                    <a href="/gas" class="btn-link"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="row mx-auto">
                <div class="col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-user-1"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Driver</p>
                                    <h3 class="text-white">
                                        {{App\Models\Driver::count()}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-compact-disc"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Vehicle</p>
                                    <h3 class="text-white">
                                        {{App\Models\Vehicle::count()}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-008-credit-card"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Gas Purchase (RM)</p>
                                    <h3 class="text-white">
                                        {{App\Models\Petrol::sum('cost')}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-013-broken-link"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Wreckage Report</p>
                                    <h3 class="text-white">
                                        {{App\Models\Wreckage::count()}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-013-broken-link"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Maintenance Report</p>
                                    <h3 class="text-white">
                                        {{App\Models\Maintenance::count()}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-battery-1"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Maintenance Cost (RM)</p>
                                    <h3 class="text-white">
                                        {{App\Models\Maintenance::sum('maintenance_cost')}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection