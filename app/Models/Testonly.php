<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testonly extends Model
{
    use HasFactory;

    public function Driver(){
        return $this->belongsTo(User::class, 'driver_id');
    }
}
