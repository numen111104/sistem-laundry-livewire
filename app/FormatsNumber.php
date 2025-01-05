<?php

namespace App;

trait FormatsNumber
{
    public function formatNumberIndo($number)
    {
        if (substr($number, 0, 2) == '08') {
            $number = "+62" . substr($number, 1);
        } else {
            return $number;
        }
        return $number;
    }
    public function formatPercent($resultValue, $baseValue)
    {
        if ($resultValue > 0) {
            return number_format(($resultValue / $baseValue) * 100, 1);
        }

        return (string) 0;
    }

    public function formatK($number)
    {
        if ($number >= 1000) {
            $number = $number / 1000;
            return number_format($number, $number >= 100 ? 0 : 1) . 'k';
        }

        return (string) $number;
    }

    public function formatByte($number)
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

    public function toInteger($amount)
    {
        return preg_replace("/[^0-9]/", "", $amount);
    }

    public function formatRupiah($angka, $prefix = 'Rp')
    {
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

    public function formatRupiahModern($number, $prefix = 'Rp')
    {
        if ($number >= 1000000) {
            // Jika lebih dari atau sama dengan 1 juta
            $formatted = number_format($number / 1000000, ($number >= 10000000 ? 0 : 1)) . 'jt';
        } elseif ($number >= 1000) {
            // Jika lebih dari atau sama dengan 1 ribu
            $formatted = number_format($number / 1000, ($number >= 100000 ? 0 : 1)) . 'k';
        } else {
            // Jika kurang dari 1 ribu
            $formatted = (string) $number;
        }

        // Tambahkan prefix (contoh: Rp)
        return $prefix . $formatted;
    }
}
