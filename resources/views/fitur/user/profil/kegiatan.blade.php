@extends('layouts.user.master')
 
@section('content')

  <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Kegiatan Panti Asuhan </h1>
            <h6 class="text-primary">Kegiatan Panti Asuhan</h6>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/batik celup.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Batik Celup</h4>
                        <p>Kegiatan Batik Celup di Panti Asuhan </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/semua.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Foto Bersama</h4>
                        <p>Foto Bersama Pengurus Panti dan Anak Panti</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/jalan jalan.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Jalan Jalan Ceria</h4>
                        <p>Jalan Jalan Ceria Bersama</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/jalan jalan3.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Jalan Jalan Ceria</h4>
                        <p>Jalan Jalan Ceria Bersama </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/parenting.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Parenting</h4>
                        <p>Kegiatan Sosialisasi Parenting</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/kurban.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Penyembelihan Qurban</h4>
                        <p>Merayakan Hari Raya Idul Adha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/beasiswa2.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Penerimaan Beasiswa</h4>
                        <p>Penerimaan Beasiswa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/riilah2.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Rillah dan Pelepasan Santri</h4>
                        <p>Riilah dan Pelepasan Santri</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/img/kegiatan/riilah3.jpeg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3">Riilah dan Pelepasan Santri</h4>
                        <p>Riilah dan Pelepasan Santri</p>
                    </div>
                </div>
            </div>
            <div class="row content-center">
                <div class="col-10 col-lg-8">
                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft text-white">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection