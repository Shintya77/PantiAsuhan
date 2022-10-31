@extends('layouts.user.master')

<form method="POST" action = "{{ url('galeri')}}">
    @csrf
    Gambar : <input type="text" name="gambar"><br/>>
    <button type="submit">SIMPAN</button>
</from>
@section('content')