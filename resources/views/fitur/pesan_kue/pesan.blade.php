@extends('layouts.user.master')
 
@section('content')

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/produk') }}">Produk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                           
                            @if (!empty($date->created_at))
                                 <p align="right">Tanggal Pesan : {{ $date->created_at->format('Y-m-d') }}</p>
                            @else 
                                 <p align="right">Tanggal Pesan :</p>
                            @endif
                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('storage/'. $item->produk->gambar) }}" width="100" height="100"/>
                                        </td>
                                        <td>{{ $item->produk->nama }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>Rp. {{ $item->produk->harga }} </td>
                                        <td>Rp. {{ $item->total }}</td>
                                        <td>
                                            <form action="/keranjang/{{$item->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                    
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <form action="/bayar" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <td><strong>Rp. {{ $total }}</strong></td>
                                        <input type="hidden" name="total_bayar" value="{{$total}}" />
                                        <td>
                                                
                            @if (!empty($date -> pesan_id))
                                     <input type="hidden" name="pesan_id" value="{{$date -> pesan_id}}">
                            @else 
                                     <input type="hidden" name="pesan_id" value="">
                            @endif
                            

                                           
                                                <button type="submit" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                                    <i class="fa fa-shopping-cart"></i> Check Out
                                                </button>
                                                
                                            
                                        </td>
                                    </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


      </div>
    </section><!-- End Frequently Asked Questions Section -->


@endsection