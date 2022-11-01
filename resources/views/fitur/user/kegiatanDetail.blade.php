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
            {{-- <a class="btn btn-info" href="{{url('struktur/create')}}">Tambah</a> --}}
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td>foto</td>
                    <td>judul</td>
                    <td>deskripsi</td>
                  </tr>
                </thead>
                {{-- <tbody>
                  @foreach ($data as $str)
                  <tr>
                  <td class="text-black">{{ $str->name}}</td>
                  <td class="text-black">{{ $str->jabatan }}</td>
                  <td class="text-black">{{ $str->keterangan }}</td>
                  {{-- <td><a class="btn btn-info" href="{{url('struktur/'.$str->id.'/edit')}}">Edit</td> --}}
                  {{-- <td>
                    <form action="{{url('struktur/'.$str->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE"> --}}
                        {{-- <button class="btn btn-danger" type="submit">DELETE</button> --}}

                    {{-- </form>
                  </td>  
                  @endforeach
                </tbody> --}} 
              </table>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection