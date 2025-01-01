<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pendaftarController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian
        $data3 = Pendaftar::where('nama', 'LIKE', "%{$query}%") // Cari berdasarkan nama
                    ->orWhere('posisi_dilamar', 'LIKE', "%{$query}%") // Atau posisi yang dilamar
                    ->orWhere('email', 'LIKE', "%{$query}%") // Atau email
                    ->paginate(5); // Paginate hasil
        // Kirim data ke view
        return view('backend.content3', compact('data3'));
    }
    public function index2(Request $request, $nama)
    {
        // Contoh mengambil data berdasarkan nama
        $data = Pendaftar::where('nama', $nama)->first();
    
        // Jika data tidak ditemukan, kembalikan ke halaman sebelumnya dengan pesan error
        if (!$data) {
            return redirect()->route('backend.content3')->with('error', 'Data tidak ditemukan');
        }
    
        // Kirim data ke view content5
        return view('backend.content5', compact('data'));
    }
    public function updateStatus(Request $request, $id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = $request->status;
        $pendaftar->save();

        return redirect()->route('backend.content3.index')->with('success', 'Status berhasil diperbarui');
    }

    

    public function store(Request $request)
    {
        // Validasi data form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'tanggal_lahir' => 'required|date|before:today',
            'email' => 'required|email|max:255',
            'no_telepon' => 'required|string|max:15',
            'alamat_ktp' => 'required|string|max:255',
            'alamat_tinggal' => 'required|string|max:255',
            'jabatan_sebelumnya' => 'required|string|max:255',
            'lama_pengalaman' => 'required|numeric',
            'gaji_diharapkan' => 'required|numeric|max:100000000',
            'cv' => 'required|file|mimes:pdf,docx|max:2048',
            'posisi_dilamar' => 'required|string|max:100',
            'linkedin' => 'nullable|url|max:255',
            'status' => 'nullable|string|max:50',
        ]);
    
        try {
            $pendaftar = new Pendaftar($validatedData);
            
            // Set tanggal_submit dengan tanggal saat ini
            $pendaftar->tanggal_submit = now();
            
            // Mengatur status menjadi null jika tidak ada input status
            $pendaftar->status = $request->input('status', 'Sedang Di Proses');

            
            // Proses upload file CV
            if ($request->hasFile('cv')) {
                $cvPath = $request->file('cv')->store('cv_uploads', 'public');
                $pendaftar->cv = $cvPath;
            }
            
            $pendaftar->save(); // Simpan data pendaftar ke dalam database
            
    
            // Redirect ke halaman backend.content2 dengan pesan sukses
            return redirect()->route('lowonganfrontend')->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            // Redirect kembali jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        }
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
