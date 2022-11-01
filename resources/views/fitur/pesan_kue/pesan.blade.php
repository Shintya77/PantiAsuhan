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
                           
                            <p align="right">Tanggal Pesan : </p>
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
                                    <?php $no = 1; ?>

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            {{-- <img src="{{ url('uploads') }}/{{ $pesanan_detail->barang->gambar }}" width="100" alt="..."> --}}
                                            ini untuk tempat gambar
                                        </td>
                                        <td>ini produk</td>
                                        <td>ini jumlah pesan</td>
                                        <td align="right">Rp.harga produk </td>
                                        <td align="right">Rp. total harga</td>
                                        <td>
                                            {{-- <form action="{{ url('/produk') }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }} --}}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                            {{-- </form> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td align="right"><strong>Rp. total harga</strong></td>
                                        <td>
                                            <a href="#" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                                <i class="fa fa-shopping-cart"></i> Check Out
                                            </a>
                                        </td>
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