<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Perusahaan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'list_perusahaan_terdaftar'; // Nama tabel
    
    protected $fillable = [
        'Perusahaan',  // Ganti 'name' menjadi 'nama'
        'jumlah_staff_bekerja_sama',
        'tanggal_terdaftar',
        'tanggal_berakhir',
        'email_perusahaan',
        'status',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
