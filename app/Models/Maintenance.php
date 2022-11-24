<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maintenance extends Model
{
    use HasFactory;

    public function Vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
