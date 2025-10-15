<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderService extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'service_id'
    ];

    public function service() {
        return $this->hasOne(Service::class, 'id', 'service_id')->withTrashed();
    }
}
