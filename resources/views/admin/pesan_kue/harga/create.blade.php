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
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Kelola Data Harga Kue</li>
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
                    <form action="{{ route('harga.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="produk_id">Produk Kue</label>
                            <select name="produk_id" id="produk_id" class="form-control">
                              @foreach ($produk as $p)
                                <option value="{{$p->id}}">{{$p->nama}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga_normal">Harga Normal</label>
                            <input type="integer" name="harga_normal" class="form-control" id="harga_normal" aria-describedby="harga_normal" >
                        </div>
                        <div class="form-group">
                            <label for="harga_tanggung">Harga Tanggung</label>
                            <input type="integer" name="harga_tanggung" class="form-control" id="harga_tanggung" aria-describedby="harga_tanggung" >
                        </div>
                        <div class="form-group">
                            <label for="harga_mini">Harga Mini</label>
                            <input type="integer" name="harga_mini" class="form-control" id="harga_mini" aria-describedby="harga_mini" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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