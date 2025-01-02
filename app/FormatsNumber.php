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
}
