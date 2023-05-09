@extends('arsip.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Dokumen </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('arsip.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No :</strong>
                {{ $arsip->no_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $arsip->nama_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori :</strong>
                {{ $arsip->kategori_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal :</strong>
                {{ $arsip->tanggal_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi :</strong>
                {{ $arsip->isi_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sumber :</strong>
                {{ $arsip->sumber_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerima :</strong>
                {{ $arsip->penerima_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status :</strong>
                {{ $arsip->status_dokumen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aksesibilitas :</strong>
                {{ $arsip->aksesibilitas_dokumen }}
            </div>
        </div>
    </div>
@endsection