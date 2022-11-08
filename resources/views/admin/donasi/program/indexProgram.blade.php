@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Program Donasi</h1>
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
            <h3 class="card-title">Program Donasi</h3>
        </div>
          <div class="card-body">
                  <a class="btn btn-primary" href="{{ route('program.create') }}">Tambah Program</a> 
                    <br><br>

                    @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif 

                  <form class="form" method="get" action="{{route('program.cari')}}">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2">Pencarian Data Program</label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama Program">
                          <button type="submit" class="btn btn-success mb-1">Cari</button>
                      </div>
                  </form>

              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nama Program</th>
                        <th>Donasi Butuh</th>
                        <th>Donasi Terkumpul</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($paginate as $pgr)
                        <tr>
                        <td class="text-black">{{ $pgr->nama_program}}</td>
                        <td class="text-black">{{ $pgr->dns_butuh }}</td>
                        <td class="text-black">{{ $pgr->dns_terkumpul }}</td>
                        <td><a class="btn btn-info" href="{{ route('program.edit',$pgr->id_program) }}">Edit</td>
                        <td>
                          <form action="{{url('program/'.$pgr->id_program)}}" method="POST">
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