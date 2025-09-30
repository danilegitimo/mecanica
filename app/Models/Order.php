<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "vehicle_id",
        "user_id"
    ];

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function services() {
        return $this->hasMany(OrderService::class);
    }

    public function parts() {
        return $this->hasMany(OrderPart::class);
    }
    
    public function proprietario() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
