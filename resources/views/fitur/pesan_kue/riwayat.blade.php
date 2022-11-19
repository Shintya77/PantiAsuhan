@extends('layouts.user.master')
@section('content')
 <!-- ======= Icon Boxes Section ======= -->
 <div class="d-flex justify-content-center">
    <section id="icon-boxes" class="icon-boxes">
        <div class="container">
          <div class="row">
              <div class="col-12 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                  <div class="icon-box">
                      <div class="d-flex justify-content-center">
                          <h4 class="text-center text-primary">RIWAYAT PESANAN</h4>
                      </div>
                      <div>
                        {{-- <a class="btn btn-info" href="{{url('struktur/create')}}">Tambah</a> --}}
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Nomor</th>
                                <th>Tanggal</th>
                                <th>Nama Kue</th>
                                <th>Jumlah</th>
                                <th>Harga Kue</th>
                                <th>Total </th>
                                <th>Bukti Pembayaran</th>

                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($pesanDetail as $pd)
                              <tr>
                              <td style="text-align:center"><class="text-black">{{ $loop->iteration }}</td>
                              <td class="text-black">{{ $pd->created_at->format('Y-m-d')}}</td>
                              <td class="text-black">{{ $pd->produk->nama }}</td>
                              <td class="text-black">{{ $pd->jumlah }}</td>
                              <td class="text-black">Rp {{ number_format($pd->produk->harga)}}</td>
                              <td class="text-black">{{ $pd->total }}</td>
                              <td> <img src="{{ asset('storage/'. $pd->bukti_pembayaran) }}" width="100" height="100"/></td>
                                </form>
                              </td>  
                              @endforeach
                            </tbody>
                          </table>
                          {{-- <div class="paginate">
                            <div class="container">
                              <div class="row">
                                <div class="mx-auto">
                                  <div class="paginate-button col-md-12">
                                    {{ $paginate->links() }}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                          <div class="col-12">
                                    <a href="{{url('/produk')}}" class="btn btn-secondary rounded-pill py-2 px-4 animated slideInLeft">Kembali</a>
                          </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </section><!-- End Icon Boxes Section -->
 </div>
 
@endsection