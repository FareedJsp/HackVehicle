<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $driver = Driver::get();
        return view('driver.index', compact('driver'));
    }

    public function available()
    {
        $driver = Driver::where('status', 'Available')->get();
        return view('driver.available', compact('driver'));
    }

    public function notavailable()
    {
        $driver = Driver::where('status', 'Not Available')->get();
        return view('driver.notavailable', compact('driver'));
    }

    public function create()
    {
        return view('driver.create');
    }

    public function store(Request $request)
    {
        $data = new Driver;

        $data -> company = $request->company;
        $data -> name = $request->name;
        $data -> gender = $request->gender;
        $data -> birth_date = $request->birth_date;
        $data -> status = $request->status;
        $data -> username = $request->username;
        $data -> password = $request->password;

        // return $data;

        $data->save();

        return redirect()->route ('driver')->with('success', 'driver has been added successfully.');
    }

    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        $data = Driver::findOrFail($id);

        $data -> company = $request->company;
        $data -> name = $request->name;
        $data -> gender = $request->gender;
        $data -> birth_date = $request->birth_date;
        $data -> status = $request->status;
        $data -> username = $request->username;
        $data -> password = $request->password;

        // return $data;

        $data->save();
        
        return redirect()->route ('driver')->with('success', 'driver has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Driver::find($id);
        $data->delete();

        return redirect()->route ('driver')->with('success', 'driver has been deleted successfully.');
    }

    //connect Flutter
    public function getdriver(){
        $result = [];
        $result['status'] = false ;
        $result['message'] = "something error";
        
        $data = Driver::get();
        $result['data'] = $data ;
        
        $result['status'] = true ;
        $result['message'] = "success";
        
        return response()->json($result);
    }
}
