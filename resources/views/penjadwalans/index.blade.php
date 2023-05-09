<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjadwalan Rapat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Penjadwalan Rapat Koperasi</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('createJadwal') }}" class="btn btn-md btn-success mb-3">TAMBAH PENJADWALAN</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">id_jadwal</th>
                                <th scope="col">jadwal_rapat</th>
                                <th scope="col">jadwal_shift</th>
                                <th scope="col">jadwal_lain</th>
                                <th scope="col">agenda_jadwal</th>
                                <th scope="col">tanggal_jadwal</th>
                                <th scope="col">deskripsi_jadwal</th>
                                <th scope="col">tujuan_jadwal</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($penjadwalans as $penjadwalan)
                                <tr>
                                    <td>{{ $penjadwalan->id }}</td>
                                    <td>{{ $penjadwalan->jadwal_rapat }}</td>
                                    <td>{{ $penjadwalan->jadwal_shift }}</td>
                                    <td>{{ $penjadwalan->jadwal_lain }}</td>
                                    <td>{{ $penjadwalan->agenda_jadwal }}</td>
                                    <td>{{ $penjadwalan->tanggal_jadwal }}</td>
                                    <td>{{ $penjadwalan->deskripsi_jadwal }}</td>
                                    <td>{{ $penjadwalan->tujuan_jadwal }}</td>

                            <td>
                                <div class="d-flex justify-content-center" style="gap:10px">
                                    <a href="{{ route('edit', $penjadwalan->id)}} ">
                                        <button class="btn btn-outline-danger">Edit</button>
                                    </a>
                                    <a href="{{ route('Delete', $penjadwalan->id) }}" onclick="return confirm('Are you sure ?')">
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </a>

                                    {{-- <td class="text-center">
                                        <img src="{{ asset('/storage/penjadwalans/'.$penjadwalan->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $penjadwalan->title }}</td>
                                    <td>{!! $penjadwalan->content !!}</td> --}}
                                    {{-- <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penjadwalans.destroy', $penjadwalan->id) }}" method="POST">
                                            <a href="{{ route('penjadwalans.show', $penjadwalan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('penjadwalans.edit', $penjadwalan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td> --}}
                                </tr>
                              {{-- @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div> --}}
                              @endforeach
                            </tbody>
                          </table>
                          {{-- {{ $penjadwalans->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

</body>
</html>

