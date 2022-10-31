<nav class="navbar navbar-expand-lg bg-primary navbar-light sticky-top p-0">
    <a href="{{url('/beranda')}}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-3s text-primary">PANTI ASUHAN PUTRI ‘AISYIYAH</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{url('/beranda')}}" class="nav-item nav-link active">Beranda</a>
            <div class="nav-item dropdown">
                <a href="{{url('/profil/sejarah')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{url('/profil/sejarah')}}" class="dropdown-item">Sejarah</a>
                    <a href="{{url('/profil/visi')}}" class="dropdown-item">Visi, Misi & Tujuan</a>
                    <a href="{{url('/profil/kegiatan')}}" class="dropdown-item">Kegiatan</a>
                    <a href="{{url('/profil/struktur-kepengurusan')}}" class="dropdown-item">Struktur Kepengurusan</a>
                </div>
            </div>
            <a href="about.html" class="nav-item nav-link">Galeri</a>
            <a href="about.html" class="nav-item nav-link">Kegiatan</a>
            <a href="service.html" class="nav-item nav-link">Donasi</a>
            <a href="\produk" class="nav-item nav-link">Pesan Kue</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>