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
                                <span>{{$d->produk->nama}}</span>
                                <img src="{{asset('storage/'.$d->produk->gambar)}}" width="300" height="200">
                                <p>Harga Normal : Rp. {{$d->harga_normal}}</p>
                                <p>Harga Tanggung : Rp. {{$d->harga_tanggung}}</p>
                                <p>Harga Mini : Rp. {{$d->harga_mini}}</p>
                              
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
