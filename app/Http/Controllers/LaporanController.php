<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar; // Sesuaikan dengan nama model Anda
use App\Models\Perusahaan;
use Mpdf\Mpdf;

class LaporanController extends Controller 
{
    public function generate(Request $request)
    {
        // Validasi input tanggal
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ]);

        // Ambil data produk berdasarkan tanggal
        $pendaftar = Pendaftar::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->get();

        // Jika tidak ada data
        if ($pendaftar->isEmpty()) {
            return redirect()->back()->withErrors('Tidak ada data produk untuk rentang tanggal yang dipilih.');
        }

        // Siapkan konten HTML untuk laporan
        $html = view('backend.laporan_pdf_pendaftar', compact('pendaftar', 'request'))->render();

        // Buat instance mPDF
        $mpdf = new Mpdf();

        // Tulis HTML ke PDF
        $mpdf->WriteHTML($html);

        // Unduh file PDF
        return $mpdf->Output('laporan-produk.pdf', \Mpdf\Output\Destination::INLINE);
    }
    public function generate2(Request $request)
    {
        // Validasi input tanggal
        $request->validate([
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ]);

        // Ambil data produk berdasarkan tanggal
        $perusahaan = Perusahaan::whereBetween('created_at', [$request->tanggal_awal, $request->tanggal_akhir])->get();

        // Jika tidak ada data
        if ($perusahaan->isEmpty()) {
            return redirect()->back()->withErrors('Tidak ada data produk untuk rentang tanggal yang dipilih.');
        }

        // Siapkan konten HTML untuk laporan
        $html = view('backend.laporan_pdf_perusahaan', compact('perusahaan', 'request'))->render();

        // Buat instance mPDF
        $mpdf = new Mpdf();

        // Tulis HTML ke PDF
        $mpdf->WriteHTML($html);

        // Unduh file PDF
        return $mpdf->Output('laporan-produk.pdf', \Mpdf\Output\Destination::INLINE);
    }
}
