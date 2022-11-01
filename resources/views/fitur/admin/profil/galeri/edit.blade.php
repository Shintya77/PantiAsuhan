@extends('layouts.user.master')

@section('content')
<br/>
<form method="POST" action = "{{ url('galeri/'.$model->id)}}">
    @csrf
    <input type="hidden" name="method" value="PATCH">
    Gambar : <input type="file" name="gambar" value="{{$model->gambar}}"><br/>>
    <button type="submit">SIMPAN</button>
</from>
@endsection