<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';

    protected $fillable = [
        'category',
        'service_type',
        'price_per_kg'
    ];

    public $timestamps = false;
}
