@extends('bukuaizah.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Buku Aizah</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bukuaizah.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IDBuku:</strong>
                {{ $bukuaizah->IDBuku }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $bukuaizah->Judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
                {{ $bukuaizah->Penulis }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                {{ $bukuaizah->Penerbit }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TahunTerbit:</strong>
                {{ $bukuaizah->TahunTerbit }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Stok:</strong>
                {{ $bukuaizah->JumlahStok }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Denda Buku:</strong>
                {{ $bukuaizah->dendabuku }}
            </div>
        </div>
    </div>
@endsection