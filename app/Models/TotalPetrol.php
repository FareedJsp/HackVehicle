<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TotalPetrol extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'date', 'sumcost'];

    public function Vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
