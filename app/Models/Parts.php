<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    //
    protected $fillable = [
        'name',
        'quantity',
        'supplier_id'
    ];
    
}
