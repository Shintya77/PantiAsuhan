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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Profil Umum</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 col-2">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>10</h3>
  
                    <h5>Galeri</h5>
                      <p>- Galeri Panti -</p>
                      <p></p>
                    </div>
                  <div class="icon">
                    <i class="bi bi-images"></i>
                  </div>
                  <a href="{{route('galeri.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-2">
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>12</h3>
                      <h5>Kegiatan Panti</h5>
                      <p>- Kegiatan Panti -</p>
                      <p></p>
                    </div>
                    <div class="icon">
                      <i class="bi bi-house-fill"></i>
                    </div>
                  <a href="{{route('kegiatan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-2">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>43</h3>
  
                      <h5>Struktur Kepengurusan</h5>
                      <p>-Struktur kepengurusan panti-</p>
                    </div>
                    <div class="icon">
                      <i class="bi bi-diagram-3"></i>
                    </div>
                    <a href="{{route('struktur.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Donasi</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-2">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>0</h3>

                      <h5>Binaan</h5>
                      <p>- Donasi terkumpul saat ini -</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-2">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>0</h3>

                      <h5>Bank</h5>
                      <p>- Bank tersedia saat ini -</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('program.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-2">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>2</h3>

                      <h5>Program</h5>
                      <p>- Program tersedia saat ini -</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('program.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-3 col-2">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>0</h3>

                      <h5>Donatur</h5>
                      <p>- Donatur saat ini -</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('donatur.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-6 col-2">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>Tabel Program</h3>
                      <div class="table-responsive">
                        <table class="table caption-top">
                          <caption>List of users</caption>
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-2">
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3>Tabel Program</h3>
                      <div class="table-responsive">
                        <table class="table caption-top">
                          <caption>List of users</caption>
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                

                
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Katering Kue</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 col-2">
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

                <div class="col-lg-4 col-2">
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

                <div class="col-lg-4 col-2">
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
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
<<<<<<< HEAD
                
=======
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
>>>>>>> 3e937caf23cb4c2192535553c5d7638306bced09
        
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
 
@endsection