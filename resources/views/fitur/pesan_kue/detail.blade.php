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
                    <div class="swiper-slide"><img src="{{asset($harga->produk->gambar)}}" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <div class="row" data-aos="fade-up">
                        <div class="info-box mb-70">
                            <div class="col-lg-6">
                                <p><h2>{{$harga->produk->nama}}</h2></p>
                                <p>Harga Normal : {{$harga->harga_normal}}</p>
                                <p>Harga Tanggung : {{$harga->harga_tanggung}}</p>
                                <p>Harga Mini : {{$harga->harga_mini}}</p>
                                <p><p><p></p></p></p>
                                <select class="form-select" name="harga_id" id="harga_id">
                                    <option value="{{$harga->id}}">{{$harga->harga_normal}}</option>
                                    <option value="{{$harga->id}}">{{$harga->harga_tanggung}}</option>
                                    <option value="{{$harga->id}}">{{$harga->harga_mini}}</option>
                                  </select>
                                <p></p>
                            
                                <tr>
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>
                                            <form method="post" action="{{ url('\keranjang') }}/{{ $harga->id }}" >
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
            </form>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    @endsection