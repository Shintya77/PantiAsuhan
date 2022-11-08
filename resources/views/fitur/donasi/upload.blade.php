@extends('layouts.user.master')

@section('content')


<!-- ======= Icon Boxes Section ======= -->
<section id="icon-boxes" class="icon-boxes">
<div class="d-flex justify-content-center">
<section id="icon-boxes" class="icon-boxes">
        
        <div class="container">
          <div class="row">
              <div class="col-12 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                  <div class="icon-box">
                      <div class="d-flex justify-content-center">
                          <h4 class=""><a href="" class="text-center">UPLOAD BUKTI TRANSFER </a></h4>
                      </div>


<div class="d-flex justify-content-center">
    <p class="description">INFORMASI DONASI ANDA!!!</p><br>  
</div>  
<p class="description">Donasi anda adalah sebesar              : Rp (jumlah nominal ) </p><br> 
<p class="description">Segera transfer ke rekening atas nama   :  An. (tergantung An. bank yg dipilih )</p><br>
<p class="description">Bank                                    :  Nama Bank </p><br>  
<p class="description">Nomor Rekening                          :  xxxxxxxxxxxxxxxxxx</p><br>  
<div class="d-flex justify-content-center">
    <p class="description">* TERIMAKASIH TELAH IKUT MEMBANTU SAUDARA-SAUDARA KITA YANG LEBIH MEMBUTUHKAN *</p><br>  
</div> 
<div class="d-flex justify-content-center">
    <p class="description">* HARAP CAPTURE DAN UPLOAD BUKTI DONASI INI AGAR TIDAK LUPA, Terimakasih ^^</p><br>  
</div> 
                      
                  </div>
                </div>
          </div>
        </div>
        <br>
</br>
        <p class="description">Upload Bukti Transfer</p><br> 
<br>
</br>
        <a href="{{url('/formulir-donasi')}}" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Batal</a>
        <button class="btn btn-warning rounded-pill py-2 px-4 animated slideInRight" type="submit">Submit</button>
        {{-- <a href="{{url('/profil/formulir')}}" class="btn btn-warning rounded-pill py-2 px-4 animated slideInRight">Submit</a> --}}
</div> 
</section>
      </section><!-- End Icon Boxes Section -->

@endsection