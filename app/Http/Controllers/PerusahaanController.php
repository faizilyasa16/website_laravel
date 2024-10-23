<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel pekerja_memiliki_kontrak
        $data4 = Perusahaan::all();


        // Kirim data ke view
        return view('backend.content4', compact('data4'));
    }

    public function destroy($id, $status)
    {
        // Tentukan model berdasarkan status kontrak
        if ($status == 'sudah') {
            $pekerja = Perusahaan::findOrFail($id); // Menggunakan model SudahKontrak
        } else {
            return redirect()->route('backend.content4')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Hapus data pekerja
        $pekerja->delete();
    
        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('backend.content4')->with('success', 'Pekerja berhasil dihapus.');
    }
}
