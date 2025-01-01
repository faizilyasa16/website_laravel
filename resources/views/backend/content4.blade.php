@extends('backend.layout')

@section('content')
<div class="">
    <h1 class="ms-4 mt-5">List perusahaan yang Terdaftar</h1>
    <table class="table table-hover ms-4 text-center" style="width: 80%">
        <thead>
          <tr class="border">
            <form method="GET" action="{{ route('backend.content4') }}">
            <th scope="col" colspan="8" style="">
              <div class="d-flex" style="width: 100%;">
                <div class="input-group" style="flex: 1;">
                  <span class="input-group-text bg-warning rounded-start bg-transparent">
                    <button type="submit" class="btn"><i class="bi-search"></i></button>
                  </span>
                  <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query">
                </div>
                <a class="btn btn-primary ms-2" href="{{ route('backend.content4.create') }}" role="button">Tambah Data</a>
              </div>
            </th>
            </form>
          </tr>
            <th scope="col">No</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Jumlah Staff Bekerja Sama</th>
            <th scope="col">Tanggal Terdaftar</th>
            <th scope="col">Tanggal Berakhir</th>
            <th scope="col">Email Perusahaan</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data4 as $row)
            <tr>
              <th scope="row">{{ $loop->iteration + ($data4->currentPage() - 1) * $data4->perPage() }}</th>
              <td>{{ $row->perusahaan }}</td>
                <td>{{ $row->jumlah_staff_bekerja_sama }}</td>
                <td>{{ $row->tanggal_terdaftar }}</td>
                <td>{{ $row->tanggal_berakhir }}</td>
                <td>{{ $row->email_perusahaan }}</td>
                <td>{{ $row->status }}</td>
                <td>
                    <form action="{{ route('backend.content4.destroy', ['id' => $row->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <a class="btn btn-primary" href="{{ route('backend.content4.edit', ['id' => $row->id]) }}" role="button">Edit</a>
                      </form>
                </td>
                @endforeach
        </tbody>
      </table>
      <div class="" style="display: flex; margin-left: 40%;">
        {{ $data4->links() }}
      </div>
      <div class="mt-4 ms-4" style="width: 80%;">
        <h5>Cetak Laporan</h5>
        <form action="{{ route('laporan.generate2') }}" method="POST" target="_blank">
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                    <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                </div>
                <div class="col-md-2 align-self-end">
                    <button type="submit" class="btn btn-primary mt-3">Cetak Laporan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection