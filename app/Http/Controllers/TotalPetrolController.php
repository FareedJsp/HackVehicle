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
        $totalp = TotalPetrol::whereYear('date', Carbon::now()->year)
            ->whereMonth('date', Carbon::now()->month)
            ->get();

        return view('petrol.showthismonth', compact('totalp'));
    }

    public function show($id)
    {
        $totalp = Vehicle::findOrFail($id);

        $a = $totalp->id;

        $petrol = Petrol::where('vehicle_id', $a)->whereMonth('fill_date_time',Carbon::now()->month)
                    ->whereYear('fill_date_time',Carbon::now()->year)
                    ->get();

        return view('petrol.showpetrol', compact('petrol'));
    }
}
