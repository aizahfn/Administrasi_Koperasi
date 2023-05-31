<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative d-flex flex-column max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h2 class="text-center mb-3">SUKSES!</h2>
                        </div>
                        <div class="d-flex flex-row justify-content-center mb-4">
                            <img src="{{ asset('assets/img/success.png') }}" class="img-fluid border-radius-lg align-items-center" style="width: 10%;" alt="success">
                        </div>
                            <div class="d-flex flex-row justify-content-center">
                                <h6 class="m-3">Terima Kasih!
                                    Anda telah mendaftar pada lowongan koperasi mahasiswa ini. Silahkan tunggu informasi selanjutnya dari kami.</h6>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient m-3"
                                        href="{{ route('halaman-utama') }}">
                                        <i class="material-icons text-lg me-2">arrow_back</i> Kembali ke Halaman Utama
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
