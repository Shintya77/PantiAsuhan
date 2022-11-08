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
              <li class="breadcrumb-item active">Kelola Data Bank</li>
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
                    <div class="card-tools">
                
                    </div>
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
                    <form method="post" action="{{ route('bank.update', $bank->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_bank">Nama Bank</label>
                            {{-- <input type="id_bank" name="id_bank" class="form-control" id="id_bank" value="{{ $bank->nama_bank }}" aria-describedby="nama_bank" > --}}
                            <select name="id_bank" id="id_bank" class="form-control">
                                @foreach ($bank as $b)
                                  <option value="{{$b->id}}" {{$bank->id_bank == $b->id ? 'selected' : ''}} >{{$b->nama_bank}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="nama_rekening">Nama Rekening</label>
                            <input type="text" name="nama_rekening" class="form-control" required="required" value="{{ $bank->nama_rekening}}" >
                        </div>
                        <div class="form-group">
                            <label for="norekening">No Rekening</label>
                            <input type="text" name="norekening" class="form-control" required="required" value="{{ $bank->norekening }}" >
                        </div>
                        <div class="form-group">
                            <label for="gambar">Harga Mini</label>
                            <input type="file" name="gambar" class="form-control" required="required" value="{{ $bank->gambar}}" >
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