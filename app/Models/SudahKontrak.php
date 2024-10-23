<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SudahKontrak extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'pekerja_memiliki_kontrak'; // Nama tabel
    
    protected $fillable = [
        'nama',  // Ganti 'name' menjadi 'nama'
        'posisi_dikontrak',
        'tanggal_mulai_kontrak',
        'email',
        'pt',
        'lama_kontrak',
        'upah_kontrak',
        'status',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
