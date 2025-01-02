<?php



namespace App\Helpers;

use Carbon\Carbon;

class TahunHelper
{
    public static function tahunSebelumnya($tahun = 2024, $tahunSebelumnya = 2)
    {
        $tahunSebelum = [];

        for ($i = 0; $i <= $tahunSebelumnya; $i++) {
            $tahunSebelum[] = $tahun - $i;
        }

        return $tahunSebelum;
    }
}
