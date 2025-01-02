<?php

namespace App\Helpers;

use Carbon\Carbon;

class TanggalHelper
{
    public static function konversiTanggal($tanggal)
    {
        return Carbon::parse($tanggal)
            ->isoFormat('D MMM Y');
    }

    public static function konversiJam($tanggal)
    {
        return Carbon::parse($tanggal)
        ->isoFormat('hh:mm');
    }

    public static function konversiTanggalPenuh($tanggal)
    {
        return Carbon::parse($tanggal)
            ->isoFormat('lll');
    }

    public static function konversiTanggalIndo($tanggal){
        return Carbon::parse($tanggal)
            ->isoFormat('D MMMM YYYY');
    }

    public static function selisihWaktu($waktuAkhir, $waktuAwal) {
        $parseWaktuAkhir = Carbon::parse($waktuAkhir);
        $parseWaktuAwal = Carbon::parse($waktuAwal);

        $selisihDetik = $parseWaktuAkhir->diffInSeconds($parseWaktuAwal);
        $telatHari = $parseWaktuAkhir->diffInDays($parseWaktuAwal);
        $telatDetik = gmdate('s', $selisihDetik);
        $telatMenit = gmdate('i', $selisihDetik);
        $telatJam = gmdate('G', $selisihDetik);

        if ($telatHari > 0) {
            if ($telatDetik >= 1) {
                $totalDurasi = "$telatHari Hari $telatJam Jam $telatMenit Menit $telatDetik Detik";
            } else {
                $totalDurasi = "$telatHari Hari $telatJam Jam $telatMenit Menit";
            }
        } elseif ($telatJam > 0) {
            $totalDurasi = "$telatJam Jam $telatMenit Menit $telatDetik Detik";
        } elseif ($telatMenit > 0) {
            $totalDurasi = "$telatMenit Menit $telatDetik Detik";
        } else {
            $totalDurasi = "$telatDetik Detik";
        }

        return $totalDurasi;
    }
}
