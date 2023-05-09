<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta nama_lengkap="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukkan Nama Lengkap">

                                <!-- error message untuk title -->
                                @error('nama_lengkap')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label">ID Berkas</label><br/>
                                <select class="form-select @error('id_berkas') is-invalid @enderror" name="id_berkas">

                            <option selected disabled>Open this select menu</option>

                                @forelse ($berkas as $berkass)
                                    <option value="{{ $berkass->id}}">{{ $berkass->id}}</option>
                                @empty
                                    <option value="">Data Berkas Belum Tersedia</option>
                                @endforelse
                            </select>

                                @error('id_berkas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">role</label>
                                <input type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" placeholder="Masukkan role">

                                <!-- error message untuk title -->
                                @error('role')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">no_telp</label>
                                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" placeholder="Masukkan no_telp">

                                <!-- error message untuk title -->
                                @error('no_telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">jabatan</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" placeholder="Masukkan jabatan">

                                <!-- error message untuk title -->
                                @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan email">

                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('title') }}" placeholder="Masukkan password">

                                <!-- error message untuk title -->
                                @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat">

                                <!-- error message untuk title -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis jenis_kelamin</label>
                                <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" placeholder="Masukkan Jenis jenis_kelamin">

                                <!-- error message untuk title -->
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tangal Lahir</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir">

                                <!-- error message untuk title -->
                                @error('tanggal_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
