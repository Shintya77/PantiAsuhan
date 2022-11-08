@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Bank</h1>
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
            <h3 class="card-title">Data Bank</h3>
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
                  <a class="btn btn-primary" href="{{ route('bank.create') }}">Tambah Bank</a> 
                    <br><br>

                    {{-- @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif  --}}

                  <form class="form" method="get" action="#">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2">Pencarian Data Bank</label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama Bank">
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
                        <th>Aksi</th>
                    </tr>
                     
                    </thead>
                    <tbody>
                    @foreach ($paginate as $b)
                    <tr>
                        <td class="text-black">{{ $b->nama_bank}}</td>
                        <td class="text-black">{{ $b->nama_rekening}}</td>
                        <td class="text-black">{{ $b->norekening }}</td>
                        <td><img width="100px" height="100px" src="{{$b->gambar}}"></td>
                        <td>
            
                    <form action="{{ route('bank.destroy',$b->id_bank) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('bank.edit',$b->id_bank) }}"><i class="fa fa-edit"></i>edit</a>
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    </tr>
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