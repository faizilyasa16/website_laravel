@extends('backend.layout')

@section('content')
<div class="">
    <h1 class="ms-4 mt-5">List perusahaan yang Terdaftar</h1>
    <table class="table table-hover ms-4 text-center" style="width: 80%">
        <thead>
          <tr>
            <th colspan="7" style="text-align: center;">
              <div class="input-group" style="max-width: 1000px;">
                <span class="input-group-text bg-warning rounded-start bg-transparent"><a href="#" class="text-white "><i class="bi-search"></i></a></span>
                <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query">
              </div>
            </th>
            <th scope="col" class="text-end">
                <a class="btn btn-primary" href="#" role="button">Tambah Data</a>
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
</div>
@endsection