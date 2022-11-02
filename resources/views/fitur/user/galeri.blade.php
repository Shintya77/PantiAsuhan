@extends('layouts.user.master')
 
@section('content')

<!-- Team Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Galeri Panti Asuhan</h1>
            </div>
            <div>
                <a class="btn btn-info" href="{{url('galeri/create')}}">Tambah</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    {{-- <th></th>
                    <th></th>
                    <th></th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $gambar)
                  <tr>
                  <td><img src="{{('storage/'.$gambar -> gambar)}}" alt=""></td>
                  <td><img src="{{('storage/'.$gambar -> gambar)}}" alt=""></td>
                  <td><img src="{{('storage/'.$gambar -> gambar)}}" alt=""></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        </div>
    </div>
    <!-- Team End -->
    @endsection