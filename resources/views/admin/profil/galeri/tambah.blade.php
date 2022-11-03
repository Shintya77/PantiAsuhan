@extends('layouts.user.master')

<form method="POST" action = "/galeri" enctype="multipart/form-data">
    @csrf
    Gambar : <input type="file" name="gambar"><br/>>
    <button type="submit">SIMPAN</button>
</from>
@section('content')