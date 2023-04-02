@extends('arsip.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Arsip</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('arsip.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('arsip.update',$arsip->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Dokumen:</strong>
                <input type="integer" name="no_dokumen" class="form-control" placeholder="No Dokumen", value="{{ $post->no_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Dokumen:</strong>
                <input type="string" name="nama_dokumen" class="form-control" placeholder="Nama Dokumen", value="{{ $post->nama_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori Dokumen:</strong>
                <input type="string" name="kategori_dokumen" class="form-control" placeholder="Kategori Dokumen", value="{{ $post->kategori_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Dokumen:</strong>
                <input type="date" name="tanggal_dokumen" class="form-control" placeholder="Tanggal Dokumen", value="{{ $post->tanggal_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi Dokumen:</strong>
                <input type="string" name="isi_dokumen" class="form-control" placeholder="Isi Dokumen", value="{{ $post->isi_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sumber Dokumen:</strong>
                <input type="string" name="sumber_dokumen" class="form-control" placeholder="Sumber Dokumen", value="{{ $post->sumber_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerima Dokumen:</strong>
                <input type="string" name="penerima_dokumen" class="form-control" placeholder="Penerima Dokumen", value="{{ $post->penerima_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Dokumen:</strong>
                <input type="string" name="status_dokumen" class="form-control" placeholder="Status Dokumen", value="{{ $post->status_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aksesibilitas Dokumen:</strong>
                <input type="string" name="aksesibilitas_dokumen" class="form-control" placeholder="Aksesibilitas Dokumen", value="{{ $post->aksesibilitas_dokumen }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 mt-3 mb-3 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection
