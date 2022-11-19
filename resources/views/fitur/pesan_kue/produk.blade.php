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
