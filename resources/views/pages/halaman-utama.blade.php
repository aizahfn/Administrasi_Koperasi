<x-layout bodyClass="bg-gray-200">
    {{-- <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <x-navbars.navs.guest signin='static-sign-in' signup='static-sign-up'></x-navbars.navs.guest>
                <!-- End Navbar -->
            </div>
        </div>
    </div> --}}
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-4 pe-3">
                                    <h3 class="text-white font-weight-bolder text-center mt-2 mb-0">Menu Administrasi</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="https://www.freepnglogos.com/uploads/logo-koperasi-png/logo-koperasi-arti-lambang-koperasi-indonesia-beserta-penjelasan-bagian-3.png" class="img-fluid border-radius-lg mx-auto d-block mb-4" alt="Responsive image">
                                <form role="form" class="text-center">
                                    <div class="list-group">
                                        <a href="{{ route('pages.pendaftaran.lowongan') }}" class="list-group-item list-group-item-action btn bg-gradient-dark w-100 btn-lg p-4 mb-3">Pendaftaran Anggota Koperasi</a>
                                        <a href="#" class="list-group-item list-group-item-action btn bg-gradient-dark w-100 btn-lg p-4 mb-3">Arsip Surat dan Dokumen</a>
                                        <a href="#" class="list-group-item list-group-item-action btn bg-gradient-dark w-100 btn-lg p-4 mb-3">Penjadwalan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <x-footers.guest></x-footers.guest> --}}
        </div>
    </main>

</x-layout>
