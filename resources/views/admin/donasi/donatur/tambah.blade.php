@extends('layouts.admin.master')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Donatur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Kelola Data Donatur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('donatur.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama </label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="name" >
                        </div>
                        <div class="form-group">
                            <label for="tgl_donasi">Tanggal Donasi</label>
                            <input type="date" name="tgl_donasi" class="form-control" id="tgl_donasi" aria-describedby="tgl_donasi" >
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" >
                        </div>
                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <input type="bigInteger" name="nominal" class="form-control" id="nominal" aria-describedby="nominal" >
                        </div>
                        <div class="form-group">
                            <label for="atas_nama">Atas Nama</label>
                            <input type="text" name="atas_nama" class="form-control" id="atas_nama" aria-describedby="atas_nama" >
                        </div>
                        <div class="form-group">
                            <label for="no_rekening">No Rekening</label>
                            <input type="text" name="no_rekening" class="form-control" id="no_rekening" aria-describedby="no_rekening" >
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" aria-describedby="keterangan" >
                        </div>
                        <div class="form-group">
                            <label for="bukti_tf">Bukti Transfer</label>
                            <input type="file" name="bukti_tf" class="form-control" id="bukti_tf" aria-describedby="bukti_tf" >
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" id="status" aria-describedby="status" >
                        </div>
                        {{-- <a class="btn btn-secondary " href="{{ route('donatur.program') }}">Kembali</a> --}}
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
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