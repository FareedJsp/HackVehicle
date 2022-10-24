<?php

namespace App\Http\Controllers;

use App\Models\Petrol;
use Illuminate\Http\Request;

class PetrolController extends Controller
{
    public function index()
    {
        $petrol = Petrol::get();
        return view('petrol.index', compact('petrol'));
    }

    public function create()
    {
        return view('petrol.create');
    }

    public function store(Request $request)
    {
        $data = new Petrol;

        $data -> vehicle_id = $request->vehicle_id;
        $data -> driver_id = $request->driver_id;
        $data -> fill_date_time = $request->fill_date_time;
        $image = null;

        if($request->hasFile('receipt_image')){
            $file = $request->file('receipt_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/petrol_images', $name);
            $image = $name;

        }else{
            $image = $request->receipt_image;
        }

        $data -> receipt_image = $image;

        // return $data;

        $data->save();

        return redirect()->route ('petrol')->with('success', 'petrol has been added successfully.');
    }

    public function edit($id)
    {
        $petrol = Petrol::findOrFail($id);
        return view('petrol.edit', compact('petrol'));
    }

    public function update(Request $request, $id)
    {
        $data = Petrol::findOrFail($id);

        $data -> vehicle_id = $request->vehicle_id;
        $data -> driver_id = $request->driver_id;
        $data -> fill_date_time = $request->fill_date_time;
        $image = null;

        if($request->hasFile('receipt_image')){
            $file = $request->file('receipt_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/petrol_images', $name);
            $image = $name;

        }else{
            $image = $request->receipt_image;
        }

        $data -> receipt_image = $image;
        
        $data->save();
        return redirect()->route ('petrol')->with('success', 'petrol has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Petrol::find($id);
        $data->delete();

        return redirect()->route ('petrol')->with('success', 'petrol has been deleted successfully.');
    }
}
