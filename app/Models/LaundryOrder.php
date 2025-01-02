<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaundryOrder extends Model
{
    protected $table = 'laundry_orders';

    protected $fillable = [
        'user_id',
        'package_id',
        'status',
        'total_price',
        'tanggal',
        'bulan',
        'tahun',
        'delivery_date',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function monthlyPackages()
    {
        return $this->belongsTo(MonthlyPackage::class, 'package_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'order_id', 'id');
    }

    public function laundryItems()
    {
        return $this->hasMany(LaundryItem::class, 'order_id', 'id');
    }

    public function monthlyUsages()
    {
        return $this->hasMany(MonthlyUsage::class, 'order_id', 'id');
    }
}
