@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">Menu Administrasi</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="navbar-nav  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pendaftaran</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'data-lowongan' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('data-lowongan') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Data Lowongan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'informasi-pendaftar' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('informasi-pendaftar') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Informasi Pendaftar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'berkas-pendaftar' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('berkas-pendaftar') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Berkas Pendaftar</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Arsip</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'arsip' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('arsip.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Dokumen Arsip</span>
                </a>
            </li>   
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Penjadwalan</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'penjadwalans' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('penjadwalans') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Penjadwalan</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
