<?php

namespace App\Services;

use App\Models\Laundry;

class LaundryServices
{
    public function countLaundry($filter)
    {
        return Laundry::queryLaundry($filter, null)
            ->select('laundry.id')
            ->count();
    }
    public function countLaundryUnique($filter)
    {
        return Laundry::queryLaundry($filter, null)
            ->select('laundry.id')
            ->distinct('laundry.user_id')
            ->count();
    }

    public function totalPaymentSukses($filter)
    {
        $query = Laundry::queryLaundry($filter, null)
            ->select(
                'pembayaran_bulanan.jumlah_bayar',
                'pembayaran_biasa.jumlah_bayar'
            )
            ->get();
        return $query->sum('pembayaran_biasa.jumlah_bayar') + $query->sum('pembayaran_bulanan.jumlah_bayar');
    }
}
