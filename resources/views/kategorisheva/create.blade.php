<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="arsip"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="ADD NEW BUKU"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>ADD NEW BUKU</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('bukusheva') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;Back
                            </a>
                        </div>
                        <form action="{{ route('storebukusheva') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row me-3 ms-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Judul</strong>
                                        <input type="string" name="Judul" class="form-control border border-2 p-2" placeholder="Judul">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Penulis</strong>
                                        <input type="string" name="Penulis" class="form-control border border-2 p-2" placeholder="Penulis">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Penerbit</strong>
                                        <input type="string" name="Penerbit" class="form-control border border-2 p-2" placeholder="Penerbit">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Tahun Terbit</strong>
                                        <input type="String" name="TahunTerbit" class="form-control border border-2 p-2" placeholder="Tahun Terbit">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Jumlah Stok</strong>
                                        <input type="String" name="JumlahStok" class="form-control border border-2 p-2" placeholder="Jumlah Stok">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Denda Buku</strong>
                                        <input type="String" name="DendaBuku" class="form-control border border-2 p-2" placeholder="Denda Buku">
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
