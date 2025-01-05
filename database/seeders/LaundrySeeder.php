<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['PROSES', 'SELESAI', 'DIAMBIL'];
        $jenisLaundry = ['LANGGANAN', 'BIASA'];
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        for ($i = 1; $i <= 20; $i++) {
            DB::table('laundry')->insert([
                'user_id' => rand(2, 9),
                'nomor_laundry' => 'LD-' . Str::random(5),
                'jenis_laundry' => $jenisLaundry[array_rand($jenisLaundry)],
                'bulan' => $bulan[array_rand($bulan)],
                'tahun' => (string) rand(2020, 2025),
                'berat_laundry' => rand(1, 15) + (rand(0, 9) / 10),
                'total_pakaian' => rand(5, 50),
                'karakteristik_pakaian' => Str::random(50),
                'jenis_pakaian' => Str::random(20),
                'tanggal_masuk' => Carbon::now()->subDays(rand(1, 30)),
                'tanggal_selesai' => rand(0, 1) ? Carbon::now()->addDays(rand(1, 10)) : null,
                'status_laundry' => $statuses[array_rand($statuses)],
                'catatan' => rand(0, 1) ? Str::random(30) : null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ]);
        }
    }
}
