<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parts extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'quantity',
        'supplier_id'
    ];

    public function fornecedor() {
        return $this->belongsTo(Supplier::class, 'supplier_id')->withTrashed();
    }
    
}
