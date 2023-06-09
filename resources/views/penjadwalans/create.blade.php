<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="penjadwalans"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="ADD NEW PENJADWALAN"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>ADD NEW PENJADWALAN</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('penjadwalans') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;Back
                            </a>
                        </div>
                        <form action="{{ route('saveJadwal') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row me-3 ms-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Kategori</strong>
                                        <select class="form-select border border-3 p-2" name="kategori">
                                            <option value="aktivitas" {{ isset($penjadwalan) ? ($penjadwalan->kategori == "aktivitas" ? "selected" : "") : "" }}>Aktivitas</option>
                                            <option value="shift" {{ isset($penjadwalan) ? ($penjadwalan->kategori == "shift" ? "selected" : "") : "" }}>Shift</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Tanggal Jadwal</strong>
                                        <input type="date" name="tanggal_jadwal" class="form-control border border-2 p-2" placeholder="Tanggal Jadwal">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Deskripsi</strong>
                                        <input type="string" name="deskripsi_jadwal" class="form-control border border-2 p-2" placeholder="Deskripsi Jadwal">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        <x-footers.auth></x-footers.auth>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
