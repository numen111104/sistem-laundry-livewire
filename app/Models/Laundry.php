<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'laundry';
    protected $fillable = [
        'user_id',
        'nomor_laundry',
        'jenis_laundry',
        'bulan',
        'tahun',
        'berat_laundry',
        'total_pakaian',
        'karakteristik_pakaian',
        'jenis_pakaian',
        'tanggal_masuk',
        'tanggal_selesai',
        'status_laundry',
        'catatan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
