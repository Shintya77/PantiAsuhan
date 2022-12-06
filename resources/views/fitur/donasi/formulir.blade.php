@extends('layouts.user.master')
@section('content')
<!-- Quote Start -->
<form action="/formulir-donasi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container bg-light overflow-hidden my-5 px-lg-0" id="show">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Upss!</strong> Ada Kesalahan dalam Data Penginputan<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">

                <div class="d-flex justify-content-center">
                    <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 pe-lg-0">
                            <h2 class="mb-4">FORMULIR DONASI PANTI ASUHAN </h2>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nama Donatur</h6>
                                    <input type="text" name="name" class="form-control border-0"
                                        placeholder="Nama Donatur" style="height: 55px; "
                                        value="{{Auth::user() -> name}}">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hide"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Sembunyikan nama anda sebagai donatur
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Tanggal Donasi</h6>
                                    <input type="date" name="tgl_donasi" class="form-control border-0"
                                        placeholder="Tanggal Donasi" style="height: 55px;" value="{{date('Y-m-d')}}">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Alamat Donatur</h6>
                                    <input type="text" name="alamat" class="form-control border-0"
                                        placeholder="Alamat Donatur" style="height: 55px;"
                                        value="{{Auth::user() -> alamat}}">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Bank</h6>
                                    <select name="id_bank" id="nama_bank" class="form-select border-0"
                                        style="height: 55px;" required>
                                        {{-- <option selected>Bank</option> --}}

                                        @foreach ($bank as $b)
                                        @if ($b->nama_bank != 'Tunai')
                                        <option value="{{$b->id_bank}}">{{$b->nama_bank}} - {{$b->norekening}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nominal Donasi</h6>
                                    <input type="number" name="nominal" class="form-control border-0"
                                        placeholder="Nominal Donasi" style="height: 55px;" id="inputNominal">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Rekening Atas Nama</h6>
                                    <input type="text" name="atas_nama" id="input_atasNama"
                                        class="form-control border-0" placeholder="Rekening Atas Nama"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nomor Rekening Donatur</h6>
                                    <input type="text" name="no_rekening" id="input_noRekening"
                                        class="form-control border-0" placeholder="Nomor Rekening"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Pilih Program</h6>
                                    <select name="id_program" id="inputNamaProgram" class="form-select border-0"
                                        style="height: 55px;">
                                        <option>Pilih Program</option>
                                        @foreach ($program as $p)
                                        @if ($p->status == 'open')
                                        <option value="{{$p->nama_program}}">{{$p->nama_program}}</option>
                                        @else
                                        <option>Tidak Ada Program Tersedia</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-black">Keterangan </h6>
                                    <textarea type="text" name="keterangan" class="form-control border-0"
                                        placeholder="Keterangan bila perlu"></textarea>
                                </div>
                            </div class="col-12">
                            <h6 class="description">Upload Bukti Transfer (.png, .jpg, .jpeg)</h6>
                            <img src="" class="img-preview img-fluid mb-3 " alt="">
                            <input type="file" name="bukti_tf" class="form-control border-0"
                                placeholder="Upload Bukti Transfer Donasi" style="height: 55px;" id="image"
                                onchange="previewImage()">
                        </div>
                        <div class="col-12">
                            <a href="{{url('/dashboard-donasi')}}"
                                class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Batal</a>
                            <a id="form" onclick="form()"
                                class="btn btn-primary rounded-pill py-2 px-4 animated slideInRight">Berikutnya</a>
                            {{-- <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button> --}}
                        </div>
                    </div>

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
                                <div class="row">
                                    <div class="col-2">

                                    </div>
                                    <div class="col-10">

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="assets/img/logopanti.png" class="img-fluid mx-5 " alt="">
                                    <div class="m-auto" ">
                                        <h4 class=""><a href="" class="text-center">INFORMASI DONASI </a></h4>
                                    </div>
                                </div>

                                <p class="description">Donasi anda adalah sebesar : <span id="nominal"></span> </p><br>
                                <p class="description">Donasi untuk Program : <span id="nama_program"></span></p><br>
                                <p class="description">Nomor Rekening Anda : <span id="no_rekening"></span></p><br>
                                <p class="description">Atas Nama : <span id="atas_nama"></span></p><br>
                                <div class="d-flex justify-content-center">
                                    <p class="description">* TERIMAKASIH TELAH IKUT MEMBANTU SAUDARA-SAUDARA KITA YANG
                                        LEBIH MEMBUTUHKAN *</p><br>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="description">*Semoga Allah Yang Maha Pemurah melimpahkan barokah-Nya atas
                                        amal baik Bapak/Ibu /Saudara sekeluarga*</p><br>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="description">Aamiin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-3">
                    <a id="upload" onclick="upload()"
                        class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Batal</a>
                    <button class="btn btn-warning rounded-pill py-2 px-4 animated slideInRight"
                        type="submit">Submit</button>
                </div>
                {{-- <a href="{{url('/profil/formulir')}}" class="btn btn-warning rounded-pill py-2 px-4 animated
                slideInRight">Submit</a> --}}
        </div>
    </section>
</form>

<!-- Quote End -->
@endsection

@section('script')
<script>
    const form = () => {
    document.querySelector('#show').classList.add('d-none');
    document.querySelector('#hide').classList.remove('d-none');
}
const upload = () => {
    document.querySelector('#show').classList.remove('d-none');
    document.querySelector('#hide').classList.add('d-none');
}
</script>

<script>
    const inputNominal = document.querySelector('#inputNominal');
    const nominal = document.querySelector('#nominal');
    inputNominal.addEventListener('keyup', function(e){
        nominal.innerHTML = formatCurrency(this.value, 'Rp. ');
    })

    function formatCurrency(angka, prefix){
        let number_string = angka.replace(/[^,\d]/g,'').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    const inputAtasNama = document.querySelector('#input_atasNama');
    const atasNama = document.querySelector('#atas_nama');
    inputAtasNama.addEventListener('keyup', function(e){
        atasNama.innerHTML = this.value;
    })
    const inputNoRekening = document.querySelector('#input_noRekening');
    const noRekening = document.querySelector('#no_rekening');
    inputNoRekening.addEventListener('keyup', function(e){
        noRekening.innerHTML = this.value;
    })
    // Mengambil select yang dipilih
    const inputNamaProgram = document.querySelector('#inputNamaProgram');
    const namaProgram = document.querySelector('#nama_program');
    inputNamaProgram.addEventListener('change', function(e){
        namaProgram.innerHTML = this.value;
    })
</script>
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection