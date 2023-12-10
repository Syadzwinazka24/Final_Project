<nav class="navbar bg-light navbar-light">
    <a href="{{ asset('index.html') }}" class="navbar-brand mx-4 mb-3">
        <h3><i class="fa fa-stethoscope"></i> UKS</h3>
    </a>
    <div class="navbar-nav w-100">
        <a href="/admin/home" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Select Data</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{ route('Admin.index.obat') }}" class="dropdown-item"><i class="fa fa-tablets me-2"></i>Data Obat</a>
                <a href="{{ route('Admin.index.petugas') }}" class="dropdown-item"><i class="fa fa-user-nurse me-2"></i>Petugas UKS</a>
                <a href="{{ route('Admin.index.jabatan') }}" class="dropdown-item"><i class="fa fa-school me-2"></i>Jabatan</a>
                <!-- <a href="{{ route('Admin.index.info') }}" class="dropdown-item"><i class="fa fa-book-medical me-2"></i>Info UKS</a> -->
            </div>
        </div>

        <a href="{{ route('Admin.index.riwayat')}}" class="nav-item nav-link"><i class="fa fa-file-medical me-2"></i>Riwayat Penyakit</a>
        <a href="{{ route('Admin.index.pasien') }}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Data Pasien</a>

        <!-- <a href="{{ route('Admin.index.obat') }}" class="nav-item nav-link"><i class="fa fa-tablets me-2"></i>Data Obat</a>
        <a href="{{ route('Admin.index.petugas') }}" class="nav-item nav-link"><i class="fa fa-user-nurse me-2"></i>Petugas UKS</a>
        <a href="{{ route('Admin.index.jabatan') }}" class="nav-item nav-link"><i class="fa fa-school me-2"></i>Jabatan</a> -->
        <a href="{{ route('Admin.index.info') }}" class="nav-item nav-link"><i class="fa fa-book-medical me-2"></i>Info UKS</a>

        <a href="{{ route('index.chart') }}" class="nav-item nav-link"><i class="fa fa-ruler me-2"></i>Chart User</a>
        <a href="{{ route('Admin.index.Upetugas') }}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>User</a>

    </div>
</nav>