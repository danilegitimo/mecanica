<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    use SoftDeletes;

    protected $fillable = [
        "vehicle_id",
        "client_id"
    ];

    public function vehicle() {
        return $this->belongsTo(Vehicle::class)->withTrashed();
    }

    public function services() {
        return $this->hasMany(OrderService::class)->withTrashed();
    }

    public function parts() {
        return $this->hasMany(OrderPart::class)->withTrashed();
    }

    public function cliente() {
        return $this->belongsTo(Client::class)->withTrashed();
    }
}
