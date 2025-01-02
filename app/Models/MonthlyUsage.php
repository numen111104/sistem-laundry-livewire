<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyUsage extends Model
{
    protected $table = 'monthly_usages';

    protected $fillable = [
        'package_id',
        'order_id',
        'month',
        'usage',
        'date_used'
    ];

    public $timestamps = false;

    public function monthlyPackage()
    {
        return $this->belongsTo(MonthlyPackage::class, 'package_id', 'id');
    }

    public function laundryOrder()
    {
        return $this->belongsTo(LaundryOrder::class, 'order_id', 'id');
    }
}
