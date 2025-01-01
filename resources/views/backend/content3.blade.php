@extends('backend.layout')

@section('content')
<div class="">
    <h1 class="ms-4 mt-5">Request Pendaftar ke Perusahaan ELITRA</h1>
    <table class="table table-hover ms-4 text-center" style="width: 80%">
        <thead>
          <tr class="border">
            <form method="GET" action="{{ route('backend.content3.index') }}">
            <th scope="col" colspan="9" style="">
              <div class="d-flex" style="width: 100%;">
                <div class="input-group" style="flex: 1;">
                  <span class="input-group-text bg-warning rounded-start bg-transparent">
                    <button type="submit" class="btn"><i class="bi-search"></i></button>
                  </span>
                  <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query">
                </div>
              </div>
            </th>
            </form>
          </tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Posisi Dilamar</th>
            <th scope="col">Email</th>
            <th scope="col">CV</th>
            <th scope="col">Domisili</th>
            <th scope="col">Tanggal Submit</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data3 as $row)
            <tr>
              <th scope="row">{{ $loop->iteration + ($data3->currentPage() - 1) * $data3->perPage() }}</th>
              <td><a href="{{ route('backend.content5', ['nama' => $row->nama]) }}">{{ $row->nama }}</a></td>
                <td>{{ $row->posisi_dilamar }}</td>
                <td>{{ $row->email }}</td>
                <td>
                  @if($row->cv)
                  <a href="{{ asset('storage/' . $row->cv) }}" target="_blank">Lihat CV</a>
                  @else
                  Tidak ada CV
                  @endif
                </td>
                <td>{{ $row->alamat_ktp }}</td>
                <td>{{ $row->tanggal_submit }}</td>
                <td>
                    <form action="{{ route('backend.content3.updateStatus', ['id' => $row->id]) }}" method="post">
                        @csrf
                        @method('patch')
                        <select name="status" class="form-select {{ $row->status == 'Sedang Di Proses' ? 'bg-warning' : ($row->status == 'Lulus' ? 'bg-success' : 'bg-danger') }}" onchange="this.style.backgroundColor = this.options[this.selectedIndex].className == 'bg-warning' ? '#ffc107' : (this.options[this.selectedIndex].className == 'bg-success' ? '#28a745' : '#dc3545'); this.form.submit();">
                          <option class="bg-warning" value="Sedang Di Proses" {{ $row->status == 'Sedang Di Proses' ? 'selected' : '' }}>Sedang Di Proses</option>
                          <option class="bg-success" value="Lulus" {{ $row->status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                          <option class="bg-danger" value="Gagal" {{ $row->status == 'Gagal' ? 'selected' : '' }}>Gagal</option>
                      </select>
                      
                    </form>
                </td>
                <td>
                    <form action="{{ route('backend.content3.destroy', ['id' => $row->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="" style="display: flex; margin-left: 40%;">
      {{ $data3->links() }}
    </div>
    <div class="mt-4 ms-4" style="width: 80%;">
      <h5>Cetak Laporan</h5>
      <form action="{{ route('laporan.generate') }}" method="POST" target="_blank">
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
