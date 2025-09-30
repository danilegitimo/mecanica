<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    //
    protected $fillable = [
        'order_id',
        'service_id'
    ];

    protected function service() {
        return $this->hasOne(Service::class, 'id', 'service_id');
    }
}
