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

    public function destroy($id)
    {
        // Cari data pekerja berdasarkan ID
        $pekerja = Pendaftar::findOrFail($id);
    
        // Hapus data pekerja
        $pekerja->delete();
    
        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('backend.content3')->with('success', 'Pekerja berhasil dihapus.');
    }
    
    
}
