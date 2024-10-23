<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pendaftarController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel pekerja_memiliki_kontrak
        $data3 = Pendaftar::all();


        // Kirim data ke view
        return view('backend.content3', compact('data3'));
    }

    public function destroy($id, $status)
    {
        // Tentukan model berdasarkan status kontrak
        if ($status == 'sudah') {
            $pekerja = Pendaftar::findOrFail($id); // Menggunakan model SudahKontrak
        } else {
            return redirect()->route('backend.content3')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Hapus data pekerja
        $pekerja->delete();
    
        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('backend.content3')->with('success', 'Pendaftar berhasil dihapus.');
    }
    
}
