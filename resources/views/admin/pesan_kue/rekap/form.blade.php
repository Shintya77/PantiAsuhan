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
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pendapatan</h3>
        </div>
          <div class="card-body">
            <form action="{{ route('pesan.pendapatan') }}" method="get" data-toggle="validator" class="form-horizontal">
                    <div class="modal-header">
                        <h4 class="modal-title">Periode Laporan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="tanggal_awal" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Awal</label>
                            <div class="col-lg-6">
                                <input type="text" name="tanggal_awal" id="tanggal_awal" class="form-control datepicker" required autofocus
                                    value="{{ request('tanggal_awal') }}"
                                    style="border-radius: 0 !important;">
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_akhir" class="col-lg-2 col-lg-offset-1 control-label">Tanggal Akhir</label>
                            <div class="col-lg-6">
                                <input type="text" name="tanggal_akhir" id="tanggal_akhir" class="form-control datepicker" required
                                    value="{{ request('tanggal_akhir') ?? date('Y-m-d') }}"
                                    style="border-radius: 0 !important;">
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Lihat</button>
                        <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Batal</button>
                    </div>
            </form>


          </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
 
@endsection