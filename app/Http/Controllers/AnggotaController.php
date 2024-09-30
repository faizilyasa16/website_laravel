<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id', 'asc')->get();
        return view('tugas.anggota', [
            'judul' => 'Data Anggota',
            'index' => $anggota
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tugas.tambahAnggota',[
            'judul' => 'Form Tambah Data Anggota'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //debugging request data
        // dd($request);
        //atau lebih banyak informasi debungging pake ddd($request)
        $validasiData = $request->validate([
            'nama' => 'required|max:255',
            'hp' => 'required|max:15',
        ]);
        Anggota::create($validasiData);
        return redirect('/anggota')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('tugas.editAnggota', [
            'judul' => 'Form Edit Data Anggota',
            'anggota' => $anggota
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peraturan = [
            'nama' => 'required|max:255',
            'hp' => 'required|max:15',
        ];
        $validasiData = $request->validate($peraturan);
        Anggota::where('id', $id)->update($validasiData);
        return redirect('/anggota')->with('success', 'Data anggota berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect('/anggota')->with('success', 'Data anggota berhasil dihapus.');
    }
}
