<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPart extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'parts_id'
    ];

    public function part() {
        return $this->hasOne(Parts::class, 'id', 'parts_id')->withTrashed();
    }
}
