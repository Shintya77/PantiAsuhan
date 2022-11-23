@extends('layouts.user.master')
 
@section('content')


<section id="why-us" class="why-us">
        <div class="container">
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col">
                            <a href="/keranjang" class="nav-item nav-link"><i class="fas fa-shopping-cart"
                                style="font-size: 1.8em"></i>
                                Keranjang
                            </a>
                        </div>
                        <div class="col">
                            <div style="float: right">

                                <a href="/riwayat" class="nav-item nav-link"><i class="fas fa-file-alt" 
                                    style="font-size : 1.8em"></i>
                                    Riwayat
                                </a>
                            </div>
                        </div>
                    </div>

                    

                    



                    <div class="section-title">
                        <span>Produk</span>
                        <h2>Produk</h2>
                        <p>Berbagai macam produk kue kami sediakan dengan masing-masing kue berbeda ukuran yaitu ukuran normal,tanggung, dan mini</p>
                    </div>

                    <!-- Cari Produk -->
                    <form class="form" method="get" action="{{ route('produk.cari') }}">
                      <div class="form-group w-100 mb-3">
                          <label for="search" class="d-block mr-2"><strong>Cari Produk Disini</strong></label>
                          <input type="text" name="cari" class="form-control w-50 d-inline" id="cari" placeholder="Nama kue/nasi/tumpeng">
                          <button type="submit" class="btn btn-warning mb-1"><i class="fa fa-search"></i>Cari</button>
                      </div>
                    </form>

                    <!-- List Produk -->
                    <table class="table table-Info table-striped">
                        <thead>
                        <tr>
                            <th style="text-align:center"><B>Nomor</th>
                            <th style="text-align:center"><B>Nama Produk</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td align="center">{{$d->nama}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row">
                        @foreach($data as $d)
                        <div class="col-lg-4" data-aos="fade-up">
                            <div class="box">
                                <span>{{$d->nama}}</span>
                                <img src="{{asset('storage/'.$d->gambar)}}" width="300" height="250"><br><br>
                                <h5>Harga: Rp. {{$d->harga}}</h5>
                                <a class="btn btn-primary btn-sm" href="{{ route('produk.show',$d->id) }}">Detail</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
</section>

  @endsection
