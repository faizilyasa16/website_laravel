<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class belumKontrak extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pekerja_belum_memiliki_kontrak'; // Nama tabel
    
    protected $fillable = [
        'nama',  // Ganti 'name' menjadi 'nama'
        'posisi_keahlian',
        'tanggal_masuk',
        'email',
        'cv',
        'status',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
