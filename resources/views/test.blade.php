@extends('layouts.main')

@section('content')

@php
    use Carbon\Carbon;
@endphp

@foreach (App\Models\Vehicle::get() as $item)
                  @if ($item->status == 'Not Available')
                      {{$item->no_plate}}
                  @endif    
@endforeach

{{App\Models\Vehicle::get('status')}}

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

@php
    echo "<br>";
@endphp

@foreach (App\Models\Vehicle::get() as $item)

    @php
    

        $x = $item->roadtax_exp;

        $y = date("Y-m-d");

        $dateDiff = dateDifference($y,$x);

    @endphp

    {{$dateDiff}}
    
@endforeach

@php
    echo "<br>";
@endphp

@php
            $no = 1
          @endphp

            @foreach (App\Models\Vehicle::get() as $row)
      
            <tr>
              <td> {{ $no++ }} </td>
              <td> {{ $row->model ." ". $row->no_plate}} </td>
                <td>
                  @php

                    $x = $row->id;

                    $tito = DB::table('petrols')->where('vehicle_id', $x)->pluck('cost');

                    $tito1 = DB::table('petrols')->where('vehicle_id', $x)->whereMonth('fill_date_time', Carbon::now()->month)
                      ->get();

                  @endphp

                  @foreach ($tito as $row0)

                        {{$row0. ", "}}

                  @endforeach

                  {{-- {{$tito1}} --}}



                </td>
              <td>
                
              </td>
            </tr>

            @endforeach

            @foreach (App\Models\Vehicle::get() as $row)

            @php

            $x = $row->id;

            // $users = DB::table('petrols')->where('vehicle_id', $x)->sum('cost');

            $users = App\Models\Petrol::get()->where('vehicle_id', $x)->sum('cost');

            @endphp

            {{$users}}

            @php
            echo "<br>";
            @endphp

            @php

            //   $k = App\Models\Petrol::get()->where('vehicle_id', $x)->whereMonth('fill_date_time', Carbon::now()->month)
            // ->get();

            @endphp

            {{-- {{$k}} --}}

            @endforeach

            {{-- @php
            echo "<br>";
            @endphp

            @foreach (App\Models\Vehicle::get() as $item)
            @php
                $x1 = $item->id;

              $tito1 = DB::table('petrols')->where('vehicle_id', $x1)->whereMonth('fill_date_time', Carbon::now()->month)
                ->get();
            @endphp

            {{$tito1}}

            @php
            echo "<br>";
            @endphp

            @endforeach --}}

            @php
            echo "<br>";
            @endphp


            @php
            echo "<br>";
            @endphp

@foreach (App\Models\Petrol::get() as $item)
@php
    $b = $item->fill_date_time;
    $c = Carbon::createFromFormat('Y-m-d H:i:s', $b)->format('Y-m');
@endphp

{{$c}}

@php
echo "<br>";
@endphp

{{$b}}

@php
echo "<br>";
@endphp

@php
    var_dump($c);
@endphp


@php
echo "<br>";
@endphp

@endforeach

@foreach (App\Models\Driver::get() as $item)
@php
 
@endphp

{{$item->birth_date}}

@endforeach

<ul class="pagination">
  <li class="disabled"><a href="#">«</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">»</a></li>
</ul>


@endsection
