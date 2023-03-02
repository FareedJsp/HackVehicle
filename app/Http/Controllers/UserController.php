<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function name()
    {
        $user = User::get();
    }

    //Driver

    public function index()
    {
        $driver = User::where('role', 'Driver')->get();
        return view('driver.index', compact('driver'));
    }

    public function indexCard()
    {
        $driver = User::where('role', 'Driver')->get();
        return view('driver.card', compact('driver'));
    }

    public function available()
    {
        $driver = User::where('role', 'Driver')->where('driver_status', 'Available')->get();
        return view('driver.available', compact('driver'));
    }

    public function notavailable()
    {
        $driver = User::where('role', 'Driver')->where('driver_status', 'Not Available')->get();
        return view('driver.notavailable', compact('driver'));
    }

    //Register Driver

    public function create()
    {
        return view('driver.create');
    }

    public function store(Request $request)
    {
        $data = new User;

        $data -> company = $request->company;
        $data -> name = $request->name;
        $data -> role = $request->role;
        $data -> email = $request->email;
        $data -> driver_gender = $request->driver_gender;
        $data -> driver_birth_date = $request->driver_birth_date;
        $data -> driver_status = $request->driver_status;
        $data -> password = bcrypt($request->get('password'));

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/driver_images', $name);
            $image = $name;

            $data -> image = $image;
        }

        $data->save();

        return redirect()->route ('driver')->with('success', 'Driver has been added successfully.');
    }

    public function edit($id)
    {
        $driver = User::findOrFail($id);
        return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data -> company = $request->company;
        $data -> name = $request->name;
        $data -> role = $request->role;
        $data -> email = $request->email;
        $data -> driver_gender = $request->driver_gender;
        $data -> driver_birth_date = $request->driver_birth_date;
        $data -> driver_status = $request->driver_status;
        $data -> password = bcrypt($request->get('password'));

        if($request->hasFile('image')){
            if(File::exists(public_path().'/driver_images/'.$data->image) && $data->image !== 'user.png'){
                File::delete(public_path().'/driver_images/'.$data->image);
            }
            $file = $request->file('image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/driver_images', $name);
            $image = $name;

        }else{
            $image = $request->image;
        }

        // return $data;

        $data->save();
        
        return redirect()->route ('driver')->with('success', 'driver has been updated successfully.');
    }

    public function getdriver(){
        $result = [];
        $result['status'] = false ;
        $result['message'] = "something error";
        
        $data = User::get();
        $result['data'] = $data ;
        
        $result['status'] = true ;
        $result['message'] = "success";
        
        return response()->json($result);
    }

    public function destroy($id)
    {
        $data = User::find($id);

        if(File::exists(public_path().'/driver_images/'.$data->image) && $data->image !== 'user.png'){
            File::delete(public_path().'/driver_images/'.$data->image);
        }

        $data->delete();

        return redirect()->route ('driver')->with('success', 'vehicle has been deleted successfully.');
    }

    public function check()
    {
        $data = User::get();
        return $data;
    }

}
