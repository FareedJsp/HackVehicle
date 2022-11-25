<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Maintenance;
use App\Models\TotalPetrol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::get();
        return view('vehicle.index', compact('vehicle'));
    }

    public function available()
    {
        $vehicle = Vehicle::where('status', 'Available')->get();
        return view('vehicle.available', compact('vehicle'));
    }

    public function notavailable()
    {
        $vehicle = Vehicle::where('status', 'Not Available')->get();
        return view('vehicle.notavailable', compact('vehicle'));
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function store(Request $request)
    {
        $data = new Vehicle;

        $data -> company = $request->company;
        $data -> category = $request->category;
        $data -> model = $request->model;
        $data -> no_plate = $request->no_plate;
        $data -> roadtax_exp = $request->roadtax_exp;
        $data -> color = $request->color;
        $data -> vehicle_year = $request->vehicle_year;
        $data -> mileage = $request->mileage;
        $data -> status = $request->status;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/vehicle_images', $name);
            $image = $name;

            $data -> image = $image;
        }

        $data->save();

        $gas = TotalPetrol::firstOrCreate(
            [
            'vehicle_id' => $data->id,
            'date' => NULL
            ],
            ['sumcost' => NULL]
        );

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

        $data -> company = $request->company;
        $data -> category = $request->category;
        $data -> model = $request->model;
        $data -> no_plate = $request->no_plate;
        $data -> roadtax_exp = $request->roadtax_exp;
        $data -> color = $request->color;
        $data -> vehicle_year = $request->vehicle_year;
        $data -> mileage = $request->mileage;
        $data -> status = $request->status;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/vehicle_images', $name);
            $image = $name;

            $data -> image = $image;
        }

        $data->save();

        return redirect()->route ('vehicle')->with('success', 'vehicle has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Vehicle::find($id);

        $image_path = app_path(public_path(). '/vehicle_images', $data->image);

        if (File::exists($image_path)) {
            //File::delete($image_path);
            File::delete(public_path(). '/vehicle_images', $data->image);
        }

        $data->delete();

        return redirect()->route ('vehicle')->with('success', 'vehicle has been deleted successfully.');
    }

    public function show($id)
    {

        $maintenance = Maintenance::where("vehicle_id",$id)->get();

        // return $maintenance;
        
        return view('vehicle.showmaintenance', compact('maintenance'));
    }

    public function front($id)
    {

        $vehicle = Vehicle::where('id', $id)->get();
        
        return view('vehicle.detail', compact('vehicle'));
    }

    //connect Flutter
    public function getvehicle(){
        $result = [];
        $result['status'] = false ;
        $result['message'] = "something error";
        
        $data = Vehicle::get();
        $result['data'] = $data ;
        
        $result['status'] = true ;
        $result['message'] = "success";
        
        return response()->json($result);
    }
}
