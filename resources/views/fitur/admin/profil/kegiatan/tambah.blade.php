@extends('layouts.user.master')

@section('content')
<form method="POST" action="{{url('struktur')}}">
   @csrf
   foto : <input type="file" name="foto"><br>
   judul : <input type="text" name="judul"><br>
   deskripsi : <input type="text" name="deskripsi"><br>


   <button type="submit">SIMPAN</button>
</form>
@endsection