@extends('layouts.user.master')

@section('content')
<br/>
<a class="btn btn-info" href="{{ url('galeri/create')}}">Tambah</a>
<br/>
<table class="table-bordered table">
    <tr>
        <th>Gambar</th>
        <th> colspan="2">AKSI</th>
    </tr>
    @foreach($data as $value)
    <tr>
        <td>{{ $value->gambar}}</td>
        <td><a class="btn btn-info" href="{{ url('galeri'.$value->id.'/edit')}}">Update</a></td>
    </tr>
    @endforeach
</table>
@endsection