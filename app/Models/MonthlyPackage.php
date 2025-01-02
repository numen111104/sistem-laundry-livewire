<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyPackage extends Model
{
    protected $table = 'monthly_packages';

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'max_laundry_count',
        'status',
        'price',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function laundryOrders()
    {
        return $this->hasMany(LaundryOrder::class, 'package_id', 'id');
    }

    public function mounthlyUsages()
    {
        return $this->hasMany(MonthlyUsage::class, 'package_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'monthly_package_id', 'id');
    }
}
