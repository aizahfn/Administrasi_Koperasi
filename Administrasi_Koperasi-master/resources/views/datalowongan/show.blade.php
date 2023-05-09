@extends('datalowongan.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Lowongan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('datalowongan.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lowongan:</strong>
                {{ $lowongan->nama_lowongan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Batas Akhir:</strong>
                {{ $lowongan->tanggal_lowongan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Yang Dibutuhkan:</strong>
                {{ $lowongan->jumlah_lowongan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $lowongan->deskripsi_lowongan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <img src="/images/{{ $lowongan->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection