@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pendapatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Pendapatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <h3 class="card-title">Laporan Pendapatan</h3>
                    </div>
                    <div class="card-body">
                    <h3 class="text-center">Periode Tanggal {{$tanggalAwal, false}} s/d {{$tanggalAkhir, false}}</h3>
                    <br>
                    <div class="row">
                        <div class="col col-lg-4 col-md-4">
                        <h4 class="text-center">Ringkasan Transaksi</h4>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><B>Total Pendapatan</td>
                                <td>Rp. {{$pendapatan}}</td>
                            </tr>
                            <tr>
                                <td><B>Total Transaksi</td>
                                <td>{{$transaksi}}</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col col-lg-12 col-md-8">
                        <h4 class="text-center">Rincian Transaksi</h4>
                        <div class="table-responsive">
                            <table class="table table-stripped">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Kue</th>
                                <th>Harga/Kue</th>
                                <th>Jumlah Box</th>
                                <th>Harga/Box</th>
                                <th>Total Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rincian as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $d->produk->nama }}</td>
                                    <td>{{ $d->jumlah }} biji</td>
                                    <td>Rp {{ number_format($d->produk->harga)}}</td>
                                    <td>{{ $d->jumlah_box }}</td>
                                    <td>Rp {{ number_format($d->harga_box)}}</td>
                                    <td>Rp. {{ $d->total }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <button align="right" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-print"></i> Cetak PDF</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
 
@endsection