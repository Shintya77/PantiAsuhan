@extends('layouts.user.master')
 
@section('content')
  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-4">Struktur Kepengurusan Panti Asuhan</h2>
            <h6 class="text-black">Pengurus yang berada dalam susunan kepengurusan Panti Asuhan Putri ‘Aisyiyah memiliki tugas sebagai berikut</h6>
        </div>
        <div>
            <a class="btn btn-info" href="{{url('struktur/create')}}">Tambah</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $str)
                  <tr>
                  <td>{{ $str->nama}}</td>
                  <td>{{ $str->jabatan }}</td>
                  <td>{{ $str->keterangan }}</td>
                  @endforeach
                </tbody>
              </table>
        </div>
        

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5>Penasehat</h5>
                        <span>1) Memberikan nasehat baik pada pengurus maupun kepada anak asuh dalam menjalankan aktivitas sehari-hari</span><br>
                        <span>2) Memberikan nasehat menuju keberhasilan dan kelanggengan berdirinya panti</span><br>
                        <span>3) Bekerjasama dengan pengurusn dalam segala hal demi  keberlangsungan pelayanan panti</span><br>
                        <span> </span><br>
                        <span> </span><br>
                        <span> </span><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Ketua </h5>
                        <span>1) Bertanggungjawab penuh atas pengelolaan panti, baik kedalam maupun keluar</span><br>
                        <span>2) Mengadakan hubungan baik dengan pemerintah yang terikat maupun tidak terikat, juga pada masyarakat</span><br>
                        <span>3) Menjalin hubungan baik dengan orangtua/ wali dari anak asuh</span><br>
                        <span>4) Mengontrol, dan mengesahkan pengeluaran keuangan panti sesuai dengan kebutuhan</span>
                        <span> </span><br>
                        <span> </span><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Bendahara </h5>
                        <span>1) Mencari dana bantuan baik dari pemerintah maupun dengan masyarakat dengan seizin ketua</span><br>
                        <span>2) Membukukan keuangan yang ada dan bertanggungjawab pada pengurus yang lain</span><br>
                        <span>3) Mengerjakan pembukuan secara open managemen</span><br>
                        <span>4) Mengusahakan dana lain dari keuangan yang ada sehingga tidak menggantungkan donatur</span><br>
                        <span>5) Membantu ketua dalam mencari dana</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Sekretaris :</h5>
                        <span>1) Mengerjakan administrasi panti dan bertanggungjawab pada ketua</span><br>
                        <span>2) Membuat, membalas surat masuk baik dari instansi maupun dari masyarakat, orangtua atau sekolah</span><br>
                        <span>3) Membantu pengurus demi kemajuan dan kelancaran panti</span><br>
                        <span>4) Mengajukan proposal </span>
                        <span> </span><br>
                        <span> </span><br>
                        <span> </span><br>
                        <span> </span><br>
                        <span> </span><br>
                        <span> </span><br><span> </span><br><span> </span><br><span> </span><br><span> </span><br><span> </span><br>
                        <span> </span><br><span> </span><br><span> </span><br><span> </span><br>
            
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Pengasuh </h5>
                        <span>1) Mendidik anak asuh supaya menjadi anak yang sholehah dan terampil, mandiri, berguna bagi bangsa dan agama</span>
                        <span>2) Mencintai anak asuh seperti mencintai anak dan mendidik seperti mendidik anak sendiri</span><br>
                        <span>3) Memberikan izin anak asuh baik sekolah maupun tidak sekolah </span><br>
                        <span>4) Memfasilitasi kesehatan anak, misal mengantar kerumah sakit dll</span><br>
                        <span>5) Mengontrol gizi anak dan bertanggungjawab akan kesehatan sehari-hari</span><br>
                        <span>6) Memantau dan mengarahkan anak asuh dalam belajar baik pendidikan formal maupun non-formal</span>
                        <span> </span><br><span> </span><br><span> </span><br><span> </span><br>
                        <span> </span><br><span> </span><br><span> </span><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Humas dan Peksos </h5>
                        <span>1) Melakukan kegiatan managemen kasus untuk anak</span><br>
                        <span>-	Membuat kontrak antara anak, keluarga anak, serta pengurus panti</span><br>
                        <span>-	Melakukan assesment</span><br>
                        <span>-	Membuat perencanaan pelayanan pengasuhan yang tepat untuk anak</span><br>
                        <span>-	Melakukan intervensi</span><br>
                        <span>-	Melakukan monitoring dan kordinasi terkait dengan kebutuhan anak tentang pelayanan dan pengasuhan</span><br>
                        <span>-	Melakukan terminasi atau pengakhiran dari pemberian layanan pengasuhan</span><br>
                        <span>2) Bertanggung jawab melengkapi dan menjaga kerahasiaan data anak</span><br>
                        <span>3) Mengikuti serta menghadiri segala bentuk kegiatan diluar panti sesuai dengan undangan dan mandat panti</span><br>
                        <span>4) Mendampingi pengasuh dalam melaksanakan pelayanan pengasuhan</span><br>
                        <span>5) Memantau perkembangan anak, baik akademis, psikoligis, dan lainnya</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Keamanan  </h5>
                        <span>1) Menjaga keamanan dan ketenangan di lingkungan panti baik siang maupun malam hari</span><br>
                        <span>2) Memelihara taman sebaik mungkin mengutamakan segi keasriannya dan kenyamanannya dengan melibatkan anak asuh</span><br>
                        <span>3) Membantu pengurus ketika sedang diperlukan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Pengelola Katering </h5>
                        <span>1) Melakukan kontroling dan evaluasi kinerja karyawan katering</span><br>
                        <span>2) Melakukan pelaporan pemasukan, pengeluaran, dan omzet katering secara rutin sebulan sekali</span>
                        <span> </span><br> <span> </span><br> <span> </span><br><span> </span><br><span> </span><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded overflow-hidden">
                    <div class="p-4">
                        <h5> Pendidikan </h5>
                        <span>1) Membuat kurikulum belajar</span><br>
                        <span>2) Memberikan pelajaran sesuai dengan kurikulum, serta memantau perkembangan hasil belajar anak</span>
                        <span> </span><br><span> </span><br><span> </span><br><span> </span><br><span> </span><br><span> </span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection