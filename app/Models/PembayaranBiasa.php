<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PembayaranBiasa extends Model
{
    protected $table = 'pembayaran_biasa';

    protected $fillable = [
        'laundry_id',
        'tanggal',
        'jumlah_bayar',
        'jenis',
        'status',
        'catatan'
    ];

    public $timestamps = true;

    protected $attributes = [
        'jenis' => 'CASH',
        'status' => 'PENDING',
    ];
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->tanggal = date('Y-m-d');
        });
    }

    public function laundry()
    {
        return $this->belongsTo(Laundry::class);
    }
}
