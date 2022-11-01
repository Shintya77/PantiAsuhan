@extends('layouts.user.master')

@section('content')
<form method="POST" action="{{url('struktur')}}">
   @csrf
   id : <input type="number" name="id"><br>
   nama : <input type="text" name="name"><br>
   jabatan : <input type="text" name="jabatan"><br>
   keterangan : <input type="text" name="keterangan"><br>


   <button type="submit">SIMPAN</button>
</form>
@endsection