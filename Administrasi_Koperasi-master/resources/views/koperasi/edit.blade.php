@extends('koperasi.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Koperasi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('koperasi.index') }}"> Back</a>
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
     
<form action="{{ route('koperasi.update',$koperasi->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Registrasi:</strong>
                <input type="integer" name="no_registrasi" class="form-control" placeholder="No Registrasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Koperasi:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Koperasi:</strong>
                <input type="string" name="nama_koperasi" class="form-control" placeholder="Nama Koperasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Koperasi:</strong>
                <input type="string" name="alamat_koperasi" class="form-control" placeholder="Alamat Koperasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telepon:</strong>
                <input type="string" name="notelepon_koperasi" class="form-control" placeholder="No Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="string" name="email_koperasi" class="form-control" placeholder="Email Koperasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Produk:</strong>
                <input type="string" name="jenis_produk" class="form-control" placeholder="Jenis Produk">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Anggota:</strong>
                <input type="integer" name="jumlah_anggota" class="form-control" placeholder="Jumlah Anggota">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection