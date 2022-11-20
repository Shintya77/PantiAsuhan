@extends('layouts.admin.master')

@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Harga Kue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Kelola Data Produk</li>
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
                    <form method="post" action="{{ route('kue.update', $kue->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Kue</label>
                            <input type="text" name="nama" class="form-control" required="required" value="{{ $kue->nama }}" >
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" required="required" name="gambar" value="{{ $kue->gambar }}" >
                            <img width="100px" src="{{asset('storage/'.$kue->gambar)}}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="integer" name="harga" class="form-control" required="required" value="{{ $kue->harga }}" >
                        </div>
                        <a class="btn btn-secondary " href="{{ route('kue.index') }}">Kembali</a>
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