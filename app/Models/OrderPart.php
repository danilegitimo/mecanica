<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderPart extends Model
{
    //
    protected $fillable = [
        'order_id',
        'parts_id'
    ];

    public function part() {
        return $this->hasOne(Parts::class, 'id', 'parts_id');
    }
}
