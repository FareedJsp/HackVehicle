<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Petrol;
use App\Models\Vehicle;
use App\Models\TotalPetrol;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PetrolController extends Controller
{
    public function index()
    {
        $petrol = Petrol::get();
        return view('petrol.index', compact('petrol'));
    }

    public function dashboardtotal()
    {
        $petrol = Petrol::whereYear('fill_date_time', Carbon::now()->year)
        ->whereMonth('fill_date_time', Carbon::now()->month)->sum('cost');

        return view('dashboard', compact('petrol'));
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
        $data -> cost = $request->cost;
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

        //gastotal

        $b = $data->fill_date_time;

        $c = date('Y-m-d H:i:s', strtotime($b));

        $d = Carbon::createFromFormat('Y-m-d H:i:s', $c);

        $x = $d->format('Y');

        $y = $d->format('m');

        $costa = $data->where('vehicle_id', $data->vehicle_id)->whereYear('fill_date_time', $x)
                        ->whereMonth('fill_date_time', $y)
                        ->sum('cost');
        
        $z = $d->format('Y-m');

        $dota = Carbon::parse($z);

        $gas = TotalPetrol::where('date', null)->update(
            ['date' => $dota],
            ['sumcost' => $costa]
        );

        $gas = TotalPetrol::where('date','!=', null)->updateOrCreate(
            [
            'vehicle_id' => $request->vehicle_id,
            'date' => $dota
            ],
            ['sumcost' => $costa]
        );

        //endgastotal

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
        $data -> cost = $request->cost;
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

        //gastotal

        $b = $data->fill_date_time;

        $c = date('Y-m-d H:i:s', strtotime($b));

        $d = Carbon::createFromFormat('Y-m-d H:i:s', $c);

        $x = $d->format('Y');

        $y = $d->format('m');

        $costa = $data->where('vehicle_id', $data->vehicle_id)->whereYear('fill_date_time', $x)
            ->whereMonth('fill_date_time', $y)
            ->sum('cost');
        
        $z = $d->format('Y-m');

        $dota = Carbon::parse($z);

        $gas = TotalPetrol::where('vehicle_id', $data->vehicle_id)->where('date', $dota)->update(
            ['sumcost' => $costa]
        );

        //endgastotal

        return redirect()->route ('petrol')->with('success', 'petrol has been updated successfully.');
    }

    public function destroy($id)
    {
        $data = Petrol::find($id);

        $b = $data->vehicle_id;

        $data->delete();

        //gastotal

        $b = $data->fill_date_time;

        $c = date('Y-m-d H:i:s', strtotime($b));

        $d = Carbon::createFromFormat('Y-m-d H:i:s', $c);

        $x = $d->format('Y');

        $y = $d->format('m');

        $costa = $data->where('vehicle_id', $data->vehicle_id)->whereYear('fill_date_time', $x)
            ->whereMonth('fill_date_time', $y)
            ->sum('cost');
        
        $z = $d->format('Y-m');

        $dota = Carbon::parse($z);

        $gas = TotalPetrol::where('vehicle_id', $data->vehicle_id)->where('date', $dota)->update(
            ['sumcost' => $costa]
        );

        //endgastotal

        return redirect()->route ('petrol')->with('success', 'petrol has been deleted successfully.');
    }

}
