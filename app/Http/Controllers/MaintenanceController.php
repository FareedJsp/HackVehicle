<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenance = Maintenance::get();
        return view('maintenance.index', compact('maintenance'));
    }

    public function create()
    {
        return view('maintenance.create');
    }

    public function store(Request $request)
    {
        $data = new Maintenance;

        $data -> vehicle_id = $request->vehicle_id;
        $data -> workshop_name = $request->workshop_name;
        $data -> maintenance_title = $request->maintenance_title;
        $data -> maintenance_date = $request->maintenance_date;
        $data -> maintenance_detail = $request->maintenance_detail;
        $data -> maintenance_cost = $request->maintenance_cost;
        $image = null;

        if($request->hasFile('maintenance_image')){
            $file = $request->file('maintenance_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/maintenance_images', $name);
            $image = $name;

        }else{
            $image = $request->maintenance_image;
        }

        $data -> maintenance_image = $image;

        // return $data;

        $data->save();

        return redirect()->route ('maintenance')->with('success', 'maintenance has been added successfully.');
    }

    public function edit($id)
    {
        $maintenance = Maintenance::findOrFail($id);
        return view('maintenance.edit', compact('maintenance'));
    }

    public function update(Request $request, $id)
    {
        $data = Maintenance::findOrFail($id);

        $data -> vehicle_id = $request->vehicle_id;
        $data -> workshop_name = $request->workshop_name;
        $data -> maintenance_title = $request->maintenance_title;
        $data -> maintenance_date = $request->maintenance_date;
        $data -> maintenance_detail = $request->maintenance_detail;
        $data -> maintenance_cost = $request->maintenance_cost;
        $image = null;

        if($request->hasFile('maintanence_image')){
            $file = $request->file('maintenance_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/maintenance_images', $name);
            $image = $name;

        }else{
            $image = $request->maintenance_image;
        }

        $data -> maintenance_image = $image;

        $data->save();
        return redirect()->route ('maintenance')->with('success', 'maintenance has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Maintenance::find($id);
        $data->delete();

        return redirect()->route ('maintenance')->with('success', 'maintenance has been deleted successfully.');
    }

    //Apps Connect

    public function getdataMaintenance(){
        $result = [];
        $result['status'] = false ;
        $result['message'] = "something error";
        
        $data = Maintenance::get();
        $result['data'] = $data ;
        
        $result['status'] = true ;
        $result['message'] = "success";
        
        return response()->json($result);
    }

    public function adddataMaintenance(Request $request){
        $result = [];
        $result['status'] = false ;
        $result['message'] = "something error";

        $data = new Maintenance;

        $images = null;
        if($request->hasFile('maintanence_image')){
            $file = $request->file('maintenance_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/maintenance_images', $name);
            $image = $name;

        }else{
            $image = $request->maintenance_image;
        }

        $data -> maintenance_image = $image;

        $data -> vehicle_id = $request->vehicle_id;
        $data -> workshop_name = $request->workshop_name;
        $data -> maintenance_title = $request->maintenance_title;
        $data -> maintenance_date = $request->maintenance_date;
        $data -> maintenance_detail = $request->maintenance_detail;
        $data -> maintenance_cost = $request->maintenance_cost;
        $data->save();


        $result['data'] = $data ;
        $result['status'] = true ;
        $result['message'] = "succesfully added data";
            
        return response()->json($result);
    }

    public function updatedataMaintenance(Request $request, $id){
        $result = [];
        $result['status'] = false ;
        $result['message'] = "something error";

        $data = Maintenance::findOrFail($id);

        $images = null;
        if($request->hasFile('maintenance_image')){
            $file = $request->file('maintenance_image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/maintenance_images', $name);
            $image = $name;

        }else{
            $image = $request->maintenance_image;
        }

        $data -> maintenance_image = $image;

        $data -> vehicle_id = $request->vehicle_id;
        $data -> workshop_name = $request->workshop_name;
        $data -> maintenance_title = $request->maintenance_title;
        $data -> maintenance_date = $request->maintenance_date;
        $data -> maintenance_detail = $request->maintenance_detail;
        $data -> maintenance_cost = $request->maintenance_cost;
        $data->save();


        $result['data'] = $data ;
        $result['status'] = true ;
        $result['message'] = "succesfully update data";
            
        return response()->json($result);
    }
}
