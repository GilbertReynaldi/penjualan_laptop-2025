<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
