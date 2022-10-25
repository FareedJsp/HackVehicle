<?php

namespace App\Http\Controllers;

use App\Models\Wreckage;
use Illuminate\Http\Request;

class WreckageController extends Controller
{
    public function index()
    {
        $wreckage = Wreckage::get();
        return view('wreckage.index', compact('wreckage'));
    }

    public function create()
    {
        return view('wreckage.create');
    }

    public function store(Request $request)
    {
        $data = new Wreckage;

        $data -> vehicle_id = $request->vehicle_id;
        $data -> driver_id = $request->driver_id;
        $data -> location = $request->location ?? null;
        $data -> wreckage_title = $request->wreckage_title;
        $data -> description = $request->description;
        $data -> action_needed = $request->action_needed;
        $image = null;

        if($request->hasFile('wreckage_image')){
            $file = $request->file('wreckage_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/wreckage_images', $name);
            $image = $name;

        }else{
            $image = $request->wreckage_image;
        }

        $data -> wreckage_image = $image;

        // return $data;

        $data->save();

        return redirect()->route ('wreckage')->with('success', 'wreckage has been added successfully.');
    }

    public function edit($id)
    {
        $wreckage = Wreckage::findOrFail($id);
        return view('wreckage.edit', compact('wreckage'));
    }

    public function update(Request $request, $id)
    {
        $data = Wreckage::findOrFail($id);

        $data -> vehicle_id = $request->vehicle_id;
        $data -> driver_id = $request->driver_id;
        $data -> location = $request->location;
        $data -> wreckage_title = $request->wreckage_title;
        $data -> description = $request->description;
        $data -> action_needed = $request->action_needed;
        $image = null;

        if($request->hasFile('wreckage_image')){
            $file = $request->file('wreckage_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/wreckage_images', $name);
            $image = $name;

        }else{
            $image = $request->wreckage_image;
        }

        $data -> wreckage_image = $image;
        
        $data->save();
        return redirect()->route ('wreckage')->with('success', 'wreckage report has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Wreckage::find($id);
        $data->delete();

        return redirect()->route ('wreckage')->with('success', 'wreckage report has been deleted successfully.');
    }
}
