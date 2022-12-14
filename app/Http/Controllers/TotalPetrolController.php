<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Petrol;
use App\Models\Vehicle;
use App\Models\TotalPetrol;
use Illuminate\Http\Request;

class TotalPetrolController extends Controller
{
    public function index()
    {   
        $totalp = TotalPetrol::get();
        return view('total.index', compact('totalp'));
    }

    public function thismonthindex()
    {
        $totalp = TotalPetrol::whereMonth('date', Carbon::now()->month)->get();
        return view('petrol.showthismonth', compact('totalp'));
    }

    public function showP($id)
    {
        $totalp = Vehicle::findOrFail($id);

        $a = $totalp->id;

        $petrol = Petrol::where('vehicle_id', $a)->whereMonth('fill_date_time',Carbon::now()->month)
                    ->orderBy('fill_date_time', 'desc')
                    ->get();

        return view('petrol.showpetrol', compact('petrol'));
    }

    public function show($id)
    {
        $total = TotalPetrol::where('vehicle_id', $id)->orderBy('date', 'desc')->get();
        // return $total;
        return view('total.showbymonth', compact('total'));
    }
}
