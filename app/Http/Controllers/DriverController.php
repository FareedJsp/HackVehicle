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

    public function create()
    {
        return view('driver.create');
    }

    public function store(Request $request)
    {
        $data = new Driver;

        $data -> name = $request->name;
        $data -> gender = $request->gender;
        $data -> birth_date = $request->birth_date;
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

        $data -> name = $request->name;
        $data -> gender = $request->gender;
        $data -> birth_date = $request->birth_date;
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
}
