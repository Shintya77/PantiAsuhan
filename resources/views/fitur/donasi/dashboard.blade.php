@extends('layouts.user.master')
@section('content')
  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-4 text-primary" >DONASI PANTI ASUHAN </h2>
            <h6 class="text-black"> Saudara, mari bersama-sama gotong royong untuk membantu dan memberikan senyum kebahagiaan bagi mereka. Karena kebaikan akan terasa lebih mudah jika dilakukan bersama-sama</h6>
            <h6 class="text-black">"Sesungguhnya orang-orang yang bersedekah baik laki-laki maupun perempuan dan meminjamkan kepada allah dengan pinjaman yang baik, akan dilipat gandakan (balasannya) bagi mereka; dan mereka akan mendapatkan pahala yang mulia"</h6>
            <h6 class="text-black">(QS Al Hadid ayat 18)</h6>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/beasiswa2.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Donasi Renovasi atap</h4>
                        <p>Donasi ini dikhususkan untuk merenovasi atap Panti Asuhan dengan jumlah yang dibutuhkan sebesar Rp 356 juta </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/parenting.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Donasi Pendidikan</h4>
                        <p>Donasi ini dikhususkan untuk biaya pendidikan anak binaan Panti Asuhan, dengan jumlah yang dibutuhkan sebesar Rp 30 juta</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/parenting2.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Donasi Kebutuhan Pokok</h4>
                        <p>Donasi ini dikhusukan untuk membeli kebutuhan pokok anak binaan Panti Asuhan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-4.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            {{-- <i class="fa fa-file-text fa-3x"></i> --}}
                        </div>
                        <h4 class="mb-3">Formulir Donasi</h4>
                        <a class="small fw-medium" href="{{url('/formulir-donasi')}}">Buka Form<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-5.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            {{-- <i class="fab fa-file-text fa-3x"></i> --}}
                        </div>
                        <h4 class="mb-3">Riwayat Donasi</h4>
                        <a class="small fw-medium" href="{{url('/donasi-riwayat')}}">Buka Form<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            {{-- <i class="fa fa-lightbulb fa-3x"></i> --}}
                        </div>
                        <h4 class="mb-3">Daftar Binaan</h4>
                        <a class="small fw-medium" href="{{url('/daftar-binaan')}}">Buka Form<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@endsection