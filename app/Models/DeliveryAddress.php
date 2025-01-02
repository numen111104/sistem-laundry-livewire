<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    protected $table = 'delivery_addresses';

    protected $fillable = [
        'user_id',
        'address',
        'asrama',
        'latitude',
        'longitude'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
