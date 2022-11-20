@extends('layouts.admin.master')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          
                <div class="row">

                  <div class="col-lg-4     col-2">
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>10</h3>

                      <h4>Galeri</h4>
                        <p>- Galeri Panti -</p>
                        <p></p>
                      </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('galeri.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>12</h3>

                      <h4>Kegiatan Panti</h4>
                        <p>- Kegiatan Panti -</p>
                        <p></p>
                      </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('kegiatan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>43</h3>

                        <h4>Struktur Kepengurusan</h4>
                        <p>- Struktur kepengurusan panti -</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="{{route('struktur.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>2</h3>

                        <h4>Program</h4>
                        <p>- Program tersedia saat ini -</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="{{route('program.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>0</h3>

                        <h4>Donatur</h4>
                        <p>- Donatur saat ini -</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="{{route('donatur.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>Rp. 0</h3>

                        <h4>Donasi Terkumpul</h4>
                        <p>- Donasi terkumpul saat ini -</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>{{$produk}}</h3>

                        <h4>Produk Kue</h4>
                        <p>- ukuran normal/tanggung/mini -</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="{{route('kue.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>{{$pesanan}}</h3>

                        <h4>Pesanan Kue</h4>
                        <p>- Pesanan keseluruhan -</p>
                        <p></p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="{{route('pesan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4     col-2">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>Rp. {{$pendapatan}}</h3>

                        <h4>Pendapatan</h4>
                        <p>- Pendapatan keseluruhan -</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="{{route('pesan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                    </div>
        
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
 
@endsection