@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Donasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('donatur.index')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Kelola Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Donasi</h3>
        </div>
          <div class="card-body">
                  <a class="btn btn-primary" href="{{ route('donatur.create') }}">Tambah Data Donatur</a> 
                  <a class="btn btn-success" href="{{ route('donatur.cetak') }}">Cetak Data Donatur</a> 
                    <br><br>

                    {{-- @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif  --}}

                    {{-- //TODO CARI MASIH SEMUA BELUM PER PROGRAM  --}}
                  <form class="form" method="get" action="{{route('donatur.cari')}}">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2">Pencarian Data Donatur</label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama Donasi">
                          <button type="submit" class="btn btn-success mb-1"><i class="bi bi-search"></i></button>
                      </div>
                  </form>
                  <div class="table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Id</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Alamat</th>
                          <th>Nominal</th>
                          <th>Atas Nama</th>
                          <th>No Rekening Donatur</th>
                          <th>Keterangan</th>
                          <th>Bukti Transfer</th>
                          <th>Status</th>
                          <th>Lihat Data</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($donatur as $donasi)
                        <tr>
                        <td class="text-black">{{ $donasi->id_donatur}}</td>
                        <td class="text-black">{{ $donasi->name}}</td>
                        <td class="text-black">{{ $donasi->tgl_donasi}}</td>
                        <td class="text-black">{{ $donasi->alamat }}</td>
                        <td class="text-black">{{ $donasi->nominal }}</td>
                        <td class="text-black">{{ $donasi->atas_nama }}</td>
                        <td class="text-black">{{ $donasi->no_rekening }}</td>
                        <td class="text-black">{{ $donasi->keterangan }}</td>
                        <td><img width="100px" height="100px" src="{{asset('storage/'.$donasi->bukti_tf)}}"></td>
                        <td class="text-black">{{ $donasi->status }}</td>
                        <td>
                          <form action="{{ route('donatur.show',$donasi->id_donatur) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-info"><i class="bi bi-eye display-9"></i></button>
                          </form>
                        </td>
                        <td>
                          {{-- <form action="{{ route('donatur.update',$donasi->id_donatur) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                          </form> --}}
  
                        <form action="{{ route('donatur.destroy',$donasi->id_donatur) }}" method="POST">
  
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form> 
                        </td>
                        @endforeach  
                      </tbody>
                </table>
                  </div>

              
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                   <div class="paginate">
                      <div class="container">
                        <div class="row">
                            <div class="mx-auto">
                                <div class="paginate-button col-md-12">
                                  {{ $donatur->links() }}
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
          </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
 
@endsection