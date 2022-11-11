@extends('layouts.user.master')
@section('content')
<!-- Quote Start -->
<div class="container bg-light overflow-hidden my-5 px-lg-0" id="show">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">

            <div class="d-flex justify-content-center">
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h2 class="mb-4">FORMULIR DONASI PANTI ASUHAN </h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nama Donatur</h6>
                                    <input type="text" name="name" class="form-control border-0" placeholder="Nama Donatur" style="height: 55px; ">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Tanggal Donasi</h6>
                                    <input type="date" name="tgl_donasi" class="form-control border-0" placeholder="Tanggal Donasi" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Alamat Donatur</h6>
                                    <input type="type" name="alamat" class="form-control border-0" placeholder="Alamat Donatur" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Bank</h6>
                                    <select name="nama_bank" id="nama_bank" class="form-select border-0" style="height: 55px;">
                                        {{-- <option selected>Bank</option> --}}
                                        @foreach ($bank as $b)
                                        <option value="{{$b->nama_bank}}" >{{$b->nama_bank}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nominal Donasi</h6>
                                    <input type="type" name="nominal" class="form-control border-0" placeholder="Nominal Donasi" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Rekening Atas Nama</h6>
                                    <input type="type" name="atas_nama" class="form-control border-0" placeholder="Rekening Atas Nama" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nomor Rekening Donatur</h6>
                                    <input type="type" name="no_rekening" class="form-control border-0" placeholder="Nomor Rekening" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Pilih Program</h6>
                                    <select name="nama_program" id="nama_program" class="form-select border-0" style="height: 55px;">
                                        @foreach ($program as $p)
                                        <option value="{{$p->nama_program}}" >{{$p->nama_program}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-black">Keterangan </h6>
                                    <textarea type="text" name="keterangan" class="form-control border-0" placeholder="Keterangan bila perlu"></textarea>
                                </div>
                                <div class="col-12">
                                    <a  href="{{url('/dashboard-donasi')}}" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Batal</a>
                                    <a id="form" onclick="form()" class="btn btn-primary rounded-pill py-2 px-4 animated slideInRight" >Berikutnya</a>
                                    {{-- <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="hide" class="icon-boxes d-none">
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
            <p class="description">Donasi anda adalah sebesar              : Rp  </p><br> 
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
        <input type="file" name="bukti_tf" class="form-control border-0" placeholder="Nominal Donasi" style="height: 55px;">
<br>
</br>
        <a id="upload" onclick="upload()" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Batal</a>
        <button class="btn btn-warning rounded-pill py-2 px-4 animated slideInRight" type="submit">Submit</button>
        {{-- <a href="{{url('/profil/formulir')}}" class="btn btn-warning rounded-pill py-2 px-4 animated slideInRight">Submit</a> --}}
</div> 
</section>
</section><!-- End Icon Boxes Section -->

<!-- Quote End -->
@endsection

@section('script')
<script>
    const form = () => {
    document.querySelector('#show').classList.add('d-none');
    document.querySelector('#hide').classList.remove('d-none');
    // document.querySelector('#edit').classList.add('d-none');
    // document.querySelector('#back').classList.remove('d-none');
    // document.querySelector('#update').classList.remove('d-none');
    // document.querySelector('#username').classList.add('d-none');
}
const upload = () => {
    document.querySelector('#show').classList.remove('d-none');
    document.querySelector('#hide').classList.add('d-none');
    // document.querySelector('#edit').classList.remove('d-none');
    // document.querySelector('#back').classList.add('d-none');
    // document.querySelector('#update').classList.add('d-none');
    // document.querySelector('#username').classList.remove('d-none');
}
</script>
@endsection