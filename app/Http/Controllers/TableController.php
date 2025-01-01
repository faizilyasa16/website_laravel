<?php

namespace App\Http\Controllers;

use App\Charts\karyawanChart;
use App\Models\SudahKontrak;
use App\Models\belumKontrak;
use App\Models\Pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TableController extends Controller
{
    public function index(Request $request, KaryawanChart $karyawanChart)
    {
        // Ambil data query untuk pekerja kontrak dan non-kontrak
        $queryPekerjaKontrak = $request->input('query_pekerja_kontrak');
        $queryPekerjaNonKontrak = $request->input('query_pekerja_non_kontrak');
        
        // Filter data pekerja dengan kontrak
        $data['data'] = SudahKontrak::where('status', 'kontrak')
        ->when($queryPekerjaKontrak, function ($query) use ($queryPekerjaKontrak) {
            $query->where('nama', 'like', '%' . $queryPekerjaKontrak . '%')
                  ->orWhere('email', 'like', '%' . $queryPekerjaKontrak . '%');
        })->paginate(5);
    
        $data['data2'] = BelumKontrak::where('status', '!=', 'kontrak')
            ->when($queryPekerjaNonKontrak, function ($query) use ($queryPekerjaNonKontrak) {
                $query->where('nama', 'like', '%' . $queryPekerjaNonKontrak . '%')
                    ->orWhere('email', 'like', '%' . $queryPekerjaNonKontrak . '%');
            })->paginate(5);
        
        // Hitung jumlah pekerja yang sudah kontrak dan belum kontrak
        // $sudahKontrakCount = SudahKontrak::where('status', 'kontrak')->count();  
        // $belumKontrakCount = BelumKontrak::where('status', '!=', 'kontrak')->count();  
        // $pendaftarCount = Pendaftar::count(); 
        $webDevCount = Pendaftar::where('posisi_dilamar', 'Web Developer')->count();
        $cyberSecurityCount = Pendaftar::where('posisi_dilamar', 'Cyber Security')->count();
        $softwareDevCount = Pendaftar::where('posisi_dilamar', 'Software Developer')->count();
        $uiUxDesignCount = Pendaftar::where('posisi_dilamar', 'UI/UX')->count();
    
        // Hitung jumlah pekerja untuk setiap posisi
        $webDevCount = Pendaftar::where('posisi_dilamar', 'Web Developer')->count();
        $cyberSecurityCount = Pendaftar::where('posisi_dilamar', 'Cyber Security')->count();
        $softwareDevCount = Pendaftar::where('posisi_dilamar', 'Software Developer')->count();
        $uiUxDesignCount = Pendaftar::where('posisi_dilamar', 'UI/UX')->count();
        
        // Hitung total jumlah pekerja dari semua posisi
        $totalPekerja = $webDevCount + $cyberSecurityCount + $softwareDevCount + $uiUxDesignCount;
    
        // Buat chart karyawan dengan data jumlah pekerja
        $karyawanChart = $karyawanChart->build($webDevCount, $cyberSecurityCount, $softwareDevCount, $uiUxDesignCount);
    
        // Menambahkan data posisi dan total pekerja ke view
        $data['karyawanChart'] = $karyawanChart;
        $data['webDevCount'] = $webDevCount;
        $data['cyberSecurityCount'] = $cyberSecurityCount;
        $data['softwareDevCount'] = $softwareDevCount;
        $data['uiUxDesignCount'] = $uiUxDesignCount;
        $data['totalPekerja'] = $totalPekerja;  // Menambahkan total pekerja
    
        // Kembalikan view dengan data yang sudah diproses
        return view('backend.content2', $data);
    }

    public function create()
    {
        return view('backend.tambahdata_pekerja_kontrak', [
            'title' => 'Form Tambah Data Pekerja',
        ]);
    }

    public function create2()
    {
        return view('backend.tambahdata_pekerja_belum_kontrak', [
            'title' => 'Form Tambah Data Pekerja',
        ]);
    }

    
    public function store(Request $request)
    {
        
        // Validasi input dari user
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi_dikontrak' => 'required|string|max:255',
            'tanggal_mulai_kontrak' => 'required|date',
            'email' => 'required|email|max:255',
            'pt' => 'required|string|max:255',
            'lama_kontrak' => 'required|numeric',
            'upah_kontrak' => 'required|numeric',
            'status' => 'required|in:Kontrak,belum,pendaftar',
        ]);
    
        // Tentukan tabel berdasarkan status kontrak
        if ($request->status == 'Kontrak') {
            $pekerja = new SudahKontrak();
        } elseif ($request->status == 'belum') {
            $pekerja = new BelumKontrak();
        } elseif ($request->status == 'pendaftar') {
            $pekerja = new Pendaftar();
        } else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Simpan data ke dalam model
        $pekerja->nama = $request->input('nama');
        $pekerja->posisi_dikontrak = $request->input('posisi_dikontrak');
        $pekerja->tanggal_mulai_kontrak = $request->input('tanggal_mulai_kontrak');
        $pekerja->email = $request->input('email');
        $pekerja->pt = $request->input('pt');
        $pekerja->lama_kontrak = $request->input('lama_kontrak');
        $pekerja->upah_kontrak = $request->input('upah_kontrak');
        $pekerja->status = $request->input('status');
    
        // Simpan data ke database
        $pekerja->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('backend.content2')->with('success', 'Pekerja berhasil ditambahkan.');
    }
    
    public function store2(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi_keahlian' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'email' => 'required|email|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048', // Menambahkan validasi untuk file
            'status' => 'required|in:Belum Kontrak,pendaftar',
        ]);
    
        // Tentukan tabel berdasarkan status kontrak
        if ($request->status == 'Belum Kontrak') {
            $pekerja = new belumKontrak();
        } elseif ($request->status == 'pendaftar') {
            $pekerja = new Pendaftar();
        } else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Simpan file CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('uploads/cv', 'public'); // Menyimpan file ke folder public/uploads/cv
            $pekerja->cv = $cvPath;
        }
    
        // Simpan data ke dalam model
        $pekerja->nama = $request->input('nama');
        $pekerja->posisi_keahlian = $request->input('posisi_keahlian');
        $pekerja->tanggal_masuk = $request->input('tanggal_masuk');
        $pekerja->email = $request->input('email');
        $pekerja->status = $request->input('status');
    
        // Simpan data ke database
        $pekerja->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('backend.content2')->with('success', 'Pekerja berhasil ditambahkan.');
    }
    
    public function edit($id, $status)
    {
        // Tentukan model berdasarkan status kontrak
        if ($status == 'Kontrak') {
            $pekerja = SudahKontrak::findOrFail($id);
        }else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Kirim data ke view untuk diedit
        return view('backend.editdata_pekerja_kontrak', [
            'pekerja' => $pekerja,
            'status' => $status,
        ]);
    }
    
    public function update(Request $request, $id, $status)
    {
        // Validasi input dari user
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi_dikontrak' => 'required|string|max:255',
            'tanggal_mulai_kontrak' => 'required|date',
            'email' => 'required|email|max:255',
            'pt' => 'required|string|max:255',
            'lama_kontrak' => 'required|numeric',
            'upah_kontrak' => 'required|numeric',
            'status' => 'required|in:Kontrak,belum,pendaftar',
        ]);
    
        // Tentukan model berdasarkan status kontrak
        if ($status == 'Kontrak') {
            $pekerja = SudahKontrak::findOrFail($id);
        } elseif ($status == 'Belum Kontrak') {
            $pekerja = belumKontrak::findOrFail($id);
        } elseif ($status == 'Pendaftar') {
            $pekerja = Pendaftar::findOrFail($id);
        } else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Update data pekerja
        $pekerja->nama = $request->input('nama');
        $pekerja->posisi_dikontrak = $request->input('posisi_dikontrak');
        $pekerja->tanggal_mulai_kontrak = $request->input('tanggal_mulai_kontrak');
        $pekerja->email = $request->input('email');
        $pekerja->pt = $request->input('pt');
        $pekerja->lama_kontrak = $request->input('lama_kontrak');
        $pekerja->upah_kontrak = $request->input('upah_kontrak');
        $pekerja->status = $request->input('status');
    
        // Simpan data ke database
        $pekerja->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('backend.content2')->with('success', 'Pekerja berhasil diperbarui.');
    }
    public function edit2($id, $status)
    {
        // Tentukan model berdasarkan status kontrak
        if ($status == 'Belum Kontrak') {
            $pekerja = belumKontrak::findOrFail($id);
        }
        else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Kirim data ke view untuk diedit
        return view('backend.editdata_pekerja_belum_kontrak', [
            'pekerja' => $pekerja,
            'status' => $status,
        ]);
    }
    
    public function update2(Request $request, $id, $status)
    {
        // Validasi input dari user
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi_keahlian' => 'required|string|max:255',
            'tanggal_masuk' => 'required|date',
            'email' => 'required|email|max:255',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'status' => 'required|in:Belum Kontrak,pendaftar',
        ]);
    
        // Ambil model berdasarkan status kontrak dan id
        if ($status == 'Belum Kontrak') {
            $pekerja = belumKontrak::findOrFail($id);
        } elseif ($status == 'pendaftar') {
            $pekerja = Pendaftar::findOrFail($id);
        } else {
            return redirect()->route('backend.content2')->with('error', 'Status kontrak tidak valid.');
        }
    
        // Update file CV jika ada
        if ($request->hasFile('cv')) {
            // Hapus CV lama jika ada
            if ($pekerja->cv && Storage::disk('public')->exists($pekerja->cv)) {
                Storage::disk('public')->delete($pekerja->cv); // Hapus CV lama
            }
    
            // Pastikan folder ada
            if (!Storage::disk('public')->exists('uploads/cv')) {
                Storage::disk('public')->makeDirectory('uploads/cv');
            }
    
            // Simpan CV baru
            $cvPath = $request->file('cv')->store('uploads/cv', 'public');
            $pekerja->cv = $cvPath; // Update CV path
        }
        
    
        // Update data pekerja
        $pekerja->nama = $request->input('nama');
        $pekerja->posisi_keahlian = $request->input('posisi_keahlian');
        $pekerja->tanggal_masuk = $request->input('tanggal_masuk');
        $pekerja->email = $request->input('email');
        $pekerja->status = $request->input('status');
    
        // Simpan perubahan ke database
        $pekerja->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('backend.content2')->with('success', 'Pekerja berhasil diperbarui.');
    }
    
    
    

    public function destroy($id, $status)
    {
        // Tentukan model berdasarkan status kontrak
        if ($status == 'Kontrak') {
            $pekerja = SudahKontrak::findOrFail($id); // Menggunakan model SudahKontrak
        } elseif ($status == 'Belum Kontrak') {
            $pekerja = BelumKontrak::findOrFail($id); // Menggunakan model BelumKontrak
        } elseif ($status == 'Pendaftar') {
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
