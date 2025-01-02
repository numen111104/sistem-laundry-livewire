<?php

namespace App\Helpers;

class FormatNumberHelper {
    public static function formatPercent($resultValue, $baseValue)
    {
        if ($resultValue > 0) {
            return number_format(($resultValue / $baseValue) * 100, 1);
        }

        return (string) 0;
    }

    public static function formatK($number)
    {
        if ($number >= 1000) {
            $number = $number / 1000;
            return number_format($number, $number >= 100 ? 0 : 1) . 'k';
        }

        return (string) $number;
    }

    public static function formatByte($number)
    {
        if ($number >= 1000000000) {
            return number_format($number / 1000000000, 1) . ' GB';
        } elseif ($number >= 1000000) {
            return number_format($number / 1000000, 1) . ' MB';
        } elseif ($number >= 1000) {
            return number_format($number / 1000, 1) . ' KB';
        } else {
            return $number;
        }
    }

    public static function toInteger($amount) {
        return preg_replace("/[^0-9]/","", $amount);
    }

    public static function formatRupiah($angka, $prefix = 'Rp') {
        // Hilangkan karakter selain angka
        $angka = preg_replace("/[^,\d]/", "", $angka);
        
        if (empty($angka)) {
            return '';
        }
        
        // Format angka dengan ribuan (.) separator
        $rupiah = number_format($angka, 0, ',', '.');
        
        // Gabungkan dengan prefix Rupiah
        return $prefix . ' ' . $rupiah;
    }
}
