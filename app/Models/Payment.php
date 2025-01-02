<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'package_id',
        'due_date',
        'payment_status',
        'payment_method',
        'total_paid',
        'paid_at',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function laundryOrders()
    {
        return $this->belongsTo(LaundryOrder::class, 'order_id', 'id');
    }

    public function monthlyPackages()
    {
        return $this->belongsTo(MonthlyPackage::class, 'package_id', 'id');
    }
}
