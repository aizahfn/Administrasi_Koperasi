<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="data-lowongan"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Tambah Lowongan'></x-navbars.navs.auth>
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
                                <h3 class="mb-3 ">Masukkan Data Lowongan</h3>
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
                        <form method="POST" action="{{ route('datalowongan.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Posisi Lowongan</label>
                                    <input type="text" name="nama_lowongan" class="form-control border border-2 p-2" value='{{ isset($datalowongan) ? $datalowongan->nama_lowongan : old('nama_lowongan') }}'>
                                    @error('nama_lowongan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gambar Lowongan</label>
                                    <input type="file" class="form-control form-control-lg border border-2 p-2 @error('image') is-invalid @enderror" name="image">
                                    <!-- error message for image -->
                                    @error('image')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Batas Akhir Lowongan</label>
                                    <input type="date" name="tanggal_lowongan" class="form-control border border-2 p-2" value='{{ isset($datalowongan) ? $datalowongan->tanggal_lowongan : old('tanggal_lowongan') }}'>
                                    @error('tanggal_lowongan')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jumlah Lowongan</label>
                                    <input type="text" name="jumlah_lowongan" class="form-control border border-2 p-2" value='{{ isset($datalowongan) ? $datalowongan->jumlah_lowongan : old('jumlah_lowongan') }}'>
                                    @error('jumlah_lowongan')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Deskripsi Lowongan</label>
                                    <textarea class="form-control border border-2 p-2"
                                        placeholder=" Deskripsikan lowongan yang akan dibuka!" id="floatingTextarea2" name="desc_lowongan"
                                        rows="4" cols="50">{{ isset($datalowongan) ? $datalowongan->deskripsi_lowongan : old('deskripsi_lowongan') }}</textarea>
                                        @error('desc_lowongan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>
                            </div>
                            <div class="btn-lg d-flex justify-content-center">
                                <button type="submit" class="btn bg-gradient-dark">Submit</button>
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
