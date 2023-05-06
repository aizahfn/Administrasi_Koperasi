<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('saveJadwal') }}" method="post">
                          @csrf
                            <div class="mb-3">
                              <label for="exampleInputJadwal_Rapat" class="form-label">Jadwal Rapat</label>
                              <input type="text" class="form-control" name="jadwal_rapat" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputJadwal_Shift" class="form-label">Jadwal Shift</label>
                                <input type="text" class="form-control" name="jadwal_shift" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputJadwal_Lain" class="form-label">Jadwal Lain</label>
                                <input type="text" class="form-control" name="jadwal_lain" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAgenda_Jadwal;" class="form-label">Agenda Jadwal</label>
                                <input type="text" class="form-control" name="agenda_jadwal" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputTanggal_Jadwal" class="form-label">Tanggal Jadwal</label>
                                <input type="date" class="form-control" name="tanggal_jadwal" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputDeskripsi_Jadwal" class="form-label">Deskripsi Jadwal</label>
                                <input type="text" class="form-control" name="deskripsi_jadwal" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputTujuan_Jadwal;" class="form-label">Tujuan_Jadwal</label>
                                <input type="text" class="form-control" name="tujuan_jadwal" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
