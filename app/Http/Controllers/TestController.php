<?php

namespace App\Http\Controllers;

use App\Models\Testonly;
use Illuminate\Http\Request;

class TestController extends Controller
{
    
        public function index()
        {
            $test = Testonly::get();
            return view('testonly.index', compact('test'));
        }
    
        public function create()
        {
            return view('testonly.create');
        }
    
        public function store(Request $request)
        {
            $data = new Testonly;
    
            $data -> driver_id = $request->driver_id;
            $data -> name = $request->name;
            $data -> testword = $request->testword;
    
            // return $data;
    
            $data->save();
    
            return redirect()->route ('testpage')->with('success', 'test has been added successfully.');
        }
    
        public function edit($id)
        {
            $test = Testonly::findOrFail($id);
            return view('testonly.edit', compact('test'));
        }
    
        public function update(Request $request, $id)
        {
            $data = Testonly::findOrFail($id);
    
            $data -> driver_id = $request->driver_id;
            $data -> name = $request->name;
            $data -> testword = $request->testword;
    
            $data->save();
            return redirect()->route ('testpage')->with('success', 'test has been updated successfully.');
        }
    
        public function destroy($id)
        {
            $data = Testonly::find($id);
    
            $data->delete();
    
            return redirect()->route ('testpage')->with('success', 'test has been deleted successfully.');
        }
    
        //Apps Connect
    
        public function getdataTestonly(){
            $result = [];
            $result['status'] = false ;
            $result['message'] = "something error";
            
            $data = Testonly::get();
            $result['data'] = $data ;
            
            $result['status'] = true ;
            $result['message'] = "success";
            
            return response()->json($result);
        }
    
        public function adddataTestonly(Request $request){
            $result = [];
            $result['status'] = false ;
            $result['message'] = "something error";
    
            $data = new Testonly;
    
            $data -> driver_id = $request->driver_id;
            $data -> name = $request->name;
            $data -> testword = $request->testword;

            $data->save();
    
    
            $result['data'] = $data ;
            $result['status'] = true ;
            $result['message'] = "succesfully added data";
                
            return response()->json($result);
        }
    
        public function updatedataTestonly(Request $request){
            $result = [];
            $result['status'] = false ;
            $result['message'] = "something error";
    
            $data = Testonly::findOrFail($request->id);
    
            $data -> driver_id = $request->driver_id;
            $data -> name = $request->name;
            $data -> testword = $request->testword;

            $data->save();
    
    
            $result['data'] = $data ;
            $result['status'] = true ;
            $result['message'] = "succesfully update data";
                
            return response()->json($result);
        }
    
}
