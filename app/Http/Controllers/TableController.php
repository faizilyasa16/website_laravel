<?php

namespace App\Http\Controllers;

use App\Models\SudahKontrak;
use App\Models\BelumKontrak;
use App\Models\Pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel pekerja_memiliki_kontrak
        $data = SudahKontrak::all();

        // Ambil semua data dari tabel pekerja_belum_memiliki_kontrak
        $data2 = BelumKontrak::all();


        // Kirim data ke view
        return view('backend.content2', compact('data', 'data2',));
    }

    public function destroy($id, $status)
    {
        // Tentukan model berdasarkan status kontrak
        if ($status == 'sudah') {
            $pekerja = SudahKontrak::findOrFail($id); // Menggunakan model SudahKontrak
        } elseif ($status == 'belum') {
            $pekerja = BelumKontrak::findOrFail($id); // Menggunakan model BelumKontrak
        } elseif ($status == 'pendaftar') {
            $pekerja = Pendaftar::findOrFail($id); // Menggunakan model Pendaftar
        }
        else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Hapus data pekerja
        $pekerja->delete();
    
        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('backend.content2')->with('success', 'Pekerja berhasil dihapus.');
    }
    
}
