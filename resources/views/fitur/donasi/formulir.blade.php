@extends('layouts.user.master')
@section('content')
<!-- Quote Start -->
<div class="container bg-light overflow-hidden my-5 px-lg-0">
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
                                    <input type="text" class="form-control border-0" placeholder="Nama Donatur" style="height: 55px; weight: ">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Email</h6>
                                    <input type="email" class="form-control border-0" placeholder="Email Donatur" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nomor Telepon </h6>
                                    <input type="text" class="form-control border-0" placeholder="Nomor Telepon" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Tanggal Donasi</h6>
                                    <input type="date" class="form-control border-0" placeholder="Tanggal Donasi" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Alamat Donatur</h6>
                                    <input type="type" class="form-control border-0" placeholder="Alamat Donatur" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Bank</h6>
                                    <select name="nama_bank" id="nama_bank" class="form-select border-0" style="height: 55px;">
                                        @foreach ($bank as $b)
                                        <option value="{{$b->nama_bank}}" >{{$b->nama_bank}}</option>
                                        @endforeach
                                        {{-- <option selected>Bank</option>
                                        <option value="1">Bank 1</option>
                                        <option value="2">Bank 2</option>
                                        <option value="3">Bank 3</option> --}}
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nominal Donasi</h6>
                                    <input type="type" class="form-control border-0" placeholder="Nominal Donasi" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Rekening Atas Nama</h6>
                                    <input type="type" class="form-control border-0" placeholder="Rekening Atas Nama" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Nomor Rekening Donatur</h6>
                                    <input type="type" class="form-control border-0" placeholder="Nomor Rekening" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h6 class="text-black">Pilih Program</h6>
                                    <select name="nama_program" id="nama_program" class="form-select border-0" style="height: 55px;">
                                        @foreach ($program as $p)
                                        <option value="{{$p->nama_program}}" >{{$p->nama_program}}</option>
                                        @endforeach
                                        {{-- <option selected>Pilih Program</option>
                                        <option value="1">Program 1</option>
                                        <option value="2">Program 2</option>
                                        <option value="3">Program 3</option> --}}
                                    </select>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-black">Keterangan </h6>
                                    <textarea class="form-control border-0" placeholder="Keterangan bila perlu"></textarea>
                                </div>
                                <div class="col-12">
                                    <a href="{{url('/dashboard-donasi')}}" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Batal</a>
                                    <a class="btn btn-primary rounded-pill py-2 px-4 animated slideInRight" href="{{ url('/donasi-upload') }}">Berikutnya</a>
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
<!-- Quote End -->
@endsection