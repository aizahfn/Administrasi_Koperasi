<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="penjadwalans"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="EDIT PENJADWALAN"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>EDIT PENJADWALAN</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('penjadwalans') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;Back
                            </a>
                        </div>
                        <form action="{{ route('update',$penjadwalans->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <table class="table">
                                <tr>
                                    <th>Kategori</th>
                                    <td>
                                        <select class="form-select border border-3 p-2" name="kategori">
                                            <option value="aktivitas" {{ isset($penjadwalan) ? ($penjadwalan->kategori == "aktivitas" ? "selected" : "") : "" }}>Aktivitas</option>
                                            <option value="shift" {{ isset($penjadwalan) ? ($penjadwalan->kategori == "shift" ? "selected" : "") : "" }}>Shift</option>
                                        </select>
                                    </td>
                                    <th>Tanggal Jadwal</th>
                                    <td>
                                    <input type="date" name="tanggal_jadwal" class="form-control border border-2 p-2"
                                            placeholder="Tanggal Jadwal" value="{{ $penjadwalan->tanggal_jadwal }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Deskripsi Jadwal:</th>
                                    <td>
                                        <input type="string" name="deskripsi_jadwal" class="form-control border border-2 p-2"
                                            placeholder="Deskripsi Jadwal" value="{{ $penjadwalan->deskripsi_jadwal }}">
                                    </td>
                                </tr>
                            </table>
                            

                        </form>
                        <x-footers.auth></x-footers.auth>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
