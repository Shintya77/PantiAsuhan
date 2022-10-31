@extends('layouts.user.master')

@section('content')
 
 <!-- Carousel Start -->
 <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('assets')}}/img/carousel-1.jpg'>">
            <img class="img-fluid" src="{{asset('assets')}}/img/carousel-1.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">PANTI ASUHAN PUTRI 'AISYIYAH MALANG</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Panti Asuhan Putri ‘Aisyiyah Kel. Dinoyo Kec. Lowokwaru merupakan salah satu amal usaha dibawah organisasi Muhammadiyah yang dalam hal ini berada dibawah naungan Pimpinan Daerah Muhammadiyah Kota Malang. Sementara dalam penyelenggaraan teknis berada dibawah Pimpinan Daerah ‘Aisyiyah dan Pimpinan Cabang ‘Aisyiyah Lowokwaru.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
<!-- Carousel End -->
@endsection