<nav class="navbar bg-light navbar-light">
    <a href="{{ asset('index.html') }}" class="navbar-brand mx-4 mb-3">
        <h3><i class="fa fa-stethoscope"></i> UKS</h3>
    </a>
    <div class="navbar-nav w-100">
        <a href="{{ route('base.Admin') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="{{ route('petugas.index.riwayat')}}" class="nav-item nav-link"><i class="fa fa-file-medical me-2"></i>Riwayat Penyakit</a>
        <a href="{{ route('petugas.index.pasien') }}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Data Pasien</a>
        <a href="{{ route('petugas.index.obat') }}" class="nav-item nav-link"><i class="fa fa-tablets me-2"></i>Data Obat</a>
        <a href="{{ route('petugas.index.info') }}" class="nav-item nav-link"><i class="fa fa-book-medical me-2"></i>Info UKS</a>
    </div>
</nav>