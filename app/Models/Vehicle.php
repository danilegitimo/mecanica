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
        'client_id'
    ];

    public function modelo() {
        return $this->belongsTo(VehicleModel::class, 'vehicle_model_id');
    }

    public function cliente() {
        return $this->belongsTo(Client::class, 'client_id');
    }

}
