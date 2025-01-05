<?php

namespace App\Livewire\Admin;

use App\FormatsNumber;
use App\Services\LaundryServices;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardAdmin extends Component
{
    use FormatsNumber;
    #[Title('Admin Dashboard')]
    protected LaundryServices $laundryServices;
    public $bulan, $tahun;
    public $totalLangganan, $totalBiasa;

    public function mount()
    {
        $this->bulan = \Carbon\Carbon::now()->locale('id')->isoFormat('MMMM');
        $this->tahun = date('Y');
        $this->totalLangganan = $this->laundryServices->countLaundryUnique(collect(["jenis_laundry" => "LANGGANAN"]));
        $this->totalBiasa = $this->laundryServices->countLaundryUnique(collect(["jenis_laundry" => "BIASA"]));
    }

    public function boot(LaundryServices $laundryServices)
    {
        $this->laundryServices = $laundryServices;
    }

    #[Computed]
    public function laundrySelesai()
    {
        return $this->laundryServices->countLaundry($this->filterSelesai());
    }

    #[Computed]
    public function laundryProses()
    {
        return $this->laundryServices->countLaundry($this->filterProses());
    }

    #[Computed]
    public function laundryDiambil()
    {
        return $this->laundryServices->countLaundry($this->filterDiambil());
    }

    #[Computed]
    public function totalRevenue()
    {
        return $this->formatRupiahModern(
            $this->laundryServices->totalPaymentSukses($this->filterRevenue())
        );
    }
    public function filterRevenue()
    {
        return collect([
            "bulanan_bulan" => $this->bulan,
            "bulanan_tahun" => $this->tahun,
            "biasa_status" => "LUNAS",
            "bulanan_status" => "LUNAS"
        ]);
    }
    public function filterSelesai()
    {
        return collect([
            'status' => 'SELESAI',
            'bulan' => $this->bulan,
            'tahun' => $this->tahun
        ]);
    }
    public function filterDiambil()
    {
        return collect([
            'status' => 'DIAMBIL',
            'bulan' => $this->bulan,
            'tahun' => $this->tahun
        ]);
    }
    public function filterProses()
    {
        return collect([
            'status' => 'PROSES',
            'bulan' => $this->bulan,
            'tahun' => $this->tahun
        ]);
    }

    public function render()
    {
        return view('livewire.admin.dashboard-admin')->layout('layouts.app');
    }
}
