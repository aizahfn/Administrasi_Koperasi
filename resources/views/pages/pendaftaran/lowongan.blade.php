<x-layout bodyClass="g-sidenav-show  bg-gray-200">
        <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-header pb-0 px-3">
                                <h2 class="text-center mb-0 ">DAFTAR LOWONGAN</h2>
                            </div>
                            <div class="card-body pt-4 p-3">
                                <ul class="list-group">
                                    @forelse ($datalowongan as $data_lowongan)
                                        <li class="list-group-item border-3 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex align-items-center justify-content-between col-md-2">
                                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid border-radius-lg align-items-center " style="width: 50%;" alt="{{ $data_lowongan->nama_lowongan }}">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h4 class="mb-3 text-dark font-weight-bold">{{ $data_lowongan->nama_lowongan }}</h4>
                                                <span class="mb-2 text-dark">Jumlah Lowongan : <span
                                                        class="mb-2 text-sm">{{ $data_lowongan->jumlah_lowongan }}</span></span>
                                                <span class="mb-2 text-sm">{{ $data_lowongan->deskripsi_lowongan }}</span>
                                                <div class="d-flex flex-row">
                                                <span class="mb-2 text-sm">{{ $data_lowongan->tanggal_lowongan }}</span>
                                                    <div class="ms-auto text-end">
                                                        <a class="btn btn-link text-danger text-gradient m-3"
                                                            href="{{ route('pages.pendaftaran.biodata', $data_lowongan->id) }}">
                                                            <i class="material-icons text-lg me-2">register</i> Daftar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Tidak Ada Lowongan</strong>
                                        </div>
                                    @endforelse
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>
