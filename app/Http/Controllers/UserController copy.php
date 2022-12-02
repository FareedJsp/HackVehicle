<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function index()
    {
        $gdriver = User::where('role', 'Driver')->get();
        return view('gdriver.index', compact('gdriver'));
    }

    public function create()
    {
        return view('gdriver.create');
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
        $data -> password = $request->password;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path(). '/driver_images', $name);
            $image = $name;

            $data -> image = $image;
        }

        $data->save();

        return redirect()->route ('user')->with('success', 'Driver has been added successfully.');
    }

    public function check()
    {
        $data = User::get();
        return $data;
    }

}
