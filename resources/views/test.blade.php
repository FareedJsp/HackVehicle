@foreach (App\Models\Vehicle::get() as $item)
                  @if ($item->status == 'Not Available')
                      {{$item->no_plate}}
                  @endif    
@endforeach

{{App\Models\Vehicle::get('status')}}

@extends('layouts.main')

@section('content')

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

    {{$dateDiff}}
    
@endforeach

@endsection
