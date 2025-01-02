<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaundryItem extends Model
{
    protected $table = 'laundry_items';
    protected $fillable = [
        'order_id',
        'item_name',
        'quantity',
        'price_per_item',
        'weight'
    ];

    public function laundryOrder()
    {
        return $this->belongsTo(LaundryOrder::class, 'order_id', 'id');
    }
}
