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
                                <h2 class="mb-0">DAFTAR LOWONGAN</h2>
                            </div>
                            <div class="card-body pt-4 p-3">
                                <ul class="list-group">
                                    @forelse ($datalowongan as $data_lowongan)
                                        <li class="list-group-item border-3 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <img src="{{ asset('assets/'.$data_lowongan->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="{{ $data_lowongan->nama_lowongan }}">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <h4 class="mb-3 text-dark font-weight-bold">{{ $data_lowongan->nama_lowongan }}</h4>
                                                <span class="mb-2 text-dark">Jumlah Lowongan : <span
                                                        class="mb-2 text-sm">{{ $data_lowongan->jumlah_lowongan }}</span></span>
                                                <span class="mb-2 text-sm">{{ $data_lowongan->deskripsi_lowongan }}</span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i
                                                        class="material-icons text-sm me-2">delete</i>Delete</a>
                                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                        class="material-icons text-sm me-2">edit</i>Edit</a>
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
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Data Lowongan</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Image</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Nama Lowongan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jumlah Lowongan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Tanggal Lowongan</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Deskripsi Lowongan</th>
                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($datalowongan as $data_lowongan)
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <img src="{{ asset('assets/'.$data_lowongan->image) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-xl font-weight-bold mb-0">{{ $data_lowongan->nama_lowongan }}</p>
                                                    </td>
                                                    <td>{{ $data_lowongan->tanggal_lowongan }}</td>
                                                    <td>{{ $data_lowongan->jumlah_lowongan }}</td>
                                                    <td>{{ $data_lowongan->deskripsi_lowongan }}</td>
                                                </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data list_berkas belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
        <x-plugins></x-plugins>

</x-layout>
