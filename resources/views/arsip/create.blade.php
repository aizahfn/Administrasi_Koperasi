<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="arsip"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="ADD NEW ARSIP"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>ADD NEW ARSIP</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('arsip.index') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;Back
                            </a>
                        </div>
                        <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row me-3 ms-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>No Dokumen:</strong>
                                        <input type="integer" name="no_dokumen" class="form-control border border-2 p-2" placeholder="No Dokumen (Isi dengan Angka)">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Nama Dokumen:</strong>
                                        <input type="string" name="nama_dokumen" class="form-control border border-2 p-2" placeholder="Nama Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Kategori Dokumen:</strong>
                                        <input type="string" name="kategori_dokumen" class="form-control border border-2 p-2" placeholder="Kategori Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Tanggal Dokumen:</strong>
                                        <input type="date" name="tanggal_dokumen" class="form-control border border-2 p-2" placeholder="Tanggal Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Isi Dokumen:</strong>
                                        <input type="string" name="isi_dokumen" class="form-control border border-2 p-2" placeholder="Isi Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Sumber Dokumen:</strong>
                                        <input type="string" name="sumber_dokumen" class="form-control border border-2 p-2" placeholder="Sumber Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Penerima Dokumen:</strong>
                                        <input type="String" name="penerima_dokumen" class="form-control border border-2 p-2" placeholder="Penerima Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Status Dokumen:</strong>
                                        <input type="String" name="status_dokumen" class="form-control border border-2 p-2" placeholder="Status Dokumen">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-group">
                                        <strong>Aksesibilitas Dokumen:</strong>
                                        <input type="String" name="aksesibilitas_dokumen" class="form-control border border-2 p-2" placeholder="Aksesibilitas Dokumen">
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
