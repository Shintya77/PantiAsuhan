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
            <a class="btn btn-info" href="{{url('kegiatan/create')}}">Tambah</a>
            <table id="example1" class="table table-bordered table-striped">
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
                    <td><img src="{{('storage/'.$str -> foto)}}" alt=""></td>
                  <td class="text-black">{{ $str->judul }}</td>
                  <td class="text-black">{{ $str->deskripsi }}</td> 
                  @endforeach
                </tbody> 
              </table>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection