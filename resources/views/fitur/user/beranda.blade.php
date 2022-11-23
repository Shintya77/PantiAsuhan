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
                            <h1 class=" text-white animated slideInDown">PANTI ASUHAN PUTRI 'AISYIYAH MALANG</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Panti Asuhan Putri ‘Aisyiyah Kel. Dinoyo Kec. Lowokwaru merupakan salah satu amal usaha dibawah organisasi Muhammadiyah yang dalam hal ini berada dibawah naungan Pimpinan Daerah Muhammadiyah Kota Malang. Sementara dalam penyelenggaraan teknis berada dibawah Pimpinan Daerah ‘Aisyiyah dan Pimpinan Cabang ‘Aisyiyah Lowokwaru.</p>
                            <a href="{{url('/profil/sejarah')}}" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- ======= Icon Boxes Section ======= -->
<!-- <section id="icon-boxes" class="icon-boxes"> -->
      <!-- <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <h4 class="title"><a href="">Batik Celup</a></h4>
              <p class="description">Merupakan kegiatan rutin yang dilakukan di panti Asuhan Putri 'Aisyiyah Malang. Batik celup adalah proses membuat motif dan warna pada kain putih polos dengan teknik mengikat dan menutup sebagian kain dengan karet selanjutnya dicelup pada pewarna kain misalnya wantex.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title"><a href="">Jalan - Jalan Ceria</a></h4>
              <p class="description">Kegiatan yang dilakukan guna untuk melepas lelah dan penat selama kegiatan belajar mengajar yang diikuti oleh siswa maupun pengasuh. Kegiatan ini merupakan salah acara liburan yang ada di Panti Asuhan ini</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title"><a href="">Parenting</a></h4>
              <p class="description">Merupakan kegiatan atau pekerjaan orangtua dalam mengasuh anak melalui kegiatan parenting juga orangtua dapat mengetahui capaian perkembangan anak dan memberikan pengetahuan kepada orangtua.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <h4 class="title"><a href="">Penyembelihan Kurban</a></h4>
              <p class="description">Kegiatan yang dilakukan dalam rangka memperingati Hari Raya Idul Adha disetiap tahunnya, Panti Asuhan Putri 'Aisyiyah Malang melaksanakan kegiatan penyembelihan hewan qurban.</p>
            </div>
          </div>

        </div>

      </div> -->
    <!-- </section>End Icon Boxes Section -->

    <!-- ======= tentang kami Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <div class="swiper-slide"><img src="assets/img/tempat/p1.jpeg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Panti Asuhan Putri ‘Aisyiyah Malang berdiri karena belum ada panti asuhan putri di Kelurahan Dinoyo Kecamatan Lowokwaru. Begitu juga dinilai masih banyaknya anak yatim yang tidak tertampung dan tidak ada orangtua asuh yang menanggung, sehingga mereka tidak dapat melanjutkan sekolah. 
            </p>
            <a href="{{url('/profil/sejarah')}}"" class="btn-learn-more">Selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- End tentang kami Section -->

    

  </main><!-- End #main -->

@endsection