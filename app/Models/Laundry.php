<?php

namespace App\Models;

use Illuminate\Support\Collection;
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

    public static function queryLaundry(Collection $filter, ?string $search)
    {
        return self::join('users', 'laundry.user_id', '=', 'users.id')
            ->leftJoin('pembayaran_bulanan', 'laundry.user_id', '=', 'pembayaran_bulanan.user_id')
            ->leftJoin('pembayaran_biasa', 'laundry.id', '=', 'pembayaran_biasa.laundry_id')
            ->select('laundry.*', 'users.name', 'users.role_id',  'users.is_santri', 'users.gender', 'users.phone', 'users.email', 'users.photo', 'pembayaran_bulanan.*', 'pembayaran_biasa.*')
            ->when((isset($filter["user_id"]) && $filter["user_id"] != null), function ($query) use ($filter) {
                return $query->where('laundry.user_id', $filter["user_id"]);
            })
            ->when((isset($filter["is_santri"]) && $filter["is_santri"] != null), function ($query) use ($filter) {
                return $query->where('users.is_santri', $filter["is_santri"]);
            })
            ->when((isset($filter["gender"]) && $filter["gender"] != null), function ($query) use ($filter) {
                return $query->where('users.gender', $filter["gender"]);
            })
            ->when((isset($filter["role_id"]) && $filter["role_id"] != null), function ($query) use ($filter) {
                return $query->where('users.role_id', $filter["role_id"]);
            })
            ->when((isset($filter["nomor_laundy"]) && $filter["nomor_laundy"] != null), function ($query) use ($filter) {
                return $query->where('laundry.nomor_laundry', $filter["nomor_laundy"]);
            })
            ->when((isset($filter["jenis_laundry"]) && $filter["jenis_laundry"] != null), function ($query) use ($filter) {
                return $query->where('laundry.jenis_laundry', $filter["jenis_laundry"]);
            })
            ->when((isset($filter["bulan"]) && $filter["bulan"] != null), function ($query) use ($filter) {
                return $query->where('laundry.bulan', $filter["bulan"]);
            })
            ->when((isset($filter["tahun"]) && $filter["tahun"] != null), function ($query) use ($filter) {
                return $query->where('laundry.tahun', $filter["tahun"]);
            })
            ->when((isset($search) && $search != null), function ($query) use ($search) {
                return $query->where('users.name', 'like', '%' . $search . '%');
            })
            ->when((isset($filter["status"]) && $filter["status"] != null), function ($query) use ($filter) {
                return $query->where('laundry.status_laundry', $filter["status"]);
            })
            ->when((isset($filter["tanggal_masuk"]) && $filter["tanggal_masuk"] != null), function ($query) use ($filter) {
                return $query->where('laundry.tanggal_masuk', $filter["tanggal_masuk"]);
            })
            ->when((isset($filter["tanggal_selesai"]) && $filter["tanggal_selesai"] != null), function ($query) use ($filter) {
                return $query->where('laundry.tanggal_selesai', $filter["tanggal_selesai"]);
            })
            ->when((isset($filter["bulanan_bulan"]) && $filter["bulanan_bulan"] != null), function ($query) use ($filter) {
                return $query->where('pembayaran_bulanan.bulan', $filter["bulanan_bulan"]);
            })
            ->when((isset($filter["bulanan_tahun"]) && $filter["bulanan_tahun"] != null), function ($query) use ($filter) {
                return $query->where('pembayaran_bulanan.tahun', $filter["bulanan_tahun"]);
            })
            ->when((isset($filter["bulanan_status"]) && $filter["bulanan_status"] != null), function ($query) use ($filter) {
                return $query->where('pembayaran_bulanan.status', $filter["bulanan_status"]);
            })
            ->when((isset($filter["biasa_status"]) && $filter["biasa_status"] != null), function ($query) use ($filter) {
                return $query->where('pembayaran_biasa.status', $filter["biasa_status"]);
            })
            ->orderBy('laundry.created_at', 'desc')
        ;
    }
}
