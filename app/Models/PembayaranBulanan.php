<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembayaranBulanan extends Model
{
    protected $table = 'pembayaran_bulanan';
    protected $fillable = [
        'user_id',
        'tanggal',
        'bulan',
        'tahun',
        'jumlah_bayar',
        'jenis',
        'status',
        'catatan'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jumlah_bayar' => 'decimal:2'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
