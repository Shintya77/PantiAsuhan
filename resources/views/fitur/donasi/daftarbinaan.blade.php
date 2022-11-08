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
                          <h4 class="text-center text-primary">Daftar Binaan Panti Asuhan Putri Aisyiyah Malang</h4>
                      </div>
                      <div>
                        {{-- <a class="btn btn-info" href="{{url('struktur/create')}}">Tambah</a> --}}
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Binaan</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Umur</th>
                                <th>kelas</th>
                                <th>Status</th>
                                <th>Domisili</th>
    
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($paginate as $bnn)
                              <tr>
                              <td style="text-align:center"><class="text-black">{{ $bnn->id_binaan}}</td>
                              <td class="text-black">{{ $bnn->nama_binaan}}</td>
                              <td class="text-black">{{ $bnn->ttl }}</td>
                              <td style="text-align:center"><class="text-black">{{ $bnn->jekel }}</td>
                              <td class="text-black">{{ $bnn->pendidikan}}</td>
                              <td class="text-black">{{ $bnn->umur }}</td>
                              <td style="text-align:center"><class="text-black">{{ $bnn->kelas }}</td>
                              <td class="text-black">{{ $bnn->status }}</td>
                              <td class="text-black">{{ $bnn->domisili }}</td>
                                </form>
                              </td>  
                              @endforeach
                            </tbody> 
                            
                          </table>
                          <div class="paginate">
                            <div class="container">
                              <div class="row">
                                <div class="mx-auto">
                                  <div class="paginate-button col-md-12">
                                    {{ $paginate->links() }}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </section><!-- End Icon Boxes Section -->
 </div>
 
@endsection