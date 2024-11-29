@extends('backend.layout')
@section('content')
    <h1 class="m-3">Dashboard</h1>
    <div class="mt-5">
      <div class="ms-3 mb-5 text-center">
        <h2>Pendaftar Elitra</h2>
        <div class="bg-warning mt-1 mx-auto" style="height: 4px; width: 10%;"></div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div id="karyawanChartContainer" class="chart-container mb-5 ms-3 pb-5">      
            {!! $karyawanChart->container() !!}
          </div>  
        </div>
        <div class="col-md-6">
          <div class="row">
            <!-- Web Developer -->
            <div class="col-md-6 mb-4">
              <div class="chart-container ms-3 p-4 border rounded shadow-lg">
                <div class="d-flex justify-content-center">
                  <div class="d-inline-flex align-items-center">
                    <div class="rounded-circle bg-primary" style="height: 20px; width: 20px;"></div>
                    <h3 class="text-center text-primary mb-0 ms-2">Web Developer</h3>
                  </div>
                </div>                
                <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
                <h1 class="mt-3 text-center">{{ $webDevCount }}</h1>
              </div>  
            </div>
        
            <!-- UI/UX Designer -->
            <div class="col-md-6 mb-4">
              <div class="chart-container ms-3 p-4 border rounded shadow-lg">
                <div class="d-flex justify-content-center">
                  <div class="d-inline-flex align-items-center">
                    <div class="rounded-circle" style="height: 20px; width: 20px; background-color:pink;"></div>
                    <h3 class="text-center text-primary mb-0 ms-2">UI/UX Designer</h3>
                  </div>
                </div>   
                <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
                <h1 class="mt-3 text-center">{{ $uiUxDesignCount }}</h1>
              </div>  
            </div>

            <!-- Cyber Security -->
            <div class="col-md-6 mb-4">
              <div class="chart-container ms-3 p-4 border rounded shadow-lg">
                <div class="d-flex justify-content-center">
                  <div class="d-inline-flex align-items-center">
                    <div class="rounded-circle bg-danger" style="height: 20px; width: 20px;"></div>
                    <h3 class="text-center text-primary mb-0 ms-2">Cyber Security</h3>
                  </div>
                </div>   
                <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
                <h1 class="mt-3 text-center">{{ $cyberSecurityCount }}</h1>
              </div>  
            </div>

            <!-- Software Developer -->
            <div class="col-md-6 mb-4">
              <div class="chart-container ms-3 p-4 border rounded shadow-lg">
                <div class="d-flex justify-content-center">
                  <div class="d-inline-flex align-items-center">
                    <div class="rounded-circle bg-warning" style="height: 20px; width: 20px;"></div>
                    <h3 class="text-center text-primary mb-0 ms-2">Software Developer</h3>
                  </div>
                </div>                   <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
                <h1 class="mt-3 text-center">{{ $softwareDevCount }}</h1>
              </div>  
            </div>

            <div class="col-12">
              <div class="chart-container ms-3 p-4 border rounded shadow-lg" style="height: 170px;">
                <h3 class="text-center text-primary">Total Pendaftar ke Elitra</h3>
                <div class="bg-warning mt-3" style="height: 4px; width: 100%;"></div>
                <h1 class="mt-3 text-center">{{ $totalPekerja }}</h1>
              </div>
            </div>
            

        
          </div>
        </div>
        
      </div>
        <h3 class="ms-4 mb-3">Pekerja yang Sudah memiliki Kontrak</h1>
        <table class="table table-hover ms-4 text-center" style="width: 80%">
            <thead>
              <tr class="border">
                <form method="GET" action="{{ route('backend.content2') }}">
                <th scope="col" colspan="10" style="">
                  <div class="d-flex" style="width: 100%;">
                    <div class="input-group" style="flex: 1;">
                      <span class="input-group-text bg-warning rounded-start bg-transparent">
                        <button type="submit" class="btn"><i class="bi-search"></i></button>
                      </span>
                      <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query_pekerja_kontrak">
                    </div>
                    <a class="btn btn-primary ms-2" href="{{ route('backend.content2.create') }}" role="button">Tambah Data</a>
                  </div>
                </th>
                </form>
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
                  <th scope="row">{{ $loop->iteration + ($data->currentPage() - 1) * $data->perPage() }}</th>
                  <td>{{ $row->nama }}</td>
                    <td>{{ $row->posisi_dikontrak }}</td>
                    <td>{{ $row->tanggal_mulai_kontrak }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->pt }}</td>
                    <td>{{ $row->lama_kontrak }}</td>
                    <td>{{ $row->upah_kontrak }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                      <form action="{{ route('backend.content2.destroy', ['id' => $row->id, 'status' => $row->status]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <a class="btn btn-primary" href="{{ route('backend.content2.edit', ['id' => $row->id, 'status' => $row->status]) }}" role="button">Edit</a>
                    </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>

          </table>
          <div class="" style="display: flex; margin-left: 40%;">
            {{ $data->links() }}
          </div>
        

      
          <div class="ms-4 mt-5 text-center">
            <h3 class="text-start">Pekerja yang Belum memiliki Kontrak</h1>
            <table class="table table-hover mt-3" style="width: 81%">
                <thead>
                  <tr class="border">
                    <form method="GET" action="{{ route('backend.content2') }}">
                      <th scope="col" colspan="8" style="">
                      <div class="d-flex" style="width: 100%;">
                        <div class="input-group" style="flex: 1;">
                          <span class="input-group-text bg-warning rounded-start bg-transparent">
                            <button type="submit" class="btn"><i class="bi-search"></i  ></button>
                          </span>
                          <input class="form-control" type="search" placeholder="Cari sesuatu..." aria-label="Search" name="query_pekerja_non_kontrak">
                        </div>
                        <a class="btn btn-primary ms-2" href="{{ route('backend.content2.create2') }}" role="button">Tambah Data</a>
                      </div>
                    </th>
                    </form>
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
                      <th scope="row">{{ $loop->iteration + ($data2->currentPage() - 1) * $data2->perPage() }}</th>
                      <td>{{ $row2->nama }}</td>
                        <td>{{ $row2->posisi_keahlian }}</td>
                        <td>{{ $row2->tanggal_masuk }}</td>
                        <td>{{ $row2->email }}</td>
                        <td>
                          @if($row2->cv)
                          <a href="{{ asset('storage/' . $row2->cv) }}" target="_blank">Lihat CV</a>
                          @else
                          Tidak ada CV
                          @endif
                        </td>
                        <td class="text-white {{ $row2->status == 'Belum Kontrak' ? 'bg-danger' : 'bg-success' }} status-badge">
                          {{ $row2->status }}
                      </td>
                      
                                              <td>
                          <form action="{{ route('backend.content2.destroy', ['id' => $row2->id, 'status' => $row2->status]) }}" method="POST">
                            @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a class="btn btn-primary" href="{{ route('backend.content2.edit2', ['id' => $row2->id, 'status' => $row2->status]) }}" role="button">Edit</a>
                            </form>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
              </table>
              <div class="" style="display: flex; margin-left: 39.2%;">
                {{ $data2->links() }}
              </div>
            
          </div>
    </div>

@endsection
