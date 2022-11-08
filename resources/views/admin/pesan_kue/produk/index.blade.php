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
              <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Kelola Data Produk Kue</li>
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
            <h3 class="card-title">Detail Produk Kue</h3>
        </div>
          <div class="card-body">

                    {{-- @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif  --}}

                  <form class="form" method="get" action="{{ route('detailKue.cari') }}">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2">Pencarian Data Produk</label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama Kue">
                          <button type="submit" class="btn btn-success mb-1">Cari</button>
                      </div>
                  </form>

              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nama Kue</th>
                        <th>Gambar</th>
                        <th>Harga Normal</th>
                        <th>Harga Tanggung</th>
                        <th>Harga Mini</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($paginate as $produk)
                            <tr>
                                <td>{{ $produk->produk->nama }}</td>
                                <td><img width="150px" height="150px" src="{{asset('storage/'.$produk->produk->gambar)}}"></td>
                                <td>Rp. {{ $produk->harga_normal }}</td> 
                                <td>Rp. {{ $produk->harga_tanggung }}</td>
                                <td>Rp. {{ $produk->harga_mini }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('detailKue.show',$produk->id) }}"><i class="fa fa-eye"></i></a>
                                    
                                </td>
                            </tr>
                        @endforeach
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
                                {{ $paginate->links() }}
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