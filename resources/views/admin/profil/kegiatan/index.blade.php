@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Kegiatan</h1>
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
            <h3 class="card-title">Data Kegiatan</h3>
            <div class="card-tools">
              
            </div>
        </div>
          <div class="card-body">
                  <a class="btn btn-primary" href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a> 
                    <br><br>
                  <form class="form" method="get" action="#">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2">Pencarian Data Kegiatan</label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama Kegiatan">
                          <button type="submit" class="btn btn-success mb-1">Cari</button>
                      </div>
                  </form>

              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id Kegiatan</th>
                        <th>Foto</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                     
                    </thead>
                    <tbody>
                    @foreach ($paginate as $kg)
                    <tr>
                        <td class="text-black">{{ $kg->id }}</td>
                        <td>
                          @if ($kg -> foto)
                          <img src="{{('storage/'.$kg -> foto)}}" class="img-flui" alt="..." width="350px">
                          @else
                          <img src="{{('assets/img/kegiatanDetail/'.$kg -> id.'.jpeg')}}" class="img-flui" alt="..." width="350px">
                          @endif
                        </td>
                        <td class="text-black">{{ $kg->judul}}</td>
                        <td class="text-black">{{ $kg->deskripsi }}</td>
                        <td>
                          <a class="btn btn-warning" href="{{ route('kegiatan.edit',$kg->id) }}"><i class="fa fa-edit"></i></a>
                          <form action="{{ route('kegiatan.destroy',$kg->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" ><i class="fa fa-trash"></i></button>
                        </td>  
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