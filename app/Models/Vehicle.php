<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $fillable = [
        'vehicle_model_id',
        'placa',
        'renavam',
        'proprietario',
        'cor',
        'ano',
        'user_id'
    ];
    
}
