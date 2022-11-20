@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Kue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Kelola Data Pesanan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Detail Data Pesanan</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                      <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Tanggal pesanan : </b>{{ $pesanan->created_at}}</li>
                            <li class="list-group-item"><b>Nama Customer : </b>{{ Auth::user()->name }}</li>
                            <li class="list-group-item"><b>Alamat : </b>{{ Auth::user()->alamat }}</li>
                            <li></li>
                            <li class="list-group-item"><b>Detail Pesanan</b></li>
                            <li class="list-group-item"><b>Produk : </b>{{$pesanan->produk->nama }}</li>
                            <li class="list-group-item"><p align="center"> <img width="250px" src="{{asset('storage/'.$pesanan->produk->gambar)}}"></li>
                            <li class="list-group-item"><b>Jumlah Pesan : </b>{{$pesanan->jumlah}} biji</li>
                            <li class="list-group-item"><b>Harga per kue : </b>Rp. {{$pesanan->produk->harga}}</li>
                            <li class="list-group-item"><b>Jumlah Box: </b>{{$pesanan->jumlah_box}} box</li>
                            <li class="list-group-item"><b>Harga per box: </b>{{$pesanan->harga_box}}</li>
                            <li class="list-group-item"><b>Total Bayar: </b>Rp. {{$pesanan->total}}</li>
                      </ul>
                      <a class="btn btn-secondary mt-3" href="{{ route('pesan.index') }}">Kembali</a>
                </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
 
@endsection