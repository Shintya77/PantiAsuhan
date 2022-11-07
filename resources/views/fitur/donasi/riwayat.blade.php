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
                          <h4 class="text-center text-primary">RIWAYAT DONASI</h4>
                      </div>
                      <div>
                        {{-- <a class="btn btn-info" href="{{url('struktur/create')}}">Tambah</a> --}}
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Tanggal Donasi</th>
                                <th>Nominal</th>
                              </tr>
                            </thead>
                            {{-- <tbody>
                              @foreach ($data as $str)
                              <tr>
                              <td class="text-black">{{ $str->name}}</td>
                              <td class="text-black">{{ $str->jabatan }}</td>
                              <td class="text-black">{{ $str->keterangan }}</td>
                                </form>
                              </td>  
                              @endforeach
                            </tbody> --}}
                          </table>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </section><!-- End Icon Boxes Section -->
 </div>
 
@endsection