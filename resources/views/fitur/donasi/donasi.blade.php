@extends('layouts.user.master')

@section('content')
 
 <!-- Carousel Start -->
 <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='{{asset('assets')}}/img/carousel-1.jpg'>">
            <img class="img-fluid" src="{{asset('assets')}}/img/background.jpeg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 text-center">
                            <h1 class=" text-white animated slideInDown">DONASI PANTI ASUHAN</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Saudara, kini untuk melakukan donasi tidak perlu repot harus datang ke Panti Asuhan. Cukup dengan mengakses sistem ini di aplikasi pencarian anda. Sistem berbasis web ini memberikan kemudahan dan kenyamanan para Donatur untuk bertransaksi secara Online.

Berikan shodaqoh/amal jariyah/donasi terbaik Saudara. InsyaAllah kenyamanan, transparansi dan akuntabilitas donasi Anda lebih terjamin melalui sistem donasi ini.</p>
                            <a href="{{url('/profil/donasi')}}" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft">Login</a>
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