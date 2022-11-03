@extends('layouts.user.master')
 
@section('content')
  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h3 class="mb-4"> KEGIATAN PANTI ASUHAN PUTRI ‘AISYIYAH </h3>
            <h6 class="text-black">Kumpulan kegiatan yang dilakukan di Panti Asuhan Putri Aisyiyah Malang, meliputi </h6>
        </div>
        <div>
            {{-- <a class="btn btn-info mb-3" href="{{url('kegiatan/create')}}">Tambah</a> --}}
            {{-- <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td>foto</td>
                    <td>judul</td>
                    <td>deskripsi</td>
                  </tr>
                </thead>
                 <tbody>
                  @foreach ($data as $str)
                  <tr>
                    <td><img src="{{('storage/'.$str -> foto)}}" alt="" width="250px"></td>
                  <td class="text-black">{{ $str->judul }}</td>
                  <td class="text-black">{{ $str->deskripsi }}</td> 
                  @endforeach
                </tbody> 
              </table> --}}
              <div class="row">
                @foreach ($data as $str)
                <div class="col-lg-4 col-sm-4">
                  
                  <div class="card mb-3">
                    <img src="{{('storage/'.$str -> foto)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $str->judul }}</h5>
                      <p class="card-text">{{ $str->deskripsi }}</p>
                    </div>
                  </div>
                  
                </div>
                @endforeach
              </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection