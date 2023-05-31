<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="arsip"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="SHOW DOCUMENT"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>SHOW DOCUMENT</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('arsip.index') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;BACK
                            </a>
                        </div>
                        <div class="container-fluid py-2">
                            <table class="table">
                                <tr>
                                    <td><strong>No</strong></td>
                                    <td>{{ $arsip->no_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Nama</strong></td>
                                    <td>{{ $arsip->nama_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Kategori</strong></td>
                                    <td>{{ $arsip->kategori_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Tanggal</strong></td>
                                    <td>{{ $arsip->tanggal_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Isi</strong></td>
                                    <td>{{ $arsip->isi_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Sumber</strong></td>
                                    <td>{{ $arsip->sumber_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Penerima</strong></td>
                                    <td>{{ $arsip->penerima_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status</strong></td>
                                    <td>{{ $arsip->status_dokumen }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Aksesibilitas</strong></td>
                                    <td>{{ $arsip->aksesibilitas_dokumen }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
