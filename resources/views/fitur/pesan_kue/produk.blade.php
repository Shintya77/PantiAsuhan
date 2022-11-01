@extends('layouts.user.master')
 
@section('content')


<section id="why-us" class="why-us">
        <div class="container">
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <span>Produk</span>
                        <h2>Produk</h2>
                        <p>Berbagai macam produk kue kami sediakan</p>
                    </div>

                    <div class="row">
                        @foreach($data as $d)
                        <div class="col-lg-4" data-aos="fade-up">
                            <div class="box">
                                <span>{{$d->nama}}</span>
                                <img src="{{$d->gambar}}" width="300" height="200">
                                <h4>Rp. {{$d->harga}}</h4>
                                <a href="#" class="btn btn-primary btn-sm">Keranjang</a>
                                <a class="btn btn-warning btn-sm" href="{{ route('produk.show',$d->id) }}">Detail</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
</section>

  @endsection
