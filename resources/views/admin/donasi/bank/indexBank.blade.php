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
                        <td><img width="75px" height="50px" src="{{$b->gambar}}"></td>
                        <td><a class="btn btn-info" href="{{ route('bank.edit',$b->id_bank) }}">Edit</td>
                        <td>
                          <form action="{{url('bank/'.$b->id_bank)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger" type="submit">DELETE</button>
                          </form>
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