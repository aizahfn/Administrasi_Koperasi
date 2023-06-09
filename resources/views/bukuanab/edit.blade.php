@extends('bukuanab.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Buku ANAB</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bukuanab.index') }}"> Back</a>
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
    
    <form action="{{ route('bukuanab.update',$bukuanab->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="string" name="judul" value="{{ $bukuanab->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis:</strong>
                    <input type="string" name="penulis" value="{{ $bukuanab->penulis }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit:</strong>
                    <input type="string" name="penerbit" value="{{ $bukuanab->penerbit }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Terbit:</strong>
                    <input type="integer" name="tahunterbit" value="{{ $bukuanab->tahunterbit }}" class="form-control" placeholder="TahunTerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Stok:</strong>
                    <input type="integer" name="jumlahstok" value="{{ $bukuanab->jumlahstok }}" class="form-control" placeholder="JumlahStok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>dendabuku:</strong>
                    <input type="integer" name="dendabuku" value="{{ $bukuanab->dendabuku }}" class="form-control" placeholder="dendabuku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection