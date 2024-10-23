@extends('backend.layout')

@section('content')
<div class="">
    <h1 class="ms-4 mt-5">Request Pendaftar ke Perusahaan ELITRA</h1>
    <table class="table table-hover ms-4 text-center" style="width: 80%">
        <thead>
          <tr>
            <th colspan="9" style="text-align: center;">
              <div class="input-group" style="max-width: 1000px;">
                <span class="input-group-text bg-warning rounded-start bg-transparent"><a href="#" class="text-white "><i class="bi-search"></i></a></span>
                <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query">
              </div>
            </th>
          </tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Posisi Dilamar</th>
            <th scope="col">Tanggal Submit</th>
            <th scope="col">Email</th>
            <th scope="col">CV</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data3 as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->posisi_dilamar }}</td>
                <td>{{ $row->tanggal_submit }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->cv }}</td>
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