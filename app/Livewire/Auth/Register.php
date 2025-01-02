<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\FormatsNumber;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{
    use WithFileUploads, FormatsNumber;

    public $name, $email, $password, $phone, $gender = "Male", $photo;
    public $isSantri = false, $isSubmitActive = false;

    protected $rules = [
        'name' => 'max:100|string',
        'email' => 'email|unique:users,email|lowercase|max:100',
        'password' => 'string|min:4',
        'phone' => 'numeric|min:10',
        'gender' => 'in:Male,Female|string',
        'isSantri' => 'boolean',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function isFormFilled(): bool
    {
        if (empty($this->name) || empty($this->email) || empty($this->password) || empty($this->phone) || empty($this->gender)) {
            $this->isSubmitActive = false;
        } else {
            $this->isSubmitActive = true;
        }
        return $this->isSubmitActive;
    }

    public function updated($propertyName)
    {
        $this->isFormFilled();
        if ($propertyName == 'email') {
            $this->validateOnly('email');
        }
        if ($propertyName == 'password') {
            $this->validateOnly('password');
        }
        if ($propertyName == 'phone') {
            $this->validateOnly('phone');
        }
        if ($propertyName == 'photo') {
            $this->validateOnly('gender');
        }
    }

    public function resetPhoto(): void
    {
        $this->reset('photo');
    }

    public function register(): void
    {
        try {
            $this->validate();
            // Proses Transaksi
            DB::transaction(function () {
                // Simpan Foto Jika Ada
                $filePath = $this->photo ? $this->photo->storeAs('photos', $this->email . '.' . $this->photo->getClientOriginalExtension(), ['disk' => 'public']) : null;

                // Buat User
                $user = User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'phone' => $this->formatNumberIndo($this->phone),
                    'gender' => $this->gender,
                    'isSantri' => $this->isSantri == true ? 1 : 0,
                    'photo' => $filePath,
                    'role_id' => $this->isSantri == true ? User::ROLE_WALSAN : User::ROLE_USER,
                ]);

                // Event Pendaftaran dan Login
                event(new Registered($user));
                Auth::login($user);
            });

            // Dispatch Event Sukses dan Redirect
            $this->dispatch('sukses-register');
            $this->redirectIntended(default: route('user::dashboardUser'), navigate: true);
        } catch (\Exception $e) {
            $this->dispatch('gagal-register');
        }
    }

    #[Title('Registrasi')]
    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.guest');
    }
}
