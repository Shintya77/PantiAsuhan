<nav class="navbar navbar-expand-lg bg-primary navbar-light sticky-top p-0">
    <a href="{{url('/beranda')}}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h6 class="m-3s text-white">PANTI ASUHAN PUTRI ‘AISYIYAH</h6>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{url('/beranda')}}" class="nav-item nav-link active text-white">Beranda</a>
            <div class="nav-item dropdown">
                <a href="{{url('/profil/sejarah')}}" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{url('/profil/sejarah')}}" class="dropdown-item ">Sejarah</a>
                    <a href="{{url('/profil/visi')}}" class="dropdown-item ">Visi, Misi & Tujuan</a>
                    <a href="{{url('/profil/kegiatan')}}" class="dropdown-item ">Kegiatan</a>
                    <a href="{{url('/struktur')}}" class="dropdown-item ">Struktur Kepengurusan</a>
                </div>
            </div>
            <a href="{{url('/galeri')}}" class="nav-item nav-link text-white">Galeri</a>
            <a href="{{url('/kegiatan')}}" class="nav-item nav-link text-white">Kegiatan</a>
            <a href="service.html" class="nav-item nav-link text-white">Donasi</a>
            <a href="\produk" class="nav-item nav-link text-white">Pesan Kue</a>
            <a href="#" class=" nav-link text-white" data-bs-toggle="dropdown">Login</a>
        </div>
    </div>
</nav>