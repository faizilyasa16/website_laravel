<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index(Request $request )
    {
        // Ambil input pencarian
        $query = $request->input('query'); 
    
        // Cek apakah ada query pencarian, dan filter data jika ada
        $data4 = Perusahaan::where('perusahaan', 'LIKE', "%{$query}%") // Cari berdasarkan nama perusahaan
                    ->paginate(1); // Paginate hasil
    
        // Kirim data ke view
        return view('backend.content4', compact('data4'));
    }
    

    public function create()
    {
        return view('backend.tambahdata_perusahaan', [
            'title' => 'Form Tambah Data Pekerja',
        ]);
    }

    public function store(Request $request)
    {
        
        // Validasi input dari user
        $request->validate([
            'perusahaan' => 'required|string|max:255',
            'jumlah_staff_bekerja_sama' => 'required|numeric',
            'tanggal_terdaftar' => 'required|date',
            'tanggal_berakhir' => 'required|date',
            'email_perusahaan' => 'required|email|max:255',
            'status' => 'required|in:Terdaftar,Berakhir',
        ]);
    
        // Tentukan tabel berdasarkan status kontrak
        if ($request->status == 'Terdaftar') {
            $perusahaan = new Perusahaan();
        } elseif ($request->status == 'Berakhir') {
            $perusahaan = new Perusahaan();
        } else {
            return redirect()->route('backend.content4')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Simpan data ke dalam model
        $perusahaan->perusahaan = $request->input('perusahaan');
        $perusahaan->jumlah_staff_bekerja_sama = $request->input('jumlah_staff_bekerja_sama');
        $perusahaan->tanggal_terdaftar = $request->input('tanggal_terdaftar');
        $perusahaan->tanggal_berakhir = $request->input('tanggal_berakhir');
        $perusahaan->email_perusahaan = $request->input('email_perusahaan');
        $perusahaan->status = $request->input('status');
    
        // Simpan data ke database
        $perusahaan->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('backend.content4')->with('success', 'Pekerja berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data perusahaan berdasarkan ID
        $perusahaan = Perusahaan::findOrFail($id);
        
        // Kirim data ke view untuk diedit
        return view('backend.editdata_perusahaan', [
            'perusahaan' => $perusahaan,
        ]);
    }
    
    
    public function update(Request $request, $id)
    {
        // Validasi input dari user
        $request->validate([
            'perusahaan' => 'required|string|max:255',
            'jumlah_staff_bekerja_sama' => 'required|string|max:255',
            'tanggal_terdaftar' => 'required|date',
            'tanggal_berakhir' => 'required|date',
            'email_perusahaan' => 'required|email|max:255',
        ]);
    
        // Ambil data perusahaan berdasarkan ID
        $perusahaan = Perusahaan::findOrFail($id);
    
        // Update data perusahaan
        $perusahaan->perusahaan = $request->input('perusahaan');
        $perusahaan->jumlah_staff_bekerja_sama = $request->input('jumlah_staff_bekerja_sama');
        $perusahaan->tanggal_terdaftar = $request->input('tanggal_terdaftar');
        $perusahaan->tanggal_berakhir = $request->input('tanggal_berakhir');
        $perusahaan->email_perusahaan = $request->input('email_perusahaan');
    
        // Simpan data ke database
        $perusahaan->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('backend.content4')->with('success', 'Perusahaan berhasil diperbarui.');
    }
    

    public function destroy($id)
    {
        // Cari data pekerja berdasarkan ID
        $pekerja = Perusahaan::findOrFail($id);
    
        // Hapus data pekerja
        $pekerja->delete();
    
        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('backend.content4')->with('success', 'Pekerja berhasil dihapus.');
    }
    
}
