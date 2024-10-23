@extends('backend.layout')

@section('content')
    <h1 class="m-3">Dashboard</h1>
    <div class="mt-5">
        <h3 class="ms-4 mb-1">Pekerja yang Sudah memiliki Kontrak</h1>
        <table class="table table-hover ms-4 text-center" style="width: 80%">
            <thead>
              <tr>
                <th colspan="9" style="text-align: center;">
                  <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query" style="width: 100%; max-width: 1000px;">
                </th>
                <th scope="col" class="text-end">
                  <a class="btn btn-primary" href="#" role="button">Tambah Data</a>
                </th>
              </tr>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Posisi Dikontrak</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Email</th>
                <th scope="col">PT</th>
                <th scope="col">Lama Kontrak(Bulan)</th>
                <th scope="col">Upah Kontrak</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->posisi_dikontrak }}</td>
                    <td>{{ $row->tanggal_mulai_kontrak }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->pt }}</td>
                    <td>{{ $row->lama_kontrak }}</td>
                    <td>{{ $row->upah_kontrak }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                        <form action="{{ route('backend.content2.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <a class="btn btn-primary" href="#" role="button">Edit</a>
                        </form>
                    </td>
                    @endforeach
            </tbody>
          </table>
          <div class="ms-4 mt-5 text-center">
            <h3 class="text-start">Pekerja yang Belum memiliki Kontrak</h1>
            <table class="table table-hover mt-1" style="width: 80%">
                <thead>
                  <tr>
                    <th colspan="7" style="text-align: center;">
                      <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query" style="width: 100%; max-width: 1000px;">
                    </th>
                    <th scope="col" class="text-end">
                      <a class="btn btn-primary" href="#" role="button">Tambah Data</a>
                    </th>
                  </tr>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Posisi Keahlian</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Email</th>
                    <th scope="col">CV</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data2 as $row2)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row2->nama }}</td>
                        <td>{{ $row2->posisi_keahlian }}</td>
                        <td>{{ $row2->tanggal_masuk }}</td>
                        <td>{{ $row2->email }}</td>
                        <td>{{ $row2->cv }}</td>
                        <td>{{ $row2->status }}</td>
                        <td>
                            <form action="{{ route('backend.content2.destroy', $row2->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a class="btn btn-primary" href="#" role="button">Edit</a>
                            </form>
                        </td>
                        @endforeach
                </tbody>
              </table>
          </div>
    </div>
@endsection
