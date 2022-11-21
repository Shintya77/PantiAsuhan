@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Galeri</h1>
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
            <h3 class="card-title">Data Galeri</h3>
            <div class="card-tools">
              
            </div>
        </div>
          <div class="card-body">
                  <a class="btn btn-primary" href="{{ route('galeri.create') }}">Tambah Galeri</a> 
                    <br><br>
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id Gambar</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                     
                    </thead>
                    <tbody>
                    @foreach ($paginate as $glr)
                    <tr>
                        <td class="text-black">{{ $glr->id}}</td>
                        <td>
                          @if ($glr -> foto)
                          <img src="{{('storage/'.$glr -> foto)}}" class="img-flui" alt="..." width="350px">
                          @else
                          <img src="{{('assets/img/kegiatan/'.$glr -> id.'.jpeg')}}" class="img-flui" alt="..." width="350px">
                          @endif
                        <td>
                          <form action="{{ route('galeri.destroy',$glr->id) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('galeri.edit',$glr->id) }}"><i class="fa fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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