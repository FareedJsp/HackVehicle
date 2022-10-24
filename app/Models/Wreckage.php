<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wreckage extends Model
{
    use HasFactory;

    public function Vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function Driver(){
        return $this->belongsTo(Driver::class, 'driver_id');
    }
}
