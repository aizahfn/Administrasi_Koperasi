@extends('koperasi\layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Koperasi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('koperasi\index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Koperasi:</strong>
                {{ $koperasi->no_koperasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Koperasi:</strong>
                {{ $koperasi->nama_koperasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Koperasi:</strong>
                {{ $koperasi->alamat_koperasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telepon Koperasi:</strong>
                {{ $koperasi->notelepon_koperasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Koperasi:</strong>
                {{ $koperasi->email_koperasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Produk:</strong>
                {{ $koperasi->jenis_produk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Anggota:</strong>
                {{ $koperasi->jumlah_anggota }}
            </div>
        </div>
    </div>
@endsection