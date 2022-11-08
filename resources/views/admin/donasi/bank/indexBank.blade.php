@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Produk Kue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
            <h3 class="card-title">Daftar Bank</h3>
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
                  <a class="btn btn-primary" href="#">Tambah Bank</a> 
                    <br><br>

                    {{-- @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif  --}}

                  <form class="form" method="get" action="#">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2">Pencarian Data Bank</label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama Kue">
                          <button type="submit" class="btn btn-success mb-1">Cari</button>
                      </div>
                  </form>

              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nama Bank</th>
                        <th>Nama Rekening</th>
                        <th>No Rekening</th>
                        <th>Gambar</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                                <td>Nama Bank</td>
                                <td>Gambar></td>
                                <td>Harga Normal</td> 
                                <td>Harga Tanggung</td>
                                <td>
                                  <form action="#" method="POST">
                                    <a class="btn btn-info" href="#"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i></a>
                                   
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                  </form>
                                </td>
                            </tr>
                            
                    </tbody>
              </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                   <div class="paginate">
                      <div class="container">
                        <div class="row">
                            <div class="mx-auto">
                                <div class="paginate-button col-md-12">
                                    pagination
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