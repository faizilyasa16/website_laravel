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
        'nama',               // Nama lengkap
        'posisi_dilamar',
        'tanggal_submit',
        'tanggal_lahir',      // Kolom tambahan
        'jenis_kelamin',      // Kolom tambahan
        'email',
        'no_telepon',         // Kolom tambahan
        'alamat_ktp',         // Kolom tambahan
        'alamat_tinggal',     // Kolom tambahan
        'jabatan_sebelumnya', // Kolom tambahan menggantikan pengalaman
        'lama_pengalaman',    // Kolom tambahan untuk durasi pengalaman
        'gaji_diharapkan',    // Kolom tambahan
        'cv',
        'linkedin',           // Kolom tambahan
        'status',
    ];

    protected $casts = [
        'tanggal_submit' => 'datetime',
        'tanggal_lahir' => 'date', // Pastikan tanggal lahir dikonversi menjadi format date
    ];
}
