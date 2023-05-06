<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h3 class="mb-0">UPLOAD BERKAS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif
                        @if (Session::has('demo'))
                                <div class="row">
                                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ Session::get('demo') }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                        @endif
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-5">format jpg, jpeg, dan png</h6>
                        </div>
                        <form method='POST' action='{{ route('pages.pendaftaran.postCreateStepTwo') }}' enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">Kartu Tanda Penduduk</label>
                                    <input type="file" class="form-control form-control-lg border border-2 p-2 @error('ktp') is-invalid @enderror" name="ktp">

                                    <!-- error message untuk title -->
                                    @error('ktp')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Kartu Tanda Mahasiswa</label>
                                    <input type="file" class="form-control form-control-lg border border-2 p-2 @error('ktm') is-invalid @enderror" name="ktm">

                                    <!-- error message untuk title -->
                                    @error('ktm')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="form-label">Surat Peryataan</label>
                                    <input type="file" class="form-control form-control-lg border border-2 p-2 @error('s_pernyataan') is-invalid @enderror" name="s_pernyataan">

                                    <!-- error message untuk title -->
                                    @error('s_pernyataan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                </div>
                            </div>
                            <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Navigation">
                                <button type="button" class="btn bg-gradient-dark">Kembali</button>
                                <button type="submit" class="btn bg-gradient-dark">Lanjut</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
