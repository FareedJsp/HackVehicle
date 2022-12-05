<?php

namespace App\Models;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petrol extends Model
{
    use HasFactory;

    public function Vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function Driver(){
        return $this->belongsTo(User::class, 'driver_id');
    }
}
