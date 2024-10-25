@extends('backend.layout')

@section('content')
<div class="">
    <h1 class="ms-4 mt-5">List perusahaan yang Terdaftar</h1>
    <table class="table table-hover ms-4 text-center" style="width: 80%">
        <thead>
          <tr class="border">
            <th scope="col" colspan="8" style="">
              <div class="d-flex" style="width: 100%;">
                <div class="input-group" style="flex: 1;">
                  <span class="input-group-text bg-warning rounded-start bg-transparent">
                    <a href="#" class="text-white"><i class="bi-search"></i></a>
                  </span>
                  <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query">
                </div>
                <a class="btn btn-primary ms-2" href="{{ route('backend.content4.create') }}" role="button">Tambah Data</a>
              </div>
            </th>
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
                <th scope="row">{{ $loop->iteration }}</th>
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
</div>
@endsection