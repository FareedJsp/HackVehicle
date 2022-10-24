<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::get();
        return view('vehicle.index', compact('vehicle'));
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function store(Request $request)
    {
        $data = new Vehicle;

        $data -> model = $request->model;
        $data -> no_plate = $request->no_plate;
        $data -> roadtax_exp = $request->roadtax_exp;
        $data -> color = $request->color;
        $data -> vehicle_year = $request->vehicle_year;
        $data -> mileage = $request->mileage;
        $data -> status = $request->status;
        $data->save();

        return redirect()->route ('vehicle')->with('success', 'vehicle has been added successfully.');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $data = Vehicle::findOrFail($id);

        $data -> model = $request->model;
        $data -> no_plate = $request->no_plate;
        $data -> roadtax_exp = $request->roadtax_exp;
        $data -> color = $request->color;
        $data -> vehicle_year = $request->vehicle_year;
        $data -> mileage = $request->mileage;
        $data -> status = $request->status;

        $data->save();
        return redirect()->route ('vehicle')->with('success', 'vehicle has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Vehicle::find($id);
        $data->delete();

        return redirect()->route ('vehicle')->with('success', 'vehicle has been deleted successfully.');
    }

    public function show($id)
    {

        $maintenance = Maintenance::where("vehicle_id",$id)->get();

        // return $maintenance;
        
        return view('vehicle.showmaintenance', compact('maintenance'));
    }
}
