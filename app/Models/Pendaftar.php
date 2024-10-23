<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pendaftar extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pendaftar_ke_elitra'; // Nama tabel
    
    protected $fillable = [
        'nama',  // Ganti 'name' menjadi 'nama'
        'posisi_dilamar',
        'tanggal_submit',
        'email',
        'cv',
        'status',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
