<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="arsip"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="EDIT BUKU"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>EDIT BUKU</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('bukusheva.index') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;Back
                            </a>
                        </div>
                        <form action="{{ route('bukusheva.update',$bukusheva->IDBuku) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <table class="table">
                                <tr>
                                    <th>Judul</th>
                                    <td>
                                        <input type="text" name="Judul" class="form-control border border-2 p-2"
                                            placeholder="Judul" value="{{ $bukusheva->Judul }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Penulis</th>
                                    <td>
                                        <input type="text" name="Penulis" class="form-control border border-2 p-2"
                                            placeholder="Penulis" value="{{ $bukusheva->Penulis }}">
                                    </td>
                                    <th>Penebrit</th>
                                    <td>
                                        <input type="text" name="Penebrit" class="form-control border border-2 p-2"
                                            placeholder="Penebrit" value="{{ $bukusheva->Penebrit }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tahun Terbit</th>
                                    <td>
                                        <input type="text" name="TahunTerbit" class="form-control border border-2 p-2"
                                            placeholder="Tahun Terbit" value="{{ $bukusheva->TahunTerbit }}">
                                    </td>
                                    <th>Jumlah Stok</th>
                                    <td>
                                        <input type="text" name="JumlahStok" class="form-control border border-2 p-2"
                                            placeholder="Jumlah Stok" value="{{ $bukusheva->JumlahStok }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Denda Buku</th>
                                    <td>
                                        <input type="text" name="DendaBuku" class="form-control border border-2 p-2"
                                            placeholder="Denda Buku" value="{{ $bukusheva->DendaBuku }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
