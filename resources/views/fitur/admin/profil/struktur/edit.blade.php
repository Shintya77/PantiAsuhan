@extends('layouts.user.master')
 <form method="POST" action="{{url('struktur/'.$model->id)}}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    {{-- id : <input type="number" name="id" value="$model->id"><br> --}}
    nama : <input type="text" name="name" value="{{ $model->name }}"><br>
    jabatan : <input type="text" name="jabatan" value="{{ $model->jabatan }}"><br>
    keterangan : <input type="text" name="keterangan" value="{{ $model->keterangan }}"><br>


    <button type="submit">SIMPAN</button>
 </form>
@section('content')
@endsection