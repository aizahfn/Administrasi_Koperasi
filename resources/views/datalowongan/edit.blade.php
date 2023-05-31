@extends('datalowongan.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Lowongan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('datalowongan.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Maaf!</strong> Ada Kesalahan Pada Data Yang Dimasukkan.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('datalowongan.update', lowongan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lowongan:</strong>
                    <input type="text" name="nama_lowongan" class="form-control" placeholder="Nama Lowongan" value="{{ $lowongan->nama_lowongan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Batas Akhir:</strong>
                    <input type="date" name="tanggal_lowongan" class="form-control" placeholder="Batas Tanggal Akhir Lowongan" value="{{ $lowongan->tanggal_lowongan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Yang Dibutuhkan:</strong>
                    <input type="number" name="jumlah_lowongan" min="1" max="50" class="form-control" placeholder="Jumlah Lowongan Yang Tersedia" value="{{ $lowongan->jumlah_lowongan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea name="deskripsi_lowongan" class="form-control" style="height:150px" placeholder="Deskripsi">{{ $lowongan->deskripsi_lowongan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Gambar">
                    <img src="/images/{{ $lowongan->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
