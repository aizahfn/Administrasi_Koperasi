<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="arsip"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="EDIT DOCUMENT"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h3 class="text-white mx-3"><strong>EDIT DOCUMENT</strong></h3>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('arsip.index') }}">
                                <i class="material-icons text-sm"></i>&nbsp;&nbsp;Back
                            </a>
                        </div>
                        <form action="{{ route('arsip.update',$arsip->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <table class="table">
                                <tr>
                                    <th>No Dokumen:</th>
                                    <td>
                                        <input type="integer" name="no_dokumen" class="form-control border border-2 p-2"
                                            placeholder="No Dokumen" value="{{ $arsip->no_dokumen }}">
                                    </td>
                                    <th>Nama Dokumen:</th>
                                    <td>
                                        <input type="text" name="nama_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Nama Dokumen" value="{{ $arsip->nama_dokumen }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kategori Dokumen:</th>
                                    <td>
                                        <input type="text" name="kategori_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Kategori Dokumen" value="{{ $arsip->kategori_dokumen }}">
                                    </td>
                                    <th>Tanggal Dokumen:</th>
                                    <td>
                                        <input type="date" name="tanggal_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Tanggal Dokumen" value="{{ $arsip->tanggal_dokumen }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Isi Dokumen:</th>
                                    <td>
                                        <input type="text" name="isi_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Isi Dokumen" value="{{ $arsip->isi_dokumen }}">
                                    </td>
                                    <th>Sumber Dokumen:</th>
                                    <td>
                                        <input type="text" name="sumber_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Sumber Dokumen" value="{{ $arsip->sumber_dokumen }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Penerima Dokumen:</th>
                                    <td>
                                        <input type="text" name="penerima_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Penerima Dokumen" value="{{ $arsip->penerima_dokumen }}">
                                    </td>
                                    <th>Status Dokumen:</th>
                                    <td>
                                        <input type="text" name="status_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Status Dokumen" value="{{ $arsip->status_dokumen }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Aksesibilitas Dokumen:</th>
                                    <td>
                                        <input type="text" name="aksesibilitas_dokumen" class="form-control border border-2 p-2"
                                            placeholder="Aksesibilitas Dokumen"
                                            value="{{ $arsip->aksesibilitas_dokumen }}">
                                    </td>
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
