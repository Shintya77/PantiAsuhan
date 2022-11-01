@extends('layouts.user.master')

@section('content')
<form method="POST" action="{{url('kegiatan/'.$kegiatan->id)}}">
   @csrf
   <input type="hidden" name="_method" value="PATCH">
   foto : <input type="file" name="foto" value="{{ $kegiatan->foto }}"><br>
   judul : <input type="text" name="judul" value="{{ $kegiatan->judul }}"><br>
   deskripsi : <input type="text" name="deskripsi" value="{{ $kegiatan->deskripsi }}"><br>


   <button type="submit">SIMPAN</button>
</form>
@endsection