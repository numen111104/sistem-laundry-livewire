<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ROLE_USER = 2;
    const ROLE_ADMIN = 1;
    const ROLE_WALSAN = 3;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'gender',
        'phone',
        'photo',
        'role_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi one-to-many dengan model Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }


    // Relasi one-to-many dengan model Notification
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }

    // Relasi one-to-many dengan model Laundry
    public function laundry()
    {
        return $this->hasMany(Laundry::class, 'user_id', 'id');
    }

    // Relasi one-to-many dengan model PembayaranBulanan
    public function pembayaran_bulanan()
    {
        return $this->hasMany(PembayaranBulanan::class, 'user_id', 'id');
    }
}
