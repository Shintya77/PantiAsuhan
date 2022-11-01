@extends('layouts.user.master')
 
@section('content')

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <p><a href="{{url('/produk')}}">< Produk</a> / Detail</p>
        <div class="section-title">
            <span>Detail Produk</span>
          <h2>Detail Produk</h2>
        </div>

        <div class="row content">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="swiper-slide"><img src="{{asset($produk->gambar)}}" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="row" data-aos="fade-up">
                        <div class="info-box mb-70">
                            <div class="col-lg-6">
                                <p><h2>{{$produk->nama}}</h2></p>
                                <p>Deskripsi....................</p>
                                <p><p><p></p></p></p>
                                <h3>Rp. {{$produk->harga}}</h3>
                                <p></p>
                            
                                <tr>
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('\keranjang') }}/{{ $produk->id }}" >
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>

                              
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    @endsection